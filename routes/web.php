<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AdoptController;
use App\Http\Controllers\DetailController;
use Illuminate\Http\Request;
use App\Http\Middleware\AdoptMiddleware;
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

Route::get('/login', function () {
    return view('login');
})->middleware(AdoptMiddleware::class);

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/surrender', function () {
    return view('surrender');
});

Route::get('/register', function () {
    return view('register');
})->middleware(AdoptMiddleware::class);

Route::get('/german',[DetailController::class,'german']);

Route::get('/bulldog',[DetailController::class,'bulldog']);

Route::get('/scottish',[DetailController::class,'scottish']);

Route::get('/sia',[DetailController::class,'sia']);

Route::get('/pomeranian',[DetailController::class,'pomeranian']);

Route::get('/bengal',[DetailController::class,'bengal']);

Route::get('/adoptpage', function () {
    return view('adoptpage');
});

Route::get('/logout', function (Request $request) {
    $request->session()->forget('data');
    return view('/homepage');
});

Route::get('/admindetail', function () {
    return view('admindetail');
});

Route::get('/adminadopted', function () {
    return view('adminadopted');
});

Route::get('/adminsurrender', function () {
    return view('adminsurrender');
});

Route::get('/adminregister', function () {
    return view('adminregister');
});

Route::get('/admindetailadd', function () {
    return view('admindetailadd');
});

Route::get('/admindetail',[DetailController::class,'admindetail']);

Route::get('/adminadopted',[DetailController::class,'adminadopted']);

Route::get('/adminsurrender',[DetailController::class,'adminsurrender']);

Route::get('/adminregister',[DetailController::class,'adminregister']);

Route::get('editdetail/{Pet_Id}',[AdoptController::class,'EditDetail']);

Route::get('updatedetail/{Pet_Id}',[AdoptController::class,'UpdateDetail']);

Route::get('admindetail/{Pet_Id}',[AdoptController::class,'DeleteDetail']);

Route::get('adminadopted/{User_Id}/{Pet_Id}',[AdoptController::class,'DeleteAdopted']);

Route::get('adminsurrender/{User_Id}',[AdoptController::class,'DeleteSurrender']);

Route::get('adminregister/{User_Id}',[AdoptController::class,'DeleteRegister']);

Route::post("register",[AdoptController::class,'Register']);

Route::post("surrender",[AdoptController::class,'Surrender']);

Route::post("login",[AdoptController::class,'Login']);

Route::post("german",[AdoptController::class,'Adoption']);

Route::post("bulldog",[AdoptController::class,'Adoption']);

Route::post("scottish",[AdoptController::class,'Adoption']);

Route::post("sia",[AdoptController::class,'Adoption']);

Route::post("pomeranian",[AdoptController::class,'Adoption']);

Route::post("bengal",[AdoptController::class,'Adoption']);

Route::post('/admindetailadd',[AdoptController::class,'AddDetail']);

