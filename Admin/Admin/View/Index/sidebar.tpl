<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sidebar</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/CSS/admin.css" />
</head>
<body class="sidebar">
<eq name="action" value="index">
<dl>
    <dt>管理首页</dt>
    <dd><a href="{:U('index/main',array('sidebar'=>houtaiindex))}" target="main">后台首页</a></dd>
    <dd><a href="{:U('index/main',array('sidebar'=>manager))}" target="main">管理员管理</a></dd>
    <dd><a href="{:U('index/main',array('sidebar'=>level))}" target="main">等级管理</a></dd>
    <dd><a href="{:U('index/main',array('sidebar'=>power))}" target="main">权限设定</a></dd>
</dl>
</eq>
<eq name="action" value="content">
<dl>
    <dt>内容管理</dt>
    <dd><a href="{:U('index/main',array('sidebar'=>weibo))}" target="main">所有微博</a></dd>
    <dd><a href="{:U('index/main',array('sidebar'=>commment))}" target="main">所有评论</a></dd>
    <dd><a href="{:U('index/main',array('sidebar'=>photo))}" target="main">所有图片</a></dd>
</dl>
</eq>
<eq name="action" value="manager">
<dl>
    <dt>会员管理</dt>
    <dd><a href="{:U('index/main',array('sidebar'=>user))}" target="main">用户管理</a></dd>
    <dd><a href="{:U('index/main',array('sidebar'=>levelcontrol))}" target="main">等级管理</a></dd>
</dl>
</eq>
<eq name="action" value="sys">
<dl>
    <dt>系统管理</dt>
    <dd><a href="{:U('index/main',array('sidebar'=>sys))}" target="main">网站设置</a></dd>
</dl>
</eq>
</body>
</html>