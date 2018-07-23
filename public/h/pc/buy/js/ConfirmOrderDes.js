function i_lose_point_click(e) {
    $(e).hasClass("checkedc") ? ($(e).removeClass("checkedc"), $("#is_use_point").addClass("none"), $("#point_true").html("").addClass("none"), lose_point_price = 0, point_num_pre = "", $("#point_message").attr("data-usepoint", "0"), $("#lose_point_text").val(""), $("#virtuapwd").val(""), $("#lose_point_price_id").text("¥0"), $("#total_order_price").text("¥" + Number(total_order_price).toFixed(0))) : ($(e).addClass("checkedc"), $("#is_use_point").removeClass("none"))
}
function lose_point(e) {
    var t = $.trim($("#lose_point_text").val());
    (!regx_num.test(t) || t.indexOf(".") > 0 || t.indexOf("-") > 0) && 0 != Number(t) || 0 == t ? "" != t && ($(e).blur(), LT.alertSmall("请输入整数"), $("#lose_point_text").val(point_num_pre)) : (Number(t) > Number($("#h_my_point").val()) && ($(e).blur(), LT.alertSmall("超出可用积分额度，本次交易最多可用：" + $("#h_my_point").val() + "点"), $("#lose_point_text").val($("#h_my_point").val())), point_num_pre = $.trim($("#lose_point_text").val()), lose_point_price = Number(point_num_pre / 100).toFixed(0), $("#lose_point_price_id").text("¥" + lose_point_price), $("#total_order_price").text("¥" + Number(total_order_price - lose_point_price).toFixed(0)))
}
function sub_point() {
    var e = $.trim($("#lose_point_text").val()), t = $.trim($("#virtuapwd").val());
    "" != e && "" != t ? $.post("/Order/getVirtualpwd", "virtualpwd=" + t, function (t) {
        "true" == t ? ($("#point_true").removeClass("none"), $("#point_message").attr("data-usepoint", "1"), $("#is_use_point").addClass("none"), $("#point_true").html("使用积分： " + e + " 点")) : LT.alertSmall("密码输入错误，请重新输入！")
    }) : LT.alertSmall("请输入密码！")
}
function a_need_invoice_id(e) {
    $(e).hasClass("checkedc") ? ($("#d_need_invoice").addClass("none"), $(e).removeClass("checkedc"), $('input[name="radio_need_invoice"]').removeAttr("checked"), $("#invoice_message").attr("need_invoice", "0"), $(".J_fp").html("").addClass("none"), $("#invoice_tip").addClass("none"), document.getElementById("btn_modify_voice").style.display = "none") : ($("#d_need_invoice").removeClass("none"), $(e).addClass("checkedc"), $("#need_invoice_1").click())
}
function modify_invoice() {
    $(".J_fp").html("").addClass("none"), $("#d_need_invoice").removeClass("none"), document.getElementById("btn_modify_voice").style.display = "none"
}
function checkAddressLength() {
    $("#i_address").val().length > 30 && ($("#i_address").blur(), LT.alertSmall("最多只能输入30个字符!"), $("#i_address").val($("#i_address").val().substring(0, 30)))
}
function check_invoice(e) {
    var t = $.trim($(e).val());
    if ("" == t)$("#invoice_tip").addClass("none"); else {
        if (!regx_.test(t))return LT.alertSmall("单位名称仅支持中英文和括号，请修改后再提交！"), $("#invoice_tip").addClass("none"), checkInvoiceFlag = !1, !1;
        $("#invoice_tip").removeClass("none"), checkInvoiceFlag = !0
    }
}
function select_send_type(e, t) {
    $.each($("input[name='order_design_num']"), function (i, s) {
        $(s).attr("supplier_id") == t && $(s).attr("send_type_value", e)
    })
}
function show_price() {
    var e = 0, t = 0, i = 0;
    return $.each($(".suppliergroup"), function (s, n) {
        var a = $(n).find("input[name='order_design_num']"), r = ($(a).attr("value"), $(a).attr("supplier_id")), d = $(a).attr("expresstype_id"), o = ($(a).val(), 0), c = 0, l = 0, _ = 0, p = 0, u = 0;
        "0" != d && (o = supplier_express[r][d], c = supplier_express_add[r][d], u = supplier_express_weight[r][d], weight_add = supplier_express_weight_add[r][d]);
        var h = $(n).find(".td_buy_num[data-pt='2']"), m = new Array;
        $.each(h, function (e, t) {
            $.inArray($(t).attr("data-pd"), m) < 0 && m.push($(t).attr("data-pd"))
        }), $.each(m, function (e, t) {
            var i = $(n).find(".td_buy_num[data-pt='2'][data-pd='" + t + "']"), s = 0, a = 0;
            return $(i).find(".td_buy_num[data-pc='1']").length > 0 ? !0 : ($.each($(i), function (e, t) {
                s += parseInt($(t).find("span:first-child").text()), a += parseFloat($(t).attr("data-weight")) * parseInt($(t).find("span:first-child").text())
            }), void(u >= a || 0 == weight_add ? l += o : a > u && (l = l + o + Math.ceil((a - u) / weight_add) * c)))
        });
        var v = $(n).find(".td_buy_num[data-pt!='2']");
        if (0 == $(n).find(".td_buy_num[data-pt!='2'][data-pc='1']").length) {
            var f = 0, x = 0;
            $.each($(v), function (e, t) {
                f += parseInt($(t).find("span:first-child").text()), x += parseInt($(t).find("span:first-child").text()) * parseFloat($(t).attr("data-weight"))
            }), u >= x || 0 == weight_add ? l += o : x > u && (l = l + o + Math.ceil((x - u) / weight_add) * c)
        }
        $(n).find("span[name='order_express_price']:first-child").html("¥" + l.toFixed(0)), _ = Number($(n).find("input[name='order_design_price']:first-child").val()), p = _ + l, $(n).find("span[name='order_price']:first-child").html("¥" + p.toFixed(0)), e += l, t += _, i += p, my_total_order_price = i
    }), $("#total_order_design_price").html("¥" + t.toFixed(0)), $("#total_order_express_price").html("¥" + e.toFixed(0)), 0 == t ? void $("#total_order_price").text("¥0") : void $("#total_order_price").text("¥" + Number(i - lose_point_price - selectCoupon.amount).toFixed(0))
}
function change_address_css(e) {
    $.each($("li[name='ul_address_n']"), function (e, t) {
        $(t).removeClass("checked")
    });
    var t = $(e);
    $(t).addClass("checked")
}
function i_address_n_click(e) {
    $(e).hasClass("checked") || ($.each($("li[name='ul_address_n']"), function (e, t) {
        $(t).removeClass("checked")
    }), $(e).addClass("checked"), change_address_css(e), $("#i_address_id").val($(e).attr("address_id")), $("#i_area_id").val($(e).attr("area_id")), get_express(), show_price())
}
function i_address_click(e) {
    $(e).next().click()
}
function get_express() {
    supplier_express = {}, supplier_express_add = {}, supplier_express_weight = {}, supplier_express_weight_add = {};
    var e = $("#i_area_id").val();
    $.each($("div[name='select_express_type_div']"), function (t, i) {
        var s = $(i).attr("supplier_id"), n = {}, a = {}, r = {}, d = {};
        $.each($("input[name='order_design_num']"), function (e, t) {
            $(t).attr("supplier_id") == s && $(t).attr("expresstype_id", "0")
        }), $.ajax({
            type: "post",
            cache: !1,
            async: !1,
            data: {areaid: e, supplierid: s},
            url: window.basePath + "/orders/getExpressList",
            success: function (e) {
                if (0 == e.length)return LT.alertSmall("抱歉，您的收货地址超出商家配送范围，建议您更换地址~", function () {
                }), $(i).html("").data("SelectFn", ""), !1;
                for (var t = 0; t < e.length; t++)n[e[t].expresstype_id] = e[t].price, a[e[t].expresstype_id] = e[t].nextprice, r[e[t].expresstype_id] = e[t].weight, d[e[t].expresstype_id] = e[t].nextWeight, e[t].supplierId = s;
                1 == e.length ? $(i).html('<span class="inline col_999 f12">' + e[0].expresstype_name + "(¥" + e[0].price + ") ----- 续重(¥" + e[0].nextprice + ")</span>") : $(i).selectFn({
                    valueField: "expresstype_id",
                    attr: {supplier_id: "supplierId"},
                    textField: "{expresstype_name} (¥{price}) ----- 续重 (¥{nextprice})",
                    data: e,
                    tips: "",
                    change: function () {
                        select_express(this.item)
                    }
                }), $.each($("input[name='order_design_num']"), function (t, i) {
                    $(i).attr("supplier_id") == s && $(i).attr("expresstype_id", e[0].expresstype_id)
                }), supplier_express[s] = n, supplier_express_add[s] = a, supplier_express_weight[s] = r, supplier_express_weight_add[s] = d
            }
        })
    })
}
function select_express(e) {
    $.each($("input[name='order_design_num']"), function (t, i) {
        $(i).attr("supplier_id") == $(e).attr("supplierId") && $(i).attr("expresstype_id", $(e).attr("expresstype_id"))
    }), show_price()
}
function use_invoice() {
    return $("#need_invoice_2").hasClass("checkedr") && "" == $.trim($("#invoice_title_text").val()) ? void LT.alertSmall("请填写发票单位名称！") : void($("#need_invoice_1").hasClass("checkedr") || $("#need_invoice_2").hasClass("checkedr") ? ($("#need_invoice_1").hasClass("checkedr") && ($(".J_fp").removeClass("none"), $("#invoice_title_text").val(""), $("#invoice_tip").addClass("none")), $("#need_invoice_2").hasClass("checkedr") && ($(".J_fp").removeClass("none"), $("#invoice_tip").removeClass("none")), $("#invoice_message").attr("need_invoice", "1"), $("#d_need_invoice").addClass("none"), document.getElementById("btn_modify_voice").style.display = "block") : LT.alertSmall("有了抬头的发票才是一张完整的发票"))
}
function confirm_order() {
    if (LT.temp.loginFn.islogin_dialog(!0)) {
        if (experienceUseFlag && 0 != selectCoupon.amount)return LT.alertSmall("只能使用一种优惠方式"), void $("#submitorder").unmask();
        if (!experienceUseFlag && "¥0" == $("#total_order_price").text())return LT.alertSmall("非常抱歉，订单提交不成功，如有疑问请与商家客服联系"), void $("#submitorder").unmask();
        if ("0" == $("#i_address_id").val())return void(0 == $("#d_address").find('li[name="ul_address_n"]').length ? (LT.alertSmall("请选择收货地址"), $("#submitorder").unmask()) : (LT.alertSmall("请选择收货地址"), $("#submitorder").unmask()));
        if ($("#ck_is_p").hasClass("checkedc") && "0" == $("#point_message").attr("data-usepoint"))return LT.alertSmall("请完成积分项"), void $("#submitorder").unmask();
        var e = "";
        if ($("#ck_is_i").hasClass("checkedc")) {
            if ($("#need_invoice_2").hasClass("checkedr") && "" == $.trim($("#invoice_title_text").val()))return LT.alertSmall("请填写发票单位名称！"), void $("#submitorder").unmask();
            if (check_invoice($("#invoice_title_text")), $("#need_invoice_2").hasClass("checkedr") && !checkInvoiceFlag)return void $("#submitorder").unmask();
            if (!$("#need_invoice_1").hasClass("checkedr") && !$("#need_invoice_2").hasClass("checkedr"))return LT.alertSmall("有了抬头的发票才是一张完整的发票"), void $("#submitorder").unmask();
            $("#need_invoice_1").hasClass("checkedr") && ($(".J_fp").removeClass("none"), $("#invoice_title_text").val(""), e = "个人", $("#invoice_tip").addClass("none")), $("#need_invoice_2").hasClass("checkedr") && ($(".J_fp").removeClass("none"), $("#invoice_tip").removeClass("none"), e = $.trim($("#invoice_title_text").val())), $("#invoice_message").attr("need_invoice", "1"), $("#d_need_invoice").addClass("none"), document.getElementById("btn_modify_voice").style.display = "block"
        }
        var t = !0, i = "";
        if ($.each($("input[name='order_design_num']"), function (e, s) {
                "0" == $(s).attr("expresstype_id") ? t = !1 : i += $(s).attr("supplier_id") + "|" + $(s).attr("expresstype_id") + ","
            }), !t)return LT.alertSmall("请选择配送方式"), void $("#submitorder").unmask();
        var s = !0, n = "";
        if ($.each($("input[name='order_design_num']"), function (e, t) {
                "-1" == $(t).attr("send_type_value") ? s = !1 : n += $(t).attr("supplier_id") + "|" + $(t).attr("send_type_value") + ","
            }), !s)return LT.alertSmall("请选择送货时间"), void $("#submitorder").unmask();
        var a = !0, r = "", d = "";
        if ($.each($("textarea[name='express_c']"), function (e, t) {
                $(t).val().length > 50 ? (a = !1, r = "留言不超过50个字!") : d += $(t).attr("supplier_id") + "|" + encodeURI($(t).val()) + ","
            }), !a)return LT.alertSmall(r), void $("#submitorder").unmask();
        var o = "";
        $(".sizeno").each(function () {
            o = o + $(this).val() + ","
        }), o = o.substr(0, o.length - 1);
        var c = {
            address_id: $("#i_address_id").val(),
            express: i,
            p_s_send_type: n,
            p_express_c: d,
            need_invoice_val: $("#invoice_message").attr("need_invoice"),
            need_point_val: $("#point_message").attr("data-usepoint"),
            invoice_type: $("input[name='radio_need_invoice']").val(),
            invoice_title_val: encodeURI(e),
            lose_point_name: "0",
            virtuapwd: $.trim($("#virtuapwd").val()),
            shop_car_id: $.trim($("#shop_car_id").val()),
            suIds: $.trim($("#hid_designids").val()),
            num: $.trim($("#hid_designnum").val()),
            sourceStr: $.cookie("source"),
            sourcetype: 0,
            from: $("#fromId").val(),
            supplier_id: $("#supplier_IDForDiscountCode").attr("supplier_id"),
            sizeno: o
        }, l = $("#experienceCodeHidden").val();
        "inline experience_use_btn" == $("#experienceCancelBtn").attr("class") && l && (c.discount_code = l), c.couponcode = selectCoupon.code;
        $.ajax({
            type: "post",
            cache: !1,
            async: !1,
            data: c,
            url: window.basePath + "/orders/confirmOrder",
            success: function (e) {
                if ($("#submitorder").unmask(), 205017 != e.success) {
                    if (220001 == e.success)return void LT.alertSmall("F码无效，请核对后重新输入");
                    if (250007 == e.success)return void LT.alertSmall("系统处理异常，请您稍后再试");
                    if (220002 == e.success)return void LT.alertSmall("F码已失效");
                    if (220003 == e.success)return void LT.alertSmall("F码已失效");
                    if (230001 == e.success)return void LT.alertSmall("非常抱歉，您选购的部分商品原材料不足，无法购买，请返回购物车修改");
                    if (1e5 == e.success)return void LT.alertSmall("系统异常");
                    if (240001 == e.success)return void LT.alertSmall("体验码无效");
                    if (240002 == e.success)return void LT.alertSmall("很遗憾，此体验码已经过期了");
                    if (240003 == e.success)return void LT.alertSmall("体验码已使用");
                    if (240004 == e.success)return void LT.alertSmall("该体验码只能购买1件商品哟，请返回购物车修改");
                    if (240005 == e.success)return void LT.alertSmall("该体验码只能购买" + e.message + "商品，请返回购物车修改");
                    if (240006 == e.success)return void LT.alertSmall("该体验码只能购买指定商品，请核查后再使用");
                    if (240007 == e.success)return void LT.alertSmall("太遗憾了，您的体验码已过期，不能购买此商品");
                    if (240008 == e.success)return void LT.alertSmall("体验码验证失败，请稍后再试");
                    if (24e4 == e.success)location.href = window.basePath + "/order/chargesuccess?order_pay_code=" + e.orderId; else {
                        if (0 == e.success)return void LT.alertSmall(e.error.message);
                        location.href = 1 == e.data.isPaid ? window.basePath + "/order/chargesuccess?order_pay_code=" + e.data.orderid : window.location.href.indexOf("#nsc") > -1 ? window.basePath + "/order/onlineCharge?menuType=ShopCar&order_id_list=" + e.data.orderid + "#nsc" : window.basePath + "/order/onlineCharge?menuType=ShopCar&order_id_list=" + e.data.orderid
                    }
                } else {
                    for (var t = 0; t < e.itemsCannotBuy.length; t++)$("td[designid]").each(function () {
                        $(this).attr("designid"), $(this).attr("designid") == e.itemsCannotBuy[t] && 0 == $(this).find("p").length && $(this).append('<br><p class="col_b76 mg_t5 msg_pos_kc">原材料不足</p>')
                    });
                    if ("book" == $("#fromId").val()) {
                        {
                            var t;
                            $.trim($("#hid_designids").val()).split(","), $.trim($("#hid_designnum").val()).split(","), $.trim($("#shop_car_id").val()).split(",")
                        }
                        $(document).dialogFn({
                            type: "alert",
                            title: "提示",
                            width: "520px",
                            btnshow: !1,
                            content: '<div class="pop_bd  pd_t40 t_c"><div class="sale_none sizeZero"><i class="inline mg_r15 erro "></i><span class="inline col_b76 f20">非常抱歉，已售罄…</span></div><p class="sale_txt mg_b40">再快一些就好了，商品已全部售罄，<br />别气馁，您可立即预约下一轮购买。</p><div class="sizeZero mg_b20"><a href="#" class="inline reservation_next mg_r20 w120" id="book_next">预约下一轮</a><a href="#" class="inline sale_btn_back" id="index_back">返回首页</a></div></div>'
                        }), $("#book_next").click(function () {
                            window.location.href = "http://buy.biyao.com/book/index.html?offset=0&num=20"
                        }), $("#index_back").click(function () {
                            window.location.href = "index.html"
                        })
                    } else LT.alertSmall("非常抱歉，所选商品包含原材料不足商品，无法购买！ 请返回购物车修改商品。", function () {
                        location.href = window.basePath + "/shopcars/index.html"
                    })
                }
            },
            error: function () {
                LT.alertSmall("网络异常，请重试！"), $("#submitorder").unmask()
            },
            complete: function () {
                $("#submitorder").unmask()
            }
        })
    }
}
function s_update_address(e, t, i, s, n, a, r, d, o, c, l, _) {
    LT.temp.loginFn.islogin_dialog(!0) && (is_update = 1, $(this).dialogFn({
        type: "alert",
        title: "修改收货地址",
        height: "250px",
        width: "750px",
        btnText: ["寄到该地址"],
        content: $("#pop_address").html(),
        callback: function (e) {
            return $(".pop_confirm").hasClass("masked") ? !1 : ($(".pop_confirm").addClass("relative"), $(".pop_confirm").mask(), 1 == e ? ($("#pop_address").hide(), save_address(this)) : void 0)
        },
        showAfter: function () {
            var n = this.id;
            n.find(".pop_ft").css({
                "float": "left",
                "margin-left": "163px",
                "margin-top": "8px"
            }), n.find("#i_address_id").val(e), n.find("#i_receiver").val(t), n.find("#i_phone").val(i), n.find("#i_address").val(s), n.find("#i_ADDR_ID").val(d), n.find("#i_post_code").val(_), n.find("#i_default_address").show(), 1 == o ? n.find("#i_default_address").attr("checked", !0) : n.find("#i_default_address").removeAttr("checked"), n.find(".isdefault>.openIcon").show(), 1 == o ? n.find(".isdefault>.openIcon").addClass("checkedc") : n.find(".isdefault>.openIcon").removeClass("checkedc"), n.find("#default_address_html").html("设为默认地址"), n.find(".perinp").keydown(function () {
                $(this).addClass("onshowtext")
            }), $.ajax({
                type: "post", async: !1, url: window.basePath + "/order/getProvince", success: function (e) {
                    n.find("#provice_seletor").selectFn({
                        textField: "addr_name",
                        valueField: "addr_id",
                        maxRow: 10,
                        data: e,
                        value: c,
                        change: change_province
                    })
                }
            }), $.ajax({
                type: "post",
                async: !1,
                data: {provinceid: c},
                url: window.basePath + "/order/getCity",
                success: function (e) {
                    n.find("#city_seletor").selectFn({
                        textField: "addr_name",
                        valueField: "addr_id",
                        value: l,
                        data: e,
                        change: change_city
                    })
                }
            }), $.ajax({
                type: "post",
                async: !1,
                data: {cityid: l},
                url: window.basePath + "/order/getCountry",
                success: function (e) {
                    n.find("#area_seletor").selectFn({
                        textField: "addr_name",
                        valueField: "addr_id",
                        value: d,
                        data: e,
                        change: change_area
                    })
                }
            })
        }
    }))
}
function s_new_address() {
    if (LT.temp.loginFn.islogin_dialog(!0)) {
        is_update = 0;
        var e = "修改收货地址";
        return "0" == is_update && (e = "请输入新地址", $("#d_address").find("li").length > 5) ? void LT.alertSmall("对不起，最多只能维护5个收货地址！") : void $(this).dialogFn({
            type: "alert",
            title: e,
            height: "250px",
            width: "750px",
            btnText: ["寄到该地址"],
            content: $("#pop_address").html(),
            callback: function (e) {
                return 1 == e ? ($("#pop_address").hide(), save_address(this)) : void 0
            },
            showAfter: function () {
                var e = this.id;
                e.find(".pop_ft").css({
                    "float": "left",
                    "margin-left": "163px",
                    "margin-top": "8px"
                }), e.find("#i_default_address").show(), e.find("#i_default_address").attr("checked", !0), e.find("#default_address_html").html("设为默认地址"), e.find(".perinp").keydown(function () {
                    $(this).addClass("onshowtext")
                }), $.ajax({
                    type: "get",
                    cache: !1,
                    async: !1,
                    url: window.basePath + "/order/getProvince",
                    success: function (t) {
                        e.find("#provice_seletor").selectFn({
                            textField: "addr_name",
                            valueField: "addr_id",
                            maxRow: 10,
                            data: t,
                            change: change_province
                        })
                    }
                }), e.find("#city_seletor").selectFn({
                    textField: "addr_name",
                    valueField: "addr_id",
                    change: change_city
                }), e.find("#area_seletor").selectFn({
                    textField: "addr_name",
                    valueField: "addr_id",
                    change: change_area
                })
            }
        })
    }
}
function ValidateSpecialCharacter() {
    var e;
    e = document.all ? window.event.keyCode : arguments.callee.caller.arguments[0].which;
    var t = String.fromCharCode(e), i = "#$%^*'\"+";
    return flg = i.indexOf(t) >= 0, flg ? (alert("请勿输入特殊字符: " + t), !1) : !0
}
function change_province() {
    $("#city_seletor").setValue(""), $("#area_seletor").setValue(""), $("#area_seletor").setOptions([]), $("#i_ADDR_ID").val(""), $.ajax({
        type: "post",
        cache: !1,
        async: !1,
        data: {provinceid: this.value},
        url: window.basePath + "/order/getCity",
        success: function (e) {
            $("#city_seletor").setOptions(e)
        }
    })
}
function change_city() {
    $("#area_seletor").setValue(""), $("#i_ADDR_ID").val(""), $.ajax({
        type: "post",
        cache: !1,
        async: !1,
        data: {cityid: this.value},
        url: window.basePath + "/order/getCountry",
        success: function (e) {
            $("#area_seletor").setOptions(e)
        }
    })
}
function change_area() {
    $("#i_ADDR_ID").val(this.value);
    var e = $('div[for="i_ADDR_ID"]:contains("请选择省市区")');
    "undefined" != typeof isSubmitted && ("--请选择--" === $("#area_seletor > div > span").text() ? e.show() : e.hide())
}
function save_address(e) {
    if (LT.temp.loginFn.islogin_dialog(!0)) {
        var t = $(e.id).find("form");
        myvalidate(t), t.submit();
        if (!t.valid())return !0;
        var i = t.find("#i_receiver"), s = t.find("#i_ADDR_ID"), n = t.find("#i_address"), a = t.find("#i_phone"), r = "0";
        t.find("#i_default_address").attr("checked") && (r = "1");
        var d = {
            address: $.trim(n.val()),
            phone: $.trim(a.val()),
            receiver: $.trim(i.val()),
            areaId: s.val(),
            isdefault: r,
            addressId: t.find("#i_address_id").val(),
            zipcode: "000000",
            isUpdate: is_update
        };
        $.ajax({
            type: "post",
            cache: !1,
            async: !1,
            data: d,
            url: window.basePath + "/order/SaveAddress",
            success: function (e) {
                return 0 == e.success ? (LT.alertSmall(1 == is_update ? "修改失败" : "添加失败"), !0) : (GetAddress(), $.each($("li[name='ul_address_n']"), function (e, i) {
                    $(i).attr("address_id") == t.find("#i_address_id").val() && $(i).click()
                }), get_express(), show_price(), !1)
            }
        })
    }
}
function delAddress(e) {
    LT.temp.loginFn.islogin_dialog(!0) && LT.confirmSmall("确定要删除这个地址吗?", function (t) {
        1 == t && $.ajax({
            type: "post",
            cache: !1,
            async: !1,
            data: {addressId: e},
            url: window.basePath + "/order/deleteAddress",
            success: function (t) {
                if (0 == t.success)LT.alertSmall("删除失败"); else {
                    var i = "0";
                    $.each($("li[name='ul_address_n']"), function (e, t) {
                        $(t).hasClass("ad_ck") && (i = $(t).attr("address_id"))
                    }), GetAddress(), $(".address_box").first().click(), i != e && "0" != i && $.each($("li[name='ul_address_n']"), function (e, t) {
                        $(t).attr("address_id") == i && $(t).click()
                    })
                }
            }
        })
    })
}
function GetAddress() {
    $.ajax({
        type: "post", cache: !1, async: !1, url: "getReciveAddress.php", success: function (e) {
            $("#d_address").html(e.data)
        }
    }), $.ajax({
        type: "post",
        cache: !1,
        async: !1,
        url: "getReciveAddressShowOnconfirmOrder.php",
        success: function (e) {
            $("#confirmorder_show_address").html(e.data)
        }
    })
}
function couponinit() {
    var e = $("#conponinit"), t = couponList.length, i = unCouponList.length;
    if ($("#ky_coupon").html(t), $("#bky_coupon").html(i), t) {
        var s = (parseInt($("#total_order_design_price").text().substring(1)), couponList[0]);
        e.html("已优惠<span class='col_f85453' >¥" + s.amount + "</span>"), $("#couponPrice").text("¥" + s.amount), e.attr("couponCode", s.code), e.attr("couponamount", s.amount), selectCoupon.code = s.code, selectCoupon.amount = s.amount
    } else e.html("您当前共有" + t + "个红包可用"), $("#couponPrice").text("¥0")
}
function couponListView() {
    if (couponList.length) {
        var e = $(this).attr("viewState");
        if (0 == e) {
            var t = "<table class='couponList_table'>";
            $.each(couponList, function () {
                t += "<tr><td width='10%'><i  class='openIcon inline cursor couponCheck' couponCode='" + this.code + "' couponAmount='" + this.amount + "'></i></td><td width='20%' class='col_f85453'>¥" + this.amount + "</td><td width='40%'>有效期至：" + this.expiredTimeShow + "</td><td width='30%'>" + this.depict + "</td></tr>"
            }), t += "</table>", $("#couponListUsed").append(t), $(".couponList_table tr").find("i[couponCode=" + $("#conponinit").attr("couponcode") + "]").addClass("checkedc"), couponCheck(), $(this).attr("viewState", 1)
        } else $("#couponListUsed .couponList_table").remove(), $(this).attr("viewState", 0)
    } else $("#couponListUsed").html('<p class="col_666 mg_t10 mg_l15">您目前无可用红包</p>')
}
function unCouponListView() {
    if (unCouponList.length) {
        var e = "<table class='couponList_table'>";
        $.each(unCouponList, function () {
            e += "<tr><td width='10%' class='disabled'><i  class='openIcon inline' couponCode='" + this.code + "' couponAmount='" + this.amount + "'></i></td><td width='20%' class='col_999'>¥" + this.amount + "</td><td width='40%'  class='col_999'>有效期至：" + this.expiredTimeShow + "</td><td width='30%'  class='col_999'>" + this.depict + "</td></tr>"
        }), e += "</table>", $("#unCouponListUsed").append(e)
    } else $("#unCouponListUsed").html('<p class="col_666 mg_t10 mg_l15">您目前无不可用红包</p>')
}
function couponCheck() {
    $(".couponCheck").click(function () {
        var e = (parseInt($("#total_order_design_price").text().substring(1)), $(this).hasClass("checkedc")), t = $("#conponinit"), i = couponList.length;
        return $(".couponCheck").removeClass("checkedc"), e ? (t.html("您当前共有" + i + "个红包可用"), $("#couponPrice").text("¥0"), t.attr("couponCode", ""), t.attr("couponamount", ""), selectCoupon.code = "", selectCoupon.amount = 0, void show_price()) : ($(this).addClass("checkedc"), t.html("已优惠<span class='col_f60' >¥" + $(this).attr("couponamount") + "</span>"), t.attr("couponCode", $(this).attr("couponcode")), t.attr("couponamount", $(this).attr("couponamount")), selectCoupon.code = $(this).attr("couponcode"), selectCoupon.amount = $(this).attr("couponamount"), $("#couponPrice").text("¥" + $(this).attr("couponamount")), $("#total_order_price").text(), void show_price())
    })
}
var is_update = 0, supplier_express = {}, supplier_express_add = {}, supplier_express_weight = {}, supplier_express_weight_add = {}, regx_num = /^\+?[1-9][0-9]*$/, regx_ = /^[\u4e00-\u9fa5\a-zA-ZＡ-Ｚａ-ｚ\（）（）（）\(\)]+$/, point_num_pre = "", lose_point_price = 0, total_order_design_price = 0, total_order_price = 0, discount_price = 0, _formcfg = LT.Form.Config, my_total_order_price = 0, send_type_data = [{
    value: 0,
    text: "工作日、双休日、假日均可送货"
}, {value: 1, text: "只工作日送货"}, {value: 2, text: "只双休日、假日送货"}], experienceUseFlag = !1, checkInvoiceFlag = !1;
$(function () {
    if (couponinit(), unCouponListView(), $(".couponList_add").click(couponListView), $(".couponList_add").click(function () {
            $(this).toggleClass("couponList_minus"), $(".coupon_show").toggle()
        }), window.location.href.indexOf("#nsc") > -1) {
        var e = '<div class="steps_left"></div><div class="steps_right clearfix"><ul class="steps3"><li class="step_checked"><div>1.确认订单信息</div></li><li>2.在线付款</li><li>3.等待收货给出评价</li></ul></div>';
        $(".stepsbox").html(e)
    }
    $("#lose_point_text").val("");
    var t = !1;
    if (GetAddress(), $.each($("li[name='ul_address_n']"), function (e, i) {
            return $(i).hasClass("checked") ? (t = !0, !1) : void 0
        }), !t && $("li[name='ul_address_n']").length > 0) {
        var i = $($("li[name='ul_address_n']")[0]);
        change_address_css(i), $("#i_address_id").val(i.attr("address_id")), $("#i_area_id").val(i.attr("area_id")), t = !0
    }
    "0" != $("#i_address_id").val() ? (get_express(), show_price()) : (total_order_design_price = $("#total_order_design_price_h").val(), total_order_price = total_order_design_price), $.each($("div[name='select_send_type_div']"), function (e, t) {
        var i = $(t).attr("supplier_id");
        $(t).selectFn({
            data: send_type_data, textField: "text", valueField: "value", tips: "", change: function () {
                select_send_type(this.value, i)
            }
        });
        for (var s = 0; s < send_type_data.length; s++)$("#c_send_type").val() == send_type_data[s].value && ($(t).setValue($("#c_send_type").val()), $.each($("input[name='order_design_num']"), function (e, t) {
            $(t).attr("supplier_id") == i && $(t).attr("send_type_value", send_type_data[s].value)
        }));
        $(t).setValue(0)
    }), $("#invoice_click").click(function (e) {
        e.stopPropagation()
    }), $("#i_default_address").live("click", function () {
        $(this).attr("checked") ? $(this).prev().addClass("checkedc") : $(this).prev().removeClass("checkedc")
    }), t || s_new_address(), $(".set_def").live("click", function () {
        var e = $(this);
        $.ajax({
            type: "post",
            cache: !1,
            async: !1,
            data: {addressid: e.attr("address_id")},
            url: window.basePath + "/order/SetDefaultAddress",
            success: function (t) {
                return 0 == t.success ? (LT.alertSmall("修改失败"), !0) : (GetAddress(), $.each($("li[name='ul_address_n']"), function (t, i) {
                    $(i).attr("address_id") == e.attr("address_id") && $(i).click()
                }), !1)
            }
        })
    }), 0 == $.trim($("#hid_designids").val()).length ? ($("#submitorder").unbind(), $("#submitorder").removeClass("confirm_120"), $("#submitorder").addClass("confirm_120_dis")) : $("#submitorder").on("click", function () {
        return $("#submitorder").hasClass("masked") ? !1 : ($("#submitorder").addClass("relative"), $("#submitorder").mask(), void confirm_order())
    })
}), $("#experienceBtn").on("click", function () {
    $("#experienceInputOut").hasClass("none") ? $("#experienceInputOut").removeClass("none") : $("#experienceInputOut").addClass("none")
}), $("#couponTitShow").tabso({
    cntSelect: "#couponShowBox",
    tabEvent: "click",
    tabStyle: "fade"
}), $("#experienceUseBtn").on("click", function () {
    if ($("#experienceUseBtn").hasClass("masked"))return !1;
    $("#experienceUseBtn").addClass("relative"), $("#experienceUseBtn").mask();
    var e = $("#experienceInput").val(), t = $("#productNum").text();
    if ("" == e)return $("#experienceCheckTips").text("体验劵输入不能为空，请您重新输入"), void $("#experienceUseBtn").unmask();
    if (t > 1)return $("#experienceCheckTips").text("该体验码只能购买1件商品哟，请返回购物车修改"), void $("#experienceUseBtn").unmask();
    var i = "http://buy.biyao.com", s = {
        discount_code: e,
        supplier_id: $("#supplier_IDForDiscountCode").attr("supplier_id"),
        su_id: $("#design_ids").val().substring(1, $("#design_ids").val().length - 1)
    };
    $.ajax({
        type: "post",
        url: i + "/discountcodeSU/check",
        data: s,
        async: !1,
        cache: !1,
        dataType: "json",
        success: function (t) {
            if ($("#experienceUseBtn").unmask(), 0 == t.success) {
                if (240001 == t.error.code)return $("#experienceCheckTips").text("体验码无效"), void(experienceUseFlag = !1);
                if (240002 == t.error.code)return $("#experienceCheckTips").text("很遗憾，此体验码已经过期了"), void(experienceUseFlag = !1);
                if (240003 == t.error.code)return $("#experienceCheckTips").text("很遗憾，您的体验码已经被使用，不能购买此商品"), void(experienceUseFlag = !1);
                if (240005 == t.error.code) {
                    var i = JSON.parse(t.error.data);
                    return $("#experienceCheckTips").text("该体验码只能购买" + i.supplier_info.supplier_name + "商品，请返回购物车修改"), void(experienceUseFlag = !1)
                }
                return 240006 == t.error.code ? ($("#experienceCheckTips").text("该体验码只能购买指定商品，请核查后再使用"), void(experienceUseFlag = !1)) : 240007 == t.error.code ? ($("#experienceCheckTips").text("很遗憾，此体验码已经作废了"), void(experienceUseFlag = !1)) : 240008 == t.error.code ? ($("#experienceCheckTips").text("体验码验证失败，请稍后再试"), void(experienceUseFlag = !1)) : (LT.alertSmall("体验码验证失败，请重试！"), void(experienceUseFlag = !1))
            }
            $("#experienceInput").disabled = "disabled", document.getElementById("experienceInput").readOnly = !0, $("#experienceUseBtn").addClass("none"), document.getElementById("experienceCheckTips").innerHTML = '<i class="inline tyq_bg tb1 mg_r5"></i><span class="inline f12 col_b76">验证成功</span>', $("#experienceCancelBtn").removeClass("none");
            var s = Number(my_total_order_price).toFixed(2);
            return document.getElementById("discount_price").innerHTML = '优惠金额：<span class="w80 inline fb t_r col_f60 pd_r5">¥' + s + "</span>", $("#total_order_price").text("¥0"), $("#experienceCodeHidden").val(e), void(experienceUseFlag = !0)
        },
        error: function () {
            LT.alertSmall("网络异常，请重试！"), $("#experienceUseBtn").unmask()
        },
        complete: function () {
            $("#experienceUseBtn").unmask()
        }
    })
}), $("#experienceCancelBtn").on("click", function () {
    $("#experienceInput").disabled = "", document.getElementById("experienceInput").readOnly = !1, $("#experienceInput").val(""), document.getElementById("experienceCheckTips").innerHTML = "", $("#experienceCancelBtn").addClass("none"), $("#experienceUseBtn").removeClass("none"), document.getElementById("discount_price").innerHTML = '优惠金额：<span class="w80 inline fb t_r col_f60 pd_r5"> - </span>', show_price(), experienceUseFlag = !1
}), $(document).delegate("#invoice_title_text", "blur", function () {
    check_invoice($(this))
});
var myvalidate = function (e) {
    e.validate({
        submitHandler: function () {
            return !1
        },
        rules: {
            i_n_receiver: {required: !0},
            i_n_ADDR_ID: {required: !0},
            i_n_address: {required: !0},
            i_n_phone: {required: !0, mobile: !0}
        },
        messages: {
            i_n_receiver: {required: "请输入收货人姓名！"},
            i_n_ADDR_ID: {required: "请选择收货区域！"},
            i_n_address: {required: "请输入详细地址,最多30个字符!"},
            i_n_phone: {mobile: "请输入有效的手机号！", required: "请输入手机号！"}
        }
    })
};