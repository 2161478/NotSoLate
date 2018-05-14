<?php

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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/profile', 'PageController@profile')->name('profile');
ROUTE::get('/java', 'PagesController@java')->name('java');
ROUTE::get('/php', 'PagesController@php')->name('php');
ROUTE::get('/node', 'PagesController@node')->name('node');
ROUTE::get('/was', 'PagesController@was')->name('was');
Route::get('/about', 'PagesController@about')->name('about');
Auth::routes();
Route::resource('quizzes', 'QuizController');
Route::resource('quizzesTaken', 'QuizzesTakenController');
Route::resource('profile', 'ProfileController');

Route::resource('{topic}', 'CommentsController');
Route::post('{topic}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);