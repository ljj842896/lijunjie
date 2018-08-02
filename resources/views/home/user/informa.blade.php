@extends('home_index')
@section('content')
 
<div class="wrap  posR mg_t20 mH810 pd_b40">
    <div class="per_left">
        <div class="per_leftbox  pd_t14">
            <ul class="per_leftul">
                <li class="t_c">
                    <a href="Profile.html">

                        <label for="informa">
                        <img id="pro" src="/uploads/{{$pic}}" alt="" onerror="javascript:this.src='/h/pc/www/img/avatar/head_150.png'" style="width: 150px; height: 150px">    
                        </label>

                    </a>
                </li>
                <li class="f14 col_fff mg_t10 t_c">{{$user_name}}</li>
            </ul>
        </div>

        <div class="per_leftbox">
            <div class="perleft_menu pdtb_20">
                <ul>
                    <li class=" "><a href="/order" ><i class="f_r mcMIcon3 inline"></i>我的订单</a> </li>
                    <li class=" "><a href="/collects" ><i class="f_r mcMIcon4 inline"></i>我的收藏</a></li>
                    <!--<li class=" "><a href="/MyCenter/MyIncomeRules.html" ><i class="f_r mcMIcon5 inline"></i>我的收益</a></li>-->
                    <li class="a_check "><a href="/Informa" ><i class="f_r mcMIcon8 inline"></i>个人设置</a></li>
                    <!-- <div class="div_line"></div> -->
                    <!-- <a href="#"><i class="f_r mcMIcon9 inline"></i>设计师主页</a> <a
                        href="#"><i class="f_r mcMIcon10 inline"></i>设计师提现</a> -->
                </ul>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="mws-form-message success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="mws-form-message error">
            {{ session('error') }}
        </div>
    @endif
 

    <div class="per_right_out backg_fff">
        <div class="per_right ">
            <div class="">
                <div class="relative">
                    <h4 class="nTitle">个人设置</h4>
                    <h3 class="per_title" style="margin-top: 25px">
                        <a class="a_checked" href="/Informa"><span>个人信息</span></a>

                        <a href="/address"><span>管理收货地址</span></a>

                        <a class="bd_r_none" href="/passupdate" id="forgetPasswordID"><span>修改密码</span></a>
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
                                <td><input type="text" onkeyup="$(this).css('color','#000')" value="{{$user_name}}" class="inpCom w200" maxlength="10" name="user_name" id="txtNickname"> <span class="col_b76 inline" id="nicknameHint"></span></td>

                            </tr>
                             <tr>
                                <th>邮　箱：&nbsp;&nbsp;</th>
                                <td id="txtEmail">{{session('users')->email}}</td>
                            </tr>
                            <tr>
                                <th>性　别：&nbsp;&nbsp;</th>
                                <td class="J_gender_select">
                                <label class=" col_666 cursor mg_r10">
                       
                                    <li style="display: inline;"> <input type="radio" value="0" name="sex" @if($sex == 0)checked @endif>&nbsp;&nbsp;保密</li>
                                </label> 
                                <label class=" col_666 cursor mg_r10">
                                     <li style="display: inline;"> <input type="radio" value="1" name="sex" @if($sex == 1)checked @endif>&nbsp;&nbsp;男</li>
                                </label> 
                                <label class=" col_666 cursor mg_r10">
                                     <li style="display: inline;"><input type="radio" value="2" name="sex" @if($sex == 2)checked @endif>&nbsp;&nbsp;女</li>
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
    @if(session('success'))
     <script type="text/javascript">
         layer.alert('更新成功', {icon: 1});
     </script>
     @elseif(session('error'))
      <script type="text/javascript">
         layer.msg('更新失败。。', {icon: 5});
     </script>
     @endif
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

