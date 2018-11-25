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

Route::get('/blood_donors', 'Front\BloodDonorController@index');

Route::get('/blood_actions', 'Front\BloodActionsController@actions');

Route::get('/about', 'Front\AboutController@about');

Route::get('/', 'Front\IndexController@index');

Route::get('/admin', 'Admin\AdminController@index');

Route::get('/profile', 'Front\BloodDonorController@profile');

Route::get('/learn', 'Front\IndexController@learn');


Route::group(['prefix' => 'blood_donors', 'as' => 'blood_donors.'], function() {

    Route::get('profile/{id}', 'Front\BloodDonorController@profile')->name('profile');

});
