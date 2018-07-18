<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginPostRequest extends Request
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
            'regex:/^[a-zA-Z0-9_-]{4,16}$/'
              ],
            
            'password' => 'required|regex:/^[\w_-]{6,16}$/',
             
        ];
    }

    public function messages(){

        return [
              //用户名
             'user_name.required'=>'<font color="red">用户名不能为空</font>',
             'user_name.regex'=>'<font color="red">用户名请设置字母，数字，下划线</font>',
              //密码验证
             'password.regex'=>'<font color="red">6-16位密码必须以字母数字下划线</font>',

             'password.required'=>'请输入密码！',
        ];
    }
}
