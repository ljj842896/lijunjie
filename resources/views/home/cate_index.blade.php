 



<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="必要商城是一家C2M模式的电子商务平台，旨在通过用户直连制造商（Customer TO Manufactory），砍掉传统零售中的所有加价环节，使消费者以出厂成本价就能买到高品质的产品。"/>
	<meta name="Keywords" content="必要;必要商城;必要平台;必要电商;C2M商城;工业4.0;定制平台;定制商城;奢侈品定制;定制鞋;定制包;定制眼镜;定制饰品;定制运动服;定制运动鞋" />
	<meta property="qc:admins" content="35713343766211176375747716" />
	<meta name="renderer" content="webkit"/>
 	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<title>必要  - 买大牌制造商产品，上必要</title>
	<link href="/h/pc/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link href="/h/css/common.css" rel="stylesheet" type="text/css" />
	<link href="/h/css/new.main.css" rel="stylesheet" type="text/css" />
	<link type="text/css" href="/h/css/new.product.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
    <script type="text/javascript" src="/layui/layui.all.js"></script>
        <script>
            //一般直接写在一个js文件中
            layui.use(['layer', 'form'], function(){
              var layer = layui.layer
              ,form = layui.form;
              
       
            });
        </script> 



<link rel="stylesheet" type="text/css" href="/h/css/new.category.css" />
	
</head>
	




<body id="pagebody">
<div class="header">

<!-- 头部start -->
<div class="pub_nav topBanner slideUp" style="height: 30px">
    

    <div class="wrap clearfix bg_333" style="height: 30px">
        <div class="f_l">
            <ul class="pub_nav_list sizeZero">

                <li class="inline"><a href="/">首页</a><span class="bg"></span></li>
                <li class="inline"><a href="/create">商家中心</a><span class="bg"></span></li>
                <li class="inline"><a href="/create">平台政策</a><span class="bg"></span></li>
                <!--                    <li class="inline last"><a href="list.html#complaint/toAddComplaint">非法信息投诉</a><span class="bg"></span></li> -->
                <li class="inline last newapp">
                    <a href="#">必要手机版</a>
                    <div class="app_box">
                        <span class="inline upArre"></span>
                        <div class="con">
                            <p class="sj_evm"></p>
                            <p class="lineH24 col_666 f14">必要手机版</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
 
   

<!-- 头部 -->
 	  @if(session('users'))
 
        <div class="f_r">
            <ul class="pub_nav_list sizeZero">

                <li class="inline" id="welcomID"><span class="col_aaa mg_r10">欢迎来到必要</span><a class="userinfo">{{session('users')->user_name}}</a><span class="bg"></span></li>
                <li class="inline" id="messageID"><a href="/loginout">退出</a><span class="bg"></span></li>
 
 
                <li class="inline last">
                    <a href="javascript:void(0);" class="">个人中心<i class="inline pep_bg mg_l10"></i></a>
                    <div class="app_box">
                        <span class="inline upArre"></span>
                        <div class="bg_fff down_list_box">
                            <a class="inline" href="/order">我的订单</a>
                            <a class="inline" href="/address">地址管理</a>

                            <a href="/Informa" class="inline">个人设置</a>

                        </div>
                    </div>
                </li>
                <li class="inline last pd_r0 shopping_cart vTop">
                    <a class="inline sizeZero" href="/cart">
                        <i class="inline"></i>
                        <span id="shopcarNumID" class="inline">购物车 0</span>
                    </a>
                </li>
            </ul>
        </div>
 
        @else
 
        <div class="f_r">
            <ul class="pub_nav_list sizeZero">
                <li class="inline" id="welcomID"><span class="col_aaa mg_r10">欢迎来到必要，请</span><a href="/login">登录</a><span class="bg"></span></li>
                <li class="inline" id="messageID"><a>注册</a><span class="bg"></span></li>
                
            </ul>
        </div>
        @endif

<!-- 头部 -->
 
	</div>

</div>
<!-- 头部end -->

</div>




<!-- 导航栏 -->
<div class="nav">
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
			<p><input type="text" id="searchInput"/><span id="searchBtn"></span></p>
			<ul></ul>
		</div>
	</div>
</div>




