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

Route::get('/term', 'Front\IndexController@term')->middleware('auth');

Route::get('/learn', 'Front\IndexController@learn');

Route::get('/benefits', 'Front\IndexController@benefits');

Route::get('/questions', 'Front\IndexController@questions');

Route::get('profile/{id}', 'Front\IndexController@user_profile')->name('user_profile');

Route::group(['prefix' => 'blood_donors', 'as' => 'blood_donor.'], function() {

    Route::get('profile/{id}', 'Front\BloodDonorController@profile')->name('profile');

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

