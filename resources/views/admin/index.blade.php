@extends('index')
@section('content')

    <div class="mws-stat-container clearfix">
                    
                    <!-- Statistic Item -->
                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-building"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title">Floors Climbed</span>
                            <span class="mws-stat-value">324</span>
                        </span>
                    </a>

                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-sport"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title">Calories Burned</span>
                            <span class="mws-stat-value down">74%</span>
                        </span>
                    </a>

                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-walk"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title">Kilometers Walked</span>
                            <span class="mws-stat-value">14</span>
                        </span>
                    </a>
                    
                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-bug"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title">Bugs Fixed</span>
                            <span class="mws-stat-value up">22%</span>
                        </span>
                    </a>
                    
                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-car"></span>

                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title">Cars Repaired</span>
                            <span class="mws-stat-value">77</span>
                        </span>
                    </a>
    </div>

    <div class="mws-panel grid_5">
      <div class="mws-panel-header" style="height:46px">
        <span>
          <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;"> 捉鳖小队简言</font>
          
          </font>
        </span>
      </div>
                    <div class="mws-panel-body" style="height: 150px">
                        <div height="50px">
                            
                        </div>
                      
                        <blockquote>
                            <h4>
                               上九天揽月，下五洋捉你！
                                别瞅了，就是你！ 
                            </h4>
                            <footer class="text-right"><cite title="Source Title">捉鳖小队</cite></footer>

                        </blockquote>
                    </div>
    </div>

    <div class="mws-panel grid_3">
      <div class="mws-panel-header" style="height:46px">
        <span>
          <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;"> 捉鳖小队开发人员</font>
          
          </font>
        </span>
      </div>
                    <div class="mws-panel-body no-padding">
                        <ul class="mws-summary clearfix">
                            @foreach($users as $v)
                            <li>
                                <span class="key" style="width: 50%"><img width="50px" height="50px" src="/uploads/{{$v['user_pic']}}"></span>
                                <span class="val"">
                                    <span class="text-nowrap">{{$v['user_name']}}</span>
                                </span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
    </div>


    <script type="text/javascript">
        // alert($);
    </script>

    <div id="mws-footer" style="margin-left: -200px;margin-bottom: -195px">
                Copyright Your Website 2012.@<span>{{$sys['sys_file']}}</span> All Rights Reserved.
    </div>
@endsection