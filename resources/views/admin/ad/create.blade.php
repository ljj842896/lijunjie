@extends('index')
@section('content')
@if (session('success'))
    <div class="mws-form-message success">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="mws-form-message error">
        {{ session('error') }}
    </div>
@endif
<div class="mws-panel grid_8">
	<div class="mws-panel-header" style="height:46px">
    	<span>
	    	<font style="vertical-align: inherit;">
	    		<font style="vertical-align: inherit;">添加轮播图</font>
	    	</font>
    	</span>
    </div>
    <a href="/Admin/ad/create" class="btn btn-success" style="">添加轮播图</a>
	<a href="/Admin/ad" class="btn btn-info">查看轮播图</a>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/Admin/ad" method="post" enctype="multipart/form-data"> 
    	{{ csrf_field() }}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<div class="mws-form-item">
                        所属分类：<select name="" id="" class="small">
									<option value="">分类1</option>
									<option value="">分类2</option>
                        		</select><br><br>
                        上传图片：<input type="file" name="ad_img"><br><br>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="提交" class="btn btn-success"></font></font>
    			<input type="reset" value="重置" class="btn btn-warning">
    		</div>
    	</form>
    </div>    	
</div>
@endsection