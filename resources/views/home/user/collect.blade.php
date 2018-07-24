@extends('home_index')
@section('content')
 
<div class="wrap  posR mg_t20 mH810 pd_b40">
    <div class="per_left">
        <div class="per_leftbox  pd_t14">
            <ul class="per_leftul">
                <li class="t_c">
                    <a href="Profile.html">

                        <label for="informa">
                        <img id="pro" src="/uploads/{{isset(session('users')->user_pic) ? session('users')->user_pic : '6ME8Kv0V19E7c9TDgPV7.jpg'}}" alt="" onerror="javascript:this.src='/h/pc/www/img/avatar/head_150.png'" style="width: 150px; height: 150px">    
                        </label>

                    </a>
                </li>
                <li class="f14 col_fff mg_t10 t_c">{{ session('users') -> user_name }}</li>
            </ul>
        </div>

        <div class="per_leftbox">
            <div class="perleft_menu pdtb_20">
                <ul>
                    <li class=" "><a href="/order" ><i class="f_r mcMIcon3 inline"></i>我的订单</a> </li>
                    <li class="a_check"><a href="/collect" ><i class="f_r mcMIcon4 inline"></i>我的收藏</a></li>
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
 
 
@endsection

