@extends('home_index')
@section('content')
<div style="height:1000px;background-color:#FFFFFF;background:url(/h/timg.jpg);">
	<div style="height:1000px;text-align:center;">
		<h1 style="color:purple;">{{ $articles_data['title'] }}</h1>
		<h6 style="margin-left:30%;color:hotpink;">by----{{ $articles_data['anthor'] }}</h6>
		<span>{!! $articles_data['content'] !!}</span>
	</div>
</div>
@endsection