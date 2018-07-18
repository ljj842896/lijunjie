@extends('home_index')
@section('content')
 
<div class="wrap  posR mg_t20 mH810 pd_b40">
    <div class="per_left">
        <div class="per_leftbox  pd_t14">
            <ul class="per_leftul">
                <li class="t_c">
                    <a href="Profile.html">
                        <img src="/h/pc/www/img/avatar/head_150.png" alt="" onerror="javascript:this.src='pc/www/img/avatar/head_150.png'" style="width: 150px; height: 150px"/>
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
                    <h3 class="per_title">
                        <a class="a_checked" href="/Informa"><span>个人信息</span></a>

                        <a href="/address"><span>管理收货地址</span></a>

                        <a class="bd_r_none" href="Profile.html" id="forgetPasswordID"><span>修改密码</span></a>
                    </h3>
                </div>
                 



                    <div class="pd10 bd_b_eee">
                        <h4 class="f14 col_666 mg_t20">基本信息</h4>
                        <form method="post" id="submitForm" action="">
                            <table cellspacing="0" cellpadding="0" border="0" class="per_table th80">
                                <tbody>
                                <tr>
                                    <th>账户名：&nbsp;&nbsp;</th>
                                    <td id="">{{session('users')->phone}}</td>
                                </tr>
                                <tr>
                                    <th>昵　称：&nbsp;&nbsp;</th>
                                    <td><input type="text" onkeyup="$(this).css('color','#000')" value="{{session('users')->user_name}}" class="inpCom w200" maxlength="10" name="nickname" id="txtNickname"> <span class="col_b76 inline" id="nicknameHint"></span></td>

                                </tr>
                                 <tr>
                                    <th>邮　箱：&nbsp;&nbsp;</th>
                                    <td id="txtEmail">{{session('users')->email}}</td>
                                </tr>
                                <tr>
                                    <th>性　别：&nbsp;&nbsp;</th>
                                    <td class="J_gender_select">
                                    <label class=" col_666 cursor mg_r10">
                           
                                        <li style="display: inline;"> <input type="radio" value="1" name="gender">&nbsp;&nbsp;保密</li>
                                    </label> 
                                    <label class=" col_666 cursor mg_r10">
                                         <li style="display: inline;"> <input type="radio" value="1" name="gender">&nbsp;&nbsp;男</li>
                                    </label> 
                                    <label class=" col_666 cursor mg_r10">
                                         <li style="display: inline;"><input type="radio" value="1" name="gender">&nbsp;&nbsp;女</li>
                                    </label>
                                </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <p class="per_imgp clearfix mg_l40">
                        <a href="javascript:;" class="btnCom1 btnComS btnBg2 btnH1 w80 inline J_save"><span>保
                        存</span></a>
                    </p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
            }
            return "";
        }
        if((typeof(getCookie("__qc__k"))!="undefined"&&getCookie("__qc__k")!="")||(typeof(getCookie("mobileNO"))!="undefined"&&getCookie("mobileNO")!="")){
            $("#forgetPasswordID").html("");
        }
    </script>
</div>

@endsection

