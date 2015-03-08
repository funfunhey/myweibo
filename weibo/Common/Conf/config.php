<?php
return array(
	//'配置项'=>'配置值'


	// 设置为.tpl后缀
	'TMPL_TEMPLATE_SUFFIX'=>'.tpl',

	// 页面trace
	'SHOW_PAGE_TRACE' =>true,

	// 设置要显示的调试模块
	'TRACE_PAGE_TABS'=>array(
			'base'=>'基本',
			'file'=>'文件',
			'think'=>'流程',
			'error'=>'错误',
			'sql'=>'SQL',
			'debug'=>'调试',
			'user'=>'用户'
		),

	// 设置默认主题
	'DEFAULT_THEME'=>'default',

	'COPY'=>'Copyright © 2009-2014 WEIBO 北京微梦创科网络技术有限公司京网文[2011]0398-130号京ICP备12002058号增值电信业务经营许可证B2-20140447',
	'BOTTOM'=>array('微博客服','意见反馈','开放平台','微博招聘','新浪网导航','不良信息','举报'),

    

	// 设置网站名称
	'WEBNAME'=>'微博',
	'DB_TYPE'=>'pdo',
    'DB_USER'=>'',
    'DB_PWD'=>'',
    'DB_PREFIX'=>'think_',
    'DB_DSN'=>'mysql:host=localhost;dbname=thinkphp;charset=UTF8',
	
    'AUTO_LOGIN_KEY'=> sha1('nobodynobody'),
    'AUTO_LOGIN_LIFETIME' => 3600*24*7,

    'NOW_TIME'=>date('Y-m-d H:i:s'),
    'NOW_DATE'=>date('Y-m-d'),

    // 配置cookie过期时间
    
    'COOKIE_EXPIRE'=>3600*24*7,
    // 过滤函数
    'DEFAULT_FILTER'=>'htmlspecialchars'

	//设置外部的模版目录
	// 'VIEW_PATH'=>'./Public/'
    
     
);