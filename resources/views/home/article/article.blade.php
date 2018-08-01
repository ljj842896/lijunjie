@extends('home_index')
@section('content')
       
       		  <h2  align="center">{!!$article['article']!!}</h2>
       		  <div style="text-align:center;width:1000px; position: absolute;left: 130px">
       		    {!!$article['content']!!}
       		 </divs>

@endsection