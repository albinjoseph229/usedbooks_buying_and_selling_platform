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

Route::post('saveuser', [App\Http\Controllers\GuestController::class,'save']) ->name ('saveuser');

Route::get('/admin.adminlogin', function () {
    return view('admin/adminlogin');
})->name('admin.adminlogin');

Route::group(['middleware' => ['auth','prevent-back-history']],function()

{
   

Route::get('logout',[App\Http\Controllers\AdminController::class,'logout'])->name('logout');

// admin routes
Route::get('/adminhome',[App\Http\Controllers\AdminController::class,'getindexdetails'
,App\Http\Controllers\AdminController::class,'index'])->name('adminhome');

//Route::get('/adminhome',[App\Http\Controllers\AdminController::class,'index',])->name('adminhome');

Route::get('/admin.viewuser',[App\Http\Controllers\AdminController::class,'getusers'])->name('admin.viewuser');

Route::get('/admin.viewbooks',[App\Http\Controllers\AdminController::class,'getbooks'])->name('admin.viewbooks');

Route::get('/admin.viewcareer',[App\Http\Controllers\AdminController::class,'getcareer'])->name('admin.viewcareer');

Route::get('/admin.viewtransactions',[App\Http\Controllers\AdminController::class,'gettransactions'])->name('admin.viewtransactions');

Route::get('/admin.viewblogs',[App\Http\Controllers\AdminController::class,'getblogs'])->name('admin.viewblogs');

Route::get('/admin.viewmessages',[App\Http\Controllers\AdminController::class,'getmessages'])->name('admin.viewmessages');

Route::post('admin.deleteuser',[App\Http\Controllers\AdminController::class,'deleteuser'])->name('admin.deleteuser');

Route::post('admin.deleteblogs',[App\Http\Controllers\AdminController::class,'deleteblogs'])->name('admin.deleteblogs');

Route::post('admin.deletebooks',[App\Http\Controllers\AdminController::class,'deletebooks'])->name('admin.deletebooks');

Route::get('/admin.changepassword', function () {
    return view('admin/changepassword');
})->name('admin.changepassword');

Route::get('/admin.viewads', function () {
    return view('admin/viewads');
})->name('admin.viewads');

Route::get('/admin.postcareer', function () {
    return view('admin/postcareer');
})->name('admin.postcareer');

Route::get('admin.viewcareercomments/{id}',[App\Http\Controllers\AdminController::class,'viewcareercomments'])->name('admin.viewcareercomments');
Route::post('admin.deletecomment',[App\Http\Controllers\AdminController::class,'deletecomment'])->name('admin.deletecomment');
Route::get('/admin.viewblogcomments/{id}',[App\Http\Controllers\AdminController::class,'viewblogcomments'] )->name('admin.viewblogcomments');
Route::post('admin.deleteblogcomment',[App\Http\Controllers\AdminController::class,'deleteblogcomment'])->name('admin.deleteblogcomment');


Route::get('/admin.viewuserdetails', function () {
    return view('admin/viewuserdetails');
})->name('admin.viewuserdetails');
Route::get('admin.viewblogs/{id}',[App\Http\Controllers\AdminController::class,'blogdetails'])->name('admin.viewmoreblogs');

Route::get('admin.viewcomplaints/{id}',[App\Http\Controllers\AdminController::class,'viewcomplaints'])->name('admin.viewcomplaints');
Route::post('admin.deletecomplaint',[App\Http\Controllers\AdminController::class,'deletecomplaint'])->name('admin.deletecomplaint');

Route::get('/admin.viewmoreblogs', function () {
    return view('admin/viewmoreblogs');
})->name('admin.viewmoreblogs');

Route::get('admin.viewcareer/{id}',[App\Http\Controllers\AdminController::class,'careerdetails'])->name('admin.viewmorecareer');
Route::get('/admin.viewmorcareer', function () {
    return view('admin/viewmoreecareer');
})->name('admin.viewmorecareer');

Route::get('admin.viewbooks/{id}',[App\Http\Controllers\AdminController::class,'bookdetails'])->name('admin.viewmorebooks');
Route::get('/admin.viewmorebooks', function () {
    return view('admin/viewmorebooks');
})->name('admin.viewmorebooks');

//user routes
/*Route::get('/userhome', function () {
    return view('user/index');
})->name('userhome');*/
Route::get('user.dashboard',[App\Http\Controllers\GuestController::class,'dashboard'] )->name('user.dashboard');
Route::get('user.viewmyblogs',[App\Http\Controllers\GuestController::class,'viewmyblogs'])->name('user.viewmyblogs');
Route::get('user.viewblogcomments/{id}',[App\Http\Controllers\GuestController::class,'viewblogcomments'] )->name('user.viewblogcomments');
Route::post('user.deletemyblogcomment',[App\Http\Controllers\GuestController::class,'deleteblogcomment'])->name('user.deletemyblogcomment');
Route::post('user.deleteblog',[App\Http\Controllers\GuestController::class,'deleteblog'])->name('user.deleteblog');
Route::get('user.viewmybooks',[App\Http\Controllers\GuestController::class,'viewmybooks'])->name('user.viewmybooks');
Route::post('user.deletebook',[App\Http\Controllers\GuestController::class,'deletebooks'])->name('user.deletebook');
Route::get('user.viewcomplaints/{id}',[App\Http\Controllers\GuestController::class,'viewcomplaints'])->name('user.viewcomplaints');
Route::post('user.deletecomplaint',[App\Http\Controllers\GuestController::class,'deletecomplaint'])->name('user.deletecomplaint');
Route::get('user.bookrequests',[App\Http\Controllers\GuestController::class,'bookrequests'] )->name('user.bookrequests');
Route::post('user.deleteintbook',[App\Http\Controllers\GuestController::class,'deleteintbook'])->name('user.deleteintbook');
Route::post('user.acceptrequest',[App\Http\Controllers\GuestController::class,'acceptrequest'])->name('user.acceptrequest');

Route::get('/user.sellbooks', function () {
    return view('user/sellbooks');
})->name('user.sellbooks');

Route::get('/user.postblogs', function () {
    return view('user/postblogs');
})->name('user.postblogs');

Route::get('/user.usercontactus', function () {
    return view('user/usercontactus');
})->name('user.usercontactus');

Route::get('/user.howitworks', function () {
    return view('user/howitworks');
})->name('user.howitworks');

Route::get('/user.changepassword', function () {
    return view('user/changepassword');
})->name('user.changepassword');

Route::get('user.buybooks/{id}',[App\Http\Controllers\GuestController::class,'bookdetails'])->name('user.buybooks');
Route::get('/user.viewbuybooks', function () {
    return view('user/viewbuybooks');
})->name('user.viewbuybooks');
Route::post('user.sendinterest',[App\Http\Controllers\GuestController::class,'sendinterest'])->name('user.sendinterest');
Route::post('user.sendcomment',[App\Http\Controllers\GuestController::class,'sendcomment'])->name('user.sendcomment');
Route::post('user.sendcomplaint',[App\Http\Controllers\GuestController::class,'sendcomplaint'])->name('user.sendcomplaint');

Route::get('user.viewblogs/{id}',[App\Http\Controllers\GuestController::class,'blogdetails'])->name('user.viewmoreblogs');
//Route::get('user.viewblogs/{id}',[App\Http\Controllers\GuestController::class,'getblogcomments'])->name('user.viewmoreblogs');
Route::get('/user.viewmoreblogs', function () {
    return view('user/viewmoreblogs');
})->name('user.viewmoreblogs');

Route::get('user.viewcareer/{id}',[App\Http\Controllers\GuestController::class,'careerdetails'])->name('user.viewmorecareer');
Route::get('/user.viewmorcareer', function () {
    return view('user/viewmoreecareer');
})->name('user.viewmorecareer');



Route::get('/userhome',[App\Http\Controllers\GuestController::class,'getindexbooks'
,App\Http\Controllers\GuestController::class,'index'])->name('userhome');

Route::get('/user.buybooks',[App\Http\Controllers\GuestController::class,'getbooks'])->name('user.buybooks');

Route::get('/user.viewcareer',[App\Http\Controllers\GuestController::class,'getcareers'])->name('user.viewcareer');

Route::get('/user.viewblogs',[App\Http\Controllers\GuestController::class,'getblog'])->name('user.viewblogs');

Route::post('user.savecontactus',[App\Http\Controllers\GuestController::class,'savecontactus'])->name('user.savecontactus');

Route::post('user.saveblogs',[App\Http\Controllers\GuestController::class,'saveblogs'])->name('user.saveblogs');

Route::post('user.savebooks',[App\Http\Controllers\GuestController::class,'savebooks'])->name('user.savebooks');

Route::post('admin.updatepassword',[App\Http\Controllers\AdminController::class,'updatepassword'])->name('admin.updatepassword');

Route::post('user.updatepassword',[App\Http\Controllers\GuestController::class,'updatepassword'])->name('user.updatepassword');

Route::post('admin.savecareer',[App\Http\Controllers\AdminController::class,'savecareer'])->name('admin.savecareer');

Route::post('admin.deletecareer',[App\Http\Controllers\AdminController::class,'deletecareer'])->name('admin.deletecareer');

Route::post('admin.deletemessages',[App\Http\Controllers\AdminController::class,'deletemessages'])->name('admin.deletemessages');

Route::post('user.saveblogcomment',[App\Http\Controllers\GuestController::class,'saveblogcomment'])->name('user.saveblogcomment');

Route::post('user.savecareercomment',[App\Http\Controllers\GuestController::class,'savecareercomment'])->name('user.savecareercomment');

});