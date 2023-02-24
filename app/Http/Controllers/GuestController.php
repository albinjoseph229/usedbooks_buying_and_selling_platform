<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
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
            'reg_username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'reg_password' => ['required'],
            'phoneno' =>['required', 'unique:users'],
            
     ]);
     $user=new User();
     $user->name=$request->reg_username;
     $user->email=$request->email;
     $user->password=Hash::make($request->reg_password);
     $user->utype=2;
     $user->phoneno=$request->phoneno;
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
                         'cpassword' => ['required'],
                         'new_password' => ['required'],
                         'password_confirmation' => ['same:new_password'],
                     ]);
                     if (!(Hash::check($request->get('cpassword'), Auth::user()->password))) {
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
}


