<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>订单页</h1>
</body>
</html>







<!-- 继承页面后不用再引入，用来获取cookie值 -->
<script type="text/javascript"	src="/h/js/jquery-1.8.3.js"></script>
<script type="text/javascript"	src="/h/js/jquery.cookie.js"></script>
<script type="text/javascript">

    console.log($.cookie('order_good_color'))//商品颜色
    console.log($.cookie('order_good_rule'))//商品尺寸
    console.log($.cookie('order_good_number'))//商品数量
    console.log($.cookie('order_good_id'))//商品id
    console.log($.cookie('order_good_price'))//商品价格
    console.log($.cookie('order_good_name'))//商品名称
</script>