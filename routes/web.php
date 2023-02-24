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


Route::get('adminregistration', [App\Http\Controllers\AdminRegistrationController::class,'index']) ->name ('adminregistration');
Route::post('login',[App\Http\Controllers\AdminController::class,'postLogin'])->name('postlogin');
Route::post('postadminform', [App\Http\Controllers\AdminRegistrationController::class,'save']) ->name ('postadminform');
Route::get('/admin.viewuser',[App\Http\Controllers\AdminController::class,'getusers'])->name('admin.viewuser');

Route::group(['middleware' => ['auth','prevent-back-history']],function()

{
   
Route::post('saveuser', [App\Http\Controllers\GuestController::class,'save']) ->name ('saveuser');

Route::get('logout',[App\Http\Controllers\AdminController::class,'logout'])->name('logout');

// admin routes
Route::get('/adminhome',[App\Http\Controllers\AdminController::class,'index'])->name('adminhome');

Route::get('/admin.adminlogin', function () {
    return view('admin/adminlogin');
})->name('admin.adminlogin');

Route::get('/admin.changepassword', function () {
    return view('admin/changepassword');
})->name('admin.changepassword');

Route::get('/admin.viewbooks',[App\Http\Controllers\AdminController::class,'getbook'])->name('admin.viewbooks');

Route::get('/admin.viewcareer', function () {
    return view('admin/viewcareer');
})->name('admin.viewcareer');

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


Route::get('/admin.viewmessages', function () {
    return view('admin/viewmessages');
})->name('admin.viewmessages');
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

Route::get('/user.viewcareer', function () {
    return view('user/viewcareer');
})->name('user.viewcareer');

Route::get('/user.viewblogs', function () {
    return view('user/viewblogs');
})->name('user.viewblogs');

Route::get('/user.usercontactus', function () {
    return view('user/usercontactus');
})->name('user.usercontactus');

Route::get('/user.changepassword', function () {
    return view('user/changepassword');
})->name('user.changepassword');
Route::post('admin.updatepassword',[App\Http\Controllers\AdminController::class,'updatepassword'])->name('admin.updatepassword');

Route::post('admin.updatepassword',[App\Http\Controllers\GuestController::class,'updatepassword'])->name('user.updatepassword');
});
