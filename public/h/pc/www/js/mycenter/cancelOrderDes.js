function all_chk(e){$(e).hasClass("checked")?($.each($("label[name='order_chk']"),function(e,t){"1"==$(t).attr("order_status")&&$(t).addClass("checked")}),$(e).next().html("&nbsp;&nbsp;全不选")):($.each($("label[name='order_chk']"),function(e,t){$(t).removeClass("checked")}),$(e).next().html("&nbsp;&nbsp;全选"))}function deleteLastChar(e,t){var a=new RegExp(t+"([^"+t+"]*?)$");return e.replace(a,function(e){return e.length>1?e.substring(1):""})}function pay_all(e){var t="";if($.each($("label[name='order_chk']"),function(e,a){$(a).hasClass("checked")&&"1"==$(a).attr("order_status")&&(t+=$(a).attr("order_id")+",")}),t.length>0){t=deleteLastChar(t,",");var a=new Base64;t=a.encode(t),window.location.href=e+t+"&from_order_list=1"}else LT.alertSmall("请选择一个未付款的订单")}function Base64(){_keyStr="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",this.encode=function(e){var t,a,r,n,l,c,o,d="",i=0;for(e=_utf8_encode(e);i<e.length;)t=e.charCodeAt(i++),a=e.charCodeAt(i++),r=e.charCodeAt(i++),n=t>>2,l=(3&t)<<4|a>>4,c=(15&a)<<2|r>>6,o=63&r,isNaN(a)?c=o=64:isNaN(r)&&(o=64),d=d+_keyStr.charAt(n)+_keyStr.charAt(l)+_keyStr.charAt(c)+_keyStr.charAt(o);return d},_utf8_encode=function(e){e=e.replace(/\r\n/g,"\n");for(var t="",a=0;a<e.length;a++){var r=e.charCodeAt(a);128>r?t+=String.fromCharCode(r):r>127&&2048>r?(t+=String.fromCharCode(r>>6|192),t+=String.fromCharCode(63&r|128)):(t+=String.fromCharCode(r>>12|224),t+=String.fromCharCode(r>>6&63|128),t+=String.fromCharCode(63&r|128))}return t}}var _formcfg=LT.Form.Config;$(function(){var e=".J_option_label",t=".J_option_goods";LT.setRadioEffect(e,function(e){all_chk(e)},!0),LT.setRadioEffect(t),$(".cancelOrder").click(function(e){if($(".cancelOrder").hasClass("masked"))return!1;$(".cancelOrder").addClass("relative"),$(".cancelOrder").mask();var t=$(this).attr("orderId");outPutCancelDiv(t,e)})});var outPutCancelDiv=function(e,t){var a={orderId:e};$.ajax({type:"post",url:window.ControllerSite+"/MyCenters/GetCancelOrderType",async:!1,data:a,dataType:"json",success:function(a){if($(".cancelOrder").unmask(),a.success){var r='<form id="form2" method="post">';r+='<input type="hidden" id="hOrderId" name="hOrderId" value=""/><div id="divCancel" class="w200 posR mg_b10"><span id="span_Load">正在加载...</span></div>',r+='<table id="cancel_table" cellspacing="0" cellpadding="0" class="cancel_order mg_t15">',r+="</table>",r+="</form>",$(this).dialogFn({id:"confirm_center",type:"confirm",title:"取消订单",height:"",width:"350px",content:r,showAfter:function(){$("#span_Load").hide(),$("#hOrderId").val(e);var t=a.list,r="";if(t&&t.length>0)for(var n=0;n<t.length;n++)r+='<tr><td>&nbsp;</td><td><label class="col_666 cursor mg_r10"><input type="radio" class="mg_r10" name="reason" value="'+t[n].type_id+'"/>'+t[n].type_name+"</label></td></tr>";$("#cancel_table").prepend(r),$("#cancel_table tr:first td:first").text("请选择取消原因："),$("#cancel_table tr:last td:last label").append('<input type="text" id="txtComment" name="txtComment" value="" class="inpComn mg_l15" placeholder="请输入原因" />'),$("#cancel_table").append('<tr><td>&nbsp;</td><td><p id="canceltip" class="col_f90 mg_t10"></p></td></tr>'),$(":radio").click(function(){$(":radio:last").attr("checked")?($("#txtComment").attr("disabled",!1),$("#txtComment").focus()):($("#txtComment").val(""),$("#txtComment").attr("disabled",!0))})},callback:function(e){if(1==e){var t=this.id.find("form");if(myvalidate(t),t.submit(),!t.valid())return!0;var a=$("#form2 input[name='reason']:checked").val(),r=t.find("#txtComment").val(),n=$("#hOrderId").val();operateCancelOrder(n,a,r)}}}),t.preventDefault()}else LT.alertSmall(""!=a.msg?a.msg:"操作失败,请重试")}}).error(function(){$(".cancelOrder").unmask()})},operateCancelOrder=function(e,t,a){var r={orderId:e,reason:t,cancelComment:a};$.ajax({type:"POST",url:window.ControllerSite+"/MyCenters/CancelOrder",data:r,dataType:"json",success:function(e){e.success?LT.alertSmall("取消订单成功!",function(){window.location.href=window.location.href}):LT.alertSmall("操作失败,请重试!")}})},myvalidate=function(e){e.validate({submitHandler:function(){return!1},errorPlacement:function(e){e.appendTo($("#cancel_table tr:last td:last p"))},rules:{reason:{required:!0},txtComment:{maxlength:40}},messages:{reason:{required:"请选择退款原因"},txtComment:{maxlength:"最大长度为40个字符"}}})};