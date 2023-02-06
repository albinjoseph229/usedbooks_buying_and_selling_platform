<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
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
}
