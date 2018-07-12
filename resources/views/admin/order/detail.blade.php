@extends('index')
@section('content')
<div class="mws-panel grid_8">
<div class="mws-panel-header" style="height:46px">
	<span><i class="icon-table"></i>订单详情</span>
</div>
	<a href="/Admin/order" class="btn btn-info">返回</a>
	<table class="mws-table">
		<thead>
			<tr>
				<th>订单号</th>
				<th>订单时间</th>
				<th>商品名称</th>
				<th>本店售价</th>
				<th>商品颜色</th>
				<th>商品规格</th>
				<th>商品图片</th>
				<th>商品数量</th>
				<th>订单金额</th>
				<th>订单状态</th>
				<th>收货人电话</th>
				<th>收货人姓名</th>
				<th>收货人地址</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{ $orders -> order_sn }}</td>
				<td>{{ $orders -> order_time }}</td>
				<td>{{ $orders -> goods_name }}</td>
				<td>{{ $orders -> shop_price }}</td>
				<td>
					@if($orders -> goods_attr_color == 1)
						红色
					@elseif($orders -> goods_attr_color == 2)
						橙色
					@elseif($orders -> goods_attr_color == 3)
						黄色
					@elseif($orders -> goods_attr_color == 4)
						绿色
					@elseif($orders -> goods_attr_color == 5)
						天蓝色
					@elseif($orders -> goods_attr_color == 6)
						海蓝色
					@elseif($orders -> goods_attr_color == 7)
						紫色
					@endif
				</td>
				<td>{{ $orders -> goods_attr_rule }}</td>
				<td>
					<img src="/uploads/orders/{{ $orders -> goods_img }}" style="height:50px;width:70px">
				</td>
				<td>{{ $orders -> order_count }}</td>
				<td>{{ $orders -> order_amount }}</td>
				<td>
                        @if($orders['order_status'] == 1)
                            未付款
                        @elseif($orders['order_status'] == 2)
                            已付款
                        @elseif($orders['order_status'] == 3)
                            已发货
                        @elseif($orders['order_status'] == 4)
                            已收货
                         @endif
                </td>
				<td>{{ $orders -> rece_user_tel }}</td>
				<td>{{ $orders -> rece_user_name }}</td>
				<td>{{ $orders -> rece_user_address }}</td>
			</tr>
		</tbody>
	</table>
	<h1>
		大图:
	</h1>
	<img src="/uploads/orders/{{ $orders -> goods_img }}" alt="" style="height:800px;width:600px">
	</div>
@endsection