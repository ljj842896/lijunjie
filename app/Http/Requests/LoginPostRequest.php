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
            'regex:/[^a-zA-Z0-9_^\x00-\x80]+/'
              ],
            
            'password' => array('regex:/^[\w_-]{6,16}$/'),
             
        ];
    }

    public function messages(){

        return [
              //用户名
             'user_name.required'=>'<font color="red">用户名不能为空</font>',
             'user_name.regex'=>'<font color="red">用户名请以汉字~字母~数字命名</font>',
              //密码验证
             'password.regex'=>'<font color="red">4~6位密码必须以字母数字下划线</font>',

        ];
    }
}
