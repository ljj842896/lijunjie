@extends('index')

@section('content')

 

<div class="mws-panel grid_8">
	<div class="mws-panel-header" style="height:46px">
		<span>
			<font style="vertical-align: inherit;">
			<font style="vertical-align: inherit;"> 商品分类列表</font>
			
			</font>
		</span>
	</div>
	 
 	<div class="mws-panel-body no-padding">
	<table class="mws-table">
	    <thead>
	        <tr>
	            <th>ID</th>
	            <th>分类名称</th>
	            <th>PID</th>
	            <th>路径</th>
	            <th>操作</th>
	        </tr>
	    </thead>
	    <tbody>
	    	@foreach($data as $v)
	        <tr>
	            <td>{{$v -> cat_id}}</td>
	            <td>{{$v -> cat_name}}</td>
	            <td>{{$v -> cat_pid}}</td>
	            <td>{{$v -> cat_path}}</td>
	            <td width="18%">
                    <span class="btn-group">
                        <a href="/Admin/cate/{{$v -> cat_id}}/edit" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <form action="/Admin/cate/{{$v -> cat_id}}" method="post">
                        	{{csrf_field()}}
                        	{{method_field('DELETE')}}
                        	<button type="submit" class="btn btn-small"><i class="icon-trash"></i></button>
                        </form>

                    </span>
                </td>
	        </tr>
	        @endforeach
	    </tbody>

	</table>
	 <div style="position: absolute;left: 400px;top: 380px">
	 	
		{!! $data->render() !!}
	 </div>
</div>
</div>
@endsection