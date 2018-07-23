<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	@if(!empty($data))
	@foreach($data as $v)
	<h1>{{$v['goods_id']}}</h1>
	<h1>{{$v['shop_price']}}</h1>
	<h1>{{$v['cart_count']}}</h1>
	<h1>{{$v['goods_name']}}</h1>
	<h1>{{$v['goods_attr_rule']}}</h1>
	<h1>{{$v['goods_attr_color']}}</h1>
	<h1>{{$v['goods_img']}}</h1>
	@endforeach
	@else
	<h1 class="order_good_rule"></h1>
	<h1 class="order_good_id"></h1>
	<h1 class="order_good_number"></h1>
	@endif
</body>
</html>

 

<!-- 继承页面后不用再引入，用来获取cookie值 -->
<script type="text/javascript"	src="/h/js/jquery-1.8.3.js"></script>
<script type="text/javascript"	src="/h/js/jquery.cookie.js"></script>
<script type="text/javascript">
	if ($.cookie('order_good_color')) {
		$('.order_good_color').text($.cookie('order_good_color'))
		$('.order_good_rule').text($.cookie('order_good_rule'))
		$('.order_good_number').text($.cookie('order_good_number'))
		$('.order_good_id').text($.cookie('order_good_id'))
	}


    console.log($.cookie('order_good_color'))//商品颜色
    console.log($.cookie('order_good_rule'))//商品尺寸
    console.log($.cookie('order_good_number'))//商品数量
    console.log($.cookie('order_good_id'))//商品id
    console.log($.cookie('order_good_price'))//商品价格
    console.log($.cookie('order_good_name'))//商品名称
</script>