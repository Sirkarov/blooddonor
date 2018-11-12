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

Route::get('/blood_centers', 'Front\BdCenterController@centers');

Route::get('/about', 'Front\AboutController@about');

Route::get('/home', 'Front\IndexController@index');

Route::get('/admin', 'Admin\AdminController@index');
