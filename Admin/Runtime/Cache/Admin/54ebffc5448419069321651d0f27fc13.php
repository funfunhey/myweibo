<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>main</title>
<link rel="stylesheet" type="text/css" href="/weibo/Public/CSS/admin.css" />
<script type="text/javascript" src="/weibo/Public/Js/jquery.min.js"></script>
<script type="text/javascript" src="/weibo/Public/Js/admin/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/weibo/Public/Js/admin/locale/easyui-lang-zh_CN.js" ></script>
<script type="text/javascript" src="/weibo/Public/Js/admin/main.js"></script>
<link rel="stylesheet" type="text/css" href="/weibo/Public/Js/admin/themes/default/easyui.css" />
<link rel="stylesheet" type="text/css" href="/weibo/Public/Js/admin/themes/icon.css" />
</head>
<script type="text/javascript" charset="utf-8" async defer>
    INDEX = '/weibo/admin.php/Index';
</script>
<body class="main">


<?php if(($sidebar) == "houtaiindex"): ?><div class="map">
    管理首页 &gt;&gt; 后台首页
</div>
<table cellspacing="0" class="htindex">
    <tr><th><strong><?php echo (cookie('username')); ?>，欢迎开始微博管理</strong></th></tr>
    <tr><td></td></tr>
</table><?php endif; ?>

<?php if(($sidebar) == "manager"): ?><div class="map">
    管理首页 &gt;&gt; 管理员管理
</div>
<table cellspacing="0" id="box-manager"> </table>
<div id="tb" style="padding:5px;">
    <div style="margin-bottom:5px;">
        <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="obj.add();">添加</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="obj.edit();">修改</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="obj.remove();">删除</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" style="display:none;" id="save" onclick="obj.save();">保存</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-redo" plain="true" style="display:none;" id="redo" onclick="obj.redo();">取消编辑</a>       
    </div>
    <div style="padding:0 0 0 7px;color:#333;">
        查询帐号：<input type="text" class="textbox" name="user" style="width:110px">
        创建时间从：<input type="text" name="date_from" class="easyui-datebox" editable="false" style="width:110px">
        到：<input type="text" name="date_to" class="easyui-datebox" editable="false" style="width:110px">
        <a href="#" class="easyui-linkbutton" iconCls="icon-search" onclick="obj.search();">查询</a>
    </div>
</div>

<div id="menu" class="easyui-menu" style="width:120px;display:none;">
    <div onclick="obj.add();" iconCls="icon-add">增加</div>
    <div onclick="obj.remove();" iconCls="icon-remove">删除</div>
    <div onclick="obj.edit();" iconCls="icon-edit">修改</div>
</div><?php endif; ?>

<?php if(($sidebar) == "level"): ?><div class="map">
    管理首页 &gt;&gt; 等级管理
</div>
<table cellspacing="0">
    <tr><th><strong><?php echo (cookie('username')); ?>，欢迎开始微博管理</strong></th></tr>
    <tr><td></td></tr>
</table><?php endif; ?>

<?php if(($sidebar) == "power"): ?><div class="map">
    管理首页 &gt;&gt; 权限设定
</div>
<table cellspacing="0">
    <tr><th><strong><?php echo (cookie('username')); ?>，欢迎开始微博管理</strong></th></tr>
    <tr><td></td></tr>
</table><?php endif; ?>

<?php if(($sidebar) == "weibo"): ?><div class="map">
    内容管理 &gt;&gt; 所有微博
</div>
<table cellspacing="0" id="contentweibo"></table>

<div id="tb" style="padding:5px;">
    <div style="margin-bottom:5px;">
        <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="obj.removecontent();">删除</a>       
    </div>
    <div style="padding:0 0 0 7px;color:#333;">
        查询内容：<input type="text" class="textbox" name="content" style="width:110px">
        创建时间从：<input type="text" name="date_from" class="easyui-datebox" editable="false" style="width:110px">
        到：<input type="text" name="date_to" class="easyui-datebox" editable="false" style="width:110px">
        图片：<input type="text" name="position" style="width:110px">
        <a href="#" class="easyui-linkbutton" iconCls="icon-search" onclick="obj.search();">查询</a>
    </div>
</div><?php endif; ?>

<?php if(($sidebar) == "commment"): ?><div class="map">
    内容管理 &gt;&gt; 所有评论
</div>
<table cellspacing="0">
    <tr><th><strong><?php echo (cookie('username')); ?>，欢迎开始微博管理</strong></th></tr>
    <tr><td></td></tr>
</table><?php endif; ?>


<?php if(($sidebar) == "photo"): ?><div class="map">
    内容管理 &gt;&gt; 所有图片
</div>
<table cellspacing="0">
    <tr><th><strong><?php echo (cookie('username')); ?>，欢迎开始微博管理</strong></th></tr>
    <tr><td></td></tr>
</table><?php endif; ?>

<?php if(($sidebar) == "user"): ?><div class="map">
    会员管理 &gt;&gt; 用户管理
</div>

<table id="box"></table>

<div id="tb" style="padding:5px;">
    <div style="margin-bottom:5px;">
        <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="obj.add();">添加</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="obj.edit();">修改</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="obj.remove();">删除</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" style="display:none;" id="save" onclick="obj.save();">保存</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-redo" plain="true" style="display:none;" id="redo" onclick="obj.redo();">取消编辑</a>       
    </div>
    <div style="padding:0 0 0 7px;color:#333;">
        查询帐号：<input type="text" class="textbox" name="user" style="width:110px">
        创建时间从：<input type="text" name="date_from" class="easyui-datebox" editable="false" style="width:110px">
        到：<input type="text" name="date_to" class="easyui-datebox" editable="false" style="width:110px">
        粉丝：<input type="text" name="fans" class="textbox" style="width:80px">
        关注<input type="text" name="focus" class="textbox" style="width:80px">
        微博<input type="text" name="contentcount" class="textbox" style="width:80px">
        <a href="#" class="easyui-linkbutton" iconCls="icon-search" onclick="obj.search();">查询</a>
    </div>
</div>

<div id="menu" class="easyui-menu" style="width:120px;display:none;">
    <div onclick="obj.add();" iconCls="icon-add">增加</div>
    <div onclick="obj.remove();" iconCls="icon-remove">删除</div>
    <div onclick="obj.edit();" iconCls="icon-edit">修改</div>
</div><?php endif; ?>

<?php if(($sidebar) == "levelcontrol"): ?><div class="map">
    会员管理 &gt;&gt; 等级管理
</div>
<table cellspacing="0">
    <tr><th><strong><?php echo (cookie('username')); ?>，欢迎开始微博管理</strong></th></tr>
    <tr><td></td></tr>
</table><?php endif; ?>

<?php if(($sidebar) == "sys"): ?><div class="map">
    系统管理 &gt;&gt; 网站设置
</div>
<table cellspacing="0">
    <tr><th><strong><?php echo (cookie('username')); ?>，欢迎开始微博管理</strong></th></tr>
    <tr><td></td></tr>
</table><?php endif; ?>





</body>
</html>