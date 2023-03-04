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

Route::get('/admin.viewbooks',[App\Http\Controllers\AdminController::class,'getbooks'])->name('admin.viewbooks');

Route::get('/admin.viewcareer',[App\Http\Controllers\AdminController::class,'getcareer'])->name('admin.viewcareer');

Route::get('/admin.viewtransactions',[App\Http\Controllers\AdminController::class,'gettransactions'])->name('admin.viewtransactions');

Route::get('/admin.viewblogs',[App\Http\Controllers\AdminController::class,'getblogs'])->name('admin.viewblogs');

Route::get('/admin.viewmessages',[App\Http\Controllers\AdminController::class,'getmessages'])->name('admin.viewmessages');

Route::post('admin.deleteuser',[App\Http\Controllers\AdminController::class,'deleteuser'])->name('admin.deleteuser');

Route::post('admin.deleteblogs',[App\Http\Controllers\AdminController::class,'deleteblogs'])->name('admin.deleteblogs');

Route::post('admin.deletebooks',[App\Http\Controllers\AdminController::class,'deletebooks'])->name('admin.deletebooks');

Route::get('/admin.viewads', function () {
    return view('admin/viewads');
})->name('admin.viewads');

Route::get('/admin.postcareer', function () {
    return view('admin/postcareer');
})->name('admin.postcareer');

Route::get('/admin.viewcareercomments', function () {
    return view('admin/viewcareercomments');
})->name('admin.viewcareercomments');

Route::get('/admin.viewblogcomments', function () {
    return view('admin/viewblogcomments');
})->name('admin.viewblogcomments');

Route::get('/admin.viewmoreblogs', function () {
    return view('admin/viewmoreblogs');
})->name('admin.viewmoreblogs');

Route::get('/admin.viewuserdetails', function () {
    return view('admin/viewuserdetails');
})->name('admin.viewuserdetails');

//user routes
Route::get('/userhome', function () {
    return view('user/index');
})->name('userhome');

Route::get('/user.sellbooks', function () {
    return view('user/sellbooks');
})->name('user.sellbooks');

Route::get('/user.sellbooks1', function () {
    return view('user/sellbooks1');
})->name('user.sellbooks1');

Route::get('/user.postblogs', function () {
    return view('user/postblogs');
})->name('user.postblogs');

Route::get('/user.buybooks', function () {
    return view('user/buybooks');
})->name('user.buybooks');

Route::get('/user.viewcareer',[App\Http\Controllers\GuestController::class,'getcareers'])->name('user.viewcareer');


Route::get('/user.viewblogs',[App\Http\Controllers\GuestController::class,'getblog'])->name('user.viewblogs');

Route::get('/user.usercontactus', function () {
    return view('user/usercontactus');
})->name('user.usercontactus');

Route::get('/user.changepassword', function () {
    return view('user/changepassword');
})->name('user.changepassword');

Route::post('user.saveblogs',[App\Http\Controllers\GuestController::class,'saveblogs'])->name('user.saveblogs');

Route::post('user.savebooks',[App\Http\Controllers\GuestController::class,'savebooks'])->name('user.savebooks');

Route::post('admin.updatepassword',[App\Http\Controllers\AdminController::class,'updatepassword'])->name('admin.updatepassword');

Route::post('user.updatepassword',[App\Http\Controllers\GuestController::class,'updatepassword'])->name('user.updatepassword');

Route::post('admin.savecareer',[App\Http\Controllers\AdminController::class,'savecareer'])->name('admin.savecareer');

Route::post('admin.deletecareer',[App\Http\Controllers\AdminController::class,'deletecareer'])->name('admin.deletecareer');




});
