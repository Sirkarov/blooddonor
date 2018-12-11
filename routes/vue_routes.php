<?php


Route::get('getNewUsers', 'Front\IndexController@getNewUsers',function (){
    return view('includes.donors');
})->name('getNewUsers');

Route::get('getPosts', 'Front\IndexController@getPosts',function (){
    return view('includes.posts');
})->name('getPosts');
