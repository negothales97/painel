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

Auth::routes();



Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'auth'], function(){
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::group(['prefix'=> 'projeto', 'as' => 'project.'], function(){
        Route::get('/', 'ProjectController@index')->name('index');
        Route::get('/create', 'ProjectController@create')->name('create');
        Route::post('/store', 'ProjectController@store')->name('store');
        Route::get('/edit/{resource}', 'ProjectController@edit')->name('edit');
        Route::post('/update/{resource}', 'ProjectController@update')->name('update');
        Route::get('/delete/{resource}', 'ProjectController@delete')->name('delete');
    });
    Route::group(['prefix'=> 'acesso', 'as' => 'access.'], function(){
        Route::get('/', 'AccessController@index')->name('index');
        Route::get('/create', 'AccessController@create')->name('create');
        Route::post('/store', 'AccessController@store')->name('store');
        Route::get('/edit/{resource}', 'AccessController@edit')->name('edit');
        Route::post('/update/{resource}', 'AccessController@update')->name('update');
        Route::get('/delete/{resource}', 'AccessController@delete')->name('delete');
    });
});