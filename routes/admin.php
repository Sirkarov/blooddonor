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
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', 'Admin\AdminController@index');

    #User routes
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/', 'Admin\UserController@list')->name('list');
        Route::get('create', 'Admin\UserController@create')->name('create');
        Route::post('store', 'Admin\UserController@store')->name('store');
        Route::delete('delete', 'Admin\UserController@delete')->name('delete');
        Route::get('edit/{id}', 'Admin\UserController@edit')->name('edit');
        Route::post('update/{id}', 'Admin\UserController@update')->name('update');
        Route::post('testStore', 'Admin\UserController@testStore')->name('testStore');
    });

    #Cities routes
    Route::group(['prefix'=> 'cities', 'as' => 'cities.'],function (){
        Route::get('/', 'Admin\CityController@list')->name('list');
        Route::get('create', 'Admin\CityController@create')->name('create');
        Route::post('store','Admin\CityController@store')->name('store');
        Route::post('update/{id}','Admin\CityController@update')->name('update');
        Route::delete('destroy/{id}','Admin\CityController@destroy')->name('destroy');
        Route::get('edit/{id}','Admin\CityController@edit')->name('edit');
    });

    #Characteristics routes
    Route::group(['prefix' => 'bloodactions', 'as' => 'bloodactions.'],function(){
        Route::get('/', 'Admin\BloodAction@index')->name('list');
        Route::get('create', 'Admin\BloodAction@create')->name('create');
        Route::post('store','Admin\BloodAction@store')->name('store');
        Route::post('update/{id}','Admin\BloodAction@update')->name('update');
        Route::delete('destroy/{id}','Admin\BloodAction@destroy')->name('destroy');
        Route::get('edit/{id}','Admin\BloodAction@edit')->name('edit');
    });

});
