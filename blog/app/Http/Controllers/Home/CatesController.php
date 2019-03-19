<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CatesController extends Controller
{
    // 前台分类页控制器
    public function index()
    {
    	//查询所有的顶级分类
    	$cates = DB::table('cates')->where('pid',0)->get();

    	//查询当前分类
    	$type = DB::table('cates')->where('id',$id)->first();

    	$arr=explode(',', $type->path);

    	$size=count($arr)-1;

    	switch($size){
    		case '1':
    			# code...
    			$erClass=\DB::table("types")->where([["path","like","%,$id,%"],['pid','!=',$id]])->get();

    			$newArr=array();
    			foreach ($erClass as $key => $value) {
    				# code...
    				$newArr[]=$value->id;
    			}

    			$goods=\DB::table("goods")->whereIn("tid",$newArr)->get();
    			break;
    		case '2':
    			# code...
    			$goodsClass=\DB::table("cates")->where("pid",$id)->get();

    			$newArr=array();
    			foreach ($goodsClass as $key => $value) {
    				# code...
    				$newArr[]=$value->id;
    			}

    			$goods=\DB::table("goods")->whereIn("tid",$newArr)->get();
    			break;
    		case '3':
    			$goods=\DB::table("goods")->where("tid",$id)->get();
    			break;
    	}


    	// 顶级分类

    	$ding=$arr[1]?$arr[1]:$id;

    	// 加载页面

    	// 格式化数据

    	$data=array(
    		"cates"=>$cates,
    		"ding"=>$ding,
    		"goods"=>$goods,

    		);

    	
    	
    	
    	// 加载页面
    	return view('home.cates.index')->with($data);
    }
}
