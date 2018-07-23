<!DOCTYPE html>
<html>
    
    <head lang="en">
        <meta charset="UTF-8">
        <title>
            注册
        </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="stylesheet" href="/r/AmazeUI-2.4.2/assets/css/amazeui.min.css"
        />
        <link href="/r/css/dlstyle.css" rel="stylesheet" type="text/css">
        <script src="/r/AmazeUI-2.4.2/assets/js/jquery.min.js">
        </script>
        <script src="/r/AmazeUI-2.4.2/assets/js/amazeui.min.js">
        </script>
           <link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
		    <script type="text/javascript" src="/layui/layui.all.js"></script>
		    <script>
		        ;!function(){
		              var layer = layui.layer
		              ,form = layui.form;
		        }();
		    </script>
    </head>
    
    <body>
        <div class="login-boxtitle">
            <a href="home/demo.html">
                <img alt="" src="/a/images/logo.png" style="position: absolute;left: 200px" />
            </a>
        </div>
        <div class="">
            <div class="res-main">
                <div class="login-banner-bg">
                    <span>
                    </span>
                    <img src="/r/images/main.jpg" style="width: 550px;height: 430px;margin: 20px;position:" />
                </div>
                <div class="login-box">
                    <div class="am-tabs" id="doc-my-tabs">
                        <ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify">
                           <!--  <li class="am-active">
                                <a href="">
                                    邮箱注册
                                </a>
                            </li> -->
                            <li>
                                <a href="">
                                    手机号注册
                                </a>
                            </li>
                        </ul>
                        
                        <!-- <div class="am-tabs-bd">
                            <div class="am-tab-panel am-active">
                                <form method="post" action="/emails" >
                                	 {{csrf_field()}}
                                    <div class="user-email">
                                        <label for="email">
                                            <i class="am-icon-envelope-o">
                                            </i>
                                        </label>
                                        <input type="email" name="email" id="email" placeholder="请输入邮箱账号">
                                    </div>
                                  
                                    <div class="user-pass">
                                        <label for="password">
                                            <i class="am-icon-lock">
                                            </i>
                                        </label>
                                        <input type="password" name="password" id="password" placeholder="设置密码">
                                    </div>
                                    <div class="user-pass">
                                        <label for="passwordRepeat">
                                            <i class="am-icon-lock">
                                            </i>
                                        </label>
                                        <input type="password" name="password_confirmation1" id="password_confirmation1" placeholder="确认密码">
                                    </div>
	                                <div class="am-cf">
	                                    <input type="submit" name="" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
	                                </div>
                                </form>
                                <div class="login-links">
                                    <label for="reader-me">
                                        <input id="reader-me" type="checkbox">
                                        点击表示您同意商城《服务协议》
                                    </label>
                                </div>
                            </div> -->
                             <div class="am-tab-panel">
                                <form method="post"  action="/Home/phoneinsert">
                                	{{ csrf_field() }}
                                    <div class="user-phone">
                                        <label for="phone">
                                            <i class="am-icon-mobile-phone am-icon-md">
                                            </i>
                                        </label>
                                        <input type="tel" name="phone" id="phone" placeholder="请输入手机号" @if(session('pho'))value="{{session('pho')}}"@else @endif>
                                    </div>
                                    <div class="verification">
                                        <label for="code">
                                            <i class="am-icon-code-fork">
                                            </i>
                                        </label>
                                        <input type="tel" name="phonecode" id="code" placeholder="请输入验证码">
                                        <a class="btn" href="javascript:void(0);" onClick="sendCode();"
                                        id="sendMobileCode">
                                            <input type="button" value="获取" id="dyMobileButton" style="font-size: 10px;width: 80px">
                                        </a>
                                    </div>
                                    <div class="user-pass">
                                        <label for="password">
                                            <i class="am-icon-lock">
                                            </i>
                                        </label>
                                        <input type="password" name="password" id="passwordss" placeholder="设置密码">
                                    </div>
                                    <div class="user-pass">
                                        <label for="passwordRepeat">
                                            <i class="am-icon-lock">
                                            </i>
                                        </label>
                                        <input type="password" name="password_confirmation" id="passwordRepeats" placeholder="确认密码">
                                    </div>
	                                <div class="am-cf">
	                                    <input type="submit" name="" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
	                                </div>
                                </form>
                                <div class="login-links">
                                    <label for="reader-me">
                                        <input id="reader-me" type="checkbox">
                                        点击表示您同意商城《服务协议》
                                    </label>
                                </div>
                                <hr>
                            </div>

                             <script type="text/javascript">
                             </script>
                              <script type="text/javascript" charset="utf-8">
                                   function sendCode(){

         
                                      var obj = $("#dyMobileButton");
                                      settime(obj);
                                      $.get('/Home/Zhuce/sendcode',{'phone': $('#phone').val()},function(msg){

                                      	   if(msg == 2){
                                      	     	layer.msg('发送成功请稍后', {icon: 1});
                                      	     }else{
                                      	     	layer.msg('网络异常', {icon: 5});
                                      	     }
                                      	    
                                      },'html');
                                   }
                                  var countdown = 30;

                                  function settime(obj){
                                  	  if(countdown == 0){
                                  	 	 obj.attr('disabled',false);
                                  	 	 obj.val('获取验证码');
                                         countdown =30;
                                         return;
                                  	 }else{

                                  	 	    obj.attr('disabled',true);
                                  	 	    obj.val("重新发("+countdown+")");
                                  	 	    countdown--;

                                  	 }
                                  	 setTimeout(function(){
                                  	 	 settime(obj)
                                  	 },1000)
                                  }
							 </script>
                            <script>

                                $(function() {
                                    $('#doc-my-tabs').tabs();
                                })
                            </script>
						    @if(session('error'))
                            <script>
						         layer.msg('验证码不匹配', {icon: 5});
                            </script>
                            @endif
                            @if(session('pass'))
                            <script>
						         layer.msg('密码不匹配请重新输入', {icon: 5});
                            </script>
                            @endif  
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer ">
                <div class="footer-hd ">
                    <p>
                        <a href="# ">
                            必要科技
                        </a>
                        <b>
                            |
                        </b>
                        <a href="# ">
                            商城首页
                        </a>
                        <b>
                            |
                        </b>
                        <a href="# ">
                            支付宝
                        </a>
                        <b>
                            |
                        </b>
                        <a href="# ">
                            物流
                        </a>
                    </p>
                </div>
                <div class="footer-bd ">
                    <p>
                        <a href="# ">
                            关于必要
                        </a>
                        <a href="# ">
                            合作伙伴
                        </a>
                        <a href="# ">
                            联系我们
                        </a>
                        <a href="# ">
                            网站地图
                        </a>
                        <em>
                            © 2015-2025 Hengwang.com 版权所有
                        </em>
                    </p>
                </div>
            </div>
    </body>

</html>