<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthsStoreRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
         // 验证表单数据
        return [
        'aname' => 'required',
        'content' => 'required',
        'apic' => 'required|file',
        'wname' => 'required',
        'price' => 'required',
        'wpic' => 'required|file',
         ];
    }

    public function messages()
    {
        return [
          'aname.required'=>'姓名必填',
        'content.required'=>'介绍必填', 
        'upic.required'=>'头像必填',
        'upic.file'=>'作品格式不正确',
        'wname.required'=>'作品名称必填',
        'wpic.required'=>'作品图片必填',
        'wpic.file'=>'作品格式不正确',
        'price.required'=>'作品价格必填',
         
        ];
    }
}
