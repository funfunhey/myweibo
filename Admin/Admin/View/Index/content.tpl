<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎光临微博管理系统后台</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/CSS/admin.css" />
</head>
<frameset rows="80px,*" border="0">
    <frame src="{:U('index/top')}" noresize="true" scrolling="no" style="border-bottom:2px solid #ccc"/>
    <frameset cols="150px,*" border="0">
        <frame src="{:U('index/sidebar',array('action'=>'index'))}" name="sidebar" noresize="true" scrolling="no" />
        <frame src="{:U('index/main')}" name="main" noresize="true" />
    </frameset>
</frameset>
</html>