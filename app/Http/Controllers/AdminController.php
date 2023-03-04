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
    }


    public function gettransactions()
    {
        $transactions=Transaction::select('*')->get();
        return view('admin/viewtransactions',['transactions'=> $transactions]);
    }

    public function getblogs()
    {
        $blogs=Blog::join('users','users.id','blogs.user_id')->select('blogs.*','users.name')->get();
        return view('admin/viewblogs',['blogs'=> $blogs]);
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
   
}
