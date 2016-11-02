<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index');
Route::get('/dashboard/student', 'HomeController@manageStudent');
Route::get('/dashboard/staff', 'HomeController@manageStaff');

Route::get('/dashboard/student/new', 'HomeController@viewAddStudent');
Route::get('/dashboard/staff/new', 'HomeController@viewAddStaff');
Route::post('/dashboard/student/new', 'HomeController@addStudent');
Route::post('/dashboard/staff/new', 'HomeController@addStaff');