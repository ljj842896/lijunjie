@extends('index')
@section('content')
	<a href="/article" class="btn btn-success">返回</a>
    <div style="position: absolute;top:30%;left:30%;">
    <h1>作者: {{ $data['anthor'] }}</h1><br>
    <h3>标题: {{ $data['title'] }}</h3><br>
    <h5>发布时间: {{ $data['created_at'] }}</h5><br>
    <h3>文章内容:{!! $data['content'] !!}</h3>
    </div>
@endsection