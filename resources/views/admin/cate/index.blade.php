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

 
     <div style="margin-left: 3px;width: 99.5%;height: 32px;background-color: #ccc;">
          <div id="DataTables_Table_1_length" class="dataTables_length" style="float: left;">
			 <label>商品分类查询 &nbsp;<select size="1" name="cat_id" aria-controls="DataTables_Table_1">

			 <option value="0">--请选择分类--</option>
					 @foreach($cates as $v)
					 <option value="{{$v -> cat_id}}">{{$v -> cat_name}}</option>
					  @endforeach
					 </select></label>
					  </div>
					 <div style="float: right;"> 
					 <label>搜索: <input class="input_serach" type="text" name="search" aria-controls="DataTables_Table_1"></label>
					 </div>
             </div>
 



	 
 	<div class="mws-panel-body no-padding">
		<table class="mws-table" >
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
	 <div style="position: absolute;left: 200px;top: 380px">
	 	
		{!! $data->render() !!}
	 </div>
	</div>
</div>



<script type="text/javascript">
	//无刷新按分类查询
    $('select').eq(0).change(function(){
 
    var cat_id = $(':selected').val();
    // alert(cat_id);
    if (cat_id == 0) {
      window.location = '/Admin/cate';
      return false;
    }

    $.get('/catajax','id='+cat_id,function(msg){
  			console.log(msg[0].cat_name);
            $('tbody').first().empty();
            for (var i = 0; i < msg.length; i++) {

                            $('tbody').first().append('<tr><td>'+msg[i].cat_id+'</td><td>'+msg[i].cat_name+'</td><td>'+msg[i].cat_pid+'</td><td>'+msg[i].cat_path+'</td><td width="18%"><span class="btn-group"><a href="/Admin/cate/'+msg[i].cat_id+'/edit" class="btn btn-small"><i class="icon-pencil"></i></a><form action="/Admin/cate/'+msg[i].cat_id+'" method="post">{{csrf_field()}}{{method_field('DELETE')}}<button type="submit" class="btn btn-small"><i class="icon-trash"></i></button></form></span></td></tr>')
     
           }
   
    },'json')
 
    })






$('input').eq(1).keyup(function(){
        // alert($(this).val());
        var cat_name = $(this).val();

        if (cat_name == '') {
	      window.location = '/Admin/cate';
	      return false;
	    }

    $.get('/catajax','name='+cat_name,function(msg){
  
           $('tbody').first().empty();
            for (var i = 0; i < msg.length; i++) {

                            $('tbody').first().append('<tr><td>'+msg[i].cat_id+'</td><td>'+msg[i].cat_name+'</td><td>'+msg[i].cat_pid+'</td><td>'+msg[i].cat_path+'</td><td width="18%"><span class="btn-group"><a href="/Admin/cate/'+msg[i].cat_id+'/edit" class="btn btn-small"><i class="icon-pencil"></i></a><form action="/Admin/cate/'+msg[i].cat_id+'" method="post">{{csrf_field()}}{{method_field('DELETE')}}<button type="submit" class="btn btn-small"><i class="icon-trash"></i></button></form></span></td></tr>')
     
           }
   
    },'json')



  })
</script>
@endsection