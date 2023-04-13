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
use App\Models\BlogComments;
use App\Models\CareerComments;
use App\Models\BookSales;
use App\Models\CommentReplies;
use App\Models\BookComplaint;
use App\Models\Transaction;
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
                    $request->file1->move(public_path('bookimages'), $fileName1);
        }
        
        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('bookimages'), $fileName);
     

        $books=new Book();
        $books->sellers_id=auth::user()->id;
        $books->seller=auth::user()->name;
        $books->bookdate=date('Y-m-d');
        $books->bookname=$request->bookname;
        $books->bookdescription=$request->bookdescription;
        $books->location=$request->location;
        $books->phonenumber=$request->phonenumber;
        $books->address=$request->address;
        $books->price=$request->price;
        $books->coverpage1=$fileName;
        $books->coverpage2=$fileName1;
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
        $books=Book::select('*')->paginate(8);
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
        $comments=CommentReplies::select('*')->where('book_id',$book->id)->where('seller_id',$book->sellers_id)->where('buyer_id',auth::user()->id)->get();
        $binterest=BookSales::select('status')->where('book_id',$book->id)->where('seller_id',$book->sellers_id)->where('buyer_id',auth::user()->id)->first();
        $complaints=BookComplaint::select('*')->where('book_id',$book->id)->where('seller_id',$book->sellers_id)->get();
        return view('user/viewbuybooks',['book'=>$book,'comments'=>$comments,'intereststatus'=>$binterest,'complaints'=>$complaints]);

    }
    public function sendinterest(Request $request)
    {
        $validated=$request->validate([
            'seller'=>['required'],
            'book'=>['required'],
            'bookname'=>['required'],
            'price'=>['required'],
        ]);
        $check=BookSales::select('id')->where('book_id',$request->book)->where('seller_id',$request->seller)->where('buyer_id',auth::user()->id)->get();
        if(count($check)>0){
            return back()->with('error','You have already send interest..');
        }
        else
        {
            $intr=new BookSales();
            $intr->book_id=$request->book;
            $intr->bname=$request->bookname;
            $intr->seller_id=$request->seller;
            $intr->buyer_id=auth::user()->id;
            $intr->amount=$request->price;
            $intr->date=date('Y-m-d');
            $intr->status=0;
            $intr->save();
            if($intr)
            {
                return back()->with('status','Your Interest Sent Successfully..');
            }
            else
            {
                return back()->with('error','Some error occured please try again later..');
            }
        }
        
    }
    public function sendcomment(Request $request)
    {
        $validated=$request->validate([
            'cbook'=>['required'],
            'cseller'=>['required'],
            'comment'=>['required'],
        ]);
        $cmnt=new CommentReplies();
        $cmnt->buyer_id=auth::user()->id;
        $cmnt->seller_id=$request->cseller;
        $cmnt->book_id=$request->cbook;
        $cmnt->comment=$request->comment;
        $cmnt->date=date('Y-m-d');
        $cmnt->save();
        if($cmnt)
            {
                return back()->with('status','Your Comment Sent Successfully..');
            }
            else
            {
                return back()->with('error','Some error occured please try again later..');
            }
       

    }
    public function sendcomplaint(Request $request)
    {
        $validated=$request->validate([
            'mbook'=>['required'],
            'mseller'=>['required'],
            'complaint'=>['required'],
        ]);
        $cmnt=new BookComplaint();
        $cmnt->buyer_id=auth::user()->id;
        $cmnt->seller_id=$request->mseller;
        $cmnt->book_id=$request->mbook;
        $cmnt->complaint=$request->complaint;
        $cmnt->save();
        if($cmnt)
            {
                return back()->with('status','Your Complaint Sent Successfully..');
            }
            else
            {
                return back()->with('error','Some error occured please try again later..');
            }
       

    }

    public function blogdetails($id)
    {
        $blogcomments=BlogComments::join('users','users.id','blogcomments.user_id')->select('blogcomments.*','users.name','users.email',)
        ->where('blogcomments.blog_id',$id)->get();
        $blog=Blog::join('users','users.id','blogs.user_id')->select('blogs.*','users.name','users.email',)
        ->where('blogs.id',$id)->first();
        return view('user/viewmoreblogs',['blogs'=>$blog,'blogcomments'=>$blogcomments]);

    }
    
    public function careerdetails($id)
    {
        $careercomments=CareerComments::join('users','users.id','career_comments.user_id')->select('career_comments.*','users.name','users.email',)
        ->where('career_comments.career_id',$id)->get();
        $careers=Career::where('id',$id)->select('*')->first();
        return view('user/viewmorecareer',['career'=>$careers]);
    }

    public function saveblogcomment(Request $request)
    {
        $validate=$request->validate([
            'comment'=>['required'],
            'blog_id'=>['required']
            
        ]);
        
        $blogcomment=new BlogComments();
        $blogcomment->user_id=auth::user()->id;
        $blogcomment->blog_id=$request->blog_id;
        $blogcomment->comment=$request->comment;
        $blogcomment->commentdate=date('Y-m-d');
        $blogcomment->save();
        if($blogcomment)
        {
            return back()->with('status','Comment Posted successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }
  

    public function savecareercomment(Request $request)
    {
        $validate=$request->validate([
            'comment'=>['required'],
            'career_id'=>['required']
            
        ]);
        
        $careercomment=new CareerComments();
        $careercomment->user_id=auth::user()->id;
        $careercomment->career_id=$request->career_id;
        $careercomment->comment=$request->comment;
        $careercomment->commentdate=date('Y-m-d');
        $careercomment->save();
        if($careercomment)
        {
            return back()->with('status','Comment Posted successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }
    public function dashboard()
    {
        return view('user.dashboard');
    }
    public function viewmyblogs()
    {
        $blogs=Blog::select('*')->where('user_id',auth::user()->id)->get();
        return view('user.viewmyblogs',['blogs'=>$blogs]);
    }

    
    public function viewblogcomments($id)
    {
        $comments=BlogComments::join('blogs','blogs.id','blogcomments.blog_id')->join('users','users.id','blogcomments.user_id')->select('blogcomments.*','users.name')->where('blogcomments.blog_id',$id)->get();
        return view('user/myblogcomments',['comments'=>$comments]);
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
    public function deleteblog(Request $request)
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
    public function viewmybooks()
    {
        $books=Book::join('users','users.id','book.sellers_id')->select('book.*','users.name')->where('book.sellers_id',auth::user()->id)->get();
        return view('user/viewmybooks',['books'=> $books]);
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
    public function viewcomplaints($id)
    {
        $complaints=BookComplaint::join('book','book.id','bookcomplaint.book_id')->join('users','users.id','bookcomplaint.buyer_id')->select('bookcomplaint.*','users.name','book.bookname','book.seller')->where('bookcomplaint.book_id',$id)->get();
        return view('user.viewcomplaints',['complaints'=>$complaints]);
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
    public function bookrequests()
    {
        $requests=Transaction::join('users','users.id','booksales.buyer_id')->select('booksales.*','users.name','users.phoneno')->where('booksales.seller_id',auth::user()->id)->get();
        return view('user.viewbookrequests',['requests'=>$requests]);
    }
    public function deleteintbooks()
    {
        $id=$request->dodelete;
        $delete=Transaction::where('id',$id)->delete();
        if($delete)
        {
            return back()->with('status','Complaint deleted successfully..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }
    public function acceptrequest(Request $request)
    {
        $id=$request->doupdate;
        $update=Transaction::where('id',$id)->update(['status'=>1]);
        if($update)
        {
            return back()->with('status','You are accepted the request..');
        }
        else
        {
            return back()->with('error','Some error occured please try again later..');
        }
    }
}