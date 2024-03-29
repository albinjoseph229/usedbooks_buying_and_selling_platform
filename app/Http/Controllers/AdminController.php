<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Career;
use App\Models\Transaction;
use App\Models\Blog;
use App\Models\Message;
use App\Models\BookComplaint;
use App\Models\CareerComments;
use App\Models\BlogComments;
use Session;
use Hash;


class AdminController extends Controller
{
    public function __contruct() 
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin/index');
    }
    public function postLogin(Request $request)
     {
         $request->validate([
             'email' => 'required',
             'password' => 'required',
         ]);
         $remember_me  = ( !empty( $request->remember) )? TRUE : FALSE;
 
         if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember_me)){
             if(Auth::user()->utype==1){
                 return redirect('adminhome')->withSuccess('You have Successfully loggedin');
             }
             else if(Auth::user()->utype==2){
                return redirect('userhome')->withSuccess('You have Successfully loggedin');
                
             }
             
         }
         else{
             return redirect("login")->withError('Error! You have entered invalid credentials');
         }
     }
     public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
    public function getusers()
    {
        $users=User::select('*')->get();
        return view('admin/viewuser',['users'=> $users]);
    }

    public function getbooks()
    {
        $books=Book::join('users','users.id','book.sellers_id')->select('book.*','users.name')->get();
        return view('admin/viewbooks',['books'=> $books]);
    }

    public function getcareer()
    {
        $career=Career::select('*')->get();
        return view('admin/viewcareer',['career'=> $career]);
        $career=Career::count();
    }


    public function gettransactions()
    {
        $transactions=Transaction::join('book','book.id','booksales.book_id')->join('users','users.id','booksales.buyer_id')->select('booksales.*','users.name','book.seller')->get();

        return view('admin/viewtransactions',['transactions'=> $transactions]);
        
    }

    public function getblogs()
    {
        $blogs=Blog::join('users','users.id','blogs.user_id')->select('blogs.*','users.name')->get();
        return view('admin/viewblogs',['blogs'=> $blogs]);
        $blogs=Blog::count();
    }

    public function getmessages()
    {
        $messages=Message::join('users','users.id','messages.user_id')->select('messages.*','users.name','users.email')->get();
        return view('admin/viewmessages',['messages'=> $messages]);
    }

    public function updatepassword(Request $request)
    {

            $validate=$request->validate([
                'cpassword' => ['required'],
                'new_password' => ['required'],
                'password_confirmation' => ['same:new_password'],
            ]);
            if (!(Hash::check($request->get('cpassword'), Auth::user()->password))) {
                // The passwords matches
                return back()->with('error','Your current password does not matches with the password.');

            }
           else
           {
                $result=User::find(Auth::user()->id)->update(['password'=> Hash::make($request->new_password)]);
                if($result){
                    return back()->with('status','Password changed successfully..');
                }
                else
                {
                    return back()->with('error','Some error occured please try again later..');
                }
            }
            
    }
    public function deleteuser(Request $request)
    {
        $id=$request->dodelete;
        $delete=User::where('id',$id)->delete();
        if($delete)
        {
            return back()->with('status','user deleted successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }
    public function deleteblogs(Request $request)
    {
        $id=$request->dodelete;
        $delete=Blog::where('id',$id)->delete();
        if($delete)
        {
            return back()->with('status','Blog deleted successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }

    public function deletebooks(Request $request)
    {
        $id=$request->dodelete;
        $delete=Book::where('id',$id)->delete();
        if($delete)
        {
            return back()->with('status','Book deleted successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }

    public function deletemessages(Request $request)
    {
        $id=$request->dodelete;
        $delete=Message::where('id',$id)->delete();
        if($delete)
        {
            return back()->with('status','Message deleted successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }

    public function savecareer(Request $request)
    {
        $validate=$request->validate([
            'ctitle'=>['required'],
            'cdescr'=>['required'],
            'file'=>['required'],
        ]);

        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('cimages'), $fileName);

        $career=new Career();
        $career->ctitle=$request->ctitle;
        $career->description=$request->cdescr;
        $career->image=$fileName;
        $career->save();
        if($career)
        {
            return back()->with('status','Career added successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }
    public function deletecareer(Request $request)
    {
        $id=$request->dodelete;
        $delete=Career::where('id',$id)->delete();
        if($delete)
        {
            return back()->with('status','Career deleted successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }
    public function getindexdetails()
    {
        $books=Book::select('*')->get();
        $career=Career::select('*')->get();
        $users=User::select('*')->get();
        $blogs=Blog::select('*')->get();

        return view('admin/index',['career'=>$career],['books'=> $books],['users'=>$users],['blogs'=>$blogs]);
    }

    
    public function blogdetails($id)
    {
       
        $blogs=Blog::join('users','users.id','blogs.user_id')->select('blogs.*','users.name','users.email',)
        ->where('blogs.id',$id)->first();
        return view('admin/viewmoreblogs',['blogs'=>$blogs]);

    }

    public function careerdetails($id)
    {
       
        $careers=Career::where('id',$id)->select('*')->first();
       
        return view('admin/viewmorecareer',['career'=>$careers]);

    }

    public function bookdetails($id)
    {
       // $book=Book::where('id',$id)->select('*')->first();
        $book=Book::join('users','users.id','book.sellers_id')->select('book.*','users.name','users.email')->where('book.id',$id)->first();
        return view('admin/viewmorebooks',['book'=>$book]);

    }
    public function viewcomplaints($id)
    {
        $complaints=BookComplaint::join('book','book.id','bookcomplaint.book_id')->join('users','users.id','bookcomplaint.buyer_id')->select('bookcomplaint.*','users.name','book.bookname','book.seller')->where('bookcomplaint.book_id',$id)->get();
        return view('admin.viewcomplaints',['complaints'=>$complaints]);
    }
    public function deletecomplaint(Request $request)
    {
        $id=$request->dodelete;
        $delete=BookComplaint::where('id',$id)->delete();
        if($delete)
        {
            return back()->with('status','Complaint deleted successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }
    public function viewcareercomments($id)
    {
        $comments=CareerComments::join('career','career.id','career_comments.career_id')->join('users','users.id','career_comments.user_id')->select('career_comments.*','users.name')->where('career_comments.career_id',$id)->get();
        return view('admin/viewcareercomments',['comments'=>$comments]);
    }
    public function deletecomment(Request $request)
    {
        $id=$request->dodelete;
        $delete=CareerComments::where('id',$id)->delete();
        if($delete)
        {
            return back()->with('status','Commment deleted successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }
    public function viewblogcomments($id)
    {
        $comments=BlogComments::join('blogs','blogs.id','blogcomments.blog_id')->join('users','users.id','blogcomments.user_id')->select('blogcomments.*','users.name')->where('blogcomments.blog_id',$id)->get();
        return view('admin/viewblogcomments',['comments'=>$comments]);
    }
    public function deleteblogcomment(Request $request)
    {
        $id=$request->dodelete;
        $delete=BlogComments::where('id',$id)->delete();
        if($delete)
        {
            return back()->with('status','Commment deleted successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }

}