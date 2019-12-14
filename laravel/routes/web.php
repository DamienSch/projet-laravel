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

Route::get('/', 'PostController@index');
Route::get('/category/{id}', 'PostController@category' , function ($id) {})->name('category_id');
Route::get('/soldes/{id}', 'PostController@soldes' , function ($id) {})->name('category_id');
Route::get('/soldes/{id}/edit', 'PostController@edit' , function ($id) {})->name('category_id');
Route::get('/mentions-legales', 'DescriptionController@pageMentionsLegales');
Route::get('/presse', 'DescriptionController@pagePresse');
Route::get('/fabrication', 'DescriptionController@pageFabrication');
Route::get('/contact', 'DescriptionController@pageContact');
Route::get('/livraison', 'DescriptionController@pageLivraison');
Route::get('/conditions-de-vente', 'DescriptionController@pageConditionsDeVente');
Route::get('/posts', 'PostController@index');
Route::get('/create', 'PostController@create');
Route::resource('/produit', 'PostController');

/* Authentification */
Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');
