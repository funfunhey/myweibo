/* 
 * @Author: anchen
 * @Date:   2014-12-15 09:10:17
 * @Last Modified by:   anchen
 * @Last Modified time: 2015-01-26 11:29:34
 */
validate = {
    username: false,
    pwd: false,
    password: false,
    verify: false,
    loginuser: false,
    loginpwd: false
}
var msg = '';
$(function() {
    var login = $('form[name=login]');
    login.submit(function(event) {
        var ok = validate.loginuser && validate.loginpwd;
        if (ok) return true;
        $('input[name=username]', login).trigger('blur');
        $('input[name=password]', login).trigger('blur');
        return false;
    })
    // 登录验证
    $('input[name=username]', login).blur(function() {
        var username = $(this).val();
        var span = $(this).next();
        if (username == '') {
            msg = '帐号不得为空';
            span.html(msg).addClass('error');
            validate.user = false;
            return;
        }
        if (!/^[\u4e00-\u9fa5|\w]{2,6}$/g.test(username)) {
            msg = '必须为2到6位的字母或数字';
            span.html(msg).addClass('error');
            validate.loginuser = false;
            return;
        }
        msg = '';
        validate.loginuser = true;
        span.html(msg).removeClass('error');
    });
    $('input[name=password]', login).blur(function() {
        var password = $(this).val();
        var span = $(this).next();
        if (password == '') {
            msg = '密码不得为空';
            span.html(msg).addClass('error');
            validate.loginpwd = false;
            return;
        }
        if (!/^[a-zA-Z0-9\@\#\$\%\&\*\.\<\>\,\?\+\=\-]{6,10}$/g.test(password)) {
            msg = '密码必须大于六位小于10位';
            span.html(msg).addClass('error');
            validate.loginpwd = false;
            return;
        }
        $.ajax({
            url: INDEX + 'checkPwd',
            type: 'POST',
            data: {username: $('input[name=username]', login).val(),password:password},
            success: function(status){
                if(status == 1){
                    validate.loginpwd =  true;
                }else{
                     msg = '密码错误';
                    span.html(msg).addClass('error');
                    validate.loginpwd =  false;
                    return;
                }
            }
        })

        msg = '';
        validate.loginpwd = true;
        span.html(msg).removeClass('error');
    });
//验证码
    $( 'input[name=verify]', login ).blur( function () {
        var verify = $( this ).val();
        var span = $( this ).next();

        if ( verify == '' ) {
            msg = '请输入验证码';
            span.html( msg ).addClass('error');
            validate.verify = false;
            return;
        }

        $.post(INDEX + 'checkVerify', {verify : verify}, function (status) {
            if (status) {
                msg = '';
                span.html( msg ).removeClass('error');
                validate.verify = true;
            } else {
                msg = '验证码错误';
                span.html( msg ).addClass('error');
                validate.verify = false;
            }
        }, 'json');

    } );


});