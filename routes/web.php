<?php

use Illuminate\Support\Facades\Input as Input;
use App\User;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/departments', 'HomeController@departments')->name('departments');
Route::get('/settings', 'HomeController@settings')->name('settings');
Route::get('/page', 'HomeController@page')->name('page');
Route::post('/change/credentials', function(){
    $User = User::find(Auth::user()->id);
    if(Input::post('new_password') == Input::post('repeat_password')){
        $User->password = bcrypt(Input::post('new_password'));
        $User->email = Input::post('email');
        $User->save();
        return redirect()->back()->with('success', 'Credentials changed');
    };
    return redirect()->back()->with('success', 'Credentials not changed');
})->name('change.credentials');

//Error routes
Route::get('/404NotFound','HomeController@error' )->name('404');