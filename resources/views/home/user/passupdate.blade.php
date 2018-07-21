@extends('home_index')
@section('content')
 
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
                <li class="f14 col_fff mg_t10 t_c">by_3444810</li>
            </ul>
        </div>

        <div class="per_leftbox">
            <div class="perleft_menu pdtb_20">
                <ul>
                    <li class=" "><a href="/order" ><i class="f_r mcMIcon3 inline"></i>我的订单</a> </li>
                    <li class=" "><a href="/address" ><i class="f_r mcMIcon4 inline"></i>退款管理</a></li>
                    <!--<li class=" "><a href="/MyCenter/MyIncomeRules.html" ><i class="f_r mcMIcon5 inline"></i>我的收益</a></li>-->
                    <li class="a_check "><a href="/Informa" ><i class="f_r mcMIcon8 inline"></i>个人设置</a></li>
                 
                </ul>
            </div>
        </div>
    </div>
    <div class="per_right_out backg_fff">
        <div class="per_right ">
            <div class="">
                <div class="relative">
                    <h4 class="nTitle">个人设置</h4>
                    <h3 class="per_title" style="margin-top: 25px">
                        <a class="a_checked" href="/Informa"><span>个人信息</span></a>

                        <a href="/address"><span>管理收货地址</span></a>

                        <a class="bd_r_none" href="javascript:void(0)" id="forgetPasswordID"><span>修改密码</span></a>
                    </h3>
                </div>
 
                   <div class="pd10 bd_b_eee">
                    <h1 class="f14 col_666 mg_t20">密码修改</h1>
                    <form method="post" id="submitForm" action="/userupdate">
                         {{ csrf_field() }}
                        <table cellspacing="0" cellpadding="0" border="0" class="per_table th80">
                            <tbody>
                            <tr>
                                <th>账户名 : </th>
                                <td id=""><h5>&nbsp;{{session('users')->user_name}}</h5></td>
                            </tr>
                             
                             <tr>
                                <th>旧密码：</th>
                                <td><input type="password" onkeyup="$(this).css('color','#000')" value="" class="inpCom w200" maxlength="16" name="password" id="txtNickname" style="color: rgb(0, 0, 0);"> <span class="col_b76 inline" id="nicknameHint"></span></td>

                            </tr>
                             <tr>
                                <th>新密码：</th>
                                <td><input type="password" onkeyup="$(this).css('color','#000')" value="" class="inpCom w200" maxlength="16" name="rpassword" id="Nickname" style="color: rgb(0, 0, 0);"> <span class="col_b76 inline" id="nicknameHint"></span></td>

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
       
    @if(session('passerror'))
      <script type="text/javascript">
         layer.msg('新密码不能与原密码重复', {icon: 5});
     </script>
     @endif

      @if(session('passup'))
      <script type="text/javascript">
         layer.msg('修改成功', {icon: 1});
     </script>
     @endif
      @if(session('passups'))
      <script type="text/javascript">
         layer.msg('修改失败', {icon: 5});
     </script>
     @endif
       <script type="text/javascript">
           var forms = document.getElementById('submitForm');
         
               forms.password.onblur = function(){
               var pass = forms.password.value;
                   $.get('/ajaxpass',{'pass':pass},function(msg){

                             if(msg=='1'){

                             }else{
                                 
                                   layer.msg('请输入正确的密码', {icon: 5});
                             }
                   });
               }

              
       </script>
       <script type="text/javascript">
         

         $('form').eq(0).submit(function(){
                    var us = forms.rpassword.value;     
                     if(us.length!=0){  
                          reg=/^[a-zA-Z]\w{5,17}$/;
                          if (!reg.test(us)){
                          layer.msg('用户名请6-18之间，只能包含字符、数字和下划线', {icon: 5});            
                          return false;
                        }
                     }
               });
       </script>


@endsection

