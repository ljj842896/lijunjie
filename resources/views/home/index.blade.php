@extends('home_index')


@section('content')

<!-- ============================================================= -->

<!-- 导航栏 -->
<div class="nav retract" style="top: 30px;background-color:rgba(0,0,0,0);">
    <div class="clearfix">
        <a href="/" class="nav-logo"></a>
        <div class="nav-category">
            <p><span>全部分类</span><i></i></p>
            <div>
                <ul class="nav-list">
                    

                    <!-- 一级分类start -->
                     @foreach($cates as $cate)
                     @if(strlen($cate['cat_path']) == 3)
                        <li class="nav-main">
                            <p>
                                
                                <a href="">
                                    {{$cate['cat_name']}}
                                </a>
                                
                            </p>
                            <ul>
                                <!-- 二级分类 -->
                                @foreach($cates as $val)
                                @if($val['cat_pid'] == $cate['cat_id'])
                                    <li class="nav-sub clearfix">
                                        <a href="">
                                            {{$val['cat_name']}}
                                        </a>
                                        <i>&gt;</i>
                                        <ul>
                                            <!-- 三级分类 -->
                                            @foreach($cates as $v)
                                            @if($v['cat_pid'] == $val['cat_id'])
                                                <li class="nav-item">
                                                    <a href="/cates/{{$v['cat_id']}}">
                                                        {{$v['cat_name']}}
                                                    </a>
                                                </li>
                                            @endif
                                            @endforeach
                                            <!-- 三级分类 -->
                                             
                                            
                                        </ul>
                                    </li>
                                @endif
                                @endforeach
                                <!-- 二级分类 -->

                                
                            </ul>
                        </li>
                        @endif
                        @endforeach
                    <!-- 一级分类end -->
                    
                </ul>
            </div>
        </div>
        <div class="nav-search">
            <p><input type="text" id="searchInput1"/><span id="searchBtn"></span></p>
            <ul></ul>
        </div>
    </div>
</div>


<!-- ============================================================= -->



<!-- 导航栏start -->

<div class="nav nav-index">
    <div class="clearfix">
    <div class="pub_logo f_l"><a href="/"><img alt="" src="/h/pc/www/img/logo.png?v=biyao_4637d54"></a></div>
        <div class="nav-search">

            <p>
                <input type="text" id="searchInput2" name="search" placeholder="请输入要搜索的商品"><span id="searchBtn"></span>
            </p>

            <ul>
                <!-- 随机十个三级类 -->
                @foreach($cat_key as $key)
                
                <li><a href="/cates/{{$cate_goods[$key]['cat_id']}}">{{$cate_goods[$key]['cat_name']}}</a></li>

                @endforeach
                <!-- 随机十个三级类 -->
             
            </ul>
        </div>
        <div class="nav-tab">
            <span><i></i>全部分类</span>
            <ul>
                <li><a href="http://www.biyao.com/article/topicList.html">精选专题</a></li>
                <li class="nav-tab-last"><a href="http://www.biyao.com/classify/newProduct.html">每日上新</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- 导航栏end -->




<div class="banner" style="margin-top: 146px ">
    <div class="banner-slider">

            <ul>
                        

                        <!-- 轮播图展示区start -->
                        @foreach($ads as $ad)
                            <li><a target="_blank" href="/cates/{{$ad['cat_id']}}"><img src="/uploads/ad/{{$ad['ad_img']}}" alt="" /></a></li>
                        @endforeach
                        <!-- 轮播图展示区end -->
            </ul>
        


        <span class="slider-left"></span>
        <span class="slider-right"></span>
    </div>


    <!-- 商品分类表start -->
    
    <ul class="nav-list">

            <!-- 一级分类start -->
            @foreach($cates as $cate)
            @if(strlen($cate['cat_path']) == 3)
            <li class="nav-main">
                <p>
                        <a href="">
                            {{$cate['cat_name']}}
                        </a>
                </p>
                <ul>
                    <!-- 二级分类start -->
                        @foreach($cates as $val)
                        @if($val['cat_pid'] == $cate['cat_id'])
                        <li class="nav-sub clearfix">
                            <a href="">
                                {{$val['cat_name']}}
                            </a>
                            <i>&gt;</i>
                            <ul>
                                <!-- 三级分类start -->
                                    @foreach($cates as $v)
                                    @if($v['cat_pid'] == $val['cat_id'])
                                    <li class="nav-item">
                                        <a href="/cates/{{$v['cat_id']}}">
                                            {{$v['cat_name']}}
                                        </a>
                                    </li>
                                    @endif
                                    @endforeach
                                <!-- 三级分类start -->
                            </ul>
                        </li>
                        @endif
                        @endforeach
                    <!-- 二级分类start -->
                </ul>
            </li>
            @endif
            @endforeach
            <!-- 一级分类end -->
            
    </ul>
    <!-- 商品分类表end -->

