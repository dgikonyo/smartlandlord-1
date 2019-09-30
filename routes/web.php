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
    return view('home');
});

Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Route::get('/profits',function(){
	return view('profits');
});
Route::get('/buildings',function(){
	return view('buildings');
});
Route::get('/payments',function(){
    return view('payments');
});
Route::get('/staffLandingPage',function(){
	return view('staffLandingPage');
});
Route::get('/registerTenants',function(){
	return view('registerTenants');
});

Route::resource('SmartLandlord','TenantsController');