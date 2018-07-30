@extends('index')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header" style="height:46px">
    	<span><i class="icon-table"></i>文章管理</span>
    </div>
    <a href="/article/create" class="btn btn-success">添加文章</a>
    <a href="/Admin/article/delindex" class="btn btn-warning">回收站</a>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>文章标题</th>
                    <th>文章作者</th>
                    <th>发布时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $v)
                <tr>
                
                    <td>{{ $v -> title }}</td>
                    <td>{{ $v -> anthor }}</td>
                    <td>{{ $v -> created_at }}</td>
                    <td>
						<a href="/article/detail/{{ $v -> id }}" class="btn btn-info" style="display:inline;">详情</a>
						<a href="/article/{{ $v -> id }}/edit" class="btn btn-warning" style="display:inline;">修改</a>
                        <form action="/article/{{ $v -> id }}" method="post" style="display:inline;">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" value="删除" class="btn btn-danger">
                        </form>
                    </td>
                
                </tr>
                @endforeach
            </tbody>
        </table>
		<div style="position:absolute;left:45%;top:450px">
			{!! $data -> render() !!}
		</div>
    </div>
</div>
@endsection