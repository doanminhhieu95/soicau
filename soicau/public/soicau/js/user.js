jQuery(document).ready(function(){
    $('#back-btn').click(function(){
        USR.backHistory();
    });
    $('#register-back-btn').click(function(){
        USR.backHistory();
    });
    USR.validateprofile();
    //USR.validateresetpass();
});
USR = {
    validateresetpass:function () {
        jQuery('#validateresetpass').submit(function () {
            if(jQuery.trim(jQuery('#validateresetpass #password1').val()) == ''){
                jQuery('#validateresetpass #password1').focus();
                return false;
            }
            if(jQuery.trim(jQuery('#validateresetpass #retype_password').val()) == ''){
                jQuery('#validateresetpass #retype_password').focus();
                return false;
            }

        })
    },
    backHistory: function () {
        window.history.back();
    },
    validateprofile:function () {
        jQuery('#updateprofile').submit(function () {
            if(jQuery.trim(jQuery('#updateprofile #email1').val()) == ''){
                jQuery('#updateprofile #email1').focus();
                return false;
            }
        });
        jQuery('#updateprofile').submit(function () {
            if(jQuery.trim(jQuery('#updateprofile #password1').val()) == ''){
                jQuery('#updateprofile #password1').focus();
                return false;
            }
        });

    }
}


