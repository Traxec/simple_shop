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
Route::view('/{any}', 'layouts.app')->where('any', '.*');

// Route::get('/','GoodsController@index')->name('root');

// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

// Auth::routes();

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);