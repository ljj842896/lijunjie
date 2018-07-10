@extends('index')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header" style="height:46px">
    	<span>
	    	<font style="vertical-align: inherit;">
	    		<font style="vertical-align: inherit;">修改链接</font>
	    	</font>
    	</span>
    </div>
    <a href="/Admin/link/create" class="btn btn-success">添加链接</a>
    <a href="/Admin/link" class="btn btn-info">查看链接</a>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/Admin/link/{{ $links->link_id }}" method="post" enctype="multipart/form-data"> 
    	{{ csrf_field() }}
        {{ method_field('PUT') }}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<div class="mws-form-item">
                  链接名称：<input type="text" class="small" name="link_name" value="{{ $links -> link_name }}"><br><br>
                  链接描述：<input type="text" class="small" name="link_depict" value="{{ $links -> link_depict }}"><br><br>
                  域名　　：<input type="text" class="small" name="link_url" value="{{ $links -> link_url }}"><br><br>
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