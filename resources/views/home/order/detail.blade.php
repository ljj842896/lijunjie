@extends('home_index')
@section('content')
<div class="per_right" style="margin-left:100px;margin-right:100px">
<div class="relative">
    <h4 style="color:red;" align="center">我的订单</h4>
</div>
    <table cellspacing="0" cellpadding="0" class="w100w t_c  perTabTitn ">
        <tbody>
            <tr>
                <td width="7.5%" align="center"><span class="inline">商品图片</span></td>
                <td width="7.5%" align="center"><span class="inline">商品名称</span></td>
                <td width="7.5%" align="center"><span class="inline">商品颜色</span></td>
                <td width="7.5%" align="center"><span class="inline">商品数量</span></td>
                <td width="7.5%" align="center"><span class="inline">商品金额</span></td>
                <td width="7.5%" align="center"><span class="inline">订单日期</span></td>
                <td width="7.5%" align="center"><span class="inline">订单编号</span></td>
                <td width="7.5%" align="center"><span class="inline">收货人姓名</span></td>
                <td width="7.5%" align="center"><span class="inline">收货人电话</span></td>
                <td width="7.5%" align="center"><span class="inline">收货人地址</span></td>
                <td width="7.5%" align="center"><span class="inline">合计</span></td>
                <td width="7.5%" align="center"><span class="inline">状态</span></td>
            </tr>
        </tbody>
    </table>
    <div class="DZPager mg_b20">
		<table cellspacing="0" cellpadding="0" class="sop_table4 border ">
            <tr>
                <td width="7.5%" class="bd_l" align="center">
                    <a target="_blank" href="/good/{{ $v -> goods_id }}">
                        <img style="width:90px;height:65px" alt="" src="/goods_img/{{ $v -> goods_img }}">
                    </a>
                </td>
                <td width="7.5%" class="bd_l" align="center">
                	<div class="inline mg_l10 vTop mg_t5 lineH20 w50">
                        <a class="col_666" href="/good/{{ $v -> goods_id }}" target="_blank">
                            <span class="col_666">{{ $v -> goods_name}}</span>
                        </a><br>
                        <span class=" col_999">规格:<br></span>
                        <span class=" col_999">{{ $v -> goods_attr_rule }}<br></span>
                        <div class="refund_tips"></div>
                    </div>
                </td>
                <td width="7.5%" class="bd_l" align="center">
                    @if($v -> goods_attr_color == 1 )
                        玉米黄
                    @elseif($v -> goods_attr_color == 2 )
                        象牙白
                    @elseif($v -> goods_attr_color  == 3 )
                        橘红
                    @elseif($v -> goods_attr_color == 4 )
                        火焰红
                    @elseif($v -> goods_attr_color == 5 )
                        胭脂红
                    @elseif($v -> goods_attr_color == 6 )
                        珍珠黑
                    @elseif($v -> goods_attr_color == 7 )
                        天青蓝
                    @endif
                </td>
                <td width="7.5%" class="bd_l" align="center">
                	{{ $v -> order_count }}
                </td>
                <td width="7.5%" class="bd_l" align="center">
                	{{ $v -> shop_price }}.00 ￥
                </td class="bd_l">
                <td width="7.5%" class="bd_l" align="center">
                	{{ $v -> order_time }}
                </td class="bd_l">
                <td width="7.5%" class="bd_l" align="center">
                    {{ $v -> order_sn }}
                </td class="bd_l">
                <td width="7.5%" class="bd_l" align="center">
                    {{ $v -> rece_user_name }}
                </td class="bd_l">
                <td width="7.5%" class="bd_l" align="center">
                    {{ $v -> rece_user_tel }}
                </td class="bd_l">
                <td width="7.5%" class="bd_l" align="center">
                    {{ $v -> rece_user_address }}
                </td class="bd_l">
                <td width="7.5%" class="bd_l" align="center"><strong class="col_f60 f14">{{ $v -> order_amount }}￥</strong>
                    <br> <span>（运费：￥0）</span>
                </td>
                            
                <td width="7.5%" align="center" class="bd_l">
                    <span class="col_f60"> 
                        未付款
                    </span>
                    <br><br>
                </td>

            </tr>

        </table>
    </div>
    <div style="position:absolute;left:50%;top:100%">

    </div>
</div>
@endsection