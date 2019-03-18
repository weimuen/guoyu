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

// 后台登录
Route::get('admins/login','Admin\LoginController@index');
Route::get('admins/logout','Admin\LoginController@logout');
// 验证码
Route::get('admins/yzm','Admin\LoginController@yzm');
// 后台登录的处理操作
Route::post('admins/dologin','Admin\LoginController@dologin');



// 后台路由组
 // Route::group(['namespace'=>'Admin','prefix'=>'admins','middleware'=>'Login'],function()
Route::group(['namespace'=>'Admin','prefix'=>'admins'],function()

	{	
	// 后台首页的路由
	Route::get('/','IndexController@index');
	// Route::get('users/setdata','UsersController@setdata');
	// 后台 管理员管理
	Route::resource('admins','AdminsController');
	// 后台 用户管理
	Route::resource('users','UsersController');

	Route::get('cates/create/{id}','CatesController@create');
	// 后台 分类管理
	Route::resource('cates','CatesController');
	// 后台 评论管理
	Route::resource('comments','CommentsController');
	// 后台 网站管理
	Route::resource('webset','WebsetController');
	

	// 后台 轮播图管理
	Route::resource('slids','SlidsController');
	// 后台 商品管理
	Route::resource('goods','GoodsController');
	// 订单管理
	Route::resource('orders','OrdersController');
	// 友情链接
	Route::resource('links','LinksController');
	
});



// 前台首页路由
Route::get('homes','Home\IndexController@index');
// 前台登录
Route::get('homes/login','Home\LoginController@index');
Route::post('homes/dologin','Home\LoginController@dologin');
// 前台退出
Route::get('homes/logout','Home\LoginController@logout');
// 前台注册
Route::get('homes/reg','Home\RegController@index');
Route::get('homes/reg/changestatus/{id}/{token}','Home\RegController@changestatus');
// 处理前台注册
Route::post('regCheck','Home\RegController@check');
// 分类页面
Route::get('homes/cates/{id}','Home\CatesController@index');

// 商品详情页
Route::get('homes/goods/{id}','Home\GoodsController@index');
// 个人中心
Route::get('homes/person','Home\PersonController@person');
//收货地址
Route::get('homes/person/personAddress','Home\PersonController@address');
Route::get('homes/person/personInfo','Home\PersonController@personInfo');





























































































































//上架
Route::get('admins/goods/{id}/up','Admin\GoodsController@up');
//下架
Route::get('admins/goods/{id}/down','Admin\GoodsController@down');
//订单详情
Route::get('admins/orders/{id}/xiangqing','Admin\OrdersController@xiangqing');
Route::get('admins/orders/{id}/fahuo','Admin\OrdersController@fahuo');


