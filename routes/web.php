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

// Route::get('/article/{id}', 'ArticleController@article');

Route::get('/master', 'MasterController@master');

Route::get('/category', 'CategoryController@category');

Route::get('/manage', 'ArticleController@index')->name('manage');

Route::get('/article/add','ArticleController@add');

Route::post('/article/create','ArticleController@create');

Route::get('/article/edit/{id}','ArticleController@edit');

Route::post('/article/update/{id}','ArticleController@update');

Route::get('/article/delete/{id}','ArticleController@delete');

Auth::routes();

Route::get('/home1', 'HomeController1@index');


