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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/logout','Auth\LoginController@userlogout')->name('user.logout');
Route::get('/contact', 'Contact@showContactForm')->name('contact.us');
Route::post('/contact', 'Contact@sendMail');

Route::prefix('admin')->group(function() {
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');
    Route::get('/table','AdminController@table')->name('admin.table');
    Route::post('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
    Route::post('/create','AdminController@create')->name('create.table');
    Route::get('/edit/{id}','AdminController@edit');
    Route::post('update/{id}','AdminController@update');
    Route::get('/delete/{id}','AdminController@delete');

    Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

});
