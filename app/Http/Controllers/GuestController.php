<?php

namespace App\Http\Controllers;

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
            
     ]);
     $user=new User();
     $user->name=$request->reg_username;
     $user->email=$request->email;
     $user->password=Hash::make($request->reg_password);
     $user->utype=2;
     $user->save();

    if($user)
    {
     return back()->with('status',"User Added successfully");


    }
    else
        {
            return back()->with('error',"Error! Something wrong Please try again");
        }

    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $remember_me  = ( !empty( $request->remember) )? TRUE : FALSE;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember_me)){
            if(Auth::user()->user_type==1){
                return redirect('adminhome')->withSuccess('You have Successfully loggedin');
            }
            else if(Auth::user()->user_type==2){
               return redirect('userhome')->withSuccess('You have Successfully loggedin');
               
            }
            else{
                return redirect()->intended('dashboard')->withSuccess('You have Successfully loggedin');
            
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
}


