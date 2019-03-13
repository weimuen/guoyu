<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatesController extends Controller
{
    // 前台分类页控制器
    public function index()
    {
    	
    	// 加载页面
    	return view('home.cates.index');
    }
}
