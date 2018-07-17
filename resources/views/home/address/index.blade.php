@extends('home.address.address')

@section('content')
<div class="per_right_out backg_fff">
        <div class="per_right ">
            <div class="">
                <div class="relative">
                    <h4 class="nTitle">个人设置</h4>
                    <h3 class="per_title">
                        <a href="Profile.html"><span>个人信息</span></a>
                        <a class="a_checked" href="Home/address"><span>管理收货地址</span></a>
                        <a class="bd_r_none" href="Profile.html" id="forgetPasswordID"><span>修改密码</span></a>
                    </h3>
                </div>
                <a href="/Home/address/create" class="btn btn-info">添加地址</a>
                <h3 class="perTitle col_523 lineH24">已保存的地址</h3>
                <table border="0" cellspacing="0" cellpadding="0" class="perTableTitle1">
                    <tbody><tr>
                        <td width="9%"><span class="inline">收货人</span></td>
                        <td width="30%"><span class="inline">街道地址</span></td>
                        <td width="10%"><span class="inline">手机</span></td>
                        <td width="10%"><span class="inline">默认地址</span></td>
                        <td width="10%"><span class="inline">操作</span></td>
                    </tr>
                    </tbody>
                </table>
                <table border="0" cellspacing="1" cellpadding="0" class="J_table per_list1  bg_fff">
                    <tbody>
                    @foreach($data as $k => $v)
                    <tr data-addressid="476683">
                        <td width="9%" class="J_td2">{{ $v -> uname }}</td>
                        <td width="30%" class="J_td3">
                            {{ $v -> address }}
                        </td>
                        <td width="11%" class="J_td2">{{ $v -> tel }}</td>
                        <td width="10%" type="true" class="J_td">
                            <span class="col_ee5b47">
                            @if($v -> df == 1)
                            默认地址
                            @endif
                            </span></td>
                        <td width="10%"><a class="J_edit col_link" href="/Home/address/{{ $v -> id }}/edit">修改</a> / <a class="J_dele col_link">删除</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection