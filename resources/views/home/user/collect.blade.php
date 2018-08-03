@extends('home_index')
@section('content')
 
<div class="wrap  posR mg_t20 mH810 pd_b40">
    <div class="per_left">
        <div class="per_leftbox  pd_t14">
            <ul class="per_leftul">
                <li class="t_c">
                    <a href="Profile.html">

                        <label for="informa">

                        <img id="pro" src="/uploads/{{isset($user['user_pic']) ? $user['user_pic'] : '6ME8Kv0V19E7c9TDgPV7.jpg'}}" alt="" onerror="javascript:this.src='/h/pc/www/img/avatar/head_150.png'" style="width: 150px; height: 150px">    

                        </label>

                    </a>
                </li>

                <li class="f14 col_fff mg_t10 t_c">{{ $user['user_name'] }}</li>

            </ul>
        </div>

        <div class="per_leftbox">
            <div class="perleft_menu pdtb_20">
                <ul>
                    <li class=" "><a href="/order" ><i class="f_r mcMIcon3 inline"></i>我的订单</a> </li>
                    <li class="a_check"><a href="/collects" ><i class="f_r mcMIcon4 inline"></i>我的收藏</a></li>
                    <!--<li class=" "><a href="/MyCenter/MyIncomeRules.html" ><i class="f_r mcMIcon5 inline"></i>我的收益</a></li>-->
                    <li class=" "><a href="/Informa" ><i class="f_r mcMIcon8 inline"></i>个人设置</a></li>
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
                    <h4 class="nTitle">我的收藏</h4>
                     <table cellspacing="0" cellpadding="0" class="w100w t_c  perTabTitn ">
                    <tbody>
                    <tr>
                        <td width="8%"><span class="inline"></span></td>
                        <td width="36%"><span class="inline">商品信息</span></td>
                        <td width="18%"><span class="inline">价格</span></td>
                        <td width="18%"><span class="inline">操作</span></td>
                    </tr>
                    </tbody>
                </table>
                <!-- <div class="historyOrderTit f14">由于系统升级,2016年01月18日之前的订单
                    <a href="/MyCenter/MyOrder.html" class="publicBtn publicBtn_h27 publicBtn_e7 inline mg_l5 mg_tf3">点此查看</a>
                    <span class="historyOrderTitdel f12">X&nbsp;关闭</span>
                </div> -->
                <!--暂时关闭IM入口，勿删-->

                <div class="DZPager mg_b20">
                    <table cellspacing="0" cellpadding="0" class="sop_table4 border ">
                    @foreach($user -> user_collect as $v)
                            <tr data-unfacceptance="0" data-supplierid="130091" data-orderid="122007043946180978">
                                <td width="8%"  align="center" class="bd_l vTop pd_t15 lineH20"> 
                                    <img width="50px" height="50px" src="/goods_img/{{ $v -> goods_img }}">
                                </td>
                                <td width="36%"  align="center" class="bd_l vTop pd_t15 lineH20">
                                    <span style="line-height: 50px;"><a href="/good/{{$v -> goods_id}}">{{ $v -> goods_name }}</a></span>
                                </td>
                               
                               
                                <td  align="center" class="bd_l vTop pd_t15 lineH20" width="18%">
                                    <a href="/orderdetails" class="col_link "  style="line-height: 50px;">￥{{$v -> shop_price}}</a>
                                </td>
                                <td  align="center" class="bd_l vTop  pd_l20 pd_r20 pd_t5" width="18%">
                                    
                                    <button  class="layui-btn layui-btn-sm" good_id="{{$v -> goods_id}}" style="width: 80px;margin-top: 20px" onclick="collect(this)"><i class="layui-icon"></i>取消收藏</button>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                </div>
                </div>
 
                   <div class="pd10 bd_b_eee">
                  
                </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div>
    </div>
     
    </div>
</div>
 <script type="text/javascript">
    function collect(obj)
    {
        var goods_id = $(obj).attr('good_id');

        $.get('/outcollect',{'goods_id':goods_id},function(msg){

            // alert(msg)
            if (msg == 1) {

                $(obj).parent().parent().remove()
                layer.msg('取消成功！')
            }

        })

    }
 </script>
 
@endsection

