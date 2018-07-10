@extends('index')

@section('content')

<h1>这是分类添加</h1>
 
 

<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/Admin/cate" method="post">
                    		{{csrf_field()}}
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<div class="mws-form-item">
                                             分类名称　：<input type="text" class="small" name="cat_name"><br><br>
                                             选择分类　： 
				                                        <select name="cat_pid">
				                                            <option value="0"> --请选择-- </option>

				                                        @foreach($data as $v)
				                                            <option value="{{$v -> cat_id}}">{{$v -> cat_name}}</option>
				                                        @endforeach
				                                        </select><br><br>

                    				</div>
                    			</div>
                    		</div>
                    		<div class="mws-button-row">
                    			<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="提交" class="btn btn-danger"></font></font>
                    			<input type="reset" value="Reset" class="btn ">
                    		</div>
                    	</form>
                    </div>    	
                </div>


@endsection