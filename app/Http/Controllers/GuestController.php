<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\pagination\Paginator;
use App\Models\User;
use App\Models\Book;
use App\Models\Blog;
use App\Models\Career;
use App\Models\Message;
use Hash;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{  public function index()
    {
        return view('G');
    }
    public function save(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'reg_password' => ['required'],
            'phoneno' =>['required', 'unique:users'],
            
     ]);
     $user=new User();
     $user->name=$request->name;
     $user->email=$request->email;
     $user->password=Hash::make($request->reg_password);
     $user->phoneno=$request->phoneno;
     $user->utype=2;
     $user->save();
     
     if($user)
     {
      return back()->with('status',"You are registered successfully,please signin to continue");
 
 
     }
     else
         {
             return back()->with('error',"Error! Something wrong Please try again");
         }
    }
     
    
    
    public function updatepassword(Request $request)
    {
         
                 $validate=$request->validate([
                         'reg_password' => ['required'],
                         'new_password' => ['required'],
                         'password_confirmation' => ['same:new_password'],
                     ]);
                     if (!(Hash::check($request->get('reg_password'), Auth::user()->password))) {
                         // The passwords matches
                         return redirect()->back()->with("error","Your current password does not matches with the password.");
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
    public function saveblogs(Request $request)
    {
        $validate=$request->validate([
            'blogtitle'=>['required'],
            'blogdescr'=>['required'],
        ]);
        $fileName="";
        if($request->file!=""){
                    $fileName = time().'.'.$request->file->extension();  
                    $request->file->move(public_path('blogimages'), $fileName);
        }
        $blogs=new Blog();
        $blogs->user_id=auth::user()->id;
        $blogs->bdate=date('Y-m-d');
        $blogs->blog_title=$request->blogtitle;
        $blogs->blog_description=$request->blogdescr;
        $blogs->bimage1=$fileName;
        $blogs->save();
        if($blogs)
        {
            return back()->with('status','Blog added successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }
   
    public function savebooks(Request $request)
    {
        $validate=$request->validate([
            'bookname'=>['required'],
            'bookdescription'=>['required'],
            'price'=>['required'],
            'address'=>['required'],
            'phonenumber'=>['required'],
            'file'=>['required'],
            'location'=>['required'],
        ]);
       $fileName1="";
        if($request->file1!=""){
                    $fileName1 = time().'.'.$request->file1->extension();  
                    $request->file1->move(public_path('blogimages'), $fileName1);
        }
        
        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('bookimages'), $fileName);
     

        $books=new Book();
        $books->sellers_id=auth::user()->id;
        $books->bookdate=date('Y-m-d');
        $books->bookname=$request->bookname;
        $books->bookdescription=$request->bookdescription;
        $books->location=$request->location;
        $books->phonenumber=$request->phonenumber;
        $books->address=$request->address;
        $books->price=$request->price;
        $books->coverpage1=$fileName;
        $books->save();
        if($books)
        {
            return back()->with('status','Ad Posted successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }
    public function getbook()
    {
        $career=Book::select('*')->get();
        return view('user/viewbooks',['book'=> $book]);
    }

    public function getblog()
    {
        $blog=Blog::select('*')->get();
        return view('user/viewblogs',['blog'=> $blog]);
    }

    public function getcareers()
    {
        $careers=Career::select('*')->get();
        return view('user/viewcareer',['careers'=> $careers]);
    }

    public function getbooks()
    {
        $books=Book::select('*')->get();
        return view('user/buybooks',['books'=> $books]);
        $data=books::paginate(2);
        $books=Book::count();
    }
    public function savecontactus(Request $request)
    {
        $validate=$request->validate([
            'message_subject'=>['required'],
            'message_description'=>['required'],
        ]);
        
        $messages=new Message();
        $messages->user_id=auth::user()->id;
        $messages->message_subject=$request->message_subject;
                $messages->message_content=$request->message_description;
        $messages->save();
        if($messages)
        {
            return back()->with('status','Message send successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }
    public function getindexbooks()
    {
        $books=Book::select('*')->get();
        return view('user/index',['books'=> $books]);
        $data=books::paginate(2);
        $books=Book::count();
    }
    public function bookdetails($id)
    {
       // $book=Book::where('id',$id)->select('*')->first();
        $book=Book::join('users','users.id','book.sellers_id')->select('book.*','users.name','users.email',)
        ->where('book.id',$id)->first();
        return view('user/viewbuybooks',['book'=>$book]);

    }

    public function blogdetails($id)
    {
       
        $blog=Blog::join('users','users.id','blogs.user_id')->select('blogs.*','users.name','users.email',)
        ->where('blogs.id',$id)->first();
        return view('user/viewmoreblogs',['blogs'=>$blog]);

    }
    
    public function careerdetails($id)
    {
       
        $careers=Career::where('id',$id)->select('*')->first();
       
        return view('user/viewmorecareer',['career'=>$careers]);

    }
}


