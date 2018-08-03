<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="必要C2M商城是全球性价比最高的电子商务平台，是全球第一家用户直连制造（Customer To Manufactory）的平台，通过平台建立消费者与品质制造商的桥梁，将消费者的需求直接发送到工厂，按需生产模式既满足了消费者个性化的需求，又短路了复杂的商品流通环节，真正让消费者享受到专属且高品质的商品。目前，商品覆盖高跟鞋、眼镜、饰品、运动鞋、运动服、女士包包等品类，未来会按照消费者需求来增加新的产品类目。"/>
    <meta name="Keywords" content="必要;必要商城;必要平台;必要电商;C2M商城;工业4.0;定制平台;定制商城;奢侈品定制;定制鞋;定制包;定制眼镜;定制饰品;定制运动服;定制运动鞋" />
    <meta property="qc:admins" content="35713343766211176375747716" />
    <title>登录首页 – 我要的，才是必要的 – 必要biyao.com</title>
    <link href="/h/pc/favicon.ico" rel="shortcut icon"
          type="image/x-icon" />
    <link href="/h/pc/favicon.ico" rel="icon"
          type="image/x-icon" />
    <script type="text/javascript">
        window.ApiSite = "http://api.biyao.com";
        window.ControllerSite="";
        window.loginUserId=0;
        window.__pageType="other";

        if (window.loginUserId!=""){
            window.WebIMSite="http://webim.idstaff.com";
        }
        else
        {
            window.WebIMSite="http://webim.idstaff.com";
        }
    </script>
    <link href="/h/pc/common/css/common.css?v=biyao_1227846" rel="stylesheet" />
    <link href="/h/pc/www/css/cm_www.css?v=biyao_3f1d92e" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
    <script type="text/javascript" src="/layui/layui.all.js"></script>
    <script>
        ;!function(){
              var layer = layui.layer
              ,form = layui.form;
        }();
    </script>
    <script type="text/javascript"	src="/h/pc/common/js/jquery-1.8.3.js?v=biyao_7d074dc"></script>
    <script type="text/javascript"	src="/h/pc/common/js/jquery.extention.js?v=biyao_98daa33"></script>
    <script type="text/javascript" src="/h/pc/common/js/lazyload.js?v=biyao_80d4f78"></script>
    <script type="text/javascript" src="/h/pc/minisite/byshoes/js/jquery.cookie.js?v=biyao_a5283b2"></script>

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
    </script>
</head>
<body id="pagebody">
<script type="text/javascript">
    if(typeof($.cookie("__qc__k"))!="undefined"){
        $.cookie("__qc__k", null,{expires:0,path:"/"});
    }
    var passwordRegex = /.*\s+.*/;
    function blankTest() {
        if (passwordRegex.test($('#passwd1').val())) {
            $("#passwd1").val("");
        }
    };
</script>
<div class="bd_bottom_ea">
    <div class="wrap pub_logo_box clearfix">
        <div class="pub_logo f_l"><a href="/"><img alt="" src="/h/pc/www/img/logo.png?v=biyao_4637d54"></a></div>
        <div class="f_r">
            <ul class="sizeZero merchant_info_box">
                <li class="inline mg_l40 mg_t40">
                    <span class="inline col_8c8">欢迎来到必要，请 </span><span class="col_8c8 inline mg_l5">登录 </span><span class="col_8c8 mg_l5 mg_r5 inline">|</span><a class="col_8c8 inline" href="/register">注册</a>
                </li>
            </ul>
        </div>
    </div>
</div> 
<div class="wrap h580">
    <div class="loginItem auto ">
        <form action="/entry" class="loginBox" method="post" id="J_login">
            {{csrf_field()}}   
            <input type="hidden" name="status" value="{{session('jihuo')}}">
            <div class="inline loginTitBox"><i class="inline loginListBg spIcon mg_r10"></i><span class="inline">用户登录</span></div>
            <dl class="mg_t20 ">

                <dd class="inline mg_r5"><input value="请输入用户名/手机号/邮箱" type="text" id="username" name="username" class=" loginTxt  w360 col_999"/></dd>

                <dd class="J_validate inline col_f90 "><span id="users"></span></dd>
            </dl>
         
            <dl class=" mg_t20 ">
                <dd class="inline mg_r5">
                    <input id="passwd1"  type="password" name="password"  onblur="blankTest();" class=" loginTxt w360 col_999 none"  />
                    <input id="passwd_show" type="text" value="请输入您的密码"  id="password" class=" loginTxt w360 col_999"/>

                </dd>
                <dd class="J_validate inline col_f90" >     
                 @if (session('error'))
                        {{ session('error') }} 
                 @endif
                </dd>
            </dl>

            <dl class="mg_t20 w400 relative">
                <!-- <dt class="inline">&nbsp</dt> -->
                <dd class="inline">
                    <span class="inline mg_r10 "><i class="openIcon inline mg_r10" name="checkRememberMe"></i><span class="inline col_8a8a8a">下次自动登录</span></span>
                    <a href="/lethe" class="inline col_link boxR">忘记密码</a>
                </dd>
            </dl>
            <dl class="mg_t10">
                <dd class="J_loginTips inline "><span class="col_f90"></span></dd>
            </dl>
            <input type="hidden"  id="returnUrlId" name="returnUrl" value="index.html"/>
            <input type="submit"  class="J_login_btn loginBtn w400  inline t_c mg_t10" value="登录"/> <br/>

        </form>
            
    </div>
