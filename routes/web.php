<?php

use Illuminate\Routing\RouteGroup;

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->middleware('verified');

// ====================================================================================
// Vue Project
// ====================================================================================
Route::get('/ecolo4/index', 'EcoloController@index')->name('ecolo4.index');
Route::get('/ecolo4/landing', 'EcoloController@landing')->name('ecolo4.landing');

Route::get('/ecolo4/article_list_api', 'EcoloController@article_list_api')->name('ecolo4.article_list_api');

// ====================================================================================
// Main routes
// ====================================================================================

// Route::get('/', 'SenecoloController@index')->name('index');

Route::get('/', function () {
    // return redirect()->route('boutique');
    return redirect()->route('ecolo4.landing');
})->name('index');
Route::get('/blog/index', 'SenecoloController@blog')->name('blog');

Route::get('/boutique/index/{categorie?}', 'SenecoloController@boutique')->name('boutique');
Route::get('/panier/add/{product_id?} ', 'SenecoloController@add_to_card')->name('card.add');


Route::get('/formation/index', 'SenecoloController@formation')->name('formation');
Route::get('/contact', 'SenecoloController@contact')->name('contact');

Route::post('/logme', 'SenecoloController@logme')->name('logme');
Route::get('/loginpage', 'SenecoloController@loginpage')->name('loginpage');

Route::get('test', function () {
    return view('0 Eiser.pages.product');
});
Route::get('test2', function () {
    return view('0 senecolo3.pages.login');
});

// ====================================================================================
// Backoffice
// ====================================================================================
Route::middleware(['auth'])->group(function () {
    Route::get('/backoffice/{section?}', 'SenecoloController@backoffice')->name('backoffice');
    Route::post('/backoffice/images/carousel/add', 'SenecoloController@add_to_carousel')->name('backoffice.add.to.carousel');
    Route::get('/backoffice/images/carousel/delete', 'SenecoloController@delete_carousel_image')->name('backoffice.delete.carousel.image');
    Route::post('/backoffice/images/pub1/add', 'SenecoloController@add_to_pub1')->name('backoffice.add.to.pub1');
    Route::post('/backoffice/images/pub2/add', 'SenecoloController@add_to_pub2')->name('backoffice.add.to.pub2');
    Route::post('/backoffice/images/pub3/add', 'SenecoloController@add_to_pub3')->name('backoffice.add.to.pub3');
    Route::post('/backoffice/images/background/add', 'SenecoloController@add_to_background')->name('backoffice.add.to.background');

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
