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

//logout
//Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

//authenticate
Auth::routes();

//users
Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::get('users/{user}/edit', 'UserController@edit');
Route::patch('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@destroy');

//servers
Route::get('servers', 'ServerController@index');
Route::get('servers/create','ServerController@create');
Route::post('servers','ServerController@store');
Route::get('servers/{server}', 'ServerController@show');
Route::get('servers/{server}/edit', 'ServerController@edit');
Route::delete('servers/{server}', 'ServerController@destroy');
Route::patch('servers/{server}', 'ServerController@update');

//apps
Route::get('apps', 'AppsController@index');
Route::get('apps/create','AppsController@create');
Route::post('apps','AppsController@store');
Route::get('apps/{apps}', 'AppsController@show');
Route::get('apps/{apps}/edit', 'AppsController@edit');
Route::delete('apps/{apps}', 'AppsController@destroy');
Route::patch('apps/{apps}', 'AppsController@update');

//app status
Route::get('appstatus', 'AppstatusController@index');
Route::get('appstatus/create','AppstatusController@create');
Route::post('appstatus','AppstatusController@store');
Route::get('appstatus/{appstatus}', 'AppstatusController@show');
Route::get('appstatus/{appstatus}/edit', 'AppstatusController@edit');
Route::delete('appstatus/{appstatus}', 'AppstatusController@destroy');
Route::patch('appstatus/{appstatus}', 'AppstatusController@update');

//dynamic pdf
Route::get('dynamic_pdf', 'PDFController@index');
Route::get('dynamic_pdf/pdf', 'PDFController@PDF');