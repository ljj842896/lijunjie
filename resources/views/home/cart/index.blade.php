 
@extends('home_index')
@section('content')
    <link href="/h/pc/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="/h/pc/favicon.ico" rel="icon" type="image/x-icon" />   
    <link href="/h/css/common_1.css" rel="stylesheet"/>
    <link href="/h/css/new.main_1.css" rel="stylesheet"/>
    <link href="/h/css/cm_www.css" rel="stylesheet"/>
    <link href="/h/css/newbuy.css" rel="stylesheet"/>
    <script type="text/javascript">
        window.basePath = "";
        window.ControllerSite = "http://www.biyao.com";
        var ua = navigator.userAgent.toLowerCase(); 
        var isiOS = navigator.userAgent.match('iPad')||navigator.userAgent.match('iPhone')||navigator.userAgent.match('iPod'),isAndroid=navigator.userAgent.match('Android'),isDesktop = !isiOS&&!isAndroid;
        if (isiOS||isAndroid) {
            if(window.location.href.toString().indexOf("www.biyao.com/product/")>0){//如果现在进的是编辑器页
                var designId=(window.location.href.toString()).substr(parseInt(window.location.href.toString().indexOf("www.biyao.com/product/"))+"www.biyao.com/product/".length,4);//获得样例ID
                window.location.href="http://m.biyao.com/product/show?designid="+designId;
            }
        }
    </script>
    <script type="text/javascript" src="/h/js/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="/h/js/jquery.extention.js"></script>
    <script type="text/javascript" src="/h/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="/h/js/common.js"></script>
    <script type="text/javascript" src="/h/js/dialog.js"></script>
    <script type="text/javascript" src="/h/js/select.js"></script>
    <script type="text/javascript" src="/h/js/loadmask.js"></script>
    <script type="text/javascript" src="/h/js/commonre.js"></script>
    <script type="text/javascript" src="/h/js/jquery.cookie.js"></script>
 
 

 <!-- 进度栏start -->
<div class="bd_bottom_ea">
        <div class="wrap pub_logo_box clearfix">
        <div class="pub_logo">
            <a href="http://www.biyao.com/home/index.html"><img src="/h/picture/logo.png"/></a>
        </div>
    </div>
</div>
 <!-- 进度栏end -->
    
 




<div class="wrap h580">
    <div class="sop_nothingbox">
        <img src="/h/picture/shoppingcart.png" />
        <p class="inline">
            <span id="loginTip" class="sop_span inline">您的购物车还是空的</span>
            <span id="unloginTip" class="sop_span inline">您的购物车还是空的，<a onclick='LT.login_uri("/login")' class="col_link">登录</a>后，将显示您之前加入的商品。</span><br />
        </p>
    </div>
    <div class="toindex" align="center">
        <a href="/">马上购物</a>
    </div>
</div>



<script type="text/javascript"> 
    window.MainSite = "http://www.biyao.com";    
</script>
<script type="text/javascript" src="/h/js/common.js"></script>
<script type="text/javascript" src="/h/js/dialog.js"></script>
<script type="text/javascript" src="/h/js/select.js"></script>
<script type="text/javascript" src="/h/js/autocomplete.js"></script>
<script type="text/javascript" src="/h/js/jquery.pagination.js"></script>
<script type="text/javascript" src="/h/js/pages.js"></script>
<script type="text/javascript" src="/h/js/qrcode.js"></script>
<script type="text/javascript" src="/h/js/shopcardes.js"></script>
<script type="text/javascript" src="/h/js/lazyloadim.js"></script>
    
<script type="text/javascript" src="/h/js/lazyload.js"></script>
    
<script type="text/javascript" src="/h/js/materiallistdes.js"></script>

<script type="text/template" id="materialsOfProductTemplate">


<div class="pop_bd pd_t15 clearfix">
    <ul class="sizeZero ml_list">
    </ul>
</div>

</script>
    
 
    <script type="text/javascript" src="/h/js/common.js"></script>
    <script type="text/javascript" src="/h/js/bytrack.js"></script>

    <script type="text/javascript">
        function GetRequest() {
            var url = location.search; //获取url中"?"符后的字串
            var theRequest = new Object();
            if (url.indexOf("?") != -1) {
                var str = url.substr(1);
                strs = str.split("&");
                for (var i = 0; i < strs.length; i++) {
                    theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
                }
            }
            return theRequest;
        }
        var Request = new Object();
        Request = GetRequest();
        if(!$.cookie("source")){
            $.cookie('source', Request['source'],{domain:"biyao.com",path:"/"});
        }
        
        // 跳转到重定向地址
        function jumpRedirect (redirectUrl, flag) {
            if(!flag){
                window.location.href = window.ControllerSite + '/account/login.html?returnUrl=' + encodeURIComponent(redirectUrl);
            }else{
                window.open(window.ControllerSite + '/account/login.html?returnUrl=' + encodeURIComponent(redirectUrl));
            }
            
        };
        // 如果用户已登录根据是否有进线类型判断客服中心是否显示
        if($.cookie('uid')){
            $.ajax({
                url: '/service/getClassifyList',
                method : 'GET',
                data:{
                    uid: $.cookie('uid'),
                },
                success: function(res){
                    if(res.success === 1 && res.data.length !== 0 ){
                        $('.user-server').css({'display': 'inline-block'})
                        $('.vertical-line-hook b').css({'display': 'inline-block'})
                    }
                }
            })
            
        }else{
            $('.user-server').css({'display': 'inline-block'})
            $('.vertical-line-hook b').css({'display': 'inline-block'})
            // 用户未登录点击我的客服强制登录
            $('#customer_server').on('click', function(e){
                e.preventDefault();
                e.stopPropagation();
                var _url = $(this).attr('href');
                jumpRedirect(_url, true);
                return false;
            })
        }
        
    </script>
 

@endsection