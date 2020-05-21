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

Route::get('/', 'BaseController@index');

// Frontend Auth
Route::post('/cLogin', 'Frontend\UsersController@login');
Route::post('/cRegister', 'Frontend\UsersController@register');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'siswa'], function () {
        Route::group(['middleware' => ['role:Siswa']], function () {
            Route::get('/', 'Frontend\MainController@index')->name('siswa.index');

        });
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
