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
    return view('frontend.index');
});

Route::get('/about-us', function () {
    return view('frontend.about-us');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
