@extends('index')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header" style="height:46px">
    	<span><i class="icon-table"></i>回收站</span>
    </div>
    <a href="/article" class="btn btn-success">管理文章</a>
    <a href="/article/hsz" class="btn btn-warning">回收站</a>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>文章标题</th>
                    <th>文章作者</th>
                    <th>删除时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $v)
                <tr>
                
                    <td>{{ $v -> title }}</td>
                    <td>{{ $v -> anthor }}</td>
                    <td>{{ $v -> deleted_at }}</td>
                    <td>
						<a href="/Admin/article/huifu/{{ $v -> id }}" class="btn btn-info" style="display:inline;">恢复</a>
						<a href="/Admin/article/cdsc/{{ $v -> id }}" class="btn btn-warning" style="display:inline;">删除</a>
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