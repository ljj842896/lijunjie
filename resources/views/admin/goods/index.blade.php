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
                                  <th style="width: 8%;">商品ID</th>

                                  <th style="width: 10%;">代表图片</th> 

                                  <th style="width: 20%;">名称</th> 

                                  <th style="width: 20%;">货号</th>

                                  <th style="width: 10%;">所属分类</th> 

                                  <th style="width: 10%;">售价</th> 
                                  
                                  <th>操作</td>

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
                                          <a href="/Admin/cate/32/edit" class="btn btn-small"><i class="icon-search"></i></a>
                                          <a href="/Admin/cate/32/edit" class="btn btn-small"><i class="icon-pencil"></i></a>
                                          <form action="/Admin/cate/32" method="post">
                                            <input type="hidden" name="_token" value="R3b0b0D6rXERKWvTlHQdZ4zXqlwOBM2QEDxSkNUz">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-small"><i class="icon-trash"></i></button>
                                          </form>

                                      </span>
                                  </td>
                          </tr> 
                          @endforeach
                            
            </tbody>

              <div style="position: absolute;left: 400px;top: 430px">
              {!! $goods -> render() !!}
              </div>
          </table> 
       </div>
 </div>
</div>

<script type="text/javascript">
  //无刷新按名称查询

  // console.log($('#input_serach'));
  $('input').eq(1).blur(function(){
        // alert($(this).val());
        var goods_name = $(this).val();

    $.get('/ajax','name='+goods_name,function(msg){
  
            $('.odd').empty();
            for (var i = 0; i < msg.length; i++) {

                            $('tbody').first().append('<tr class="odd"><td>'+msg[i].goods_id+'</td><td>'+'<img style="width: 50px; height: 50px" src="/goods_img/'+msg[i].goods_img+'">'+'</td><td>'+msg[i].goods_name+'</td><td>'+msg[i].goods_sn+'</td><td>'+msg[i].cat_id+'</td><td>'+msg[i].shop_price+'/元</td><td><span class="btn-group"><a href="/Admin/cate/32/edit" class="btn btn-small"><i class="icon-search"></i></a><a href="/Admin/cate/32/edit" class="btn btn-small"><i class="icon-pencil"></i></a><form action="/Admin/cate/32" method="post"><input type="hidden" name="_token" value="R3b0b0D6rXERKWvTlHQdZ4zXqlwOBM2QEDxSkNUz"><input type="hidden" name="_method" value="DELETE"><button type="submit" class="btn btn-small"><i class="icon-trash"></i></button></form></span></td></tr>')
     
           }
   
    },'json')



  })




  //无刷新按分类查询
    $('select').first().change(function(){
 
    var cat_id = $(':selected').val();

    $.get('/ajax','id='+cat_id,function(msg){
  
            $('.odd').empty();
            for (var i = 0; i < msg.length; i++) {

                            $('tbody').first().append('<tr class="odd"><td>'+msg[i].goods_id+'</td><td>'+'<img style="width: 50px; height: 50px" src="/goods_img/'+msg[i].goods_img+'">'+'</td><td>'+msg[i].goods_name+'</td><td>'+msg[i].goods_sn+'</td><td>'+msg[i].cat_id+'</td><td>'+msg[i].shop_price+'/元</td><td><span class="btn-group"><a href="/Admin/cate/32/edit" class="btn btn-small"><i class="icon-search"></i></a><a href="/Admin/cate/32/edit" class="btn btn-small"><i class="icon-pencil"></i></a><form action="/Admin/cate/32" method="post"><input type="hidden" name="_token" value="R3b0b0D6rXERKWvTlHQdZ4zXqlwOBM2QEDxSkNUz"><input type="hidden" name="_method" value="DELETE"><button type="submit" class="btn btn-small"><i class="icon-trash"></i></button></form></span></td></tr>')
     
           }
   
    },'json')
 
    })
</script>

        



@endsection
 