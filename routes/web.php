<?php

// ====================================================================================
// Main routes
// ====================================================================================

Route::get('/', 'SenecoloController@index')->name('index');
Route::get('/blog/index', 'SenecoloController@blog')->name('blog');
Route::get('/boutique/index', 'SenecoloController@boutique')->name('boutique');
Route::get('/formation/index', 'SenecoloController@formation')->name('formation');
Route::get('/contact', 'SenecoloController@contact')->name('contact');


Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->middleware('verified');

// ====================================================================================
// Infyom générator
// ====================================================================================
Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');
Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');
Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');
Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');
Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');
Route::post(  'generator_builder/generate-from-file', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile' )->name('io_generator_builder_generate_from_file');

// ====================================================================================
// Ressources
// ====================================================================================
Route::resource('newsletters', 'NewsletterController');


Route::resource('messages', 'MessageController');