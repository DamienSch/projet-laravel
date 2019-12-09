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

Route::get('/', 'DescriptionController@index');
Route::get('/homme', 'DescriptionController@pageHomme');
Route::get('/femme', 'DescriptionController@pageFemme');
Route::get('/soldes', 'DescriptionController@pageSoldes');
Route::get('/mentions-legales', 'DescriptionController@pageMentionsLegales');
Route::get('/presse', 'DescriptionController@pagePresse');
Route::get('/fabrication', 'DescriptionController@pageFabrication');
Route::get('/contact', 'DescriptionController@pageContact');
Route::get('/livraison', 'DescriptionController@pageLivraison');
Route::get('/conditions-de-vente', 'DescriptionController@pageConditionsDeVente');
