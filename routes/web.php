<?php

use App\Slider;
use App\Category;

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
	$sliders=Slider::orderBy('created_at','DESC')->get();
    return view('frontend.index',compact('sliders'));
});

Route::get('/about-us', function () {
    return view('frontend.about-us');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/products/{id}', function ($id) {
	$category=Category::find($id);
    return view('frontend.products',compact('category'));
})->name('products');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){

	Route::get('/home','HomeController@index');
	Route::get('/logout','Auth\LoginController@logout')->name('logout');
	Route::post('/logout','Auth\LoginController@logout')->name('logout');
	Route::resource('mother-category','MotherCategoryController');
	Route::get('/mother-category/delete/{id}','MotherCategoryController@delete')->name('mother-category.delete');

	Route::resource('category','CategoryController');
	Route::get('/category/delete/{id}','CategoryController@delete')->name('category.delete');

	Route::get('image/showSpecific/','ImageController@showSpecific')->name('image.show.specific');
	Route::get('image/delete/{id}','ImageController@delete')->name('image.del');
	Route::resource('image','ImageController');

	Route::get('/slider/delete/{id}','SliderController@delete')->name('slider.delete');
	Route::resource('slider','SliderController');
	
});
