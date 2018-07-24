@extends('home_index')
@section('content')
<div class="wrap bg_fff h580">
	<div class="weixin_pay auto">
		<input type="hidden" id="order_id" value="122013242437046561,122013242437046644,122013242437046674">
		<input type="hidden" id="orderpaycode" value="1701324243704668405">
		<p class="f16 col_523 lineH20">请您及时付款，以便订单尽快处理！</p>
		<p class="f12 col_b76 lineH28">请您在提交订单后120分钟内完成支付，否则订单会自动取消。</p>
		<p class="col_666 lineH28 overflow"><span class="blocks f_l">订单编号：</span><span class="blocks f_l w260" style=" word-wrap: break-word; word-break: normal;">122013242437046561,122013242437046644,122013242437046674</span></p>
		<p class="col_666 lineH28">应付金额：<span class="f18 col_f90">1665</span>元 </p>
		<p class="mg_t10 weix_evm"><img src="" width="133" height="133" alt=""></p>
		<p class="mg_t15 sizeZero">
			<i class="inline weix_tit_bg"></i>
			<span class="inline col_724 f12 lineH20">请使用微信扫一扫<br>
扫描二维码支付</span>
		</p>
	</div>
	
</div>
@endsection