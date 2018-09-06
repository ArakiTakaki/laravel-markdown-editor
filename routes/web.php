<?php

Route::get('/react',function(){
    return view('react_sample');
});

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

Route::get('/home', 'HomeController@index')->name('home');

/**
 * 記事の編集関連
 */

Route::get('/api/articles', 'ArticleController@get');
Route::get('/api/articles/{category}', 'ArticleController@get');

Route::get('/api/article/{id}', 'ArticleController@find');

Route::group(['middleware' => 'auth'], function() {
    Route::post('/api/article', 'ArticleController@post');
    Route::delete('/api/article/{id}', 'ArticleController@delete');
    Route::put('/api/article/{id}', 'ArticleController@put');
});