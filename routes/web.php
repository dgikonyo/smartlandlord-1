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
    return view('auth.login');
});


Route::get('/home','HomeController@index')->name('home');

Route::get('/profits',function(){
	return view('profits');
});
Route::get('/login',function(){
	return view('auth.login');
});

Route::get('/buildings',function(){
	return view('buildings');
});

Route::get('/staffLandingPage',function(){
	return view('staffLandingPage');
});
Route::post('/addTenantsToDB','TenantsController@addTenants');
Route::get('/registerTenants','TenantsController@index');

Route::post('/addPaymentsToDB','PaymentsController@addPayments');
Route::get('/payments','PaymentsController@index');

Route::post('/addExpensessToDB','ExpensesController@submitExpenses');
Route::get('/expenses','ExpensesController@index');

Route::get('/profits','RevenuesController@index');
