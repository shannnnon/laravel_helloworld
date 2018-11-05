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

/**
 * GET 常用于页面读取
 * POST 常用于数据提交
 * PATCH 常用于数据更新
 * DELETE 常用于数据删除
 *
 *
 */

Route::get('/', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help');
Route::get('/about', 'StaticPagesController@about');

