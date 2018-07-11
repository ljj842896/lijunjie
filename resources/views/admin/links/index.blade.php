@extends('index')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header" style="height:46px">
		<span>
			<font style="vertical-align: inherit;">
			<font style="vertical-align: inherit;">链接列表</font>
			
			</font>
		</span>
	</div>
	<a href="/Admin/link/create" class="btn btn-success">添加链接</a>
	<a href="/Admin/link" class="btn btn-info">查看链接</a>
	<div class="mws-panel-body no-padding">
		<table class="mws-table" style="display:white-space norma nowrap;">
		    <thead>
		        <tr>
		            <th>链接名称</th>
		            <th>链接描述</th>
		            <th>链接地址</th>
		            <th>图片　　</th>
		            <th>操作</th>
		        </tr>
		    </thead>
		    <tbody >
		    @foreach ($links as $k => $v)
		        <tr>
		            <td>{{ $v -> link_name }}</td>
		            <td>{{ $v -> link_depict }}</td>
		            <td>{{ $v -> link_url }}</td>
		            <td><img src="/uploads/{{ $v -> link_logo }}" alt="" width="50px" height="50px"></td>
		            <td>
						<a href="/Admin/link/{{ $v -> link_id }}/edit" class="btn btn-warning" style="display:inline;">修改</a>
						<form action="/Admin/link/{{ $v -> link_id }}" method="post" style="display:inline;">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button type="submit" class="btn btn-danger" onclick="return confirm('确定删除吗?')">删除</button> 
						</form>
		            </td>
		        </tr>
		        
		        @endforeach
		    </tbody>
		</table>
		<div style="position:absolute;left:45%;top:450px">
			{!! $links->render() !!}
		</div>
	</div>
</div>
@endsection