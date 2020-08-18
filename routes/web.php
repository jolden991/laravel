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

Route::get('/', function () {
    return view('welcome');
});


Route::get('test', function () {
    return view('test');
});
Route::get('index', function () {
    return view('index');
});


Route::get('yahoo/{id}/{name?}/{age?}', function ($id,$name="golden",$age=38) {
    return  "hlo i am text<br>"."useid=".$id."<br>NAME=".$name."<br>age=".$age;
});


Route::get('user', function () {
    return view('user');
});

Route::get('show', function () {
    return view('show');
});



Route::get('edit', function () {
    return view('edit');
});



Route::get('pay', function () {
    return view('payrollsystem');
});
Route::get('form', function () {
    return view('form');
});




Route::get('student', function () {
    return view('student');
});
Route::get('crud','StudentController@store');
Route::get('del','StudentController@destroy');
Route::get('up','StudentController@update');
Route::get('/search','StudentController@search');



Route::resource('students','StudentController');
Route::get('sr', function () {
    return view('sr');
});

Route::get('/file','StudentController@store');


 

