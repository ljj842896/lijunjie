@extends('home_index')

@section('content')
<div class="per_right_out backg_fff">
        <div class="per_right ">
            <div class="">
                <div class="relative">
                    <h4 class="nTitle">个人设置</h4>
                    <h3 class="per_title">
                        <a href="Profile.html"><span>个人信息</span></a>

                        <a class="a_checked" href="/address"><span>管理收货地址</span></a>

                        <a class="bd_r_none" href="/passupdate" id="forgetPasswordID"><span>修改密码</span></a>
                    </h3>
                </div>
                <form method="post" id="formAddress" action="/address/{{ $v -> id }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="pd10">
                        <table border="0" cellspacing="0" class="per_table th80">
                            <tbody>
                            
                            <tr>
                                <th>
                                    <span class="col_ee5b47"></span>收货人姓名：
                                </th>
                                <td>
                                    <input type="text" data-highlight="highlight" maxlength="64" value="{{ $v -> uname }}" name="uname" class="inpCom w200 permy">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <span class="col_ee5b47"></span>街道地址：
                                </th>
                                <td>
                                    <input type="text" data-highlight="highlight" maxlength="128" value="{{ $v -> address }}" class="inpCom w380 permy" name="address">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <span class="col_ee5b47"></span>手机号码：
                                </th>
                                <td>
                                    <input type="text" data-highlight="highlight" maxlength="64" value="{{ $v -> tel }}" class="inpCom w200 permy" name="phone">
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    是否设为默认地址<br>
                                        是 : <input type="radio" name="df" value="1">
                                        否 : <input type="radio" name="df" value="2">
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
                        <td width="9%"><span class="inline">收货人</span></td>
                        <td width="30%"><span class="inline">街道地址</span></td>
                        <td width="10%"><span class="inline">手机</span></td>
                        <td width="10%"><span class="inline">默认地址</span></td>
                    </tr>
                    </tbody>
                </table>
                <table border="0" cellspacing="1" cellpadding="0" class="J_table per_list1  bg_fff">
                @foreach($users_data as $v)
                    <tbody>
                    <tr data-addressid="476683">
                        <td width="9%" class="J_td2">{{ $v -> uname }}</td>
                        <td width="30%" align="left" class="J_td2">{{ $v -> address }}</td>
                        <td width="11%" class="J_td2">{{ $v -> tel }}</td>
                        <td width="10%" type="true" class="J_td">
                            <span class="col_ee5b47">
                            @if($v -> df == 1)
                            默认地址
                            @endif
                            </span>
                        </td>                  
                    </tr>
        
                    </tbody>
                @endforeach
                </table>

            </div>
        </div>
    </div>
@endsection