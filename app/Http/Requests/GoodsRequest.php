<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GoodsRequest extends Request
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
     * 验证规则
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'cat_id' => 'required',
            'goods_name' => 'required',
            'goods_attr_color' => 'required',
            'goods_attr_rule' => 'required',
            'goods_number' => 'numeric',
            'market_price' => 'required|numeric',
            'shop_price' => 'required|numeric',

            
        ];
    }

    public function messages()
    {
        return [
            //
            'cat_id.required' => '分类必选！',
            'goods_name.required' => '商品名称必填！',
            'goods_number.numeric' => '库存必须是数值！',
            'market_price.numeric' => '市场价必须为数值！',
            'shop_price.numeric' => '本店售价必须为数值！',
            'shop_price.required' => '本店售价必填！',
            'market_price.required' => '本店售价必填！',
            'goods_attr_color.required' => '宝贝颜色必填！',
            'goods_attr_rule.required' => '宝贝尺寸必填！',

        ];
    }
}
