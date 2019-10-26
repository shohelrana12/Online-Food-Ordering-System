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
/*Admin not login state*/
Route::group(['prefix' => 'admin','namespace'=>'Admin', 'middleware' => 'no_auth:admin'], function () {
    Route::get('/', 'LoginController@login');
    Route::get('login', 'LoginController@login');
    Route::post('authenticate', 'LoginController@authenticate');
});

/*Admin login state*/
Route::group(['prefix' => 'admin','namespace'=>'Admin', 'middleware' => ['guest:admin']], function(){
	Route::get('dashboard', 'LoginController@dashboard');
	Route::get('logout', 'LoginController@logout');
	
	Route::get('resturent', 'ResturentController@index');
	Route::match(['GET','POST'],'store-resturent','ResturentController@store');

	Route::get('user', 'LoginController@showUser');
	Route::get('contact', 'LoginController@contact');

	Route::get('item', 'ItemController@index');
	Route::match(['GET','POST'],'store-item','ItemController@store');

	Route::get('order', 'OrderController@index');
	
});


/*User not login state*/
Route::group(['namespace'=>'User', 'middleware' => 'no_auth:users'], function () {
    Route::get('login', 'LoginController@index');
	Route::post('authenticate', 'LoginController@authenticate');
	
	Route::get('register', 'RegistrationController@index');
	Route::post('sign-up', 'RegistrationController@signup');
	
	Route::get('home', 'HomeController@index');
	Route::get('contact-us', 'HomeController@contact');
	Route::get('about-us', 'HomeController@about');
	Route::post('contacts', 'HomeController@contactUs');
	
	Route::get('find-resturant', 'ResturentController@index');
	Route::get('food-item/{id?}', 'ItemController@index');
});

/*User login state*/
Route::group(['namespace'=>'User', 'middleware' => ['guest:user']], function(){
	
	Route::get('login', 'LoginController@index');
	Route::get('logout', 'LoginController@logout');
	Route::post('authenticate', 'LoginController@authenticate');
	
	Route::get('register', 'RegistrationController@index');
	Route::post('sign-up', 'RegistrationController@signup');
	
	Route::get('/', 'HomeController@index');
	Route::get('home', 'HomeController@index');
	Route::get('contact-us', 'HomeController@contact');
	Route::get('about-us', 'HomeController@about');
	Route::post('contacts', 'HomeController@contactUs');
	

	Route::get('find-resturant', 'ResturentController@index');
	Route::get('food-item/{id?}', 'ItemController@index');

	Route::get('order', 'OrderController@index');
	Route::post('confirm', 'OrderController@confirm');
	
});
