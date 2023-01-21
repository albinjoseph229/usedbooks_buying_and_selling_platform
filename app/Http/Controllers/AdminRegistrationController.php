<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\DB;

class AdminRegistrationController extends Controller
{
    public function index()
    {
        return view('adminregistration');
    }
    public function save(Request $request)
    {
        $validated = $request->validate([
            'aname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'apassword' => ['required'],
     ]);
     $user=new User();
     $user->name=$request->aname;
     $user->email=$request->email;
     $user->password=Hash::make($request->apassword);
     $user->utype=1;
     $user->save();
     return back()->with('status',"Administrator Added successfully");


    }
}