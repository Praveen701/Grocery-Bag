<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/additem', 'GroceryController@add');
Route::post('/additem', 'GroceryController@store');
Route::get('/edititem/{id}', 'GroceryController@edit');
Route::post('/edititem/{id}', 'GroceryController@update');
Route::get('/delete/{id}', 'GroceryController@destroy');