<!-- 右边栏 -->
<ul class="rightBar">
	<li class="rightBar-serve"><a target="_blank" href="javascript:void(0);" class="login-hook"></a></li>
	<li class="rightBar-phone"></li>
	<li class="rightBar-share"></li>
	<li class="rightBar-code">
		<div>
			<span></span>
			<dl class="code-public">
				<dt></dt>
				<dd>扫码关注必要公众号</dd>
			</dl>
			<dl>
				<dt></dt>
				<dd>扫码下载必要APP</dd>
			</dl>
		</div>
	</li>
	<li class="rightBar-top"></li>
</ul>
<!-- 分享弹框 -->
<div class="shareCon">
	<div>
		<p>分享<b></b></p>
		<div class="share-main">
			<dl>
				<dt><img class="share-code" src="/h/picture/ewm.jpg"/></dt>
				<dd>扫一扫，分享给好友！</dd>
			</dl>
			<ul>
				<li class="share-qq"><a target="_blank" href="#"></a><span>QQ空间</span></li>
				<li class="share-sina"><a target="_blank" href="#"></a><span>新浪微博</span></li>
				<li class="share-facebook"><a target="_blank" href="#"></a><span>Facebook</span></li>
				<li class="share-twitter"><a target="_blank" href="#"></a><span>Twitter</span></li>
			</ul>
		</div>
	</div>
</div>
	
@section('cate')

<!-- 面包屑 -->
<div class="bread">
	<a href="/">首页</a>
   	
  	<span><b>&gt;</b>{{isset($cat['cat_name']) ? $cat['cat_name'] : ''}}</span>
</div>
<!-- 分类栏 -->
 
<!-- 类目商品列表 -->
<ul class="category-container">
	
		
			@if(empty($goods[0]))

			<ul class="category-container">
				<div class="wrap page_404  h580 clearfix">
				        <div class="page_404_left">
				            <p><i class="loginCorrectk inline mg_r10"></i><span class="inline f24 col_523">抱歉！该类型宝贝暂未上架，敬请关注！！</span></p>
				            <p class="mg_t40 mg_l40"><img src="/h/pc/www/img/404.png?v=biyao_adaa3d4" alt=""></p>
				        </div>
				        <div class="page_404_right"><img src="/h/pc/www/img/stop_404.png?v=biyao_d41c439" alt=""></div>
			    </div>
			</ul>
			@else

				<li id="280">
					<ul>
						
							<li id="281">
								<dl class="category-title">
									<dt>{{isset($cat['cat_name']) ? $cat['cat_name'] : ''}}</dt>
									<dd></dd>
								</dl>
								<ul class="category-list clearfix">
									
									<!-- 该分类所有商品start -->
									@foreach($goods as $good)
									@if($good['cat_id'] == $cat['cat_id'])
										<li>
											<a target="_blank" href="/good/{{$good['goods_id']}}">
												<i><img src="/goods_img/{{$good -> goods_img}}" alt="" /></i>
												
												<dl>
													<dt style="margin: auto;margin-top: 5px; height: 20px;overflow: hidden;text-overflow: ellipsis;">{{$good['goods_name']}}</dt>
													<dd>¥{{$good['shop_price']}}</dd>
												</dl>
											</a>
										</li>
									@endif
									@endforeach
									<!-- 该分类所有商品end -->
								 
								 
									
								</ul>
							</li>
						 
						
					</ul>
				</li>
			

		 	@endif
		
		
	
</ul>

@show

