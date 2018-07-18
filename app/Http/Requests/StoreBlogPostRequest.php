<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreBlogPostRequest extends Request
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

            'user_name' => 'required|regex:/^[a-zA-Z0-9_-]{4,16}$/',
            
            'password' =>'required|confirmed|regex:/^[\w_-]{6,16}$/',

            'email'=> 'email',

            'phone'=> array('regex:/^[1][3,4,5,7,8][0-9]{9}$/'),
             
        ];
    }

    public function messages(){

        return [
              //用户名
             'user_name.required'=>'用户名不能为空',
             'user_name.regex'=>'用户名请设置字母，数字，下划线',
              //密码验证
             'password.regex'=>'请输入6~16位密码',
             //验证密码重复
             'password.confirmed'=>'两次密码不一致！',

             'password.required'=>'密码不能为空！',

             //邮箱验证
             'email.email'=>'请输入正确的邮箱格式',
              //手机验证
             'phone.regex'=>'请输入正确的手机格式', 
        ];
    }
}
