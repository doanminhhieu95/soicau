/**
 * Created by MrNam on 24/08/2016.
 */
function getBaseURL () {
    return location.protocol + "//" + location.hostname;
}

var HOME={
    validate: function () {
        jQuery('.text_validate').change(function(){
            var a = HOME.strip_tags(jQuery(this).val());
            jQuery(this).val(a);
            if(a==''){
                jQuery(this).focus();
            }
        });


    },
    strip_tags: function(input, allowed) {
        input=input.trim();
        allowed = (((allowed || '') + '')
            .toLowerCase()
            .match(/<[a-z][a-z0-9]*>/g) || [])
            .join(''); // making sure the allowed arg is a string containing only tags in lowercase (<a><b><c>)
        var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi,
            commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
        return input.replace(commentsAndPhpTags, '')
            .replace(tags, function($0, $1) {
                return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : '';
            });
    },
 hide_float_right_zone3:function() {
    var content = document.getElementById('float_content_right_zone3');
    var hide = document.getElementById('hide_float_right_zone3');
    if (content.style.display == "none") {
        content.style.display = "block";
        hide.innerHTML = '<a href="javascript:HOME.hide_float_right_zone3()">Tắt [X]</a>';
        HOME.setCookie("hide_popup_right_zone3", 0, 1);
    } else {
        content.style.display = "none";
        hide.innerHTML = '<a href="javascript:HOME.hide_float_right_zone3()">Xem ...</a>';
        HOME.setCookie("hide_popup_right_zone3", 1, 1);
    }
},
 hide_float_right_zone2:function() {
    var content = document.getElementById('float_content_right_zone2');
    var hide = document.getElementById('hide_float_right_zone2');
    if (content.style.display == "none") {
        content.style.display = "block";
        hide.innerHTML = '<a href="javascript:HOME.hide_float_right_zone2()">Tắt quảng cáo [X]</a>';
        HOME.setCookie("hide_popup_right_zone2", 0, 1);
    } else {
        content.style.display = "none";
        hide.innerHTML = '<a href="javascript:HOME.hide_float_right_zone2()">Xem quảng cáo...</a>';
        HOME.setCookie("hide_popup_right_zone2", 1, 1);
    }
},
    hide_float_right_zone4:function() {
        var content = document.getElementById('float_content_right_zone4');
        var hide = document.getElementById('hide_float_right_zone4');
        if (content.style.display == "none") {
            content.style.display = "block";
            hide.innerHTML = '<a href="javascript:HOME.hide_float_right_zone4()">Tắt quảng cáo [X]</a>';
            HOME.setCookie("hide_popup_right_zone4", 0, 1);
        } else {
            content.style.display = "none";
            hide.innerHTML = '<a href="javascript:HOME.hide_float_right_zone4()">Xem quảng cáo...</a>';
            HOME.setCookie("hide_popup_right_zone4", 1, 1);
        }
    },

    hide_float_right_zone1:function() {
        var content = document.getElementById('float_content_right_zone1');
        var hide = document.getElementById('hide_float_right_zone1');
        if (content.style.display == "none") {
            content.style.display = "block";
            hide.innerHTML = '<a href="javascript:HOME.hide_float_right_zone1()">Tắt quảng cáo [X]</a>';
            HOME.setCookie("hide_popup_right_zone1", 0, 1);
        } else {
            content.style.display = "none";
            hide.innerHTML = '<a href="javascript:HOME.hide_float_right_zone1()">Xem quảng cáo...</a>';
            HOME.setCookie("hide_popup_right_zone1", 1, 1);
        }
    },
    getCookie:function (cname)

        {

            var name = cname + "=";

            var ca = document.cookie.split(';');

            for (var i = 0; i < ca.length; i++)

            {

                var c = ca[i].trim();

                if (c.indexOf(name) == 0)
                    return c.substring(name.length, c.length);

            }

            return "";

        },
    setCookie:function (cname, cvalue, exdays)

{

    var d = new Date();

    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));

    var expires = "expires=" + d.toGMTString();

    document.cookie = cname + "=" + cvalue + "; " + expires;

},

    hide_float_right:function () {
    var content = document.getElementById('float_content_right');
    var hide = document.getElementById('hide_float_right');
    if (content.style.display == "none") {
        content.style.display = "block";
        hide.innerHTML = '<a href="javascript:HOME.hide_float_right()">Tắt quảng cáo [X]</a>';
        HOME.setCookie("hide_popup_right", 0, 1);
    } else {
        content.style.display = "none";
        hide.innerHTML = '<a href="javascript:HOME.hide_float_right()">Xem quảng cáo...</a>';
        HOME.setCookie("hide_popup_right", 1, 1);
    }
},
    showmenusub:function () {
        jQuery('.show-sub-menu').click(function () {
            jQuery('.show-sub-menu .sub-menu').toggle();
        })
        jQuery('.li_menu_sub').click(function () {
            jQuery('.li_menu_sub .sub-menu').toggle();
        })
    },
    loto_online:function () {
        jQuery('#select_date').change(function () {
            jQuery('#div_loto_online').html('Đang tải dữ liệu');
            date = jQuery(this).val();
            jQuery.ajax({
             url: getBaseURL()+'/get_loto',
             data:{_token:jQuery('#input_token').val(),date:date},
             type:'POST',
             success:function(data){
                 jQuery('#div_loto_online').html(data);
                }
             });
        })
    },
    ajax_show_chat:function(page){
        var cat_id = jQuery('#cat_id').val();
        var date = jQuery('#date').val();
        var provin = jQuery('#date').val();
        if(page==undefined) page=1;
        jQuery.ajax({
            url:getBaseURL()+'/ajax_show_chat',
            type:'post',
            dataType:'json',
            data:{page:page,cat_id:cat_id,date:date,_token:jQuery('#_token').val()},
            success:function(msg){
                jQuery('#div_chem').html(msg.rows);
                jQuery('#div_paginate').html(msg.paging);
                jQuery('#count_chat').val(msg.count_chat);
                if(page!=1){
                    var top = jQuery("#frsubmit_chat").offset().top; //anchor top offset from doc top
                    console.log(top);
                    jQuery(window).scrollTop(top);
                    //var height = document.getElementById('div_bor_content').clientHeight;
                    //console.log(height);
                    //jQuery("html, body").animate({ scrollTop: height }, 600);
                }

            }

        })
    },
    paginate_chat:function (attr) {
        attr=attr.split('page=');
        HOME.ajax_show_chat(attr[1]);
        return false;
    },

}
jQuery(document).ready(function(){
    //HOME.paginate();
    HOME.ajax_show_chat();
    HOME.validate();
    HOME.showmenusub();
    HOME.loto_online();
    if (HOME.getCookie("hide_popup_right") == "1") {
        var contentright = document.getElementById('float_content_right');
        var hideright = document.getElementById('hide_float_right');
        if (contentright.style.display != "none") {
            contentright.style.display = "none";
            hideright.innerHTML = '<a href="javascript:HOME.hide_float_right()">Xem quảng cáo...</a>';
        }
    }



});




