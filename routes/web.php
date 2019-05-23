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


Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){

	Route::get('/home','HomeController@index');
	Route::get('/logout','Auth\LoginController@logout')->name('logout');
	Route::resource('mother-category','MotherCategoryController');
	Route::get('/mother-category/delete/{id}','MotherCategoryController@delete')->name('mother-category.delete');

	Route::resource('category','CategoryController');
	// Route::get('/category/edit/{id}','CategoryController@editt')->name('category.edit.custom');
	Route::get('/category/delete/{id}','CategoryController@delete')->name('category.delete');
});
