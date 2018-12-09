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
        Route::get('/', 'Admin\BloodActionController@list')->name('list');
        Route::get('create', 'Admin\BloodActionController@create')->name('create');
        Route::post('store','Admin\BloodActionController@store')->name('store');
        Route::post('update/{id}','Admin\BloodActionController@update')->name('update');
        Route::delete('destroy/{id}','Admin\BloodActionController@destroy')->name('destroy');
        Route::get('edit/{id}','Admin\BloodActionController@edit')->name('edit');
        Route::post('testStore', 'Admin\BloodActionController@testStore')->name('testStore');
        Route::delete('delete', 'Admin\BloodActionController@delete')->name('delete');
    });

    #Subrcibers routes
    Route::group(['prefix' => 'subscribers', 'as' => 'subscribers.'], function () {
        Route::get('/', 'Admin\SubscribeController@list')->name('list');
        Route::get('create', 'Admin\SubscribeController@create')->name('create');
        Route::post('store', 'Admin\SubscribeController@store')->name('store');
        Route::delete('delete', 'Admin\SubscribeController@delete')->name('delete');
        Route::get('edit/{id}', 'Admin\SubscribeController@edit')->name('edit');
        Route::post('update/{id}', 'Admin\SubscribeController@update')->name('update');
        Route::post('testStore', 'Admin\SubscribeController@testStore')->name('testStore');
        Route::post('frontStore', 'Admin\SubscribeController@frontStore')->name('frontStore');

    });

    #Posts routes
    Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
        Route::get('/', 'Admin\PostController@list')->name('list');
        Route::get('create', 'Admin\PostController@create')->name('create');
        Route::post('store', 'Admin\PostController@store')->name('store');
        Route::delete('delete', 'Admin\PostController@delete')->name('delete');
        Route::get('edit/{id}', 'Admin\PostController@edit')->name('edit');
        Route::post('update/{id}', 'Admin\PostController@update')->name('update');
        Route::post('testStore', 'Admin\PostController@testStore')->name('testStore');

    });

    #Question routes
    Route::group(['prefix' => 'questions', 'as' => 'questions.'], function () {
        Route::get('/', 'Admin\QuestionController@list')->name('list');
        Route::get('create', 'Admin\QuestionController@create')->name('create');
        Route::post('store', 'Admin\QuestionController@store')->name('store');
        Route::delete('delete', 'Admin\QuestionController@delete')->name('delete');
        Route::get('edit/{id}', 'Admin\QuestionController@edit')->name('edit');
        Route::get('more/{id}', 'Admin\QuestionController@more')->name('more');
        Route::post('update/{id}', 'Admin\QuestionController@update')->name('update');
        Route::post('testStore', 'Admin\QuestionController@testStore')->name('testStore');
        Route::post('frontStore', 'Admin\QuestionController@frontStore')->name('frontStore');

    });

    #Terms routes
    Route::group(['prefix' => 'terms', 'as' => 'terms.'], function () {
        Route::get('/', 'Admin\TermController@list')->name('list');
        Route::get('create', 'Admin\TermController@create')->name('create');
        Route::post('store', 'Admin\TermController@store')->name('store');
        Route::delete('delete', 'Admin\TermController@delete')->name('delete');
        Route::get('edit/{id}', 'Admin\TermController@edit')->name('edit');
        Route::get('more/{id}', 'Admin\TermController@more')->name('more');
        Route::post('update/{id}', 'Admin\TermController@update')->name('update');
        Route::post('testStore', 'Admin\TermController@testStore')->name('testStore');
        Route::post('frontStore', 'Admin\TermController@frontStore')->name('frontStore');

    });

});

