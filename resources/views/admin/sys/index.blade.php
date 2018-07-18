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
                        网 站 标 题 ：<input type="text" class="small" name="sys_title" value="{{ isset($config -> sys_title) ? $config -> sys_title :''}}" disabled="disabled"><br><br>
                        网站关键字：<input type="text" class="small" name="sys_keyword" value="{{ isset($config -> sys_keyword) ? $config -> sys_keyword : ''}}" disabled="disabled"><br><br>
                        网 站 备 案 ：<input type="text" class="small" name="sys_file" value="{{ isset($config->sys_file) ? $config->sys_file : ''}}" disabled="disabled"><br><br>
                        网 站 logo ： 
                        @if(isset($config -> sys_log))
                        <img width="100px" height="100px" src="/uploads/sys/{{ $config -> sys_log }}" alt="">
                        @endif

                        <br><br>


                        网 站 开 关：　

                        <input type="radio" name="sys_close" disabled="disabled" value="y" {{ $config -> sys_close == 'y' ? 'checked' : ''}}>


                        <input type="radio" name="sys_close" disabled="disabled" value="n" {{ $config -> sys_close == 'n' ? 'checked' : ''}}>


    
                     
                        <br><br>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="/Admin/config/{{$config -> id}}/edit" class="btn btn-danger">修改配置</a></font></font>
    		</div>
    	</form>
    </div>    	
</div>
@endsection