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

Route::get('/', function() {
	return view('welcome');
});

//Route::get('/home1', 'HomeController1@index');

/*Route::get('/home/{page}', 'HomeController@home1');*/

Route::get('/about', 'AboutController@about');

Route::get('/article/{id}', 'ArticleController@article');

Route::get('/master', 'MasterController@master');

Route::get('/category', 'CategoryController@category');


Auth::routes();

Route::get('/home1', 'HomeController1@index');


