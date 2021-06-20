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
Route::get('/ajouter','Controller@ajouter');
Route::post('/ajouterdossier','Controller@ajouterdossier');
Route::get('/ouvrir','Controller@ouvrir');
Route::post('/download','Controller@download');
Route::post('/recherche','Controller@recherche');
Route::get('/statistique','Controller@statistique');
