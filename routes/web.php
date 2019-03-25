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

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Web')
	->group(function() {

			// Products
			Route::name('product.')
				->prefix('product')
				->group(function() {

						// Route::get('/', function () {
						// 	return view('product.index');
						// })->name('index');
						
						Route::get('/', 'ProductController@index')->name('index');

						// Route::get('create/', function () {
						// 	return view('product.create');
						// })->name('create');

						Route::get('create/', 'ProductController@create')->name('create');

						// Route::get('{id}/', function ($id) {
						// 	return view('product.show', compact('id'));
						// 	// return view('product.show', ['id' => $id]);
						// })->name('show');

						Route::get('{id}/', 'ProductController@show')->name('show');			
				
				}
			);

			// Route::resource('articles', 'ArticleController');
			// Route::resource('comments', 'CommentController');
			
			Route::resources([
				'articles' => 'ArticleController',
				'comments' => 'CommentController',
			]);
			
	}
);

// Route::get('product/', function () {
// 		return view('product.index');
// })->name('product.index');

// Route::get('product/create/', function () {
// 		return view('product.create');
// })->name('product.create');

// Route::get('product/{id}/', function ($id) {
// 		return view('product.show', ['id' => $id]);
// })->name('product.show');