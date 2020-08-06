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
Auth::routes();

Route::get('/',  [ 'middleware' => 'auth', 'uses'=>'HomeController@index'])->name('home');

// User management
Route::resource('user', 'UserSetting')->names([
    'index' => 'user.index'
]);

// Company management
Route::resource('company', 'CompanyController')->names([
	'index' => 'company.index'
]);

// Tranning management
Route::resource('tranning', 'TranningController')->names([
	'index' => 'tranning.index'
]);



