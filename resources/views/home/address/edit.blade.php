@extends('home.address.address')

@section('content')
<div class="per_right_out backg_fff">
        <div class="per_right ">
            <div class="">
                <div class="relative">
                    <h4 class="nTitle">个人设置</h4>
                    <h3 class="per_title">
                        <a href="Profile.html"><span>个人信息</span></a>

                        <a class="a_checked" href="/address"><span>管理收货地址</span></a>

                        <a class="bd_r_none" href="Profile.html" id="forgetPasswordID"><span>修改密码</span></a>
                    </h3>
                </div>
                <form method="post" id="formAddress" action="/Home/address/{{ $v -> id }}">
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
                        }
                    </div>
                </form>
                <h3 class="perTitle col_523 lineH24">已保存的地址</h3>
                <table border="0" cellspacing="0" cellpadding="0" class="perTableTitle1">
                    <tbody><tr>
                        <td width="9%"><span class="inline">收货人</span></td>
                        <td width="20%"><span class="inline">所在省市</span></td>
                        <td width="30%"><span class="inline">街道地址</span></td>
                        <td width="10%"><span class="inline">手机</span></td>
                        <td width="10%"><span class="inline"></span></td>
                        <td width="10%"><span class="inline">操作</span></td>
                    </tr>
                    </tbody>
                </table>
                <table border="0" cellspacing="1" cellpadding="0" class="J_table per_list1  bg_fff">
                    <tbody>
                    <tr data-addressid="476683">
                        <td width="9%" class="J_td2">阿茂</td>
                        <td width="20%" class="J_td3">
                            北京市西城区<input type="hidden" value="110000" data-text="北京市">
                            <input type="hidden" value="110100" data-text="市辖区">
                            <input type="hidden" value="110102" data-text="西城区">
                        </td>
                        <td width="30%" align="left" class="J_td2">网路1</td>
                        <td width="11%" class="J_td2">13303032929</td>
                        <td width="10%" type="true" class="J_td">
                            <span class="col_ee5b47">默认地址</span></td>
                        <td width="10%"><a class="J_edit col_link">修改</a> / <a class="J_dele col_link">删除</a></td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection