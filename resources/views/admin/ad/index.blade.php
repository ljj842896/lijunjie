@extends('index')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header" style="height:46px">
		<span>
			<font style="vertical-align: inherit;">
			<font style="vertical-align: inherit;">轮播图列表</font>
			
			</font>
		</span>
	</div>
	<a href="/Admin/ad/create" class="btn btn-success">添加轮播图</a>
	<a href="/Admin/ad" class="btn btn-info">查看轮播图</a>
	<div class="mws-panel-body no-padding">
		<table class="mws-table" style="display:white-space norma nowrap;">
		    <thead>
		        <tr>
		            <th>所属分类</th>
		            <th>轮播图片</th>
		            <th>操作</th>
		        </tr>
		    </thead>
		    <tbody >
		    @foreach($absdata as $k => $v)
		        <tr>
		            <td>{{ $v -> ad_cates -> cat_name }}</td>
		            <td><img src="/uploads/ad/{{ $v -> ad_img }}" alt="" width="50px" height="50px"></td>
		            <td >
						<a href="/Admin/ad/{{ $v -> ad_id }}/edit" class="btn btn-warning" style="display:inline;">修改</a>
						<form action="/Admin/ad/{{ $v -> ad_id }}" method="post" style="display:inline;">
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
		</div>
	</div>
</div>
@endsection