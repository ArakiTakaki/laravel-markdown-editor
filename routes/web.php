<?php

Route::get('/react', function () {
    return view('react_sample');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('ホームに戻る？');
/**
 * TODO関連のルーティング
 */
Route::get('/api/task', 'TaskController@get')
    ->name('taskをゲットする');

Route::post('/api/task', 'TaskController@post')
    ->name('taskを追加する');

Route::delete('/api/task/{id}', 'TaskController@delete')
    ->name('taskを削除する');


/**
 * 記事の編集関連
 */
Route::get('/api/articles', 'ArticleController@get')
    ->name('記事一覧を取得する');

Route::get('/api/articles/{category}', 'ArticleController@findCategory')
    ->name('カテゴリを選択し記事を取得する');

/**
 * 記事単品
 */
Route::get('/api/article/{id}', 'ArticleController@find')
    ->name('記事の情報を取得する');

Route::group(['middleware' => 'auth'], function () {
    Route::post('/api/article', 'ArticleController@post')
        ->name('記事を投下する');

    Route::delete('/api/article/{id}', 'ArticleController@delete')
        ->name('記事の削除');

    Route::put('/api/article/{id}', 'ArticleController@put')
        ->name('記事の編集');
});


/**
 * 会員周り
 */
Route::get('api/login', 'UserController@login')
    ->name('ログイン');

Route::get('api/register', 'UserController@register')
    ->name('会員登録');


Route::group(['middleware' => 'auth:api'], function () {

    Route::post('details', 'UserController@details')
        ->name('会員削除');

});
