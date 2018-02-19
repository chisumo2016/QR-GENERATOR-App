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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('login', function (){
    return view('user.login');
})->name('login');

Route::get('register' , function (){
    return view('user.register');
})->name('register');
