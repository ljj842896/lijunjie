
@extends('home/cate_index')


@section('cate')
 
    <link href="/h/pc/favicon.ico" rel="shortcut icon"
          type="image/x-icon" />
    <link href="/h/pc/favicon.ico" rel="icon"
          type="image/x-icon" />
    <script type="text/javascript">
        window.ApiSite = "http://api.biyao.com";
        window.ControllerSite="";
        window.loginUserId=2444809;
        window.version="2015010131708";//给外链js设置版本号
        window.__pageType="other";
        if (window.loginUserId!=""){
            window.WebIMSite="http://webim.idstaff.com";
        }
        else
        {
            window.WebIMSite="http://webim.idstaff.com";
        }
    </script>
    <script type="text/javascript">
        window.designData = {"carveInfo":null,"imgList":[{"img_l":"http://img.biyao.com/files/temp/f9/f91a43f5ea026261.jpg","img_s":"http://img.biyao.com/files/temp/f9/f91a43f5ea026261.jpg"},{"img_l":"http://img.biyao.com/files/temp/96/960ba7d0ca35c582.jpg","img_s":"http://img.biyao.com/files/temp/96/960ba7d0ca35c582.jpg"},{"img_l":"http://img.biyao.com/files/temp/31/3186a35bbe2c7733.jpg","img_s":"http://img.biyao.com/files/temp/31/3186a35bbe2c7733.jpg"},{"img_l":"http://img.biyao.com/files/temp/11/1125bf3b2c225d07.jpg","img_s":"http://img.biyao.com/files/temp/11/1125bf3b2c225d07.jpg"}],"isCarve":0,"productDetail":"<p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053467923974311_0.jpg\" style=\"\" title=\"罗马壶详情图1200_01.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469125395380_0.jpg\" style=\"\" title=\"罗马壶详情图1200_02.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468031302499_0.jpg\" style=\"\" title=\"罗马壶详情图1200_03.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469230383564_0.jpg\" style=\"\" title=\"罗马壶详情图1200_04.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468161260728_0.jpg\" style=\"\" title=\"罗马壶详情图1200_05.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469352999779_0.jpg\" style=\"\" title=\"罗马壶详情图1200_06.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/29/08/productiondetail/data/192168100161_4280_636053776523155295_0.jpg\" style=\"\" title=\"lm-pc.jpg\" alt=\"lm-pc.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469465007976_0.jpg\" style=\"\" title=\"罗马壶详情图1200_08.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468404933156_0.jpg\" style=\"\" title=\"罗马壶详情图1200_09.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468462029256_0.jpg\" style=\"\" title=\"罗马壶详情图1200_10.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468551729414_0.jpg\" style=\"\" title=\"罗马壶详情图1200_11.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468601337501_0.jpg\" style=\"\" title=\"罗马壶详情图1200_12.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468676373633_0.jpg\" style=\"\" title=\"罗马壶详情图1200_13.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468756713774_0.jpg\" style=\"\" title=\"罗马壶详情图1200_14.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469960776847_0.jpg\" style=\"\" title=\"罗马壶详情图1200_15.jpg\"/><\/p><p><br/><\/p>","productId":"1301025001","productMdetail":"<p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053470359357547_0.jpg\" style=\"\" title=\"罗马壶详情图640_01.jpg\"/><\/p><p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053470397889615_0.jpg\" style=\"\" title=\"罗马壶详情图640_02.jpg\"/><\/p><p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/29/08/productiondetail/data/192168100161_4280_636053777277416620_0.jpg\" style=\"\" title=\"lmh-m.jpg\" alt=\"lmh-m.jpg\"/><\/p><p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053469327986777_0.jpg\" style=\"\" title=\"罗马壶详情图640_04.jpg\"/><\/p><p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053470529397846_0.jpg\" style=\"\" title=\"罗马壶详情图640_05.jpg\"/><\/p><p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053469495687072_0.jpg\" style=\"\" title=\"wap端-01_01.jpg\"/><\/p><p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053470688362125_0.png\" style=\"\" title=\"wap端-01_02.png\"/><\/p><p><br/><\/p>","productSale":"长效保温，欧式设计，奥氏体304不锈钢","shelfStatus":1,"sizeDetail":[{"duration":10,"price":119,"shelfStatus":1,"sizeDetail":null,"specs":[{"goods_size":"波尔多红","name":"颜色"},{"goods_size":"2升","name":"尺寸"}],"storeNum":100,"suId":"1301025001010200001","suName":"经典北欧系列奥氏体真空保温壶"},{"duration":10,"price":119,"shelfStatus":1,"sizeDetail":null,"specs":[{"goods_size":"亮银色","name":"颜色"},{"goods_size":"2升","name":"尺寸"}],"storeNum":100,"suId":"1301025001060200001","suName":"经典北欧系列奥氏体真空保温壶"}],"sizeList":[{"des":"波尔多红","img_l":null,"img_s":null,"name":"颜色","spec_id":2587,"type":0},{"des":"亮银色","img_l":null,"img_s":null,"name":"颜色","spec_id":2588,"type":0},{"des":"2升","img_l":null,"img_s":null,"name":"尺寸","spec_id":2589,"type":0}],"suData":{"duration":10,"price":119,"shelfStatus":1,"sizeDetail":"http://img.biyao.com/files/temp/d2/d2d1453df6275eb6.jpg","specs":[{"goods_size":"亮银色","name":"颜色"},{"goods_size":"2升","name":"尺寸"}],"storeNum":332,"suId":"1301025001060200001","suName":"经典北欧系列奥氏体真空保温壶"},"supplierInfo":{"_OEM_info":"","_ServicesTel":"400-869-9663","_StoreDesc":"STRAFORD常年服务于膳魔师、双立人、WMF等众多国际一线品牌，是国内最大的不锈钢保温产品制造商之一，拥有国际领先的双层抽真空技术，以及众多产品外观设计专利，拥有十多年国际知名品牌生产经验，致力于为全球家庭用户提供设计简洁、时尚耐用、健康环保的不锈钢产品，力求为每一个家庭带来舒适优越的生活体验！","_TransferDelayDay":null,"_company_name":null,"_contract_deadline":"2016-07-25 15:27:38.837","_createby":"10032","_createtime":"2016-07-25","_enable":true,"_id":74,"_logo_url":"http://img.biyao.com/files/data0/2016/07/28/18/storelogo/abc1e9e4624ca14e.jpg","_logoid":0,"_service_tel":null,"_service_time":"周一至周日9:00-21:00","_settled_time":"2016-07-25","_status":1,"_store_domain_name":"straford.biyao.com","_store_location":null,"_store_logo_url":"","_store_name":"STRAFORD水具","_supplier_factory_name":null,"_supplier_id":130102,"_updateby":"10032","_updatetime":"2016-07-29","is_webim":0,"is_zcwebim":0,"policy":[{"policyDescription":"实物破损、不符、质量问题，退换货商家承担往返运费。","policyId":3,"policyName":"7天无忧退换","supplierId":130102,"supplierName":"STRAFORD水具"},{"policyDescription":"争议可申诉，申诉成功，立即退款。","policyId":4,"policyName":"先行赔付","supplierId":130102,"supplierName":"STRAFORD水具"},{"policyDescription":"未按承诺时间发货，系统自动赔付（赔款金额为订单商品金额的30%，上限500元）。","policyId":5,"policyName":"超时赔偿","supplierId":130102,"supplierName":"STRAFORD水具"},{"policyDescription":"运费由商家承担","policyId":9,"policyName":"顺丰包邮","supplierId":130102,"supplierName":"STRAFORD水具"}],"policyDescription":"<p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/20/productiondetail/data/192168100162_8940_636053362990299999_0.jpg\" title=\"wb端-01.jpg\" alt=\"wb端-01.jpg\"/><\/p>","productGrade":5,"productNum":0,"publicityImgList":null,"qualityGrade":5,"return_address":null,"return_phone":null,"return_receiver":null,"return_zipcode":null,"serviceGrade":5,"zcgroupid":""}};
        window.categoryID=509;
        designData.ModelId=designData.productId;
        window.isCarveCustomer=0;//顾客刻字状态
        window.CarveContent="";//刻字内容
        window.supplierInfo={"_OEM_info":"","_ServicesTel":"400-869-9663","_StoreDesc":"STRAFORD常年服务于膳魔师、双立人、WMF等众多国际一线品牌，是国内最大的不锈钢保温产品制造商之一，拥有国际领先的双层抽真空技术，以及众多产品外观设计专利，拥有十多年国际知名品牌生产经验，致力于为全球家庭用户提供设计简洁、时尚耐用、健康环保的不锈钢产品，力求为每一个家庭带来舒适优越的生活体验！","_TransferDelayDay":null,"_company_name":null,"_contract_deadline":"2016-07-25 15:27:38.837","_createby":"10032","_createtime":"2016-07-25","_enable":true,"_id":74,"_logo_url":"http://img.biyao.com/files/data0/2016/07/28/18/storelogo/abc1e9e4624ca14e.jpg","_logoid":0,"_service_tel":null,"_service_time":"周一至周日9:00-21:00","_settled_time":"2016-07-25","_status":1,"_store_domain_name":"straford.biyao.com","_store_location":null,"_store_logo_url":"","_store_name":"STRAFORD水具","_supplier_factory_name":null,"_supplier_id":130102,"_updateby":"10032","_updatetime":"2016-07-29","is_webim":0,"is_zcwebim":0,"policy":[{"policyDescription":"实物破损、不符、质量问题，退换货商家承担往返运费。","policyId":3,"policyName":"7天无忧退换","supplierId":130102,"supplierName":"STRAFORD水具"},{"policyDescription":"争议可申诉，申诉成功，立即退款。","policyId":4,"policyName":"先行赔付","supplierId":130102,"supplierName":"STRAFORD水具"},{"policyDescription":"未按承诺时间发货，系统自动赔付（赔款金额为订单商品金额的30%，上限500元）。","policyId":5,"policyName":"超时赔偿","supplierId":130102,"supplierName":"STRAFORD水具"},{"policyDescription":"运费由商家承担","policyId":9,"policyName":"顺丰包邮","supplierId":130102,"supplierName":"STRAFORD水具"}],"policyDescription":"<p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/20/productiondetail/data/192168100162_8940_636053362990299999_0.jpg\" title=\"wb端-01.jpg\" alt=\"wb端-01.jpg\"/><\/p>","productGrade":5,"productNum":0,"publicityImgList":null,"qualityGrade":5,"return_address":null,"return_phone":null,"return_receiver":null,"return_zipcode":null,"serviceGrade":5,"zcgroupid":""};
        window.ControllerSite = '';
    </script>
    <link href="/h/pc/common/css/common.css?v=biyao_1227846" rel="stylesheet" />
    <link href="/h/pc/www/css/cm_www.css?v=biyao_3f1d92e" rel="stylesheet" />
    <script type="text/javascript"></script>

    <link type="text/css" href="/h/pc/www/css/editor_by.css?v=biyao_a7abbbd" rel="stylesheet" />
    <link type="text/css" href="/h/pc/www/cssnew/noModel.css?v=biyao_6a5d800" rel="stylesheet" /><script type="text/javascript" src="/h/pc/common/js/lazyload.js?v=biyao_80d4f78"></script>
    <script type="text/javascript" src="/h/pc/www/js/product/lazyloadIM.js?v=biyao_2f2a448"></script>
 






