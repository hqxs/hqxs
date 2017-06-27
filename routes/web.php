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

Route::get('ck','Home\CookbookController@select');
Route::get('ckclass','home\CkclassController@select');

//用户注册
Route::get('register','home\UserController@register');
Route::post('doRegister','home\UserController@doRegister');

//用户登录
Route::get('login', 'Home\UserController@loginForm');
Route::post('doLogin', 'Home\UserController@doLogin');

//后台登录
Route::get('admin/login', 'Admin\AdminController@loginForm');
Route::post('admin/doLogin', 'Admin\AdminController@doLogin');
Route::get('admin/logout', 'Admin\AdminController@logout');




