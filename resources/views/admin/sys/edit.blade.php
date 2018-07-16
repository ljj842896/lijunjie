@extends('index')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header" style="height:46px">
    	<span>
	    	<font style="vertical-align: inherit;">
	    		<font style="vertical-align: inherit;">添加链接</font>
	    	</font>
    	</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/Admin/config/{{$data -> id}}" method="post" enctype="multipart/form-data"> 
    	{{ csrf_field() }}
        {{ method_field('PUT')}}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<div class="mws-form-item">
                        网站标题：<input type="text" class="small" name="sys_title" value="{{$data -> sys_title}}"><br><br>
                        网站关键字：<input type="text" class="small" name="sys_keyword" value="{{$data -> sys_keyword}}"><br><br>
                        网站备案：<input type="text" class="small" name="sys_file" value="{{$data -> sys_file}}"><br><br>

                        网站logo：<img width="50px" height="50px" src="/uploads/sys/{{$data -> sys_log}}"><input type="file" name="sys_log"><br><br>

                        网站开关：　开启：<input type="radio" name="sys_close" value="y" {{$data -> sys_close == 'y' ? 'checked' : ''}}>　　关闭：<input type="radio" name="sys_close" value="n" {{$data -> sys_close == 'n' ? 'checked' : ''}}><br><br>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="确定修改" class="btn btn-danger"></font></font>
    		</div>
    	</form>
    </div>    	
</div>
@endsection