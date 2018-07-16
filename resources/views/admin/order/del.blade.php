@extends('index')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header" style="height:46px">
    	<span><i class="icon-table"></i>订单管理
        <a href="/Admin/order" style="float:right;">订单管理</a>
        </span>
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
            @foreach($data as $k => $v)
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
                        <a href="/Admin/order/reset/{{ $v['order_id'] }}" class="btn btn-info" style="display:inline;">恢复</a>
						<a href="/Admin/order/cdsc/{{ $v['order_id'] }}" class="btn btn-danger" style="display:inline;">彻底删除</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
		<div style="position:absolute;left:45%;top:450px">
		</div>
    </div>
</div>
@endsection