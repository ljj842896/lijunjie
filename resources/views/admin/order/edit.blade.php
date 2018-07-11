@extends('index')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header" style="height:46px">
    	<span>
	    	<font style="vertical-align: inherit;">
	    		<font style="vertical-align: inherit;">修改订单</font>
	    	</font>
    	</span>
    </div>
	<a href="/Admin/order" class="btn btn-info">返回</a>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/Admin/order/{{ $orders -> order_id }}" method="post" enctype="multipart/form-data"> 
    	{{ csrf_field() }}
    	{{ method_field('PUT') }}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<div class="mws-form-item">
                        商品颜色　：	<select name="goods_attr_color" id="" class="small">
                        				<option value="">--请选择颜色--</option>
										<option value="1">红色</option>
										<option value="2">橙色</option>
										<option value="3">黄色</option>
										<option value="4">绿色</option>
										<option value="5">天蓝</option>
										<option value="6">海蓝</option>
										<option value="7">紫色</option>
                        			</select><br><br>
                        商品规格　： <input type="text" class="small" name="goods_attr_rule" value="{{ $orders -> goods_attr_rule }}"><br><br>
                        商品数量　： <input type="text" class="small" name="order_count" value="{{ $orders -> order_count }}"><br><br>
                        商品单价　： <input type="text" name="shop_price" value="{{ $orders -> shop_price }}" style="text-align:center;width:60px">　元<br><br>
                        商品总价　： <input type="text" name="order_amount" value="{{ $orders -> order_amount }}" style="text-align:center;width:60px">　元<br><br>
                        收货人姓名： <input type="text" class="small" name="rece_user_name" value="{{ $orders -> rece_user_name }}"><br><br>
                        收货人电话： <input type="text" class="small" name="rece_user_tel" value="{{ $orders -> rece_user_tel }}"><br><br>
                        收货人地址： <input type="text" class="small" name="rece_user_address" value="{{ $orders -> rece_user_address }}"><br><br>
                        订单状态　： <select name="order_status" class="small">
                                        <option value="">--请选择订单状态--</option>
                                        <option value="1">未付款</option>
                                        <option value="2">已付款</option>
                                        <option value="3">已发货</option>
                                        <option value="4">已收货</option>
                                    </select>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="修改" class="btn btn-success"></font></font>
    			<input type="reset" value="重置" class="btn btn-warning">
    		</div>
    	</form>
    </div>    	
</div>
@endsection