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

  Route::get('/','HomeController@index');
  Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group( ['prefix'=>'','namespace'=>'website'],function(){
  
  Route::get('/examlist','ExamController@examlist')->name('examlist');
  Route::get('/quiz_question/{id}','ExamController@quiz_question')->name('quiz_question');
  Route::Post('/quiz_question_store','ExamController@quiz_question_store')->name('quiz_question_store');
  Route::Post('/quiz_answer_view','ExamController@quiz_answer_view')->name('quiz_answer_view');
});







Route::get('/dashboard','Admin\AdminController@index');







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


Route::group( ['prefix'=>'question','namespace'=>'Admin'],function(){
  
  Route::get('/create','QuestionController@create')->name('admin.question.create');
  Route::post('/store','QuestionController@store')->name('admin.question.store');
  Route::get('/view','QuestionController@view')->name('admin.question.view');
  Route::get('/edit/{id}','QuestionController@edit')->name('admin.question.edit');
  Route::post('/update/{id}','QuestionController@update')->name('admin.question.update');
  Route::get('/delete/{id}','QuestionController@delete')->name('admin.question.delete');
});