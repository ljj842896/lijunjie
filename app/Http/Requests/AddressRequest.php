<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddressRequest extends Request
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
            //
            'address' => 'required',
            'phone' => 'required',
            'uname' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'address.required' => '请输入收货地址',
            'phone.required' => '请输入手机号',
            'uname.required' => '请输入收货人姓名',
        ];
    }
}
