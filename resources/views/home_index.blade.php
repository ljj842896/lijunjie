
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="必要C2M商城是全球性价比最高的电子商务平台，是全球第一家用户直连制造（Customer To Manufactory）的平台，通过平台建立消费者与品质制造商的桥梁，将消费者的需求直接发送到工厂，按需生产模式既满足了消费者个性化的需求，又短路了复杂的商品流通环节，真正让消费者享受到专属且高品质的商品。目前，商品覆盖高跟鞋、眼镜、饰品、运动鞋、运动服、女士包包等品类，未来会按照消费者需求来增加新的产品类目。"/>
    <meta name="Keywords" content="必要;必要商城;必要平台;必要电商;C2M商城;工业4.0;定制平台;定制商城;奢侈品定制;定制鞋;定制包;定制眼镜;定制饰品;定制运动服;定制运动鞋" />
    <meta property="qc:admins" content="35713343766211176375747716" />
    <title>必要 - 全球首家C2M电子商务平台</title>


        <!-- 引入的bootsrtap和jquery -->
    <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
 
    <link href="/h/pc/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link href="/h/css/common.css" rel="stylesheet" type="text/css" />
    <link href="/h/css/new.main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/h/css/new.index.css"/>
 
    <link href="/h/pc/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="/h/pc/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
    <script type="text/javascript" src="/layui/layui.all.js"></script>
        <script>
            //一般直接写在一个js文件中
            layui.use(['layer', 'form'], function(){
              var layer = layui.layer
              ,form = layui.form;
             
            });
        </script> 
 

 
    <link href="/h/pc/common/css/common.css?v=biyao_1227846" rel="stylesheet" />
    <link href="/h/pc/www/css/cm_www.css?v=biyao_3f1d92e" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link type="text/css" href="/h/pc/www/css/myCenter.css?v=biyao_5976431" rel="stylesheet" />



    

    <script type="text/javascript" src="/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/h/pc/common/js/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="/h/pc/common/js/jquery.extention.js"></script>
    <script type="text/javascript" src="/h/pc/common/js/lazyload.js"></script>
    <script type="text/javascript" src="/h/pc/minisite/byshoes/js/jquery.cookie.js"></script>
 
    <script type="text/javascript"  src="/h/js/jquery-1.8.3.js"></script>
    <script type="text/javascript"  src="/h/js/jquery.cookie.js"></script>
    <script type="text/javascript"  src="/h/js/md5.js"></script>
    <script type="text/javascript"  src="/h/js/mastercommon.js"></script>
    <script type="text/javascript"  src="/h/js/jquery.extention.js"></script>
    <script type="text/javascript"  src="/h/js/common.js"></script>
    <script type="text/javascript" src="/h/js/index.js" ></script>
    <script type="text/javascript" src="/h/js/bytrack.js"></script>
 
</head>
 

<body id="pagebody">


    
<div class="pub_nav topBanner slideUp" style="height: 30px">
    

    <div class="wrap clearfix bg_333"  style="height: 30px">
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
    </div>

</div>





<ul class="rightBar" style="margin-left: 550px; display: block;">
    <li class="rightBar-top" style="display: none;"></li>
</ul>


<link rel="stylesheet" type="text/css" href="/h/pc/www/css/home.css?v=biyao_b551ce1"/>
<style>
    .index_bg_fff{background-color:#fff;}
</style>




<!-- 修改内容区 -->

@section('content')



@show

 


<div data-selector="J_im" id="webIM_showDiv">

</div>
    
<div class="footer_links clearfix J_1200 auto">

    <div class="content wrap sizeZero">
        <div class="footer_nav_box inline">
            <ul class="footer_nav_list clearfix">
                <li>
                    <a target="_blank" href="sjzx.html">关于必要</a>
                    <span class="bg_line"></span>
                </li>
                <li>
                    <a target="_blank" href="sjzx.html">加入必要</a>
                    <span class="bg_line"></span>
                </li>
                <li>
                    <a target="_blank" href="tel.html">联系我们</a>
                    <span class="bg_line"></span>
                </li>
                <li class="none">
                    <a target="_blank" href="tel.html">网站地图</a>
                </li>
                <li>
                    <a target="_blank" href="tel.html">官方微博</a>
                    <span class="bg_line"></span>
                </li>

            </ul>
            <p class="col_999 lineH18 mg_t10">◎BIYAO.COM 2015 版权所有
            </p>
            <p class="col_999 lineH18 mg_t10"><i class="gwab_icon inline"></i><a class="col_999 inline mg_r5" href=".beian.gov.cn/portal/registerSystemInfo?recordcode=44049102496139" target="_blank">粤公网安备44049102496139号</a> <a class="col_999 inline" href=".miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">粤ICP备15017094号</a>
            </p>
        </div>
        <div class="footer_evm sizeZero inline">
            <div class="inline mg_r40 footer_evm_img">
                <div class="an_bg inline mg_r15"></div>
                <div class="inline evm_tit_msg">
                    <span class="col_333 f14">扫描二维码下载</span><br/>
                    <span class="col_724 f14">必要手机客户端</span>
                </div>
            </div>
            <div class="inline mg_r10 footer_evm_img">
                <div class="weixin_bg inline mg_r15"></div>
                <div class="inline evm_tit_msg">
                    <span class="col_333 f14">扫描二维码关注</span><br/>
                    <span class="col_724 f14">必要官方微信</span>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="/h/pc/common/js/common.js?v=biyao_c83c46d" type="text/javascript"></script>
<script type="text/javascript"  src="/h/pc/www/js/common.js?v=biyao_bd8bd36"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/dialog.js?v=biyao_130c013"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/select.js?v=biyao_1dcaa7c"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/jquery.pagination.js?v=biyao_1a0a135"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/pages.js?v=biyao_5fd7a00"></script>
<script type="text/javascript" src="/h/pc/www/js/product/fcode.js?v=biyao_1810c31"></script>
<script type="text/javascript" src="/h/pc/www/js/home/checkbook.js?v=biyao_8351fee"></script>
<script type="text/javascript" src="/h/pc/common/js/jquery.lazyload.min.js?v=biyao_75578ef"></script>
<script type="text/javascript" src="/h/pc/www/js/home/newhome.js?v=biyao_3ea3ba3" ></script>
</body>

<script type="text/javascript" src="/h/pc/common/js/bytrack.js?v=biyao_8b3cc7e"></script>

</html>