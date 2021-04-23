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
    Route::get('/referals/create', 'ReferalController@create')->name('admin.referal.create');
    Route::post('/referals/store', 'ReferalController@store')->name('admin.referal.store');
    Route::get('/referals/edit', 'ReferalController@edit')->name('admin.referal.edit');
    Route::put('/referals/update', 'ReferalController@update')->name('admin.referal.update');
    Route::post('/referals/destroy', 'ReferalController@destroy')->name('admin.referal.destroy');

    // Referals CAtegory
    Route::get('/referals/cateogries', 'ReferalCategoriesController@index')->name('admin.referal.categories.index');
    Route::get('/referals/cateogries/create', 'ReferalCategoriesController@create')->name('admin.referal.categories.create');
    Route::post('/referals/cateogries/store', 'ReferalCategoriesController@store')->name('admin.referal.categories.store');
    Route::get('/referals/cateogries/edit', 'ReferalCategoriesController@edit')->name('admin.referal.categories.edit');
    Route::put('/referals/cateogries/update', 'ReferalCategoriesController@update')->name('admin.referal.categories.update');
    Route::post('/referals/cateogries/destroy', 'ReferalCategoriesController@destroy')->name('admin.referal.categories.destroy');
});
