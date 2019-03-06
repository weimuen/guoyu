<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlidsStoreRequest extends FormRequest
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
         //验证数据
        return [
            'sname' => 'required',
            'surl' => 'required',
            'simg' => 'required',
        ];
    }

   public function messages()
{
    return [
        'sname.required' => '轮播图名称必填',
        'surl.required' => '链接地址',
        'simg.required' => '图片必填',
    ];
}
}