<!-- 底部栏 -->
<div class="footer">
	<div>
		<ul class="footer-serve clearfix">
	    	<li>
	    		<dl>
	    			<dt class="serve-make"></dt>
	    			<dd>直连一线制造</dd>
	    		</dl>
	    	</li>
	    	<li>
	    		<dl>
	    			<dt class="serve-backage"></dt>
	    			<dd>全品类包邮</dd>
	    		</dl>
	    	</li>
	    	<li>
	    		<dl>
	    			<dt class="serve-pay"></dt>
	    			<dd>平台先行赔付</dd>
	    		</dl>
	    	</li>
	    	<li>
	    		<dl>
	    			<dt class="serve-refund"></dt>
	    			<dd>7天无忧退换货</dd>
	    		</dl>
	    	</li>
	    </ul>
	    <div class="footer-main clearfix">
	    	<ul class="footer-detail clearfix">
	    		<li>
	    			<h2>帮助中心</h2>
	    			<ul>
	    				<li><a href="http://www.biyao.com/minisite/bzzx" target="_blank">平台政策</a></li>
	    				<li><a href="javascript:void(0)" id="supEnter">商家入驻</a></li>
	    			</ul>
	    		</li>
	    		<li>
	    			<h2>关注必要</h2>
	    			<ul>
	    				<li class="footer-wxCode">
	    					<a href="javascript:void(0)">官方微信</a>
	    					<div><i></i><span></span></div>
	    				</li>
	    				<li><a target="_blank" href="http://weibo.com/biyaoshangcheng">新浪微博</a></li>
	    			</ul>
	    		</li>
	    		<li>
	    			<h2>关于必要</h2>
	    			<ul>
	    				<li><a target="_blank" href="http://www.biyao.com/minisite/ljby">了解必要</a></li>
	    				<li><a target="_blank" href="http://www.biyao.com/help/8.html">加入必要</a></li>
	    				<li><a target="_blank" href="http://www.biyao.com/help/tel.html">联系我们</a></li>
	    			</ul>
	    		</li>
	    		<li>
	    			<h2>下载必要APP</h2>
	    			<p></p>
	    		</li>
	    	</ul>
	    	<dl class="footer-contact">
	    		<dt>服务监督邮箱</dt>
	    		<dd>cs@biyao.com</dd>
	    	</dl>
	    </div>
	    <div class="footer-info">
	    	<p>
		    	<span id="year"></span>
		    	<script>
		    		document.getElementById('year').innerHTML = 'Copyright © '+ new Date().getFullYear() +', BIYAO.COM';
		    	</script>
		    	<span>珠海必要科技有限公司</span>
		    	<span>粤网文〔2018〕0969-419号</span>
		    	<span>
		    		<img width="14" height="14" src="/h/picture/ghs.png">
		    		<a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44049102496139" target="_blank">粤公网安备44049102496139号</a>
		        </span>
		        <span>
		        	 <a href="http://www.miibeian.gov.cn" target="_blank">粤ICP备13088531号-2</a>
		        </span>
	    	</p>
	    	<p>
	    		<span><a href="http://static3.biyao.com/pc/www/img/footer/by_drugs.png" target="_blank">互联网药品信息服务资格证书</a></span>
	    		<span><a href="http://static4.biyao.com/pc/www/img/footer/by_food.jpg" target="_blank">食品经营许可证</a></span>	
	    	</p>
	    	<p><span>公司地址：珠海市唐家湾镇哈工大路1号1栋E301-15</span><span>公司电话：0756-3635580</span></p>
	    	<p>必要商城提示您，产品“由某制造商出品”仅为陈述制造商既往生产经历，并不意味着相应产品与特定品牌产品相同或近似。</p>
	    </div>
	</div>
</div>
	
	<script type="text/javascript">
		window.ControllerSite ="http://www.biyao.com";
		window.ApiSite = "http://api.biyao.com";
		window.loginUserId = "0";
	</script>
	
	<script type="text/javascript"	src="/h/js/jquery-1.8.3.js"></script>
	<script type="text/javascript"	src="/h/js/jquery.cookie.js"></script>
	<script type="text/javascript"	src="/h/js/md5.js"></script>
	<script type="text/javascript"	src="/h/js/mastercommon.js"></script>
	<script type="text/javascript"	src="/h/js/jquery.extention.js"></script>
	<script type="text/javascript"	src="/h/js/common.js"></script>
	
	

<script src="/h/js/classify.js"></script>
<script>
	//右侧栏位置调整
	masterGuy.rightBarPos(550);
	//分享
	masterGuy.shareHandle('http://m.biyao.com/classify/categoryList?categoryId=279&title=经典男装');
	classifyGuy.parentCategoryName = '';
	classifyGuy.categoryId = 279;
	classifyGuy.intoId = 279;
	//分类页跳转相关
	$(function(){classifyGuy.category()})
</script>
	
	<script type="text/javascript" src="/h/js/bytrack.js"></script>
</body> 
</html>