<div class="section">
    <ul class="section-bread clearfix">
        <li>
            <a href="http://www.biyao.com">首页</a>
            <span class="bread-title">&nbsp;/&nbsp;{{$good['goods_name']}}</span>
        </li>
        <li class="b-company" id="supplierInfo">
            <i></i>
            <span class="supplier_name"></span>

            <div class="company none" id="companycssreInfo">
                <div class="company-head">
                    <div>
                        <span class="company-icon">
                        <img class="supplier_logo_url" src="" alt=""></span>
                        <span class="company-name supplier_name"></span>
                        <i></i>
                        <b id="supplierInfoClose"></b>
                    </div>
                    <span >服务电话:<span class="supplier_userTel"></span></span>
                </div>
                <div class="company-score">
                    <ul>
                        <li id="desc_score">
                            <span>实物相符 : </span>
                            <i><b class="scoreImg"></b></i>
                            <span class="score-num score"></span>
                        </li>
                        <li id="service_score">
                            <span>商家服务 : </span>
                            <i><b class="scoreImg"></b></i>
                            <span class="score-num score"></span>
                        </li>
                        <li id="logistics_score">
                            <span>物流服务 : </span>
                            <i><b class="scoreImg"></b></i>
                            <span class="score-num score"></span>
                        </li>
                      
                    </ul>
                </div>
                <div class="company-intro last supplier_StoreDesc">
                </div>
            </div>
        </li>
        <li class="b-phone">
            <i></i>
            <span class="supplier_userTel"></span>
        </li>
    </ul>
    <div class="section-editor clearfix">
        <div class="editor-main">
            <p><img src="/goods_img/{{$good['goods_img']}}" alt=""/></p>
            <ul>
                <!-- 商品相册遍历 -->
                @foreach($good -> goods_images as $v)
                <li bigImg="/goods_img/{{$v -> img_url}}" class="click"><img src="/goods_img/{{$v -> img_url}}" alt="" width="100"/><span></span></li>
                @endforeach
                <!-- 商品相册遍历 -->
            </ul>
        </div>
        <div class="editor-panel">
            <div class="panel-top">
                <h1>{{$good['goods_name']}}</h1>

                <input type="hidden" class="good_id" value="{{$good['goods_id']}}">

                <p>{{$good['keywords']}}</p>
            </div>
            


            <ul class="panel-main">
                <li class="panel-press">
                    <span>售价</span>
                    <div>
                        <span class="panel-maney">￥<i id="shop_price">{{$good['shop_price']}}</i></span>
                            <span class="panel-duration">生产周期：<span>7</span>天
                        </span>
                    </div>
                </li>
                
                <li class="panel-specs">
                    <ul>




                       


                        <li class="specs-dimension clearfix" style="border: 0px"><span>颜色</span>
                            <div>
                                <ul id="good_color">

                                    <!-- 未选中 -->
                                    @foreach($color as $v)
                                    <li class="specs-detail" parent="false" nomod="true">{{$v}}<em></em></li>
                                    @endforeach
                                    <!-- 选中 -->
                                    <!-- <li style="display: none;" class="specs-detail lowModel-specs-active" parent="false" nomod="true">40<em></em></li> -->

                                    <!-- 缺货 -->
                                    <!-- <li style="display: none;" class="specs-detail lowModel-specs-gray" parent="false" nomod="true">43<em></em></li> -->
                                
                                </ul>
                            </div>
                        </li>

 


                        <li class="specs-dimension clearfix" style="border: 0px"><span>尺寸</span>
                            <div>
                                <ul id="good_rule">
                                    <!-- 未选中 -->
                                    @foreach($rule as $v)
                                    <li class="specs-detail" parent="false" nomod="true">{{$v}}<em></em></li>
                                    @endforeach
                                    <!-- 选中 -->
                                    <!-- <li style="display: none;" class="specs-detail lowModel-specs-active" parent="false" nomod="true">40<em></em></li> -->

                                    <!-- 缺货 -->
                                    <!-- <li style="display: none;" class="specs-detail lowModel-specs-gray" parent="false" nomod="true">43<em></em></li> -->
                                </ul>
                            </div>
                        </li>


                    </ul>
                </li>
                
                    <li class="panel-sizeImg">
                        <div><span>查看尺码对照表</span></div>
                        <img src="http://bfs.biyao.com/group1/M00/1E/98/rBACYVnlwmiAEvGwAAIJ5_UYWsc586.png">
                    </li>
                
                <li class="panel-count"><span>数量</span>
                    <div>
                        <p class="panel-num">
                            <span class="panel-minus">-</span>
                            <span class="panel-number">1</span>
                            <span class="panel-add">+</span>
                        </p>
                        <div style="margin-left: 198px">
                            <button class="layui-btn layui-btn-sm" good_id="{{$good['goods_id']}}" style="width: 60px" onclick="collect(this)"><i class="layui-icon"></i>收藏</button> 
                        </div>

                    </div>
                </li>
                
            </ul>

            <script type="text/javascript">
                function collect(obj)
                {   

                        //判断是否登录
                        if ($('.userinfo').text()) {


                        // alert('收藏成功！')
                        var goods_id = $(obj).attr('good_id')
                        // alert(goods_id)
                        //添加收藏
                        $.get('/collect',{'goods_id':goods_id},function(msg){
                            if (msg == 1) {
                                layer.msg('收藏成功！')
                            }else if(msg == 2){
                                
                                layer.msg('收藏失败！')
                            }else if(msg == 3){

                                layer.msg('该宝贝已收藏，无需重复收藏！')
                            }
                        })
                    }else{
                        window.location = '/login'
                    }

                    // window.location = '/collect/'+goods_id
                }
            </script>

            <div class="panel-bottom">
            
                <a href="#"><p id="buyNow" class="panel-buyNow" style="width: 180px">立即购买</p></a>
                <p id="addShopCar"  style="width: 180px">加入购物车</p>
                <p class="shopCar-not">原材料库存不足</p>
            
            </div>
            <div>

            </div>
        </div>
    </div>
 

    <!-- 引入的bootsrtap和jquery -->
    <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/h/js/jquerysession.js"></script>
    <script type="text/javascript"> 
        $('#good_color li').click(function(){
            $('#good_color li').removeClass('lowModel-specs-active')
            $(this).toggleClass('lowModel-specs-active')
        })

        $('#good_rule li').click(function(){
            $('#good_rule li').removeClass('lowModel-specs-active')
            $(this).toggleClass('lowModel-specs-active')
        })

        // 立即购买业务处理
        $('#buyNow').click(function(){
            //获取商品颜色
            var good_color = $('#good_color .lowModel-specs-active').text()

            //获取商品尺寸
            var good_rule = $('#good_rule .lowModel-specs-active').text()

            //获取商品数量
            var good_number = $('.panel-number').text()
            
            //获取商品id
            var good_id = $('.good_id').val()

            //获取商品单价
            var good_price = $('#shop_price').text()

            //获取商品名称
            var good_name = $('.panel-top h1').text()

            //获取商品图片src
            var good_img = $('.editor-main').find('p img').attr('src')
 
            // alert($('.userinfo').text())  
            //判断是否登录，未登录则弹出登录层，登录则执行cookie存值和跳转
            if ($('.userinfo').text()) {
                // console.log(good_img)


                //判断是否选择商品参数
                if (good_color && good_rule && good_number) {
                    // console.log(good_color)
                    // alert('下单成功！')
                    // layer.msg('下单成功！')

                    //将数据存到cookie中
                    $.cookie('order_good_color',good_color,{path:'/'}) 
                    $.cookie('order_good_rule',good_rule,{path:'/'}) 
                    $.cookie('order_good_number',good_number,{path:'/'}) 
                    $.cookie('order_good_id',good_id,{path:'/'}) 
                    $.cookie('order_good_price',good_price,{path:'/'}) 
                    $.cookie('order_good_name',good_name,{path:'/'}) 
                    $.cookie('goods_img',good_img,{path:'/'}) 


                    //跳转到订单页
                                      
                        window.location = '/order/create'
               
                }else{
                    layer.msg('请选择商品参数！')
                    // alert('请选择商品参数！')

  
                }
            }else{
                window.location = '/login'
                // $('#1532048350284').css('display','block')
                // $('.layer').css('display','block')
            }
        })
 





        // 加入购物车业务处理
        $('#addShopCar').click(function(){
            //获取商品颜色
            var good_color = $('#good_color .lowModel-specs-active').text()

            //获取商品尺寸
            var good_rule = $('#good_rule .lowModel-specs-active').text()

            //获取商品数量
            var good_number = $('.panel-number').text()
            
            //获取商品id
            var good_id = $('.good_id').val()

            //获取商品单价
            var good_price = $('#shop_price').text()

            //获取商品名称
            var good_name = $('.panel-top h1').text()

            var good_attr = true

                    if (good_color && good_rule && good_number) {
                        //将数据发送给购物车页
                        layer.msg('添加购物车成功！')
                         //将数据存到cookie中
                        $.cookie('order_good_color',good_color,{path:'/'}) 
                        $.cookie('order_good_rule',good_rule,{path:'/'}) 
                        $.cookie('order_good_number',good_number,{path:'/'}) 
                        $.cookie('order_good_id',good_id,{path:'/'}) 
                        $.cookie('order_good_price',good_price,{path:'/'}) 
                        $.cookie('order_good_name',good_name,{path:'/'}) 
 
                    //将数据发送至购物车添加执行方法中
               

                        $.get('/cart/create',{'good_attr':good_attr,'good_color':good_color,'good_rule':good_rule,'good_number':good_number,'good_id':good_id,'good_price':good_price,'good_name':good_name,},function(msg){

                            if (msg == 1) {
                                // console.log(msg)   
 
                                //跳转到购物车页
                                window.location = '/cart'
                            }
                        })
                   



                        // console.log($.cookie('cart_good_rule'))
                    }else{
                        layer.msg('请选择商品参数！')
                    }
                 
                })



    </script>


    <div class="wrap mg_t30 ie78">
        <ul class="commodityList sizeZero" name="commodityList">
            <li class="inline productInfo product_Commodity checked "
                name="productInfo" data-a="0">商品信息<i class="inline"></i></li>
            <li class="inline productReview product_Commodity "
                name="productReview" data-a="130">评价详情 <i class="inline"></i></li>
            <li class="inline supplierInfo product_Commodity"
                name="supplierInfo" data-a="260">商家服务政策
            </li>
            <li class="checkedLine" style="left: 0"></li>
        </ul>
        <!-- 商品信息 -->
        <div class="cmImgShow t_c product_border productInfoView "
             name="productInfoView">
             {!!$good['goods_brief']!!}
        </div>
        <!-- 评价详情 -->
        <div class="product_border productReviewView none"
             name="productReviewView">
            <div class=" pd_t20 pd_b20">
                <div class="">
                    <div class="satisfactionBox sizeZero" id="avgRating">
                        <span class="inline f16 mg_l15 col_666">商品满意度</span> <span
                            class="inline mg_l30"> <em
                            class="bigXjGray inline spIcon"><i
                            class="bigXjF60 inline spIcon" style="width: 0px"
                            id="avgRatingImg"></i></em>
									</span> <span class="inline mg_l20"><span
                            class="col_f60 f16 inline" id="avgRatingCount">0</span> <span
                            class="inline col_666 f16">分</span></span> <span
                            class="inline col_999 f12 mg_l40">已有 <span
                            id="ReviewAllCount">0</span> 次评价
									</span>
                    </div>
                    <div class="evaluateItem"></div>
                </div>
                <div id="pagerDiv" class="pagination mg_t20 pages "></div>
            </div>

        </div>
        <!-- 商家服务政策 -->
        <div class="cmImgShow product_border supplierInfoView none"
             name="supplierInfoView">
            <div class="pd_l20 pd_r20"></div>
        </div>
    </div>
