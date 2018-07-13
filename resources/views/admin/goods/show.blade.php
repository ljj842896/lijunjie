@extends('index')

@section('content')

 
<!-- {{session('data') -> user_pic}} -->
  
                
 <div class="mws-panel grid_8">
      <div class="mws-panel-header" style="height:46px">
        <span>
          <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;"> 商品详情页</font>
          
          </font>
        </span>
      </div>
    
 </div>
 
  <form class="mws-form" action="/Admin/goods" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="mws-form-inline">
          <div class="mws-form-row">
            <div class="mws-form-item">
                              商品名:　<input type="text" name="goods_name" class="small"  value="{{ $good -> goods_name }}" disabled><br><br>
 
 
                                <label class="mws-form-label"> 商品分类:</label>
                                      <div class="mws-form-item">
                                         {{$good -> goods_cate -> cat_name}}
                                        </div>
                                        <br><br>
                                <label class="mws-form-label"> 商品颜色:</label>
                                      <div class="mws-form-item">
                                        <select  name="goods_attr_color" disabled>
                                            <option value="">--请选择--</option>
                                            
 
                                            <option value="1" {{$good -> goods_attr_color == 1 ? 'selected' : ''}}>玉米黄</option>
                                            <option value="2" {{$good -> goods_attr_color == 2 ? 'selected' : ''}}>象牙白</option>
                                            <option value="3" {{$good -> goods_attr_color == 3 ? 'selected' : ''}}>橘红</option>
                                            <option value="4" {{$good -> goods_attr_color == 4 ? 'selected' : ''}}>火焰红</option>
                                            <option value="5" {{$good -> goods_attr_color == 5 ? 'selected' : ''}}>胭脂红</option>
                                            <option value="6" {{$good -> goods_attr_color == 6 ? 'selected' : ''}}>珍珠黑</option>
                                            <option value="7" {{$good -> goods_attr_color == 7 ? 'selected' : ''}}>天青蓝</option>
 
                                            
                                        </select><br><br>
                                      </div>

                                                                                            
                                         
 
                              尺 &nbsp;&nbsp; 寸： <input name="goods_attr_rule" type="text" class="small" value="{{ $good -> goods_attr_rule }}" disabled><br><br>
                              关键字:　<input name="keywords" type="text" name="keywords" class="small" value="{{ $good -> keywords }}" disabled><br><br>
                              库　存:　<input name="goods_number" type="text" class="small" value="{{ $good -> goods_number }}/件" disabled><br><br>
                              市场价:　<input name="market_price" type="text" class="small" value="{{ $good -> market_price }}/元" disabled><br><br>
                              本店售价:<input name="shop_price" type="text" class="small" value="{{ $good -> shop_price }}/元" disabled><br><br>
                                       
                                        <br><br>
                                        商品描述:   &nbsp;&nbsp;&nbsp;&nbsp;{{$good -> goods_brief}}                                           
 
                                        
 
                                
                              <div class="mws-form-row">
                                            <label class="mws-form-label">是否上架： <span class="required">*</span></label>
                                     <div class="mws-form-item">
                                                <ul class="mws-form-list inline">
 
                                                    <li><input type="radio" id="sn_yes" name="goods_top" class="required" disabled value="y" {{$good -> goods_top == 'y' ? 'checked' : ''}}> <label for="sn_yes">Yes</label></li>
                                                    <li><input type="radio" id="sn_no" disabled name="goods_top" value="n" {{$good -> goods_top == 'n' ? 'checked' : ''}}> <label for="sn_no">No</label></li>
 
                                                </ul>
                                                <label class="error plain" generated="true" for="sn" style="display:none"></label>
                                   </div>
                              </div>

 
            </div>
          </div>
        </div>
       <!--  <div class="mws-button-row">
          <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="提交" class="btn btn-danger"></font></font>
          <input type="reset" value="Reset" class="btn ">
        </div> -->
  </form>
 



 


<div class="mws-panel grid_8">
          <div class="mws-panel-header" style="height:46px">
                <span>
                  <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;"> 商品相册</font>

                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="vertical-align: inherit;"> 添加图片：</font>
                    <form action="/goodimgadd" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <input type="hidden" name="goods_id" value="{{$good -> goods_id}}">
                    <div style="position: absolute;left: 300px;top:8px"> <span style="display:block; overflow: hidden; position: absolute; top: 0; right: 0; cursor: pointer;"> <input name="img_url[]" type="file" multiple style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;"></span></div>
                    <button style="position: absolute;left: 320px;top: 10px" type="submit">添加</button>
                    </form>
                  </font>
                </span>
          </div>           
                    <div class="mws-panel-body">
                          
                    <ul class="thumbnails mws-gallery">

                      @foreach($good -> goods_images as $v)
                         

                          <li>
                              <span class="thumbnail"><img src="/goods_img/{{$v -> img_url}}" alt="{{$v -> img_url}}"></span>
                                    <span class="mws-gallery-overlay">
                                        <a href="/goods_img/{{$v -> img_url}}" rel="prettyPhoto[gallery1]" class="mws-gallery-btn"><i class="icon-search"></i></a>
                                        <a href="/goodimgdel/{{$v -> img_id}}" class="mws-gallery-btn"><i class="icon-trash"></i></a>
                              </span>
                          </li>
                      @endforeach

                    </ul>
                 
                    </div>
        </div>

@endsection