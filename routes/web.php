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

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth', 'prefix' => 'admin46842'], function () {
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    // Referals
    Route::get('/referals', 'ReferalController@index')->name('admin.referal.index');
    // Referals CAtegory
    Route::get('/referals/cateogries', 'ReferalCategoriesController@index')->name('admin.referal.categories.index');
});
