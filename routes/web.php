<?php


Route::get('/test', function () {
    return view('index');
});
Route::get('/', function () {
    return view('welcome');
});

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
Route::post('api/login', 'UserController@login')
    ->name('ログイン');

Route::post('api/register', 'UserController@register')
    ->name('会員登録');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('details', 'UserController@details')
        ->name('会員削除');
});

