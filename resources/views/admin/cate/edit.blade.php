@extends('index')

@section('content')

<h1>这是分类添加</h1>
 
 

<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/Admin/cate/{{$cate -> cat_id}}" method="post">
                    		{{csrf_field()}}
                              {{method_field('PUT')}}
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<div class="mws-form-item">
                                             分类名称　：<input type="text" class="small" name="cat_name" value="{{$cate -> cat_name}}"><br><br>
                                             选择分类　： 
				                                        <select name="cat_pid">

                                                                 @foreach($data as $v)
                                                                      <option value="{{$v -> cat_id}}" {{$v -> cat_id == $cate -> cat_id ? 'selected' : ''}}>{{$v -> cat_name}}</option>
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

                <script type="text/javascript">
                     $('select').change(function(){
                         // alert({{$login}});

                         if ({{$login}}) {

                              alert('该分类下有分类，仅可修改名称！');
                              $('select').eq(0).val('{{$cate -> cat_id}}')
                         }

                         // session(['error' => '商品分类不可更改！']);
                         // alert(session('success'));     
                          
                     })
                </script>
@endsection