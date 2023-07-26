<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

  Route::get('/','WebsiteController@index');
  Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard','Admin\AdminController@index');


Route::group( ['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('/create','QuizeController@create')->name('admin.quize.create');
});

Route::group( ['prefix'=>'user_role','namespace'=>'Admin'],function(){
  Route::get('/create','UserRoleController@create')->name('user_role.create');
  Route::post('/store', 'UserRoleController@store')->name('user_role.store');
});