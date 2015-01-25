<?php
/**
 * @Author: anchen
 * @Date:   2014-12-16 21:39:41
 * @Last Modified by:   anchen
 * @Last Modified time: 2015-01-24 20:39:26
 */

namespace Home\Controller;
use Think\Controller;
use Think\Model;
// use Think\

Class DiscoveryController extends Controller{
    public function discovery(){
        $this->display();
    }
    public function findpeople(){
        $db              = M('user u');
        $db1             = M('friend b');
        $map['fromuser'] = cookie('uid');
        $uid             =cookie('uid');
        // $map['touser'] = u.id;
        $statea = $db1->field('touser')->where($map)->buildsql();
        $this->newfriend = $db->field('u.id,u.username,u.production,u.photo')->where('u.id not in'.$statea.' AND u.id<>'.$uid)->order('id desc')->limit(4)->select();
        $this->hotfriend = $db->field('u.id,u.username,u.production,u.photo')->where('u.id not in'.$statea.' AND u.id<>'.$uid)->order('id asc')->limit(4)->select();
        $this->gz        = true;
        $this->display();
    }

}



?>