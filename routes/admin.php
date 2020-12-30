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



//Auth::routes();
Route::group(['namespace'=>'Admin','middelware'=>'auth:admin'], function (){
    Route::get('/', 'DashboardController@getDashboard') ->name('admin.dashboard');
});

Route::group(['namespace'=>'Admin','middelware'=>'guest:admin'], function (){
    Route::get('login','LoginController@getLogin')->name('get.admin.login');
    Route::post('login','LoginController@login')->name('admin.login');
});
