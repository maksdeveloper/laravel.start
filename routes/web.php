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

Route::group(['middleware' => 'auth'], function (){

    //tasks board

    Route::group(['middleware' => 'admin'], function (){

    Route::resource('tasks', 'TaskController');

    });


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/register', function () {
//    return view('auth.register');
//});
//
Route::group(['middleware' => 'guest'], function (){
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
});

Route::get('skills', function (){
    return ['Laravel', 'Vue', 'PHP', 'JS', 'Tooling'];
});

Route::get('projects/create', 'ProjectsController@create');
Route::post('projects', 'ProjectsController@store');