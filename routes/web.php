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
Route::get('my-home', 'HomeController@myHome');
Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
//for group
Route::get('/create/group','GroupController@create');
Route::post('/create/group', 'GroupController@store');
Route::get('/group', 'GroupController@index');
Route::get('/edit/group/{id}','GroupController@edit');
Route::put('/edit/group/{id}','GroupController@update');
Route::delete('/delete/group/{id}','GroupController@destroy');

//for currency
Route::get('/create/currency','CurrencyController@create');
Route::post('/create/currency', 'CurrencyController@store');
Route::get('/currency', 'CurrencyController@index');
Route::get('/edit/currency/{id}','CurrencyController@edit');
Route::put('/edit/currency/{id}','CurrencyController@update');
Route::delete('/delete/currency/{id}','CurrencyController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');