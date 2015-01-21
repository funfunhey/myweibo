<?php
/**
 * @Author: anchen
 * @Date:   2014-12-15 17:26:35
 * @Last Modified by:   anchen
 * @Last Modified time: 2014-12-15 21:32:16
 */
namespace Home\Model;
use Think\Model;

    Class UserModel extends Model {
        protected $_validate = array(
            array('username','require','不得为空'),
            //array('username','/^[\u4e00-\u9fa5\|\w]{2,6}$/','帐号格式不正确',1,'regex'),
            //array('username','','帐号名称已经存在！',0,'unique',1), 
            array('email','require','邮箱不得为空'),
            array('email','/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/','邮箱格式不正确',1,'regex'),

            array('password','require','密码不得为空'),
            array('password','/^[a-zA-Z0-9\@\#\$\%\&\*\.\<\>\,\?\+\=\-]{6,10}$/','密码格式不正确',1,'regex'),

            array('pwd','password','',1,'confirm'),


            array('verify','require','验证码不得为空')

            );

        // 自动完成
        protected $_auto = array(
            array('password','sha1',1,'function'),
            array('reg_date', 'date', 1,'function',array('Y-m-d H:i:s')),
            array('date','date',1,'function',array('Y-m-d H:i:s')),
            array('ip','get_client_ip', 1, 'function')
            );

    }



?>