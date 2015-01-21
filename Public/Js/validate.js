/* 
* @Author: anchen
* @Date:   2014-12-15 09:10:17
* @Last Modified by:   anchen
* @Last Modified time: 2014-12-22 19:32:24
*/

validate = {
    username : false,
    pwd :false,
    password :false,
    verify :false,
    loginuser:false,
    loginpwd :false
}

var msg = '';
$(function(){
    $('#verify_img').click(function(){
        $(this).attr('src',VERIFY);
    });
    var register = $('form[name=register]');
    var login = $('form[name=login]');
    // alert('message');

    register.submit(function(event) {
        /* Act on the event */
        var ok = validate.username && validate.pwd && validate.password && validate.verify;
        if(ok) return true;
        // alert(ok);

        $('input[name=username]',register).trigger('blur');
        $('input[name=pwd]',register).trigger('blur');
        $('input[name=password]',register).trigger('blur');
        $('input[name=verify]',register).trigger('blur');
        return false;
    });

    login.submit(function(event){
        var ok = validate.loginuser && validate.loginpwd;
        if(ok) return true;
        
        $('input[name=username]',login).trigger('blur');
        $('input[name=password]',login).trigger('blur');
        return false;
    })

    // 登录验证
    // 
     $('input[name=username]',login).blur(function() {
        /* Act on the event */
        var username = $(this).val();
        var span = $(this).next();

        if(username == ''){
            msg = '帐号不得为空';
            span.html(msg).addClass('error');
            validate.user = false;
            return ;
        }

        if(!/^[\u4e00-\u9fa5|\w]{2,6}$/g.test(username)){
            msg = '必须为2到6位的字母或数字';
           span.html(msg).addClass('error');
            validate.loginuser = false;
            return ;
        }

        msg = '';
        validate.loginuser = true;
        span.html(msg).removeClass('error');

    });

      $('input[name=password]',login).blur(function() {
        /* Act on the event */
        var password = $(this).val();
        var span = $(this).next();

        if(password == ''){
            msg = '密码不得为空';
            span.html(msg).addClass('error');
            validate.loginpwd = false;
            return ;
        }
        if(!/^[a-zA-Z0-9\@\#\$\%\&\*\.\<\>\,\?\+\=\-]{6,10}$/g.test(password)){
            msg = '密码必须大于六位小于10位';
            span.html(msg).addClass('error');
            validate.loginpwd = false;
            return ;
        }

        msg = '';
        validate.loginpwd = true;
        span.html(msg).removeClass('error');       
    });
    


    $('input[name=username]',register).blur(function() {
        /* Act on the event */
        var username = $(this).val();
        var span = $(this).next();

        if(username == ''){
            msg = '帐号不得为空';
            span.html(msg).addClass('error');
            validate.username = false;
            return ;
        }

        if(!/^[\u4e00-\u9fa5|\w]{2,6}$/g.test(username)){
            msg = '必须为2到6位的字母或数字';
           span.html(msg).addClass('error');
            validate.username = false;
            return ;
        }

        $.post(COMMON + '/isrepeat', {username:username}, function(status) {
            if(status ){
                msg = '账号已存在';
                span.html(msg).addClass('error');
                validate.username = false;
                return ;
            }
        });

        msg = '';
        validate.username = true;
        span.html(msg).removeClass('error');

    });


    $('input[name=email]',register).blur(function() {
        /* Act on the event */
        var email = $(this).val();
        var span = $(this).next();

        if(email == ''){
            msg = '邮箱不得为空';
            span.html(msg).addClass('error');
            validate.email = false;
            return ;
        }

        if(!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email)){
            msg = '必须填正确格式的邮箱';
            span.html(msg).addClass('error');
            validate.email = false;
            return ;
        }

        msg = '';
        validate.email = true;
        span.html(msg).removeClass('error');
        
    });


    $('input[name=password]',register).blur(function() {
        /* Act on the event */
        var password = $(this).val();
        var span = $(this).next();

        if(password == ''){
            msg = '密码不得为空';
            span.html(msg).addClass('error');
            validate.password = false;
            return ;
        }
        if(!/^[a-zA-Z0-9\@\#\$\%\&\*\.\<\>\,\?\+\=\-]{6,10}$/g.test(password)){
            msg = '密码必须是六到十位的数字、字母';
            span.html(msg).addClass('error');
            validate.password = false;
            return ;
        }

        msg = '';
        validate.password = true;
        span.html(msg).removeClass('error');       
    });




    $('input[name=pwd]',register).blur(function() {
        /* Act on the event */
        var pwd = $(this).val();
        var span = $(this).next();

        if(pwd == ''){
            msg = '确认密码不得为空';
            span.html(msg).addClass('error');
            validate.pwd = false;
            return ;
        }  
        if(pwd !== $('input[name=password]',register).val() ){
            msg = '两次密码不一致';
            span.html(msg).addClass('error');
            validate.pwd = false;
            return ;
        }  

        msg = '';
        validate.pwd = true;
        span.html(msg).removeClass('error');      
    });
    $('input[name=verify]',register).blur(function() {
        /* Act on the event */
        var verify = $(this).val();
        var span = $(this).next().next();

        if(verify == ''){
            msg = '验证码不得为空';
            span.html(msg).addClass('error');
            validate.verify = false;
            return ;
        }  


        $.post(COMMON + 'checkVerify/', {verify : verify}, function (status) {
            if (status) {
                msg = '';
                span.html( msg ).removeClass('error');
                validate.verify = true;
            } else {
                msg = '验证码错误';
                span.html( msg ).addClass('error');
                validate.verify = false;
            }
            // alert(status);
        }, 'json');

        msg = '';
        span.html(msg).removeClass('error');      
    });


});