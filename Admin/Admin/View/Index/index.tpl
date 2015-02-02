
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录后台后台管理系统</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/CSS/admin_login.css" />
<script src="__PUBLIC__/js/jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="__PUBLIC__/js/validate_admin.js" type="text/javascript" charset="utf-8" async defer></script>
<script  type="text/javascript" charset="utf-8" async defer>
   var INDEX = "__MODULE__/Index/";
</script>
</head>
<body>
<div class="addphoto">
</div>
    <form id="adminLogin" name="login" method="post" action="{:U('Index/login')}">
    <fieldset>
        <legend>登录微博后台管理系统</legend>
        <label>账　号：<input type="text" name="username" class="text" /><span></span></label>
        <label>密　码：<input type="password" name="password" class="text" /><span></span></label>
        <label>验证码：<input type="text" name="verify" class="text" /><span></span></label>
        <label class="t">输入下图的字符，不区分大小写</label>
        <label><img src="{:U('Index/verify')}" id="verify_img" alt="" onclick="javascript:this.src='{:U('Index/verify')}#'+Math.random();" /></label>
        <input type="submit" value="登录" class="submit"  name="send" />
    </fieldset>
</form>






</body>
</html>