</div>

<!-- 文章start -->

<!-- 文章end -->




<!-- 模块 -->
<div class="category">

  <!-- 精选 -->
  <div class="category-recommend-1">
                        
                            <div class="category-title">
                                <p>精选</p>
                            </div>
                        
                        
                    <ul>
                            
                                
                                
                            
                                
                                
                            
                                
                                
                            
                                
                                
                            
                                
                                
                            
                                
                                
                            
                        <li style="left: 0px;">
                                    <a target="_blank" href="http://www.biyao.com/classify/saleList.html?type=2">
                                        <i></i>
                                        <img src="http://bfs.biyao.com/group1/M00/46/C2/rBACVFtgIKSAKdIoAACof5GiD5g402.jpg" alt="">
                                    </a>
                                </li><li class="press" style="padding-left: 10px; left: 620px;">
                                    <a target="_blank" href="http://www.biyao.com/classify/supplier.html?supplierId=130164">
                                        <i></i>
                                        <img src="http://bfs.biyao.com/group1/M00/46/C2/rBACVFtgILKAAblJAAByaWFXsmg976.jpg" alt="">
                                    </a>
                                </li><li class="press" style="padding-left: 10px; left: 712px;">
                                    <a target="_blank" href="http://www.biyao.com/classify/supplier.html?supplierId=130066">
                                        <i></i>
                                        <img src="http://bfs.biyao.com/group1/M00/48/71/rBACYVtgIOCALuXeAACqWFjV7gw185.jpg" alt="">
                                    </a>
                                </li><li class="press" style="padding-left: 10px; left: 804px;">
                                    <a target="_blank" href="http://www.biyao.com/classify/supplier.html?supplierId=130132">
                                        <i></i>
                                        <img src="http://bfs.biyao.com/group1/M00/46/C2/rBACVFtgIPWAUplgAAC6IKE8MA0312.jpg" alt="">
                                    </a>
                                </li><li class="press" style="padding-left: 10px; left: 896px;">
                                    <a target="_blank" href="http://www.biyao.com/classify/supplier.html?supplierId=130094">
                                        <i></i>
                                        <img src="http://bfs.biyao.com/group1/M00/48/77/rBACW1tgIRiAWge5AAB9L_6oq9M195.jpg" alt="">
                                    </a>
                                </li><li class="press" style="padding-left: 10px; left: 988px;">
                                    <a target="_blank" href="http://www.biyao.com/classify/supplier.html?supplierId=130065">
                                        <i></i>
                                        <img src="http://bfs.biyao.com/group1/M00/48/77/rBACW1tgIQOAW1NFAACL4z1gYGQ334.jpg" alt="">
                                    </a>
                                </li></ul></div>
  <!-- 精选 -->



<div id="search_index">
<div class="category-recommend-3">
                        
            @foreach($cate_goods as $v)
            <div class="category-title">
                 <p>{{$v['cat_name']}}</p>
                 <a target="_blank" href="/cates/{{$v['cat_id']}}">查看全部 &gt;</a>
            </div>
            <ul class="category-list clearfix">
                                
                <!-- 商品遍历start -->
                @foreach($com_goods as $good)
                @if($good['cat_id'] == $v['cat_id'])
                <li>
                    <a target="_blank" href="/good/{{$good['goods_id']}}">
                        <i><img width="204" height="204" src="/goods_img/{{$good['goods_img']}}" alt=""></i>
                        <dl>
                            <dt style="margin: auto;margin-top: 5px; height: 20px;overflow: hidden;text-overflow: ellipsis;">{{$good['goods_name']}}</dt>
                            <dd>¥{{$good['shop_price']}}</dd>
                        </dl>
                    </a>
                </li>
                @endif
                @endforeach
                <!-- 商品遍历end -->
            </ul>
            @endforeach
                            
                      
                         
                            
