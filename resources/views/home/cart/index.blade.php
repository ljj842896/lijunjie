@extends('home_index')
@section('content')
<div class="pd_b40">
    <div class="wrap ie78">
        <div class="lineH24 t_l  pd_t30 pd_b10 bd_b_d5c ">
            <span class="f18 col_666 mg_l10 col_523">购物车</span>
        </div>
        <div class="comment_box">
            <table class="sop_table1" cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <th colspan="2" width="15%" align="left" class="pd_l10"><label class="checkbox checked" name="chkAll"><i class="openIcon inline mg_r10"></i></label><span class="col_523">全选</span></th>
                    <th align="left" class="col_523">商品信息</th>
                    <th width="10%" align="center" class="col_523">单价</th>
                    <th width="10%" align="center" class="col_523">数量</th>
                    <th width="20%" align="center" class="col_523">包装</th>
                    <th width="10%" align="center" class="col_523">小计</th>
                    <th width="5%" align="center" class="col_523">操作</th>
                </tr>
            </tbody></table>
        </div>
        <div class="shoppingBox ">
            <div class="order_title divdel" name="divTitle_130063" supplierid="130063">
                <label class="inline col_666 checkbox checked" name="chk_Supplier" data-value="130063">
                    <i class="openIcon inline mg_r10"></i>
                </label>
                <!--暂时关闭IM入口，勿删-->
                <a>
                    <span class="inline">商家：</span>
                    <span id="J_product_name " class="inline col_666">GM服装</span>
                </a><!--暂时关闭IM入口，临时替换-->
            </div>
            <table class="sop_table1 lastTh tabledel bg_fff" cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <td width="30" align="left" class="pd_l10">
                        <label class="checkbox chk_Calc checked" name="chk_130063" supplierid="130063" data-value="1211915" data-design="1300630049000000060" data-num="1">
                            <i class="openIcon inline"></i>
                        </label>
                    </td>
                    <td width="130" align="left">
						<span class="sop_img inline">
							<a target="_blank" href="product.html#/1300630049000000060-0.html">
                                <img width="100" height="100" src="http://img.biyao.com/files/temp/render_zs/result/1300630049/3a50e43e64e9cba8_130063004900000_0_800_419/img_6_800_120.jpg">
                            </a>
						</span>
                    </td>
                    <td align="left">
                        <a target="_blank" href="product.html#/1300630049000000060-0.html">
                            <span class="col_523">G/M八字领暗门襟短袖衬衫11006</span>
                        </a>
                        <br>
                        <div class="col_999 inline mg_t5">尺码:38<br>签名:无</div>
                        <br>
                        <a id="material_list" designid="1300630049000000060" href="#" class="col_aaa inline mg_t5 material_list">用料清单&gt;&gt;</a>
                        <br>

                    </td>
                    <td width="10%" align="center" class="ff6600">¥369</td>
                    <td width="10%" align="center" class="sizeZero">
                        <i class="sign minus inline"></i>
                        <input name="quantity" type="text" maxlength="3" value="1" shopcarid="1211915" discount="0.0" price="369.0" num="1" packageprice="0.0" modelid="1300630049" supplierid="130063" designid="1300630049000000060" sizename="尺码:38" class="inpCom w40 inline t_c">
                        <i class="sign plus inline"></i>
                        <p class="col_b76 mg_t5"></p>
                    </td>
                    <td width="20%" align="center" class="col_666">
                        <span class="span_package_type">普通包装</span>
                        <span class="span_package_price pack_selects">(免费)</span>
                    </td>
                    <td width="10%" align="center"><strong class="ff6600">¥369</strong></td>
                    <td width="5%" align="center"><a href="javascript:;" class="link_09c a_delete" id="deleteLink" data="1211915"></a></td>
                </tr>
            </tbody></table>
        </div>
        <div class="firmbox pd_t10 bg_fff tj_box">
            <div class="lineH30  pd_l10 pd_r10 clearfix ">
                <div class="f_l">
                    <label class="inline checkbox checked" name="chkAll"><i class="openIcon inline mg_r10"></i></label><span class="inline">全选</span> <a href="javascript:;" class="inline mg_l10 mg_r10 col_link" id="a_BatchDel">删除</a>
                </div>
                <div class="f_r col_666 f14">
                    商品总价：<span class="w80 inline col_f60 pd_r5 f14" id="totalPrice">¥0</span>
                </div>
                <span class="inline f_r mg_r30 col_666 f14">商品总数 <em class="col_f60  f14" id="totalNum">0</em> 件</span>
            </div>
            <div class="lineH30  pd_l10 pd_r10 clearfix ">
                <div class="f_r col_666 f14">

                    包装费：<span class="w80 inline col_f60 pd_r5" id="packagePrice">¥0</span>
                </div>
            </div>
        </div>
        <div class="tallyBox">
            <a href="index.html" class="inline goonShopping ">继续购物</a>
            <a href="javascript:;" class=" tallyBTnPos inline span_submit_calre js_btn">结算</a>
            <p class="t_r">
                合计（不含运费）：<span class="f20 ff6600 inline vTop priceDisplay jsjs">¥ 0</span><span class="inline f14 fb ff6600 vTop mg_l5"></span>
            </p>
        </div>
    </div>
</div>
@endsection