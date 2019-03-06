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

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/success', 'Auth\ResetPasswordController@showResetPasswordSuccess')->name('password.success');

// Route for Home page
Route::any('/', 'HomeController@index')->name('home');

// Route for Settings page
Route::any('/settings', 'SettingsController@index')->name('settings');

// Route for Departments
Route::any('/departments', 'PageController@index')->name('departments');

// Route for ...
Route::any('/page', 'HomeController@page')->name('page');
Route::post('/page/add', 'PageController@add')->name('add');
Route::get('/page/edit/{id}', 'PageController@edit')->name('edit');
Route::post('/page/update/{id}', 'PageController@update')->name('page.update');
Route::get('/page/delete/{id}', 'PageController@delete')->name('delete');

Route::get('/404', 'HomeController@index')->name('404');
