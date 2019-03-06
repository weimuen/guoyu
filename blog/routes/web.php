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
























































































































//后台 商品管理
Route::resource('admins/goods','Admin\GoodsController');
//上架
Route::get('admins/goods/{id}/up','Admin\GoodsController@up');
Route::get('admins/goods/{id}/down','Admin\GoodsController@down');
Route::get('admins/orders/{id}/xiangqing','Admin\OrdersController@xiangqing');
Route::get('admins/orders/{id}/fahuo','Admin\OrdersController@fahuo');
//订单管理
Route::resource('admins/orders','Admin\OrdersController');
//友情链接
Route::resource('admins/links','Admin\LinksController');

