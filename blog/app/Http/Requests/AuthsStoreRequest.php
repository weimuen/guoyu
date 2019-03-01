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
         ];
    }

    public function messages()
    {
        return [
          'aname.required'=>'姓名必填',
        'aname.regex'=>'姓名格式不正确',
        'content.required'=>'介绍必填', 
        'upic.required'=>'头像必填',
        'upic.file'=>'头像格式不正确', 
        ];
    }
}
