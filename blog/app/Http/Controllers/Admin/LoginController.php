<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use App\Models\Users;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 加载页面
        return view('admin.login.index');

    }

    public function yzm()
    {
        require_once("../resources/code/Code.class.php");

        //实例化
        $code = new \Code();
        // 生成验证码
        $code->make();
    }

    // 处理登录
    public function dologin(Request $request)
    {
        $data = $request->except(['_token']);
        // 获取数据
        $name = $request->input('uname');
        $pass = $request->input('upwd');
        $ucode = $request->input('code');

        // 验证验证码
        require_once("../resources/code/Code.class.php");

        // 实例化
        $code = new \Code();

        // 获取session
        $ocode = $code->get();
        if(strtoupper($ucode)==$ocode){
           //通过用户名获取数据
           $data = Users::where('uname','=',$name)->first();

       
           if($data){
                if(Hash::check($pass,$data['upwd'])){

                  session('guoyuAdminUserInfo',true);
                  // 保存session
                    session(['adminUser'=>$data]);
                
                    return redirect('/admins')->with('success','登录成功');
                } else{
                    return back()->with('error','用户名或密码有误');
                }
           }else{
                return back()->with('error','用户或密码错误');
           }
        }else{
            return back()->with('error','验证码错误');
        }
       
    }

    // 退出登录
    public function logout()
    {
        session()->flush();
        return redirect('/admins')->with('success','退出成功');
    }
}