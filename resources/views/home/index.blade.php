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
                @foreach($cates as $cate)
                @if(substr_count($cate['cat_path'],',') == 3)
                 
                <li><a href="">{{$cate['cat_name']}}</a></li>
                @endif
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
                            <li><a target="_blank" href=""><img src="/uploads/ad/{{$ad['ad_img']}}" alt="" /></a></li>
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
                        @if($val['cat_path'] == $cate['cat_path'].','.$cate['cat_id'])
                        <li class="nav-sub clearfix">
                            <a href="">
                                {{$val['cat_name']}}
                            </a>
                            <i>&gt;</i>
                            <ul>
                                <!-- 三级分类start -->
                                    @foreach($cates as $v)
                                    @if($v['cat_path'] == $val['cat_path'].','.$val['cat_id'])
                                    <li class="nav-item">
                                        <a href="http://www.biyao.com/classify/category.html?categoryId=281">
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








<div class="pd_t10">
    <span class="staticpage none"></span>

    


    <div class="pd_b40">

        <!-- 商品分类start -->
        @for($i = 0;$i < 4;$i++)

        <div class="pd_t30 wrap auto" style="margin-left: 10%; width: 67%">
            <div class="banner_tit t_c" style="margin-left: 23%">
                <h3>男士专区</h3>
            </div>

            <!-- 单个商品遍历区start -->
            @for($j = 0;$j < 2;$j++)
            <div class="banner_con">
                <div class="" style="width: 100%;height: 280px;float: left;">
                    <div class="" style="width: 40%;height: 100%;background-color: #ccc;float:left;">
                        <div class="text-center" style="margin: auto;margin-top: 40px; width: 60%;border-bottom: 3px solid #ccc">
                            <p style="font-size: 28px;">户外·RC女士</p>
                        </div>
                        <div class="text-center" style="margin: auto;margin-top: 15px; width: 50%;height: 30%;overflow: hidden;text-overflow: ellipsis;">

                            <p style="font-size: 20px;">再见！上世纪的手刷时代上世纪的手刷时代</p>
                        </div>
                        <div class="text-center" style="margin: auto;margin-top: 10px;  width: 60%;height: 30%">
                            <p style="font-size: 20px;color: red; line-height: 50px;"><font size="40px">229</font><strong>/元</strong></p>
                        </div>
                    </div>
                    <div class="" style="width: 60%;height: 100%;background-color: green;float: left;">

                       <img width="720px" height="280" src="/goods_img/1531296416E4JL01gCBc.PNG">
                    </div>
                    
                  
                </div>
                <div class="" style="width: 100%;height: 20px;clear: both;">

                </div>
            </div>
            @endfor
            
            <!-- 单个商品遍历区end -->
        </div>
        @endfor
        <!-- 商品分类end -->
        


    </div>
</div>

















       
 



                <div  class="" style="margin-bottom:-100px; margin: auto;width: 80%;border-bottom: 3px solid #ccc;border-top: 3px solid #ccc;">

                    <!-- 友情链接展示区start -->
                        @foreach($links as $link)
                        <a href="{{$link['link_url']}}"> {{$link['link_name']}} </a> <b> | </b>
                        @endforeach
                    <!-- 友情链接展示区end -->
                </div> 

@endsection

