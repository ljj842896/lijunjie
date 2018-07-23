@extends('home_index')
@section('content')
<div class="wrap  ie78 mg_t20 bg_fff mg_b40 online_info_box">
	<div class="shoppingBox  t_c">
		<div class="suc_bg inline"></div>
		<div class="sop_tip inline">
			<p class="f18 col_523 t_l" id="hintID">订单提交成功，马上付款~</p>
			<p class="col_666 t_l f16 lineH24">请在 <span class="col_b76 f16" id="left_time_id">1小时59分19秒</span> 内完成支付</p>
			<p class=" t_l lineH24 mg_t20">
				<span class="f12 inline col_666">应付金额：</span>
				<span class="f12 col_f60 inline fb">169</span>
				<span class="f12 inline  col_666">元</span>
			</p>
			
			<p class="col_666 lineH24 f12 t_l">生产周期：7天</p>
			<p class=" t_l lineH24"><span class="inline f12 col_666">收货人：小嗨   15115624521 </span><span class="inline f12 col_666 mg_l40">收货地址：北京市县密云县六里屯</span></p>
			
		</div>
	</div>
	<div class="shoppingBox pd_t10  bd_top_e8 bg_fff">
		<h4 class="order_title_n relative pd_b10">
			<span class="pd_l15 inline f16 col_523">请选择支付方式完成付款</span>
				<!-- <a href="#" class="get_paid_btn inline" onclick="getPaid();">找人代付</a> -->
		</h4>
		<form id="form33" action="/order/pay" method="post" target="_blank"> 
			<input type="hidden" name="order_id_list" value="MTIyMDEzMjM3NjM2OTAxMDgx">

			<input type="hidden" id="pay_type" name="pay_type" value="1">
			<input type="hidden" id="bank_type" name="bank_type" value="DEFAULT">
			<input type="hidden" name="totalprice" value="169">
		</form>
		<div class="payment_list">
			<ul class="paymentTab mg_t15">
				<li class="checked f14">支付平台</li>
			</ul>
			<ul class="clearfix payIconBox pd20">
				<!-- 微信扫码支付平台 -->
				<li>
					<label class="radioLable" data-comm="DEFAULT" data-paytype="4" data-value="DEFAULT" data-cartype="{&quot;credit&quot;:false,&quot;debit&quot;:false}" data-credit="{&quot;common&quot;:false,&quot;quick&quot;:false}" data-debit="{&quot;common&quot;:false,&quot;quick&quot;:false}" data-show="false"><i class="radioIcon inline mg_l15"></i><i class="bank_new bk20  inline mg_l15"></i></label>
				</li>
				<!-- 支付宝平台-->
				<li>
					<label class="radioLable checked" data-comm="DEFAULT" data-paytype="3" data-value="DEFAULT" data-cartype="{&quot;credit&quot;:false,&quot;debit&quot;:false}" data-credit="{&quot;common&quot;:false,&quot;quick&quot;:false}" data-debit="{&quot;common&quot;:false,&quot;quick&quot;:false}" data-show="false"><i class="radioIcon inline mg_l15"></i><i class="bank_new bk21  inline mg_l15"></i></label>
				</li>
				
			</ul>
		</div>
		<div class="payment_list">
			<ul class="paymentTab mg_t20">
				<li class="checked f14">找人代付 <span class="col_999 f12">（生成付款链接，发送给好友，让TA帮您付款）</span></li>
			</ul>
			<ul class="clearfix payIconBox pd20">
              <li>
				<label class="radioLable" id="othersPayLabel"><i class="radioIcon inline mg_l15" onclick="othersPayCheck();"></i><span class="mg_l15 col_666 f14 inline h40 w110 lineH40">找TA帮我买单</span></label>		
               </li>
			</ul>
		</div>

		<div class="t_c pd20  bd_top_e8 relative">
<!-- 			<span class="inline get_paid_link"><span class="inline col_666 f14">您还可以：</span><a href="###" onclick="getPaid();" class="get_paid_btn col_724 inline f14">找人代付</a></span> -->
			<a href="#" id="pay" class="confirm_120 inline col_fff f18">确认支付</a>
		</div>
	</div>
	<div id="paymaodian"></div>
</div>
@endsection