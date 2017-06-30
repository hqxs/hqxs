<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function () {
    return view('admin/index');
});
//商品列表
Route::get('admin/goods/list','Admin\GoodsController@list');

Route::get('admin/goods/edit/{id}','Admin\GoodsController@edit');

Route::post('/admin/goods/update/{id}','Admin\GoodsController@update');

Route::get('/admin/goods/image','Admin\GoodsController@image');

Route::post('/admin/goods/upload/{id}','Admin\GoodsController@upload');

Route::get('/admin/goods/imgedit/{id}','Admin\GoodsController@imgedit');

//商品分类
Route::get('/admin/cateadd','Admin\Goods_cateController@cateAdd');

Route::get('/admin/cateSelect','Admin\Goods_cateController@cateSelect');

Route::get('/admin/catetory','Admin\Goods_cateController@catetory');

//Route::post('/admin/goods/update',function () {
//    return '修改数据';
//});
//
//订单信息页面
Route::get('/admin/order','Admin\OrderController@list');
Route::get('/admin/order/delete/{id}','Admin\OrderController@delete');
Route::get('/admin/order/edit/{id}','Admin\OrderController@edit');
Route::get('/admin/order','Admin\OrderController@list');

//地址
Route::get('/admin/addr','Admin\AddrController@list');
Route::get('/admin/addr/edit/{id}','Admin\AddrController@edit');
Route::get('/admin/addredit','Admin\AddrController@addredit');


//商品详情页
Route::get('/admin/goods/detail','Admin\Goods_detailController@list');



//Route::get('admin','Admin\IndexController@index');
//Route::get('admin/goods/list','Admin/GoodsController@list'});

//用户注册
Route::get('register','Home\UserController@registerForm');
Route::post('doRegister','Home\UserController@doRegister');

//用户登录
Route::get('login','Home\UserController@loginForm');
Route::post('doLogin','Home\UserController@doLogin');

//后台登录
Route::get('admin/login','Admin\IndexController@loginForm');
Route::post('admin/doLogin','Admin\IndexController@doLogin');


