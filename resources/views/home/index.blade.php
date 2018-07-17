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
                <li>伞</li>
                <li>眼霜</li>
                <li>口红</li>
                <li>内裤</li>
                <li>毛巾</li>
                <li>行李箱</li>
                <li>耳机</li>
                <li>纸尿裤</li>
                <li>眼镜</li>
                <li>电动牙刷</li>
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
                            <li><a target="_blank" href="http://www.biyao.com/classify/supplier.html?supplierId=130118"><img src="/h/picture/rbacw1thhvearhwqaac2tkrx5us499.jpg" alt="" /></a></li>
             
                
                    
                    
                        
                        
                            <li><a target="_blank" href="http://www.biyao.com/classify/supplier.html?supplierId=130104"><img src="/h/picture/rbacw1thh7qau16iaadj4dddskk499.jpg" alt="" /></a></li>
                        
                        <!-- 轮播图展示区end -->
            </ul>
        


        <span class="slider-left"></span>
        <span class="slider-right"></span>
    </div>


    <!-- 商品分类表start -->
    
    <ul class="nav-list">

            <!-- 一级分类start -->
            <li class="nav-main">
                <p>
                        <a href="">
                            经典男装
                        </a>
                            <span>/</span>
                        <a href="">
                            潮流女装
                        </a>
                </p>
                <ul>
                    <!-- 二级分类start -->
                        <li class="nav-sub clearfix">
                            <a href="http://www.biyao.com/classify/category.html?categoryId=280">
                                男士内搭
                            </a>
                            <i>&gt;</i>
                            <ul>
                                <!-- 三级分类start -->
                                    <li class="nav-item">
                                        <a href="http://www.biyao.com/classify/category.html?categoryId=281">
                                            T恤
                                        </a>
                                    </li>
                                <!-- 三级分类start -->
                            </ul>
                        </li>
                    <!-- 二级分类start -->
                </ul>
            </li>
            <!-- 一级分类end -->
            
    </ul>
    <!-- 商品分类表end -->

</div>








<div class="pd_t10">
    <span class="staticpage none"></span>

    


    <div class="pd_b40">

        <!-- 商品分类start -->
        @for($i = 0;$i < 5;$i++)

        <div class="pd_t30 wrap auto" style="margin-left: 10%; width: 67%">
            <div class="banner_tit t_c" style="margin-left: 23%">
                <h3>男士专区</h3>
            </div>

            <!-- 单个商品遍历区start -->
            @for($j = 0;$j < 5;$j++)
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
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                        <a href="//page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a><b>|</b>
                       
                </div> 
@endsection

