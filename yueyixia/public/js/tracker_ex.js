function defer(e){"use strict";return window.jQuery?e():void(0!=--load_max&&setTimeout(function(){defer(e)},1e3-100*load_max))}var load_max=10;defer(function(){"use strict";"undefined"!=typeof $().live&&($(".hsrecommend__content .fltriple__item a").live("click",function(){var e=$(this).parents(".hihitem__row").find(".hiinfo__name a").text();""==e&&(e=$(this).parents(".hihitem__row").next().find(".hiinfo__name a").text()),fa("send","house_recommend","click")}),$(".japan-banner .banner__close").live("click",function(){fa("send","ad_bottom","close")}),$(".mobile-japan-banner .banner__close").live("click",function(){fa("send","ad_bottom","close")}),$(".nhfilter__item-checkbox").live("click",function(){fa("send","list_label",JSON.stringify({action:"click",city:$(".js-ga-houses").data("ga-name"),name:$(this).text().trim()}))}),"m.fishtrip.cn"==window.location.hostname&&($(function(){$("#register-react-root").length>0&&fa("send","new_register","init")}),$("#register-react-root .btn-submit").live("click",function(){fa("send","new_register",null,{method:"click",value:"next",hash:window.location.hash.substr(1)})}),$(".bootstrap-dialog-footer-buttons .btn.btn-default").live("click",function(){fa("send","new_register",null,{method:"btn",value:$(this).text(),hash:window.location.hash.substr(1)})})),"m.fishtrip.cn"==window.location.hostname&&-1==navigator.userAgent.indexOf("Fishtrip_App")&&($(".cpane__city").live("click",function(){if("/"==window.location.pathname){var e=$(this).text().trim();fa("send","book_flow","city_list",{city:e,page:"home_page"})}}),$(".hibanner__image img").live("click",function(){var e=$(this).attr("alt");fa("send","book_flow","house_image",{house_name:e,page:"house_list"})}),$("div.mhirooms__row").live("click",function(){var e=$(this).parents(".mobile-house-item").attr("data-ga-name"),t=$(this).find(".mhirooms__name").text().trim();fa("send","book_flow","room_list",{house_name:e,room_name:t,page:"house_list"})}),$(".house-info-room-item").live("click",function(){var e=$(this).attr("data-ga-price"),t=$(this).attr("data-ga-name"),i=$(this).attr("data-house_name"),o=$(".hidform__start").find(".ydatepicker__text").text(),n=$(".hidform__end").find(".ydatepicker__text").text();fa("send","book_flow","check_btn",{house_name:i,price:Number(e),room_name:t,page:"house_detail",check_in:o,check_out:n})}),$(".roform__buy").live("click",function(){var e=$(this).parent().prev().find("dd").text().match(/\w+/);if(null!=e)var t=e[0];else var t=0;var i=$(this).parents(".rdetail__scroll-wrapper").find(".riblock__name").text().trim(),o=$(".hiptitle__name").text().trim();fa("send","book_flow","book_btn",{house_name:o,price:Number(t),room_name:i,page:"room_detail"})}),$(".btn-submit").live("click",function(){if("#booking"==window.location.hash){var e=window.location.search.match(/sub_resource_id=(\w+)/);if(null!=e)var t=e[1];else var t="";var i=$(".horb__price strong").text();fa("send","book_flow","submit_step1",{price:Number(i),room_id:t,page:"submit_info"})}if("#lodger"==window.location.hash){var e=window.location.search.match(/sub_resource_id=(\w+)/);if(null!=e)var t=e[1];else var t="";var o=$(".ltitle__room-name").text(),n=$(".ltitle__house-name").text(),i=$(".horb__price strong").text();fa("send","book_flow","submit_step2",{house_name:n,price:Number(i),room_name:o,room_id:t,page:"submit_info"})}})),window.location.pathname.match(/prepay/)&&$(".js_order_payment_checkout").live("click",function(){fa("send","prepay",null,{service:$(".ps__service-action--active").attr("data-service"),order_no:window.location.pathname.match(/\d+/)[0]})}),window.location.pathname.match(/payments/)&&$(".js-mobile-payment").live("click",function(){fa("send","prepay",null,{service:$(".js-mobile-payment-selection.active").attr("data-service"),order_no:window.location.search.match(/\d+/)[0]})}),"s.waka.life"==window.location.hostname&&($(".edit_room_residue_form .btn-yu-blue").live("click",function(){fa("send","refuse","manage",{room_name:$(".room.srlist__item.active").text().trim(),details:$(this).parents(".edit_room_residue_form").find(".date_desc").text().trim(),val:$("#new_stock").val()})}),$(".controls__refuse_next").live("click",function(){var e=[];$(".checkbox").each(function(){"checked"==$(this).find("input").attr("checked")&&e.push($(this).text().trim())}),0!=e.length&&fa("send","refuse","order",{room_name:$(".import").text().trim(),details:e})})))});