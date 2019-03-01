<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * 存放验证规则
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //验证信息
        return [
            'uname' => 'required|regex:/^[a-zA-Z]{1}[\w]{7,15}$/',
            'upwd' => 'required|regex:/^[\w]{6,18}$/',
            'reupwd' => 'required|same:upwd',
            'tel' => 'required|regex:/^1{1}[3-9]{1}[\d]{9}$/',
            'email' => 'required|email',
            'description' => 'required',
            'auth' => 'required',
        ];
    }
    //自定义错误信息
    public function messages()
    {
        return [
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
            'description.required' => '介绍必填',
            'auth.required' => '权限必填',
        ];
    }
}
