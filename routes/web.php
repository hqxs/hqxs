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

//登录
Route::get('login','Home\UserController@login');
Route::post('dologin','Home\UserController@doLogin');
Route::get('outLogin','Home\UserController@outLogin');

//注册
Route::get('register','Home\UserController@register');
Route::post('doregister','Home\UserController@doRegister');
Route::get('/user/phone','Home\PubController@phone');


//广场首页
Route::get('group_index','Home\PubController@index');

//路由分组
Route::get('/cate','Home\PubController@cate');

//话题路由
Route::resource('group','Home\ArtController');

//二级目录路由
Route::get('grouplist/{id}','Home\PubController@list');

//用户单话题页面
Route::get('aloneshow/{aid}','Home\PubController@aloShow');

//增加评论
Route::post('group/comment','Home\PubController@comment');
//二级评论
Route::post('group/comment1','Home\PubController@comment1');

//收藏
Route::post('/group/coll','Home\PubController@Coll');
//取消收藏
Route::get('/groups/colldel','Home\PubController@collDel');

//关注
Route::post('/group/foll','Home\PubController@Foll');
//取消关注
Route::get('/groups/folldel','Home\PubController@follDel');

//个人中心话题页面
Route::get('/groups/usergroup/{id}','Home\PubController@userGroup');

//个人关注显示
Route::get('/groups/friend/{id}','Home\PubController@friend');

//私信存储
Route::post('/groups/email','Home\PubController@email');

//个人中心
Route::get('/groups/user/{id}','Home\PubController@user');

//天气
Route::get('/groups/weather','Home\PubController@weather');



//======================================================================================================
//后台
Route::get('/admin/login','Admin\AdminController@loginForm');
Route::post('/admin/dologin','Admin\AdminController@doLogin');