</div>
<!-- <script type="text/javascript" src="/h/http://qzonestyle.gtimg.cn/qzone/openapi/qc.js#appId=101235242" charset="utf-8" ></script>   -->
<script>
    function qqLogin(){
        var returnUrl = $("#returnUrlId").val();
        var url = "list.html#account/qqlogin.html?returnUrl="+returnUrl;
        window.location.href=u/h/rl;
    }
</script>
<div data-selector="J_im" id="webIM_showDiv"></div>

<div class="footer_links clearfix J_1200 auto">
    <div class="content wrap sizeZero">
        <div class="footer_nav_box inline">
            <ul class="footer_nav_list clearfix">
                <li>
                    <a target="_blank" href="/h/list.html#minisite/ljby">关于必要</a>
                    <span class="bg_line"></span>
                </li>
                <li>
                    <a target="_blank" href="/h/list.html#help/8.html">加入必要</a>
                    <span class="bg_line"></span>
                </li>
                <li>
                    <a target="_blank" href="/h/tel.html">联系我们</a>
                    <span class="bg_line"></span>
                </li>
                <li class="none">
                    <a target="_blank" href="/h/list.html#list/39/list-1.html">网站地图</a>
                </li>
                <li>
                    <a target="_blank" href="/h/tel.html">官方微博</a>
                    <span class="bg_line"></span>
                </li>

            </ul>
            <p class="col_999 lineH18 mg_t10">◎BIYAO.COM 2015 版权所有
            </p>
            <p class="col_999 lineH18 mg_t10"><i class="gwab_icon inline"></i><a class="col_999 inline mg_r5" href="/h/http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44049102496139" target="_blank">粤公网安备44049102496139号</a> <a class="col_999 inline" href="/h/http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">粤ICP备13088531号</a>
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
<script type="text/javascript"	src="/h/pc/www/js/common.js?v=biyao_bd8bd36"></script>
 @if(session('loginss'))
      <script type="text/javascript">
         layer.msg('设置成功请重新登录', {icon: 5});
     </script>
 @endif
 @if(session('emailjihuo'))
      <script type="text/javascript">

         layer.msg('请在邮箱里激活后再登录', {icon: 1});

     </script>
 @endif
 @if(session('loginerror'))
      <script type="text/javascript">
         layer.msg('请激活', {icon: 5});
     </script>
 @endif

  @if(session('userserror'))
      <script type="text/javascript">
         layer.msg('请输入正确的用户名', {icon: 5});
     </script>
 @endif

<script type="text/javascript">
    $(function(){

        $(".loginTxt").focus(function(){
            if ($(this).val() == $(this)[0].defaultValue) {
                $(this).val("");
            }

        });

        $("#passwd_show").focus(function(){
            $(this).addClass("none");
            $("#passwd1").removeClass("none").focus();
        });
        $("#passwd1").blur(function(){
            if ($.trim($(this).val()) == "") {
                $("#passwd_show").removeClass("none");
                $(this).addClass("none")
            }
        });
        $(".loginTxt").blur(function(){
            if ($.trim($(this).val()) == "") {
                $(this).val($(this)[0].defaultValue);
            }
        });
    });

</script>
<script src="/h/pc/common/js/ui/validate.js?v=biyao_8c8263d"></script>
<script type="text/javascript">
    $(function(){
        setTimeout(function(){
            LT.temp.loginFn.changeVcode();
        },100);

        $('form').find("[name='checkRememberMe']").click(function(){
            $(this).parent().toggleClass('checked');
            if($(this).parent().hasClass('checked')){
                $(this).next().text("请勿在公用电脑上勾选此选项");
            }else{
                $(this).next().text("下次自动登录");
            }
        })
        LT.temp.loginFn.login($("#J_login"));
        isLoginError();
        $(".J_login_btn").click(function(){
            isLoginError();
        });
        $("#imgChange").bind('click',function(){
            LT.temp.loginFn.changeVcode();
        });

    })
    function register(){
        parent.window.open('register.html?returnUrl='+parent.window.location.href);/h/
    }
    function findpwd(){
        parent.window.open('index?returnUrl='+parent.window.location.href);/h/
    }

    //判断是否显示验证码登录
    function isLoginError(){

        if(parseInt($.cookie("loginErrorTimes"))>=2){

            $("#authCode").removeClass("none");

        }
    }


</script>
 <script type="text/javascript">
 	     var login = document.getElementById('J_login');
 	     var userss = false;
         login.username.onblur = function(){
         var username = login.username.value;
            $.get('/exect',{'username':username},function(msg){
			    
			       if (msg=='3') {
                       
                      $('#users').html('用户名不可以为空');
			       }
                   if(msg=='1'){
                      userss = true;
                      $('#users').html('');
                   }
                   if(msg=='2'){
                 
                     $('#users').html('请输入正确的用户名');
                   }

		    });
         }
           
           var password = login.password.value;
           login.onsubmit = function(){
			if(userss && empty(password)){
				return true;
			}
			 
			return false;
		  }
 </script>
</body>
<script type="text/javascript" src="/h/pc/common/js/bytrack.js?v=biyao_8b3cc7e"></script>

</html>