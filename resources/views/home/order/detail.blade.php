@extends('home.index')
@section('content')
<div class="relative">
                    <h4 class="nTitle">我的订单</h4>
                </div>
                <table cellspacing="0" cellpadding="0" class="w100w t_c  perTabTitn ">
                    <tbody>
	                    <tr>
	                        <td width=""><span class="inline">商品图片</span></td>
	                        <td width=""><span class="inline">商品名称</span></td>
	                        <td width=""><span class="inline">商品颜色</span></td>
	                        <td width=""><span class="inline">商品数量</span></td>
	                        <td width=""><span class="inline">商品金额</span></td>
	                        <td width=""><span class="inline">订单日期</span></td>
	                        <td width=""><span class="inline">订单编号</span></td>
	                        <td width=""><span class="inline">收货人姓名</span></td>
	                        <td width=""><span class="inline">收货人电话</span></td>
	                        <td width=""><span class="inline">收货人地址</span></td>
	                        <td width=""><span class="inline">合计</span></td>
	                        <td width=""><span class="inline">状态</span></td>
	                        <td width=""><span class="inline">操作</span></td>
	                    </tr>
                    </tbody>
                </table>
                <div class="DZPager mg_b20">
					<table cellspacing="0" cellpadding="0" class="sop_table4 border ">
                            <tbody>
                            <tr data-unfacceptance="0" data-supplierid="130091" data-orderid="122007043946180978">
                                <td width="46%" class="bd_r J_popup_parent">
                                    <table width="100%" height="100px" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td style="width:98px;height:60px">
                                                <a target="_blank" href="/products/1300910000000030000-0.html#editor">
                                                    <img style="width:100px;height:100px" alt="" src="http://img.biyao.com/files/temp/render_zs/result/1300910000/272079c5d789a84c_130091000000003_0_800_363/img_6_800_200.jpg">
                                                </a>
                                            </td>
                                            <td style="width:98px;height:60px">
                                            	<div class="inline mg_l10 vTop mg_t5 lineH20 w50">
                                                    <a class="col_666" href="/products/1300910000000030000-0.html#editor" target="_blank">
                                                        <span class="col_666">商品名称</span>
                                                    </a><br>
                                                    <span class=" col_999">规格:<br></span>
                                                    <span class=" col_999">值<br></span>
                                                    <div class="refund_tips"></div>
                                                </div>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                            	sdfasd 
                                            </td>
                                            <td>
                                            	dsaf
                                            </td>
                                            <td>
                                            	asfads
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="18%" align="center" class="bd_l vTop pd_t15 lineH20"><strong class="col_f60 f14">￥</strong>
                                    <br> <span>（运费：￥0）</span>
                                </td>
                                <td width="18%" align="center" class="bd_l vTop pd_t15 lineH20">
                                    <span class="col_f60"> 
                                    	未付款
                                	
                                    </span>
                                    <br>

                                    <a href="/Home/orderdetails" class="col_link ">订单详情</a>
                                    <br>

                                    <span onmouseenter="addwl(this)" onmouseleave="$(this).find('.c_wl_w').fadeOut()" class="relative col_link" orderstatus="1" orderid="122007043946180978" order="">订单跟踪
                                    	<div class="c_wl_w">
                                            <div class="wl_jd"></div>
                                            <div class="c_wl_n">
                                                <div class="col_666">
                                                    <span class="c_wl_t"><b>订单跟踪</b> </span>
                                                </div>
                                                <div class="wl_dl_w_p"></div>
                                                <div class="wl_dl_w col_666"></div>

                                                <div class="c_wl_f none">
                                                    <span class="col_666">以上为最新信息&nbsp;&nbsp;,&nbsp;&nbsp;</span><a href="MyOrderDetail.html" class="col_link ">查看全部&gt;&gt;</a>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </td>
                                <td width="18%" align="center" class="bd_l vTop  pd_l20 pd_r20 pd_t5">
                                    <a href="#" class="publicBtn publicBtn_h25 publicBtn_f60 inline mg_t10">立即付款</a><br>
                                    <a href="javascript:void(0)" class=" cancelOrder  mg_t10 inline" orderid="122007043946180978">取消订单</a>
                                    <br>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                </div>
@endsection