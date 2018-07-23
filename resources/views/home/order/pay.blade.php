@extends('home_index')

@section('content')

<div class="bd_bottom_ea">
  		<div class="wrap pub_logo_box clearfix">
		<div class="pub_logo">
			<a href="http://www.biyao.com/home/index.html"><img src="http://static.biyao.com/pc/www/img/logo.png?v=biyao_e06b35d"></a>
  		</div>
  	</div>
</div>

<div class="wrap relative">
	<div class="shopStepBox">
		<div class="publicStepsbox">
			<div class="car_step_icon car_step3"></div>
			<ul class="clearfix car_step_txt">
				<li>查看购物车</li>
				<li>确认订单信息</li>
				<li class="checked">在线付款</li>
				<li>收货并评价</li>
			</ul>
		</div>
	</div>
</div>

<div class="wrap  ie78 mg_t20 bg_fff mg_b40 online_info_box">
	<div class="shoppingBox  t_c">
		<div class="suc_bg inline"></div>
		<div class="sop_tip inline">
			<p class="f18 col_523 t_l" id="hintID">订单提交成功，马上付款~</p>
			<p class="col_666 t_l f16 lineH24">请在 <span class="col_b76 f16" id="left_time_id">1小时55分39秒</span> 内完成支付</p>
			<p class=" t_l lineH24 mg_t20">
				<span class="f12 inline col_666">应付金额：</span>
				<span class="f12 col_f60 inline fb">79</span>
				<span class="f12 inline  col_666">元</span>
			</p>
			
			<p class="col_666 lineH24 f12 t_l">生产周期：2天</p>
			<p class=" t_l lineH24"><span class="inline f12 col_666">收货人：李俊杰   17744491415 </span><span class="inline f12 col_666 mg_l40">收货地址：北京市县延庆县回龙观</span></p>
			
		</div>
	</div>
	<div class="shoppingBox pd_t10  bd_top_e8 bg_fff">
		<h4 class="order_title_n relative pd_b10">
			<span class="pd_l15 inline f16 col_523">请选择支付方式完成付款</span>
				<!-- <a href="#" class="get_paid_btn inline" onclick="getPaid();">找人代付</a> -->
		</h4>
		<form id="form33" action="/order/pay" method="post" target="_blank"> 
			<input type="hidden" name="order_id_list" value="MTIyMDEzMjMzOTE5NTI5MjMz">

			<input type="hidden" id="pay_type" name="pay_type" value="1">
			<input type="hidden" id="bank_type" name="bank_type" value="DEFAULT">
			<input type="hidden" name="totalprice" value="79">
		</form>
		<div class="payment_list">
			<ul class="paymentTab mg_t15">
				<li class="checked f14">支付平台</li>
			</ul>
			<ul class="clearfix payIconBox pd20">
				<!-- 微信扫码支付平台 -->
				<li>
					<label class="radioLable checked" data-comm="DEFAULT" data-paytype="4" data-value="DEFAULT" data-cartype="{&quot;credit&quot;:false,&quot;debit&quot;:false}" data-credit="{&quot;common&quot;:false,&quot;quick&quot;:false}" data-debit="{&quot;common&quot;:false,&quot;quick&quot;:false}" data-show="false"><i class="radioIcon inline mg_l15"></i><i class="bank_new bk20  inline mg_l15"></i></label>
				</li>
				<!-- 支付宝平台-->
				<li>
					<label class="radioLable checked" data-comm="DEFAULT" data-paytype="3" data-value="DEFAULT" data-cartype="{&quot;credit&quot;:false,&quot;debit&quot;:false}" data-credit="{&quot;common&quot;:false,&quot;quick&quot;:false}" data-debit="{&quot;common&quot;:false,&quot;quick&quot;:false}" data-show="false"><i class="radioIcon inline mg_l15"></i><i class="bank_new bk21  inline mg_l15"></i></label>
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

<script type="text/javascript">
	var i = 7200;
	setInterval(function(){
		i--;
	var p = date('H:i:s') 
	$('#left_time_id').text(i)

	},1000)
</script>

@endsection