<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'StudentController@listAllStudentInfo');
Route::match(['get', 'post'], '/create','StudentController@createStudentInfo');
Route::match(['get', 'post'], '/createStudentGrade','StudentController@createStudentGrade');