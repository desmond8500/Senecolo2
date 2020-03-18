<?php

Route::get('/', function () {
    return redirect()->route('index');
    // return view('welcome');
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::get('/ecommerce', 'EcommerceController@index')->name('index');
Route::get('/ecommerce/formation', 'EcommerceController@formation')->name('formation');
Route::get('/ecommerce/contact', 'EcommerceController@contact')->name('contact');
