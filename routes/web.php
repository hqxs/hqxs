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
//商城首页
Route::get("/","Home\ShopIndexController@index");
//礼品馆
Route::get("shop/gift","Home\ShopGiftController@index");
Route::get("shop/gift/all","Home\ShopGiftAllController@index");
//生活馆
Route::get("shop/lift","Home\ShopLiftController@index");


Route::post("shop/gift","Home\ShopGiftController@Up");
