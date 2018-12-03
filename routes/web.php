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
    return view('layouts.app');
});
Auth::routes();

//Admin Authentication Routes
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
});

//User Authentication Routes
Route::get('/profil', 'UserController@index')->name('profil');
Route::get('/home', 'UserController@home')->name('home');

//Password Reset Routes
Route::get('/password/reset/{token}', 'ResetController@showResetForm');
Route::get('/email', 'Auth\ResetPasswordController@getEmailForm');
Route::post('password/email', 'Auth\ResetPasswordController@sendResetLinkEmail');
Route::post('password/reset', 'ResetController@reset');

//Navbar Routes
Route::get('/calendar', function () {
    return view('userNav.calendar');
});


/*Route::get('/email', function () {
    return view('auth.passwords.reset');
});



Route::get('/email', function () {
    return view('auth.passwords.email')->name('passwords.email');
});*/