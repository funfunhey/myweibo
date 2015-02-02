<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>top</title>
<link rel="stylesheet" type="text/css" href="/weibo/Public/CSS/admin.css" />
<script type="text/javascript" src=""></script>
</head>
<body class ="top">

<h1></h1>

<ul>
    <li><a href="<?php echo U('index/sidebar',array('action'=>'index'));?>" target="sidebar" id="nav1" class="selected">首页</a></li>
    <li><a href="<?php echo U('index/sidebar',array('action'=>'content'));?>" target="sidebar" id="nav2" >内容</a></li>
    <li><a href="<?php echo U('index/sidebar',array('action'=>'manager'));?>" id="nav3" target="sidebar" >会员</a></li>
    <li><a href="<?php echo U('index/sidebar',array('action'=>'sys'));?>" id="nav4" target="sidebar" >系统</a></li>
</ul>

<p>
    您好，<strong><?php echo ($user); ?></strong> [ <?php echo (cookie('username')); ?> ] [ <a href="/weibo/index.php" target="_blank">去首页</a> ] [ <a href="<?php echo U('index/logout');?>" target="_parent">退出</a> ]
</p>

</body>
</html>