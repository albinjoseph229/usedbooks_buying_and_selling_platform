<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');



//user routes
Route::get('/userhome', function () {
    return view('user/index');
})->name('userhome');

Route::get('/user.sellbooks', function () {
    return view('user/sellbooks');
})->name('user.sellbooks');

Route::get('/user.postblogs', function () {
    return view('user/postblogs');
})->name('user.postblogs');

Route::get('/user.buybooks', function () {
    return view('user/buybooks');
})->name('user.buybooks');

// admin routes
Route::get('/adminhome',[App\Http\Controllers\AdminController::class,'index'])->name('adminhome');

Route::get('/admin.adminlogin', function () {
    return view('admin/adminlogin');
})->name('admin.adminlogin');

Route::get('/admin.changepassword', function () {
    return view('admin/changepassword');
})->name('admin.changepassword');

Route::get('/admin.viewbooks', function () {
    return view('admin/viewbooks');
})->name('admin.viewbooks');

Route::get('/admin.viewuser', function () {
    return view('admin/viewuser');
})->name('admin.viewuser');

Route::get('/admin.viewtransactions', function () {
    return view('admin/viewtransactions');
})->name('admin.viewtransactions');

Route::get('/admin.viewblogs', function () {
    return view('admin/viewblogs');
})->name('admin.viewblogs');

Route::get('/admin.viewads', function () {
    return view('admin/viewads');
})->name('admin.viewads');

Route::get('/admin.postcareer', function () {
    return view('admin/postcareer');
})->name('admin.postcareer');

Route::get('/admin.viewblogcomments', function () {
    return view('admin/viewblogcomments');
})->name('admin.viewblogcomments');

Route::get('/admin.viewmoreblogs', function () {
    return view('admin/viewmoreblogs');
})->name('admin.viewmoreblogs');

Route::get('/admin.viewuserdetails', function () {
    return view('admin/viewuserdetails');
})->name('admin.viewuserdetails');

Route::get('/admin.adminlogin', function () {
    return view('admin/adminlogin');
})->name('admin.adminlogin');

Route::get('adminregistration', [App\Http\Controllers\AdminRegistrationController::class,'index']) ->name ('adminregistration');
Route::post('postadminform', [App\Http\Controllers\AdminRegistrationController::class,'save']) ->name ('postadminform');
Route::post('saveuser', [App\Http\Controllers\GuestController::class,'save']) ->name ('saveuser');
Route::post('login',[App\Http\Controllers\AdminController::class,'postLogin'])->name('postlogin');
Route::get('logout',[App\Http\Controllers\AdminController::class,'logout'])->name('logout');