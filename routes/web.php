<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookRegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/PaymentPlaneShow/{packagePrice}' ,[HomeController::class,'PaymentPlaneShow'])->name('payment');
Route::post('/PaymentPlaneShow/{packagePrice}' ,[HomeController::class,'PaymentDone'])->name('paymentdone');



Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contactus',[ContactController::class,'index']);
Route::post('/contactus',[ContactController::class,'store']);

Route::get('/feedback',[ContactController::class,'feedbacks']);
Route::get('deletefeed/{id}',[ContactController::class,'deletefeed']);

// Route::post('/feedback',[ContactController::class,'store']);

Route::get('/contact',[ReviewController::class,'index']);
Route::post('/contact',[ReviewController::class,'reviewstore']);

Route::get('/review',[ReviewController::class,'reviews']);
Route::get('deleterev/{id}',[ReviewController::class,'deleterev']);

Route::get('/Bookregistration',[BookRegisterController::class,'index'])->name('Bookregistration');
Route::post('/Bookregistration',[BookRegisterController::class,'store']);
Route::get('/bookregisdata',[BookRegisterController::class,'show']);


Route::get('/package',[PackageController::class,'show']);


Route::get('/dubai',function(){
    $packagePrice = "54999";
    $packageName = "Dubai";
    return view('Packages/dubai', ['packagePrice' => $packagePrice, 'packageName' => $packageName]);
    // return view('Packages/dubai', ['packagePrice' => $packagePrice]);
});
Route::get('/kedarnath',function(){
    $packagePrice = "12700";
    $packageName = "Kedarnath";
    return view('Packages/kedarnath', ['packagePrice' => $packagePrice, 'packageName' => $packageName]);
    // return view('Packages/kedarnath', ['packagePrice' => $packagePrice]);
});

Route::get('/leh-ladakh',function(){
    $packagePrice = "26000";
    $packageName = "Leh_Ladakh";
    return view('Packages/leh_ladakh', ['packagePrice' => $packagePrice, 'packageName' => $packageName]);
    // return view('Packages/leh_ladakh', ['packagePrice' => $packagePrice]);
});

Route::get('/kasol-manali',function(){
    $packagePrice = "11500";
    $packageName = "Kasol-Manali";
    return view('Packages/kasol-manali', ['packagePrice' => $packagePrice, 'packageName' => $packageName]);
    // return view('Packages/kasol-manali', ['packagePrice' => $packagePrice]);
});

Route::get('/goa',function(){
    $packagePrice = "18500";
    $packageName = "Goa";
    return view('Packages/Goa', ['packagePrice' => $packagePrice, 'packageName' => $packageName]);
    // return view('Packages/goa', ['packagePrice' => $packagePrice]);
});

Route::get('/pattaya',function(){
    $packagePrice = "99999";
    $packageName = "Pattaya";
    return view('Packages/pattaya', ['packagePrice' => $packagePrice, 'packageName' => $packageName]);
});

Route::get('/singapore',function(){
    $packagePrice = "144999";
    $packageName = "Singapore";
    return view('Packages/singapore', ['packagePrice' => $packagePrice, 'packageName' => $packageName]);
    // return view('Packages/singapore', ['packagePrice' => $packagePrice]);
});

Route::get('/london',function(){
    $packagePrice = "224999";
    $packageName = "London";
    return view('Packages/london', ['packagePrice' => $packagePrice, 'packageName' => $packageName]);
    // return view('Packages/london', ['packagePrice' => $packagePrice]);
});


Route::get('/regis', function () {
    return view('regis');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/bookt', function () {
    return view('bookt');
});



Route::get('/register',[AuthUserController::class,'register']);
Route::get('/login',[AuthUserController::class,'login']);

Route::get('/logout',[AuthUserController::class,'logout']);

Route::post('/registerUser',[AuthUserController::class,'registerUser']);
Route::post('/loginUser',[AuthUserController::class,'loginUser']);

Route::get('/changepassword',[AuthUserController::class,'changepasswordform'])->name('changepasswordform');

// Route::get('/loginadmin',[AuthUserController::class,'loginadmin']);

// Route::get('/admin', function () {
//     return view('admin.adminindex');
// });

Route::get('/admin',[AdminController::class,'index']);

Route::get('/user',[AuthUserController::class,'show']);


Route::get('/blog1',function(){
    return view('blog.blog1');
});
Route::get('/blog2',function(){
    return view('blog.blog2');
});
Route::get('/blog3',function(){
    return view('blog.blog3');
});
Route::get('/blog4',function(){
    return view('blog.blog4');
});

Route::get('/bookingdetails',function(){
    return view('bookingdetails');
});

Route::get('/payment',function(){
    return view('payment');
});


