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
Route::get('/', 'Site\HomeController@index')->name('site');
Route::post('home.save', 'Site\HomeController@save')->name('home.save');

Route::prefix('admin')->group(function(){
    Route::get('/', 'Admin\ConteudoController@index')->name('admin');

    Route::get('register', 'Admin\Auth\RegisterController@index')->name('register');
    Route::post('register', 'Admin\Auth\RegisterController@register');

    Route::get('login', 'Admin\Auth\LoginController@index')->name('login');
    Route::post('login', 'Admin\Auth\LoginController@authenticate');

    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('logout');


    Route::get('conteudos', 'Admin\ConteudoController@index')->name('conteudos');
    Route::put('conteudos.save', 'Admin\ConteudoController@save')->name('conteudos.save');

    Route::resource('characters', 'Admin\CharacterController');
});