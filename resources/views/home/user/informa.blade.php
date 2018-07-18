@extends('home_index')
@section('content')
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="/h/pc/common/js/jquery-1.8.3.js?v=biyao_7d074dc"></script>
    <script type="text/javascript" src="/h/pc/minisite/byshoes/js/jquery.cookie.js?v=biyao_a5283b2"></script>
    <script type="text/javascript" src="/h/pc/common/js/jquery.extention.js?v=biyao_98daa33"></script>
    <script type="text/javascript" src="/h/pc/common/js/ui/dialog.js?v=biyao_130c013"></script>
    <link href="/h/pc/favicon.ico" rel="shortcut icon"
          type="image/x-icon" />
    <link href="/h/pc/favicon.ico" rel="icon"
          type="image/x-icon" />
    <script type="text/javascript">
        window.ApiSite = "http://api.biyao.com";
        window.ControllerSite="";
    </script>
    <link href="/h/pc/common/css/common.css?v=biyao_1227846" rel="stylesheet" />
    <link href="/h/pc/www/css/cm_www.css?v=biyao_3f1d92e" rel="stylesheet" />
    <link type="text/css" href="/h/pc/www/css/myCenter.css?v=biyao_5976431"
          rel="stylesheet" />
</head>
<div class="wrap  posR mg_t20 mH810 pd_b40">
<div class="per_left">
        <div class="per_leftbox  pd_t14">
            <ul class="per_leftul">
                <li class="t_c">
                    <a href="Profile.html">
                        <label for="informa">
                        <img id="pro" src="/uploads/{{session('users')->user_pic}}" alt="" onerror="javascript:this.src='/h/pc/www/img/avatar/head_150.png'" style="width: 150px; height: 150px">    
                        </label>
                    </a>
                </li>
                <li class="f14 col_fff mg_t10 t_c">{{session('users')->user_name}}</li>
            </ul>
        </div>
                       
        <div class="per_leftbox">
            <div class="perleft_menu pdtb_20">
                <ul>
                    <li class=" "><a href="MyOrder.html"><i class="f_r mcMIcon3 inline"></i>我的订单</a> </li>
                    <li class=" "><a href="MyRefunds.html"><i class="f_r mcMIcon4 inline"></i>退款管理</a></li>
                    <li class="a_check "><a href="Profile.html"><i class="f_r mcMIcon8 inline"></i>个人设置</a></li>
                </ul>
            </div>
        </div>
    </div>
<div class="per_right_out backg_fff">
        <div class="per_right ">
            <div class="">
                <div class="relative">
                    <h4 class="nTitle">个人设置</h4>
                    <h3 class="per_title">
                        <a class="a_checked" href="#"><span>个人信息</span></a>
                        <a href="MyAddressManager.html"><span>管理收货地址</span></a>
                        <a class="bd_r_none" href="Profile.html" id="forgetPasswordID"><span>修改密码</span></a>
                    </h3>
                </div>
                   <div class="pd10 bd_b_eee">
                    <h4 class="f14 col_666 mg_t20">基本信息</h4>
                    <form method="post" id="submitForm" action="/inforupdete">
                         {{ csrf_field() }}
                        <table cellspacing="0" cellpadding="0" border="0" class="per_table th80">
                            <tbody>
                            <tr>
                                <th>账户名：&nbsp;&nbsp;</th>
                                <td id="">{{session('users')->phone}}</td>
                            </tr>
                            <tr>
                                <th>昵　称：&nbsp;&nbsp;</th>
                                <td><input type="text" onkeyup="$(this).css('color','#000')" value="{{session('users')->user_name}}" class="inpCom w200" maxlength="10" name="user_name" id="txtNickname"> <span class="col_b76 inline" id="nicknameHint"></span></td>

                            </tr>
                             <tr>
                                <th>邮　箱：&nbsp;&nbsp;</th>
                                <td id="txtEmail">{{session('users')->email}}</td>
                            </tr>
                            <tr>
                                <th>性　别：&nbsp;&nbsp;</th>
                                <td class="J_gender_select">
                                <label class=" col_666 cursor mg_r10">
                       
                                    <li style="display: inline;"> <input type="radio" value="0" name="sex" @if(session('users')->sex == 0)checked @endif>&nbsp;&nbsp;保密</li>
                                </label> 
                                <label class=" col_666 cursor mg_r10">
                                     <li style="display: inline;"> <input type="radio" value="1" name="sex" @if(session('users')->sex == 1)checked @endif>&nbsp;&nbsp;男</li>
                                </label> 
                                <label class=" col_666 cursor mg_r10">
                                     <li style="display: inline;"><input type="radio" value="2" name="sex" @if(session('users')->sex == 2)checked @endif>&nbsp;&nbsp;女</li>
                                </label>
                            </td>
                            </tr>
                            </tbody>
                        </table>  <p class="per_imgp clearfix mg_l40">
                         <input type="submit" class="btnCom1 btnComS btnBg2 btnH1 w80 inline J_save"></p>
                    </form>
                </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div>
    </div>
             {{ csrf_field() }}
         <button type="button" class="layui-btn" id="informa" style="display: none;">
             <i class="layui-icon">&#xe67c;</i>上传图片
        </button>
    <script>
        layui.use('upload', function(){
          var upload = layui.upload;
           
          //执行实例
          var uploadInst = upload.render({
             elem: '#informa' //绑定元素
            ,url: '/infor/uploads' //上传接口
            ,data:{'_token':$('input[type=hidden]').val()}
            ,field:'profile'
            ,done: function(res){
               if (res.code==0) {
                layer.msg(res.msg,{icon: 6});
                 $('#pro').attr('src',res.data.src)
              }else{

                layer.msg(res.msg,{icon: 5});

              }

            }
            
          });
        });
</script>
@endsection

