<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/**
 * TODO関連のルーティング
 */
Route::get('/task', 'TaskController@get')->name('task');
Route::post('/task', 'TaskController@post');
Route::delete('/task/{id}', 'TaskController@delete');

/**
 * 記事の編集関連
 */
Route::get('/api/article/{id}', 'ArticleController@get');
Route::post('/api/article', 'ArticleController@post');
Route::delete('/api/article/{id}', 'ArticleController@delete');
Route::put('/api/article/{id}', 'ArticleController@put');

Route::get('/api/articles', 'ArticleController@page');

Route::get('/home', 'HomeController@index')->name('home');
