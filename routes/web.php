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

/**
 * 全タスクの表示
 */
Route::get('/task', 'TaskController@get');

/**
 * 新タスク追加
 */
Route::post('/task', 'TaskController@post');

/**
 * 既存タスクの削除
 */
Route::delete('/task/{id}', 'TaskController@delete');
