@extends('home_index')
@section('content')
@if(session('success'))
<script type="text/javascript">
    layer.msg('{{ session("success") }}');
</script>
@endif
@if(session('error'))
<script type="text/javascript">
    layer.msg('{{ session("error") }}');
</script>
@endif
<div class="wrap  posR mg_t20 mH810 pd_b40">
    <div class="per_left">
        <div class="per_leftbox  pd_t14">
            <ul class="per_leftul">
                <li class="t_c">
                    <a href="Profile.html">
                        <img src="/uploads/{{ session('users') -> user_pic }}" alt="" onerror="javascript:this.src='pc/www/img/avatar/head_150.png'" style="width: 150px; height: 150px"/>
                    </a>
                </li>
                <li class="f14 col_fff mg_t10 t_c">{{ session('users') -> user_name }}</li>
            </ul>
        </div>
        <div class="per_leftbox">
            <div class="perleft_menu pdtb_20">
                <ul>
                    <li class=" "><a href="/order" ><i class="f_r mcMIcon3 inline"></i>我的订单</a> </li>
                    <li class=" "><a href="MyRefunds.html" ><i class="f_r mcMIcon4 inline"></i>退款管理</a></li>
                    <!--<li class=" "><a href="/MyCenter/MyIncomeRules.html" ><i class="f_r mcMIcon5 inline"></i>我的收益</a></li>-->
                    <li class="a_check "><a href="Profile.html" ><i class="f_r mcMIcon8 inline"></i>个人设置</a></li>
                    <!-- <div class="div_line"></div> -->
                    <!-- <a href="#"><i class="f_r mcMIcon9 inline"></i>设计师主页</a> <a
                        href="#"><i class="f_r mcMIcon10 inline"></i>设计师提现</a> -->
                </ul>
            </div>
        </div>
    </div>
<div class="per_right_out backg_fff">
        <div class="per_right ">
            <div class="">
                <div class="relative">
                    <h4  class="nTitle">个人设置</h4>
                    <h3 class="per_title"  style="margin-top: 25px">
                        <a href="/Informa"><span>个人信息</span></a>

                        <a class="a_checked" href="/address"><span>管理收货地址</span></a>

                        <a class="bd_r_none" href="Profile.html" id="forgetPasswordID"><span>修改密码</span></a>
                    </h3>
                </div>
                <form method="post" id="formAddress" action="/address">
                {{ csrf_field() }}
                    <div class="pd10">
                        <table border="0" cellspacing="0" class="per_table th80">
                            <tbody><tr>
                                <th>
                                    <span class="col_ee5b47"></span>收货人姓名：
                                </th>
                                <td>
                                    <input type="text" data-highlight="highlight" maxlength="64" value="" name="uname" class="inpCom w200 permy">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <span class="col_ee5b47"></span>街道地址：
                                </th>
                                <td>
                                    <input type="text" data-highlight="highlight" maxlength="128" value="" class="inpCom w380 permy" name="address">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <span class="col_ee5b47"></span>手机号码：
                                </th>
                                <td>
                                    <input type="text" data-highlight="highlight" maxlength="64" value="" class="inpCom w200 permy" name="phone">
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    是否设为默认地址<br>
                                        是 : <input type="radio" name="df" value="1">
                                        否 : <input type="radio" name="df" value="0" checked>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td colspan="2"><button type="submit" id="btn_SaveAddress" class="btnCom1 btnComS btnBg2 btnH1 w80 inline J_save"><span>确 定</span></button></td>
                            </tr>
                            </tbody></table>
                    </div>
                </form>
                <h3 class="perTitle col_523 lineH24">已保存的地址</h3>
                <table border="0" cellspacing="0" cellpadding="0" class="perTableTitle1">
                    <tbody><tr>
                        <td width="20%"><span class="inline">收货人</span></td>
                        <td width="20%"><span class="inline">地址</span></td>
                        <td width="20%"><span class="inline">手机</span></td>
                        <td width="20%"><span class="inline">是否默认地址</span></td>
                        <td width="20%"><span class="inline">操作</span></td>
                    </tr>
                    </tbody>
                </table>
                <table border="0" cellspacing="1" cellpadding="0" class="J_table per_list1  bg_fff">
                    <tbody>
                    @foreach($users_address as $k => $v)
                    <tr data-addressid="476683">
                        <td width="20%" class="J_td2">{{ $v -> uname }}</td>
                        <td width="20%" align="left" class="J_td2">{{ $v -> address }}</td>
                        <td width="20%" class="J_td2">{{ $v -> tel }}</td>
                        <td width="20%" type="true" class="J_td">
                            <span class="col_ee5b47">
                                @if($v -> df == 1)
                                默认地址
                                @endif
                            </span>
                        </td>
                        <td width="20%" style="display:inline">
                            <a class="J_edit col_link btn btn-warning" href="/address/{{ $v -> id }}/edit">修改</a>
                            <form action="/address/{{ $v -> id }}" method="post" style="display:inline">
                                {{ csrf_field() }}                        
                                {{ method_field('DELETE') }}                        
                                <input id="addr_del" type="submit" class="btn btn-danger" value="删除" style="display:inline" onclick="return confirm('确定删除吗?')">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection