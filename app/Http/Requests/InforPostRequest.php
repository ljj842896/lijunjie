<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InforPostRequest extends Request
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
        return [

            'user_name' => [
            'required',
            'regex:/[^a-zA-Z0-9_^\x00-\x80]+/'
              ],
            
            'email'=> array('regex:/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.[a-zA-Z0-9]{2,6}$/'),

            'user_address'=>'required',
            'phone'=> array('regex:/^[1][3,4,5,7,8][0-9]{9}$/'),
        ];
    }

    public function messages(){

        return [
              //用户名
             'user_name.required'=>'用户名不能为空',
             'user_name.regex'=>'用户名请以汉字~字母~数字命名有效字符命名',
             'user_address.required'=>'请输入有效地址',
             //邮箱验证
             'email.regex'=>'请输入正确的邮箱格式',
              //手机验证
             'phone.regex'=>'请输入正确的手机格式', 
        ];
    }
}
