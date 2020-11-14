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

Route::get('/about', 'AboutController@about')->name('about');

Route::get('/article/{id}', 'ArticleController@article');

Route::get('/master', 'MasterController@master');

Route::get('/category', 'CategoryController@category')->name('category');

Route::get('/manage', 'ArticleController@index')->name('manage');

Route::get('/artikel/add','ArticleController@add');

Route::post('/artikel/create','ArticleController@create');

Route::get('/artikel/edit/{id}','ArticleController@edit');

Route::post('/artikel/update/{id}','ArticleController@update');

Route::get('/artikel/delete/{id}','ArticleController@delete');

Route::get('/article/cetak_pdf', 'ArticleController@cetak_pdf');

Auth::routes();

Route::get('/home1', 'HomeController1@index')->name('home1');


