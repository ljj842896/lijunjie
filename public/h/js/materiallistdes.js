$(".material_list").click(function(){var t=$(this);$(this).dialogFn({type:"confirm",title:"用料清单",drag:!0,height:"",width:"450",content:$("#materialsOfProductTemplate").html(),btnshow:!1,showAfter:function(){var a={suId:$(t).attr("designid")};$.ajax({type:"POST",url:window.basePath+"/shopcars/getMaterialsOfProduct",data:a,dataType:"json",async:!1,success:function(t){if(1==t.success){if(t.data.material_list.length>0){var a=t.data.material_list;for(var e in a){var i=a[e];$(".ml_list").append("<li class='inline'><img src="+i.show_img+" width='120' height='80' alt='"+i.show_name+"' /><p title='"+i.show_name+"' class='col_666 lineH40 f12 w120 escp'>"+i.show_name+"</p>")}$(window).resize()}}else{if(200006==t.error.code)return LT.alertSmall("该商品已下架！"),void $(".pop_close").click();if(1==t.error.code)return LT.alertSmall("网络异常，请检查您的网络！"),void $(".pop_close").click()}},error:function(){LT.alertSmall("网络异常！")}})},callback:function(){}})});