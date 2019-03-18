<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Hash;

class LoginController extends Controller
{
    public function index()
    {	
    	// 获取上一个页面
    	// session(['prevPage'=>$_SERVER['HTTP_REFERER']]);
    	// 加载前台登录页面
    	return view('home.login.index');
    }

    public function dologin(Request $request)
    {
			// 获取数据
			$name = $request->post('uname');
			// dd($name);
			$pass = $request->post('upwd');
			// 通过用户名获取用户信息
			$user = Users::where('uname','=',$name)->first();
			// 判断用户是否存在
			if($user){
				if (Hash::check($pass,$user['upwd'])){
					session('homeFlag',true);
					
					// 保存session
					session(['homeUser'=>$user]);
					// return redirect(session('prevPage'));
					return redirect('/homes')->with('success','登录成功');
				} else{
					return back()->with('error','用户名或密码有误');
				}
				
			}else{
				return back()->with('error','用户名或密码有误');
			}


    }

    // 退出
    public function logout()
    {
    	session()->flush();
    	return redirect('/homes')->with('success','退出');
    }

}
