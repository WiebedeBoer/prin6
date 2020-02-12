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

//index welcome
Route::get('/', function () {
    return view('welcome');
});

//home
Route::get('/home', 'HomeController@index')->name('home');

//login
Route::get('login', function () {
    return view('login');
});

//register
Route::get('register', function () {
    return view('register');
});
Route::post('register','RegisterController@registerUser');

//authenticate
Auth::routes();

//users
Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');

//servers
Route::get('servers', 'ServerController@index');
Route::get('servers/create','ServerController@create');
Route::post('servers','ServerController@store');
Route::get('servers/{server}', 'ServerController@show');
