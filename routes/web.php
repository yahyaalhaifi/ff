<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/*Route::get('/', function () {

    return view('welcome');
});
Route::get('/landing', function () {

    return view('landing');
});
Route::namespace('Front')->group(function(){
    //عده روترات توجد لها كونترولير
    Route::get('users','UserController@showUsername');
});
Route::get('check',function(){
    return 'middleware';
})->middleware('auth');//authضروري الااسم يسمئ ب
//Route::get('second','Admin\SecondController@showString');
Route::group(['namespace'=>'Admin'],function(){
    Route::get('second','SecondController@showString0')->middleware('auth');
    Route::get('second1','SecondController@showString1');
    Route::get('second2','SecondController@showString2');
});
Route::get('login',function(){
    return 'login acsses login';
})->name('login');
Route::resource('news','NewsController');
Route::get('/landing', function () {

    return view('landing');
});*/
Auth::routes(['verify'=>true]);
Route::get('/home','HomeController@index')->name('home')->middleware('verified');
Route::get('/dashboard',function(){
    return 'dashboard';
});

