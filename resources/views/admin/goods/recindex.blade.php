@extends('index')

@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header" style="height:46px">
        <span>
          <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;"> 商品列表</font>
          
          </font>
        </span>
      </div>

    <div class="mws-panel-body no-padding">

          <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            <div id="DataTables_Table_1_length" class="dataTables_length">
              <label>商品分类查询 &nbsp;<select size="1" name="cat_id" aria-controls="DataTables_Table_1">

                <option value="">--请选择分类--</option>
                @foreach($cates as $v)
                <option value="{{$v -> cat_id}}">{{$v -> cat_name}}</option>
                @endforeach
              </select></label>
            </div>
            <div class="dataTables_filter" id="DataTables_Table_1_filter">
              <label>搜索: <input class="input_serach" type="text" name="search" aria-controls="DataTables_Table_1"></label>
            </div>

              
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                            <thead>
                                <tr role="row">

                                 

                                  <th style="width: 6%;">商品ID</th>

                                  <th style="width: 10%;">代表图片</th> 

                                  <th style="width: 20%;">名称</th> 

                                  <th style="width: 15%;">货号</th>

                                  <th style="width: 10%;">所属分类</th> 

                                  <th style="width: 10%;">售价</th> 
                                  
                                  <th style="width: 13%;">操作</th>

                            </thead>
                            
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            
                          @foreach($goods as $v)
                            <tr class="odd">
 

                                    <td>{{$v -> goods_id}}</td>
                                    <td><img style="width: 50px; height: 50px" src="/goods_img/{{$v -> goods_img}}"></td>
                                    <td>{{$v -> goods_name}}</td>
                                    <td>{{$v -> goods_sn}}</td>
                                    <td>{{$v -> goods_cate -> cat_name}}</td>
                                    <td>{{$v -> shop_price}}/元</td>
                                    <td>
                                      <span class="btn-group">
                                          <a href="/Admin/rec/remove/{{$v -> goods_id}}" class="btn btn-small">恢复</a>
                                          <a onclick="return confirm('您确定将宝贝永久删除吗');"  href="/Admin/rec/del/{{$v -> goods_id}}" class="btn btn-small">删除</a>
                                          

                                      </span>
                                  </td>
                          </tr> 
                          @endforeach
                            
            </tbody>

              <div style="position: absolute;left: 400px;top: 430px">
                        {!! $goods -> render()!!}              
              </div>
            </table> 
           
          </div>


<script type="text/javascript">
  //无刷新按名称查询

    $('input:checkbox').first().click(function(){
        // alert('aaaaa');

        $('input:checkbox').each(function(){
            if ($(this).attr('checked')) {

                $(this).attr('checked',false)
            }else{

                $(this).attr('checked',true)
            }
        })
    })
  


  // console.log($('#input_serach'));
  $('input').eq(1).keyup(function(){
        // alert($(this).val());
        var goods_name = $(this).val();

    $.get('/ajax','name='+goods_name,function(msg){
  
            $('.odd').empty();
            for (var i = 0; i < msg.length; i++) {

                            $('tbody').first().append('<tr class="odd"><td>'+msg[i].goods_id+'</td><td>'+'<img style="width: 50px; height: 50px" src="/goods_img/'+msg[i].goods_img+'">'+'</td><td>'+msg[i].goods_name+'</td><td>'+msg[i].goods_sn+'</td><td>'+msg[i].cat_id+'</td><td>'+msg[i].shop_price+'/元</td><td><span class="btn-group"><a href="/Admin/goods/'+msg[i].goods_id+'" class="btn btn-small"><i class="icon-search"></i></a><a href="/Admin/goods/'+msg[i].goods_id+'" class="btn btn-small"><i class="icon-pencil"></i></a></span></td></tr>')
     
           }
   
    },'json')



  })




  //无刷新按分类查询
    $('select').first().change(function(){
 
    var cat_id = $(':selected').val();

    $.get('/ajax','id='+cat_id,function(msg){
  
            $('.odd').empty();
            for (var i = 0; i < msg.length; i++) {

                            $('tbody').first().append('<tr class="odd"><td>'+msg[i].goods_id+'</td><td>'+'<img style="width: 50px; height: 50px" src="/goods_img/'+msg[i].goods_img+'">'+'</td><td>'+msg[i].goods_name+'</td><td>'+msg[i].goods_sn+'</td><td>'+msg[i].cat_id+'</td><td>'+msg[i].shop_price+'/元</td><td><span class="btn-group"><a href="/Admin/goods/'+msg[i].goods_id+'" class="btn btn-small"><i class="icon-search"></i></a><a href="/Admin/goods/'+msg[i].goods_id+'" class="btn btn-small"><i class="icon-pencil"></i></a></span></td></tr>')
     
           }
   
    },'json')
 
    })
</script>

</div>
</div>
@endsection