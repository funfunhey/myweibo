<?php
/**
 * @Author: anchen
 * @Date:   2014-12-16 21:39:41
 * @Last Modified by:   anchen
 * @Last Modified time: 2014-12-31 22:46:25
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
        // $model= D('friend')->relation(true)->select();
        // var_dump($model);
        $db = M('user u');
        $db1 = M('friend b');
        $map['fromuser'] = cookie('uid');
        $uid=cookie('uid');
        // $map['touser'] = u.id;
        $statea = $db1->field('touser')->where($map)->buildsql();
        $this->newfriend = $db->field('u.id,u.username,u.production,u.photo')->where('u.id not in'.$statea.' AND u.id<>'.$uid)->order('id desc')->limit(4)->select();
        $this->hotfriend = $db->field('u.id,u.username,u.production,u.photo')->where('u.id not in'.$statea.' AND u.id<>'.$uid)->order('id asc')->limit(4)->select();
        $this->gz = true;
         // var_dump($newfriend);
         // $db1 = M('friend a');
         // $db->join($db1->getTableName()." on u.id=a.fromuer");
         // $newfriend = $db->where('a.touser=u.id')->field('u.id,u.username')->select();
        // $this->newfriend = $db->alias('u')->field("u.id,u.username,u.production statea") ->order('id desc')->limit(6)->select();

         // $this->newfriend = $db->alias('u')->field("u.id,u.username,u.production,b.state ")->join("LEFT JOIN __FRIEND__ b ON b.touser=u.id")->where("u.id <> $uid ")->order('id desc')->limit(8)->select();
        // var_dump($this->newfriend);
        // AND u.id=b.fromuser=$uid 
        // ->join("LEFT JOIN __FRIEND__ c ON c.fromuser=$uid")
        // 
         // $this->newfriend = $db->alias('u')->field('')
       

        // $Model = new Model();
        // $Model->query("select u.id,u.username,u.production, as statea,(select f.state from think_friend f where d.fromuser=u.id AND f.touser='$uid') as stateb from think_user u ");
        // var_dump($this->newfriend );
        $this->display();
    }

}



?>