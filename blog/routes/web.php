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

// 后台首页的路由
Route::get('admins','Admin\IndexController@index');
// 前台首页路由
Route::get('homes','Home\IndexController@index');
 Route::get('admins/users/setdata','Admin\UsersController@setdata');
// 后台 用户管理
Route::resource('admins/users','Admin\UsersController');

Route::get('admins/cates/create/{id}','Admin\CatesController@create');
// 后台 分类管理
Route::resource('admins/cates','Admin\CatesController');
// 后台 作者专区
Route::resource('admins/auths','Admin\AuthsController');























































































































//后台 商品管理
Route::resource('admins/goods','Admin\GoodsController');
//上架
Route::get('admins/goods/up/{id}','Admin\GoodsController@up');
Route::get('admins/goods/down/{id}','Admin\GoodsController@down');
//订单管理
Route::resource('admins/orders','Admin\OrdersController');
