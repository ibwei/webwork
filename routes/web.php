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

Route::get('/','\App\Http\Controllers\UserController@start');

//登录页面
Route::get('/login', '\App\Http\Controllers\UserController@start');
//登录行为
Route::post('/login', '\App\Http\Controllers\UserController@login');
//登出行为
Route::get('/logout', '\App\Http\Controllers\UserController@logout');


//个人中心页面
Route::get('/user/me', '\App\Http\Controllers\UserController@index');
//密码设置页面
Route::get('/user/{user}/info', '\App\Http\Controllers\UserController@setting');
//密码设置操作
Route::post('/user/{user}/info', '\App\Http\Controllers\UserController@settingStore');


//提交作业页面
Route::get('/user/work', '\App\Http\Controllers\WorkController@index');
//作业提交逻辑
Route::post('/user/work', '\App\Http\Controllers\WorkController@upload');
//作业修改页面
Route::get('/user/{work}/edit','\App\Http\Controllers\WorkController@edit');
//作业更改操作
Route::post('/work/{work}/setting','\App\Http\Controllers\WorkController@editStore');
//作业查询操作
Route::get('/work/select','\App\Http\Controllers\WorkController@select');
//作业查询逻辑
Route::post('/work/doSelect','\App\Http\Controllers\WorkController@doSelect');
//查询结果导出
Route::post('/work/storeSelect','\App\Http\Controllers\WorkController@storeSelect');
