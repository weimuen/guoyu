<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// 前台商品详情页
class GoodsController extends Controller
{
	// 商品页
	public function index()
	{
		// 加载页面
    	return view('home.goods.index');
	}
   
}
