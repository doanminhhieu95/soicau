/**
 * Created by doannam on 18/04/2017.
 */
var CHAT = {
    checkchat:function () {

        setInterval(function () {
            try{
                if (time_block > 0){
                    jQuery('#submit_chat').attr("disabled","disabled");
                    jQuery('#bt_submit_chotso').attr("disabled","disabled");
                    jQuery('.submit-comment').attr("disabled","disabled");
                    time_block = time_block - 1;
                    jQuery('#submit_chat').text('Còn '+time_block + ' giây');
                    jQuery('#bt_submit_chotso').text('Còn '+time_block + ' giây');
                    jQuery('.submit-comment').text('Còn '+time_block + ' giây');

                }else{
                    jQuery('#submit_chat').removeAttr("disabled");
                    jQuery('#bt_submit_chotso').removeAttr("disabled");
                    jQuery('.submit-comment').removeAttr("disabled");

                    jQuery('#submit_chat').text('Chém');
                    jQuery('#bt_submit_chotso').text('Chốt số');
                    jQuery('.submit-comment').text('Chém');

                }
            }catch (e){}
        },1000)

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
    submitchat:function () {

        jQuery('#submit_chat').click(function () {
            jQuery('#submit_chat').hide();
            var chat = jQuery('#frsubmit_chat #chat').val();
             chat = CHAT.strip_tags(chat);
			
            if(chat.length < 6){
                jQuery('#frsubmit_chat #chat').css('border','1px solid red');
                jQuery('#frsubmit_chat #chat').focus();
                jQuery('#submit_chat').show();
                return false;
            }else{
                var count = parseInt(jQuery('#count_chat').val())+1;
                jQuery('#count_chat').val(count);
                jQuery('#submit_chat').hide();
                var data = jQuery('#frsubmit_chat').serialize();
                jQuery('#frsubmit_chat #chat').val('');
                var d = new Date();
                month = d.getMonth()+1;
                date = d.getDate()+'/'+month+'/'+d.getFullYear()+' '+d.getHours()+':'+d.getMinutes();
                jQuery(this).html('Đang gửi');
                avata_user = jQuery('#avata_user').val();
                first_name_user = jQuery('#first_name_user').val();
                slug_user = jQuery('#slug_user').val();
                point_user = jQuery('#point_user').val();
                province_id = jQuery('#province_id').val();
                input_token = jQuery('#input_token').val();
                html = '<div class="post row post'+count+'">'
                    +'<div class="row user-info">'
                    +'<div class="col-xs-2 col-md-1 avt">'
                    +'<a href="/user/'+slug_user+'">'
                    +'<img class="img-circle avt_chat"   src="'+avata_user+'" alt="'+first_name_user+'">'
                    +'</a>'
                    +'</div>'
                    +'<div class="col-xs-10 col-md-11 name">'
                    +'<a class="name-chat"  href="/user/'+avata_user+'"><h4>'+first_name_user+'</h4></a>'
                +'<i class="time time-chat">'+date+'</i>'
                +'<span class="point-loto" >'+point_user+' điểm</span>'
                +'</div>'
                +'</div>'
                +'<div class="post-content row">'
                    +'<div class="col-xs-11">'
                    +'<p>'+chat+'</p>'
                +'</div>'
                +'</div>'
                   +'<div class="row reply">'
                    +'<div class="col-xs-4 col-md-2 post-reply post-reply'+count+'" data-id="">'
                        +'<i class="fa fa-comment"></i> Trả lời'
                    +'</div>'
                    +'</div>'
                +'<div class="row hidden input-reply input-reply'+count+'" data-id="">'
                    +'<div class="col-xs-12">'
                    +'<form method="post" action="/sbumitreply" class = "frsubmit_reply frsubmit_reply'+count+'">'
                    +'<input type="hidden" name="province_id"  value="'+province_id+'">'
                    +'<input type="hidden" name="_token" value="'+input_token+'">'
                    +'<input type="hidden" name="parent_id" class="parent_id'+count+'" id="parent_id" value="">'
                    +'<textarea placeholder="Ít nhất 6 ký tự" class="form-control textarea_comment text_validate textarea_comment'+count+'" name="reply" id="" cols="30" maxlength="300" rows="4"></textarea>'
                    +'<button value="true" name="comment" type="button"  class="btn btn-success submit-comment submit-comment'+count+'" data-id = "" style="margin-top: 5px;margin-bottom: 15px;">Chém </button>'
                    +'</form>'
                    +'</div>'

                    +'</div>'
                    +'<div class="comment comment'+count+'"></div>'
                +'</div>';
                jQuery('#div_chem').prepend(html);

                jQuery.ajax({
                    url:'/sbumitchat',
                    type:'POST',
                    data:data,
                    dataType:'json',
                    success:function (data) {
                        if(data==0){
                            Alert('Bạn chát quá nhanh! Bạn phải đợi 5 phút sau mới được chát tiếp!')
                        }else if(data==1){
                            Alert('Bạn viết quá dài hoặc quá ngắn!')
                        }else if(data==2){
                            Alert('Lỗi không lưu được bài chém!')
                        }else if(data==3){
                            Alert('Tài khoản bạn đã bị đóng vì nghi ngờ spam. Nếu không phải hãy liên hệ với admin!')
                        }
                        else{
                            jQuery('.post-reply'+count).attr('data-id',data);
                            jQuery('.input-reply'+count).attr('data-id',data);
                            jQuery('.input-reply'+count).addClass('input-reply-'+data);
                            jQuery('.comment'+count).addClass('comment'+data);
                            jQuery('.textarea_comment'+count).attr('id','reply-'+data);
                            jQuery('.parent_id'+count).val(data);
                            jQuery('.frsubmit_reply'+count).addClass('submit_reply_'+data);
                            jQuery('.submit-comment'+count).addClass('submit-comment'+data);
                            jQuery('.submit-comment'+count).attr('data-id',data);
                        }
                    }
                });
                jQuery('#submit_chat').show();
            }


        });
    },
    submitchotso:function () {
        jQuery('#bt_submit_chotso').click(function () {
            var chat = jQuery('#submit_chotso #chot_so').val();
            if(chat.length < 6){
                jQuery('#submit_chotso #chot_so').css('border','1px solid red');
                jQuery('#submit_chotso #chot_so').focus();
                jQuery('#submit_chat').prop("disabled",false);
                return false;
            }
            var data = jQuery('#submit_chotso').serialize();
            jQuery('#bt_submit_chotso').attr("disabled");
			jQuery('#submit_chotso').submit();
            // jQuery.ajax({
                // url:'/sbumitchotso',
                // type:'POST',
                // data:data,
                // dataType:'json',
                // success:function (data) {
                    // window.location.reload();
                // }
            // })
        })
    },
    show_reply:function(id){
        jQuery('.input-reply').addClass('hidden');
        jQuery('.input-reply-'+id).removeClass('hidden');
    },
    reply:function (id) {
        jQuery('.submit-comment'+id).html('Đang gửi');
        var chat = jQuery('#reply-'+id).val();
        if(chat.length < 6){
            jQuery('.input-reply-'+id).removeClass('hidden');
            jQuery('#reply-'+id).css('border','1px solid red');
            jQuery('#reply-'+id).focus();
            jQuery(this).html('Chém');
            return false;
        }else{
            jQuery('.input-reply-'+id).addClass('hidden');
            var data = jQuery('.submit_reply_'+id).serialize();
            jQuery('#reply-'+id).val('');
            var d = new Date();
            month = d.getMonth()+1;
            date = d.getDate()+'/'+month+'/'+d.getFullYear()+' '+d.getHours()+':'+d.getMinutes();
            jQuery(this).html('Đang gửi');
            avata_user = jQuery('#avata_user').val();
            first_name_user = jQuery('#first_name_user').val();
            slug_user = jQuery('#slug_user').val();
            point_user = jQuery('#point_user').val();
            html = '<div class="post">'
                +'<div class="row user-info">'
                +'<div class="col-xs-2 col-md-1 avt">'
                +'<a href="/user/'+slug_user+'">'
                +'<img  class="img-circle avt_chat" src="'+avata_user+'" alt="'+first_name_user+' Soi cầu">'
                +'</a>'
                +'</div>'
                +'<div class="col-xs-10 col-md-11 name">'
                +'<a class="name-chat" title="profile '+first_name_user+'" href="/user/'+slug_user+'"><h4>'+first_name_user+'</h4></a>'
            +'<i class="time time-chat ">'+date+'</i>'
            +'<span class="point-loto" >'+point_user+' điểm </span>'
            +'</div>'
            +'</div>'
            +'<div class="post-content row">'
                +'<div class="col-xs-11">'
                +'<p title="nội dung soi cầu của '+first_name_user+'">'
                +chat
        +'</p>'
            +'</div>'
            +'</div>'
            +'</div>';
            jQuery('.comment'+id).prepend(html);

            jQuery(this).html('Đang gửi');
            jQuery.ajax({
                url:'/sbumitreply',
                type:'POST',
                data:data,
                dataType:'json',
                success:function (data) {
                    console.log(data);
                    if(data!=1) Alert(data);
                    //window.location.reload();
                }
            })
        }
    },

    menutop:function () {
        jQuery('.show-sub-menu').click(function () {
            jQuery(this).next().toggle()

        })
    }
}
jQuery(document).ready(function () {
    CHAT.submitchat();
    //CHAT.reply();
    CHAT.submitchotso();
    CHAT.menutop();
    CHAT.checkchat();
})


