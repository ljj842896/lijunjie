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
	    		<font style="vertical-align: inherit;">添加链接</font>
	    	</font>
    	</span>
    </div>
    <a href="/Admin/link/create" class="btn btn-success" style="">添加链接</a>
	<a href="/Admin/link" class="btn btn-info">查看链接</a>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/Admin/link" method="post" enctype="multipart/form-data"> 
    	{{ csrf_field() }}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<div class="mws-form-item">
                        链接名称：<input type="text" class="small" name="link_name" value=""><br><br>
                        链接描述：<input type="text" class="small" name="link_depict" value=""><br><br>
                        域名　　：<input type="text" class="small" name="link_url" value=""><br><br>
                        上传图片：<input type="file" name="link_logo"><br><br>
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