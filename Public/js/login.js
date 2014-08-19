/**
 * Created by tongying on 14-7-31.
 */

jQuery(function($) {
    $('form#platform_login').submit(function(event) {
        var $form = $(this);
        var errorMsg="";
        var hasError=false;
        var username=$('#platform_username').val();
        var password=$('#platform_password').val();
        if(username.trim()=="")
        {
            errorMsg=errorMsg+'用户名不能为空\n';
            hasError=true;
        }
        if(password.trim()=="")
        {
            errorMsg=errorMsg+'密码不能为空\n';
            hasError=true;
        }
        if(hasError)
        {
            alert(errorMsg);
        }
        else
        {
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize(),

                success: function(data, status) {
                    //$target.html(data);
                    //alert(data);

                    if(data=="fail")
                    {
                        alert("用户名或密码错误");
                    }
                    else
                    {
                        window.location.href = data;
                    }

                }
            });
        }
        event.preventDefault();
        //alert('submit');
    });
});