</div>





<div class="category-recommend-4">
    <span class="staticpage none"></span>

    


    <div class="pd_b40">

            <div class="pd_t30 wrap auto">
                <div class="banner_tit t_c">
                    <h3> </h3>
                </div>
      
                <div class="banner_con" style="width: 1080px">
                    <div class="" style="height: 280px;float: left;">
                        <div class="" style="width: 40%;height: 100%;float:left;">
                            <div class="text-center" style="margin: auto;margin-top: 40px; width: 60%;height: 30%;overflow: hidden;text-overflow: ellipsis;">
                                <p style="font-size: 28px;"> </p>
                            </div>
                            <div class="text-center" style="margin: auto;margin-top: 5px; width: 50%;height: 20%;overflow: hidden;text-overflow: ellipsis;">

                                <p style="font-size: 20px;"> </p>
                            </div>
                            <div class="text-center" style="margin: auto;margin-top: 10px;  width: 60%;height: 30%">
                                <p style="font-size: 20px;color: red; line-height: 50px;"><font size="40px"> </font><strong> </strong></p>
                            </div>
                        </div>
                        <div class="" style="width: 60%;height: 100%;float: left;">

                        </div>
                        
                      
                    </div>
                    <div class="" style="height: 20px;clear: both;">

                    </div>
                </div>
 
            </div>

</div>


        <!-- 商品分类start -->
       
        <!-- 商品分类end -->
        


    </div>
</div>

 
                <div  class="" style="margin-bottom:-100px; margin: auto;width: 88%;border-bottom: 3px solid #ccc;border-top: 3px solid #ccc;">

                    <!-- 友情链接展示区start -->
                        @foreach($links as $link)
                        <a href="{{$link['link_url']}}"> {{$link['link_name']}} </a> <b> | </b>
                        @endforeach
                    <!-- 友情链接展示区end -->
                </div> 

</div>

 <script type="text/javascript">
        // alert($)
          $('#searchInput1').keyup(function() {
            
            var search = $(this).val()

            $.get('/search',{'search':search},function(msg){
 
                    //清空搜索区
                    $('#search_index').empty()


                    //拼接插入内容
                    var p = '<div class="cateBread"><span></span>根据您搜索的“'+search+'”，为您匹配到以下商品：</div></div><ul class="category-container"><li><ul class="category-list clearfix">'

                    for (var i = 0; i < msg.length; i++) { 


                        p += '<li><a target="_blank" href="/good/'+msg[i].goods_id+'"><i><img src="/goods_img/'+msg[i].goods_img+'"></i><dl><dt>'+msg[i].goods_name+'</dt><dd>¥'+msg[i].shop_price+'</dd></dl></a></li>'
                    
                    }

                        p += '</ul></li></ul>'



                    //插入查询结果
                    $('#search_index').append(p)
                 


              // console.log(msg)
            },'json')            
        })
    </script>


 <script type="text/javascript">
        // alert($)
          $('#searchInput2').keyup(function() {
            
            var search = $(this).val()

            $.get('/search',{'search':search},function(msg){
 
                    //清空搜索区
                    $('#search_index').empty()


                    //拼接插入内容
                    var p = '<div class="cateBread"><span></span>根据您搜索的“'+search+'”，为您匹配到以下商品：</div></div><ul class="category-container"><li><ul class="category-list clearfix">'

                    for (var i = 0; i < msg.length; i++) { 


                        p += '<li><a target="_blank" href="/good/'+msg[i].goods_id+'"><i><img src="/goods_img/'+msg[i].goods_img+'"></i><dl><dt>'+msg[i].goods_name+'</dt><dd>¥'+msg[i].shop_price+'</dd></dl></a></li>'
                    
                    }

                        p += '</ul></li></ul>'



                    //插入查询结果
                    $('#search_index').append(p)
                 


              // console.log(msg)
            },'json')            
        })
    </script>

@endsection

