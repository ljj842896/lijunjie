@extends('index')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header" style="height:46px">
    	<span><i class="icon-table"></i>订单管理 <a href="/Admin/order/hsz" style="float:right;">回收站</a></span>
    </div>

    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>

                <tr>
                    <th>订单号</th>
                    <th>创建时间</th>
                    <th>商品名称</th>
                    <th>商品数量</th>
                    <th>订单状态</th>
                    <th>订单金额</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            @foreach($orders as $k => $v)
                <tr>
                    <td>{{ $v -> order_sn }}</td>
                    <td>{{ $v -> order_time }}</td>
                    <td>{{ $v -> goods_name }}</td>
                    <td>{{ $v -> order_count }}</td>
                    <td>
                        @if($v['order_status'] == 1)
                            未付款
                        @elseif($v['order_status'] == 2)
                            已付款
                        @elseif($v['order_status'] == 3)
                            已发货
                        @elseif($v['order_status'] == 4)
                            已收货
                         @endif
                    </td>
                    <td>{{ $v -> order_amount }}</td>
                    <td>
						<a href="/Admin/order/details/{{ $v -> order_id }}" class="btn btn-info" style="display:inline;">查看</a>&nbsp;
						<a href="/Admin/order/{{ $v -> order_id }}/edit" class="btn btn-warning" style="display:inline;">修改</a>&nbsp; &nbsp; &nbsp; &nbsp;    
						<form action="/Admin/order/{{ $v -> order_id }}" method="post" style="display:inline;">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
							<button type="submit" class="btn btn-danger" onclick="return confirm('删除后无法找回,是否删除?')">删除</button>
						</form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
		<div style="position:absolute;left:45%;top:450px">
			{!! $orders->render() !!}
		</div>
    </div>
</div>
@endsection