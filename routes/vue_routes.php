<?php


Route::get('getNewUsers', 'Front\IndexController@getNewUsers',function (){
    return view('includes.donors');
})->name('getNewUsers');
