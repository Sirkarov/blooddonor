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

Auth::routes();


Route::get('/blood_donors', 'Front\BloodDonorController@index');

Route::get('/blood_actions', 'Front\BloodActionsController@actions');

Route::get('/about', 'Front\AboutController@about');

Route::get('/profile', 'Front\BloodDonorController@profile');

Route::get('/term', 'Front\IndexController@term')->name('term')->middleware('auth');

//Route::get('term/{id}', 'Front\IndexController@term')->name('term')->middleware('auth');

Route::get('/learn', 'Front\IndexController@learn');

Route::get('/benefits', 'Front\IndexController@benefits');

Route::get('/questions', 'Front\IndexController@questions');

Route::get('profile/{id}', 'Front\IndexController@get_user_profile')->name('user_profile');

Route::get('profile/edit/{id}', 'Front\IndexController@edit_user_profile')->name('edit_profile');

Route::post('profile/update/{id}','Front\IndexController@user_update')->name('user_update');

Route::group(['prefix' => 'blood_donors', 'as' => 'blood_donor.'], function() {

    Route::get('profile/{id}', 'Front\BloodDonorController@profile')->name('profile');

});


Route::get('/', function (){
    if(!auth()->check()){
        return view('welcome');
    }
    else{
        if(Auth::user()->isAdmin == 0){
            return view('welcome');
        }else{
            return view('admin.index');
        }
    }
});

Route::group(['middleware' => ['web','auth']],function (){

   Route::get('/home',function (){
      if(Auth::user()->isAdmin == 0){
          return view('welcome');
      }else{
        return view('admin.index');
      }
   });

});
