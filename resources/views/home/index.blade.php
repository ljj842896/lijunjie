@extends('home_index')


@section('content')


<!-- 导航栏start -->

<div class="nav nav-index">
    <div class="clearfix">
        <a href="http://www.biyao.com/home/index.html" class="nav-logo"></a>
      
        <div class="nav-search">
            <p>
                <input type="text" id="searchInput" name="search" placeholder="请输入要搜索的商品"><span id="searchBtn"></span>
            </p>
            <ul>
                <!-- 随机十个三级类 -->
                @foreach($cat_key as $key)
                 
                <li><a href="/cates/{{$cate[$key]['cat_id']}}">{{$cate[$key]['cat_name']}}</a></li>

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
<div class="article">
        <a target="_blank" href="http://news.biyao.com/pc/article/675fccdc275c47d68622d184f49c772e.html">
            <img src="http://bfs.biyao.com/group1/M00/25/01/rBACW1owSW6ABrNqAAAWQIF__tQ201.png" alt="">
            <span>国际大牌成本仅为售价1%！电视台纪录片被刷屏！</span>
            <i>2018-07-18</i>
            <i>必要</i>
        </a>
</div>
<!-- 文章end -->




<!-- 模块 -->
<div class="category">

    
<div class="category-recommend-1">
                        
                            <div class="category-title">
                                <p>精选</p>
                            </div>
                       
                    <ul>
        
                                <li class="" style="left: 0px;">
                                    <a target="_blank" href="http://www.biyao.com/classify/saleList.html?type=1">
                                        <i></i>
                                        <img src="http://bfs.biyao.com/group1/M00/44/4D/rBACYVtNtnuAOdJ1AAC_fX2iOIg828.jpg" alt="">
                                    </a>
                                </li>
                                <li class="press" style="padding-left: 10px; left: 620px;">
                                    <a target="_blank" href="http://www.biyao.com/classify/supplier.html?supplierId=130172">
                                        <i></i>
                                        <img src="http://bfs.biyao.com/group1/M00/44/54/rBACW1tNtr2AJ5JcAACHtH0hoTo934.jpg" alt="">
                                    </a>
                                </li>
                                <li class="press" style="padding-left: 10px; left: 712px;">
                                    <a target="_blank" href="http://www.biyao.com/classify/supplier.html?supplierId=130163">
                                        <i></i>
                                        <img src="http://bfs.biyao.com/group1/M00/44/4D/rBACYVtNtsqABC9tAADbfQpOm7s802.jpg" alt="">
                                    </a>
                                </li>
                                <li class="press" style="padding-left: 10px; left: 804px;">
                                    <a target="_blank" href="http://www.biyao.com/classify/supplier.html?supplierId=130201">
                                        <i></i>
                                        <img src="http://bfs.biyao.com/group1/M00/44/54/rBACW1tNttmAQnwwAAEqPOymsFw540.jpg" alt="">
                                    </a>
                                </li>
                                <li class="press" style="padding-left: 10px; left: 896px;">
                                    <a target="_blank" href="http://www.biyao.com/classify/supplier.html?supplierId=130094">
                                        <i></i>
                                        <img src="http://bfs.biyao.com/group1/M00/44/54/rBACW1tNtvOAZKO4AAB9L_6oq9M719.jpg" alt="">
                                    </a>
                                </li>
                                <li class="press" style="padding-left: 10px; left: 988px;">
                                    <a target="_blank" href="http://www.biyao.com/classify/supplier.html?supplierId=130051">
                                        <i></i>
                                        <img src="http://bfs.biyao.com/group1/M00/44/54/rBACW1tNtwaACQzOAACGxAN2JjE411.jpg" alt="">
                                    </a>
                                </li>
                    </ul>
</div>




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




        <!-- 商品分类start -->
        @foreach($cate_goods as $v)

        <div class="pd_t30 wrap auto">
            <div class="banner_tit t_c">
                <h3>{{$v['cat_name']}}</h3>
            </div>

            <!-- 单个商品遍历区start -->
            @foreach($com_goods as $good)
            @if($good['cat_id'] == $v['cat_id'])
            <div class="banner_con" style="width: 1080px">
                <div class="" style="height: 280px;float: left;">
                    <div class="" style="width: 40%;height: 100%;background-color: #ccc;float:left;">
                        <div class="text-center" style="margin: auto;margin-top: 40px; width: 60%;height: 30%;overflow: hidden;text-overflow: ellipsis;border-bottom: 3px solid #ccc">
                            <p style="font-size: 28px;">{{$good['goods_name']}}</p>
                        </div>
                        <div class="text-center" style="margin: auto;margin-top: 5px; width: 50%;height: 20%;overflow: hidden;text-overflow: ellipsis;">

                            <p style="font-size: 20px;">{{$good['keywords']}}</p>
                        </div>
                        <div class="text-center" style="margin: auto;margin-top: 10px;  width: 60%;height: 30%">
                            <p style="font-size: 20px;color: red; line-height: 50px;"><font size="40px">{{$good['shop_price']}}</font><strong>/元</strong></p>
                        </div>
                    </div>
                    <div class="" style="width: 60%;height: 100%;background-color: green;float: left;">

                       <img width="660px" height="280" src="/goods_img/{{$good['goods_img']}}">
                    </div>
                    
                  
                </div>
                <div class="" style="height: 20px;clear: both;">

                </div>
            </div>
            @endif
            @endforeach
            
            <!-- 单个商品遍历区end -->
        </div>
        @endforeach
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


@endsection

