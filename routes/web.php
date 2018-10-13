<?php

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::resource('posts','PostsController');
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
