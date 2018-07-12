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
    	<form class="mws-form" action="/Admin/config" method="post" enctype="multipart/form-data"> 
    	{{ csrf_field() }}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<div class="mws-form-item">
                        网站标题：<input type="text" class="small" name="sys_title" value="{{ $config -> sys_title }}" disabled="disabled"><br><br>
                        网站关键字：<input type="text" class="small" name="sys_keyword" value="{{ $config -> sys_keyword }}" disabled="disabled"><br><br>
                        网站备案：<input type="text" class="small" name="sys_file" value="{{ $config -> sys_file }}" disabled="disabled"><br><br>
                        网站logo：<input type="file" name="sys_log" disabled="disabled"><img src="/uploads/sys/{{ $config -> sys_log }}" alt=""><br><br>
                        网站开关：　
                            @if ($config -> sys_close == 'y')
                                开启状态
                            @else
                                关闭状态
                            @endif
                        <br><br>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="/Admin/config/create" class="btn btn-danger">修改配置</a></font></font>
    		</div>
    	</form>
    </div>    	
</div>
@endsection