</div>
<div data-selector="J_im" id="webIM_showDiv"></div>

 
<script type="text/javascript">
    LazyLoad.js([
        window.ControllerSite+'/h/pc/common/js/jquery-1.8.3.js?biyaov='+window.version,
        window.ControllerSite+'/h/pc/minisite/byshoes/js/jquery.cookie.js?biyaov='+window.version,
        window.ControllerSite+'/h/pc/common/js/jquery.lazyload.min.js?biyaov='+window.version,
        window.ControllerSite+'/h/pc/common/js/jquery.extention.js?biyaov='+window.version,
        window.ControllerSite+'/h/pc/common/js/common.js?biyaov='+window.version,
        window.ControllerSite+'/h/pc/www/js/common.js?biyaov='+window.version,
        window.ControllerSite+'/h/pc/common/js/ui/dialog.js?biyaov='+window.version,
        window.ControllerSite+'/h/pc/common/js/scopeControll.js?biyaov='+window.version,
        window.ControllerSite+'/h/pc/common/js/freemodel/freemodel.js?biyaov='+window.version,
        window.ControllerSite+'/h/pc/common/js/ProductReview.js?biyaov='+window.version,
        window.ControllerSite+'/h/pc/www/js/product/lazyloadIM.js?biyaov='+window.version
    ])
</script>

<script type="text/javascript" src="/h/pc/common/js/bytrack.js?v=biyao_8b3cc7e"></script>


<div class="J_pop pop" id="1532006434044" data-dialog="1532006434044" style="z-index: 10000; width: 364px; top: 164px; left: 492.5px; position: fixed; display: none;"><div class="pop_hd"><span class="pop_close"></span><span class="pop_title f18">提示</span></div><div class="pop_bd"><div class="pd20">购买失败</div></div><div class="pop_ft"><a class="btnCom1 btnBg2 btnH1 inline pop_confirm w60 mg_l5" href="javascript:void(0)"><span>确定</span></a></div></div>
<script type="text/javascript">
    $('.pop_close').click(function(){
         $('#1532048350284').css('display','none')
         $('#back').css('display','none')
    })
</script>

@endsection
