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

Route::group( ['prefix'=>'class','namespace'=>'Admin'],function(){
  
  Route::get('/create','ClassController@create')->name('admin.class.create');
  Route::post('/store','ClassController@store')->name('admin.class.store');
  Route::get('/view','ClassController@view')->name('admin.class.view');
  Route::get('/edit/{id}','ClassController@edit')->name('admin.class.edit');
  Route::post('/update/{id}','ClassController@update')->name('admin.class.update');
  Route::get('/delete/{id}','ClassController@delete')->name('admin.class.delete');
});

Route::group( ['prefix'=>'quiz','namespace'=>'Admin'],function(){
  
  Route::get('/create','QuizController@create')->name('admin.quiz.create');
  Route::post('/store','QuizController@store')->name('admin.quiz.store');
  Route::get('/view','QuizController@view')->name('admin.quiz.view');
  Route::get('/edit/{id}','QuizController@edit')->name('admin.quiz.edit');
  Route::post('/update/{id}','QuizController@update')->name('admin.quiz.update');
  Route::get('/delete/{id}','QuizController@delete')->name('admin.quiz.delete');
});