@extends('home/cate_index')

@section('cate')

<!--  -->
<div class="search-result" style="display: block;">
	<div class="bread">
		<a href="http://www.biyao.com/home/index.html">首页</a>
	  	<span><b>&gt;</b>全部分类</span>
	<span><b>&gt;</b>皮带</span></div>
	<div class="cateBread">
		<span></span>
	根据您搜索的“皮带”，为您匹配到以下商品：</div>
</div>

<ul class="category-container">
	<li>
        <ul class="category-list clearfix"><li><a target="_blank" href="http://www.biyao.com/products/1301195186060100001-0.html?ass=pos%3D0%26sid%3D1532444934943-d16b-b0385344d96d5%26q%3D%25E7%259A%25AE%25E5%25B8%25A6"><i><img src="http://bfs.biyao.com/group1/M00/0F/B2/rBACVFkmZveACib_AAB6DHLjopo637.jpg"></i><dl><dt>男士休闲简约自动扣皮带</dt><dd>¥189</dd></dl></a></li></ul>
     </li>
</ul>





<!-- 未搜索到结果 -->
<div class="search-noResult">
	<div>
		<span></span>
		<dl>
			<dt></dt>
			<dd>我们已经记录下您的搜索请求<br>必要会优先寻找合适的该商品制造商</dd>
		</dl>
	</div>
	<h2>精品推荐</h2>
</div>



@endsection