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
//登录
Route::get('login','Home\UserController@index');
Route::get('login/user','Home\UserController@login');

//路由分组
Route::get('/cate','Home\AjaxController@cate');

//话题路由
Route::resource('group','Home\ArtController');



