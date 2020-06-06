<?php

use Illuminate\Routing\RouteGroup;

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->middleware('verified');


// ====================================================================================
// Main routes
// ====================================================================================

// Route::get('/', 'SenecoloController@index')->name('index');

Route::get('/', function () {
    return redirect()->route('boutique');
})->name('index');
Route::get('/blog/index', 'SenecoloController@blog')->name('blog');

Route::get('/boutique/index/{categorie?}', 'SenecoloController@boutique')->name('boutique');
Route::get('/panier/add/{product_id?} ', 'SenecoloController@add_to_card')->name('card.add');


Route::get('/formation/index', 'SenecoloController@formation')->name('formation');
Route::get('/contact', 'SenecoloController@contact')->name('contact');

Route::get('test', function () {
    return view('0 Eiser.pages.product');
});

// ====================================================================================
// Backoffice
// ====================================================================================
Route::middleware(['auth'])->group(function () {
    Route::get('/backoffice/{section?}', 'SenecoloController@backoffice')->name('backoffice');

});


// ====================================================================================
// Seeders
// ====================================================================================
Route::get('/seeds/categories', 'SeedsController@categorie')->name('seeds.categorie');

// ====================================================================================
// Infyom générator
// ====================================================================================
Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');
Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');
Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');
Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');
Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');
Route::post('generator_builder/generate-from-file', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile' )->name('io_generator_builder_generate_from_file');

// ====================================================================================
// Ressources
// ====================================================================================
Route::resource('newsletters', 'NewsletterController');
Route::resource('messages', 'MessageController');
Route::resource('categories', 'CategorieController');
Route::resource('articles', 'ArticleController');
Route::resource('ecommerceCategories', 'Ecommerce_categoryController');
Route::resource('ecommerceArticles', 'Ecommerce_articleController');
Route::resource('ecommercePaniers', 'Ecommerce_panierController');
