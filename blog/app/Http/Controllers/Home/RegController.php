<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use App\Models\Users;
use Mail;
class RegController extends Controller
{
    
    public function index()
    {
    	// 加载前台注册页面
    	return view('home.reg.index');
    }


    // 处理登录操作
    public function check(Request $request)
    {
    	// 接收数据
    	$data = $request->all();
    	//验证数据
    	$this->validate($request,[
    		'uname' => 'required|regex:/^[a-zA-Z]{1}[\w]{7,15}$/',
            'upwd' => 'required|regex:/^[\w]{6,18}$/',
            'reupwd' => 'required|same:upwd',
            'tel' => 'required|regex:/^1{1}[3-9]{1}[\d]{9}$/',
            'email' => 'required|email',
            ],[
           	'uname.required' => '用户名必填',
            'uname.regex' => '用户名格式不正确',
            'upwd.required' => '密码必填',
            'upwd.regex' => '密码格式不正确',
            'reupwd.required' => '确认密码必填',
            'reupwd.same' => '两次密码不一致',
            'tel.required' => '手机号必填',
            'tel.regex' => '手机号格式不正确',
            'email.required' => '邮箱必填',
            'email.email' => '邮箱格式不正确',
    		]);
   		
   		$users = new Users;
   		$users->uname = $data['uname'];
   		$users->upwd = Hash::make($data['upwd']);
   		$users->tel = $data['tel'];
   		$users->email = $data['email'];
   		$users->sex = $data['sex'];
   		$users->token = str_random(60);
   		// 判断
   		if( $users->save()){
   			/*$title = 'you can you up';
   		// 发送邮件
   	
   		 Mail::send('home.email.index', ['token'=>$users->token,'id' => $users->id,'email' => $users->email], function ($m) use ($users) {
          

            // $m->to($user->email, $user->name)->subject('Your Reminder!');
           $res = $m->to($users->email)->subject('【OTO官方】注册邮件');
           dump($res);
        });*/
   			return redirect('/homes/login')->with('success','注册完成');
   		}else{
   			return back()->with('error','注册失败');
   		}

   	
    }

    // 激活
    public function changestatus($id,$token)
    {
    	// echo '激活-----'.$id.'------'.$token;
    	// 修改用户的status  0=>1
    	$users = Users::find($id);
    	if(!$users){
    		dd('链接失效1111111');
    	}
    	if($users->token != $token){
    		dd('链接失效2222222');

    	}
    	$users->status = 1;
    	$users->token = str_random(60);
    	if($users->save()){
    		dd('激活成功');
    	}else{
    		dd('激活失败');
    	}

    }


}
