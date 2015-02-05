<?php
return array(
	//'配置项'=>'配置值'
   // 页面trace
    'SHOW_PAGE_TRACE' =>true, //
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
    // 设置为.tpl后缀
    'TMPL_TEMPLATE_SUFFIX'=>'.tpl',
        // 设置网站名称
     'WEBNAME'=>'微博',
    'DB_TYPE'=>'pdo',
    'DB_USER'=>'root',
    'DB_PWD'=>'1015',
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
);