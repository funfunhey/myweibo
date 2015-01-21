<?php
/**
 * @Author: anchen
 * @Date:   2014-12-14 10:52:24
 * @Last Modified by:   anchen
 * @Last Modified time: 2015-01-17 19:49:48
 */
namespace Home\controller;
use Think\Controller;
use Think\Image;
use Think\Verify;
/**
* 
*/
class CommonController extends controller

{
    protected function _intialize(){
        // if(C('WEB_STATE')){
        //     halt('网站维护中');
        // }
        if (isset($_COOKIE['auto'])&&!isset($_COOKIE['uid'])){
            $value =explode('|', encrytion($_COOKIE['auto']));

            if($value[1] == get_client_ip()){
                cookie('uid',$value[0]);
                cookie('username',$value[2]);
            }
        } 
        
    }

    // 登录表单处理
    public function login(){
        // if(!IS_POST) return false;


        $db = M('user');
        $where = array('username'=>I('post.username'));
        $field = array('id','username','password','email','sex','production');
        $user = $db->where($where)->field($field)->find();

        $pwd = I('post.password');
        $pwd = sha1($pwd);
        if(!$user || $user['password'] !== $pwd){
            $this->error('帐号或密码不正确');
        }

        // 锁定功能
        // ...../


        // if(!isset($_POST['auto'])){
        //     $value = $user['id'].'|'.get_client_ip().'|'.$user['username'];
        //     // $value = encrytion($value,1);
        //     @setcookie('auto',$value,C('AUTO_LOGIN_LIFETIME'),'/');
        // }      
        cookie("username",$user['username'],C('AUTO_LOGIN_LIFETIME'));
        cookie('uid',$user['id'],C('AUTO_LOGIN_LIFETIME'));
        // var_dump($_COOKIE['username']);
        
        redirect($_SERVER['HTTP_REFERER']);  
    }

    //注册是否已存在用户名
    public function isrepeat(){
        $user = M('user');
        $username = I('post.username');
        $repeat = $user->getByUsername($username);
        if($repeat)  echo 1 ;

    }

    // 退出功能
    public function logout () {
        cookie('username',null);
        cookie('uid',null);
        redirect(__APP__);
    }

    // 注册功能
    
    public function register(){
        // if(!IS_POST) halt('页面不存在');
        $db = D('user');
        $db->create();
        
        if(!$db->create()){
            $this->error($db->getError());
        }
        $username = $db->username;
        if(!$uid =$db->add()) $this->error('注册失败，请稍候重试');

        cookie('uid',$uid,C('AUTO_LOGIN_LIFETIME'));
        cookie('username',$username,C('AUTO_LOGIN_LIFETIME'));
        $this->success('注册成功，正在为您跳转...',__APP__);
    }

    // 微博提交
    public function content(){
        $db = M('content');
        $user = M('user'); 
        $news = M('news');
        $num = I('post.num')+1;
        $uid = cookie('uid');
        $length = I('post.length');
        I('post.file_name') ? $filename = I('post.file_name') : $filename = 0;
        
       if(is_numeric($num)){
               if($num >0 && $num <141){

                    //@somebody
                    $reg = '/@([\x{4e00}-\x{9fa5}A-Za-z0-9_]{2,6})/u';
                    $zjsz = '';
                    $regb = array();
                    $regc = array();
                    $regd = array();                    
                    $string = trim(I('post.content'));
                     preg_match_all($reg, $string ,$rega);
                     for ($i=0; $i < count($rega[1]) ; $i++) { 
                        $zjsz = $user->getFieldByUsername($rega[1][$i],'id');
                        $regd[$i] = $zjsz;
                        if(!$zjsz) $zjsz = 0;
                        array_push($regc, '['.$zjsz.$rega[0][$i].'/]');
                        $regb[$i] = '/'.$rega[0][$i].'/';
                     }
                        $content = preg_replace($regb, $regc, $string);


                    $data =  array('date'=>C('NOW_TIME'),'uid'=>$uid,'content'=>$content,'position'=>$filename);
                    //$zjsz = array(11);
                    if($db->create($data) && $abc=$db->add()){
                        // $this->error($db->getError()); 
                        if($regd){
                            foreach ($regd as $key => $value) {
                                $data1['uid'] = $value;
                                $data1['conid'] = $abc;

                               if($value && $value !== $uid){
                                  //提醒@的人
                                    $user->where('id=%d',$value)->setInc('atnewcon',1);
                                   $aaa = $news->data($data1)->add(); ;
                                } 
                            }                            
                        }          
                         echo $abc;
               }
           }              
        }           
    }

    public function showusercard(){
        $user = M('user');
        $uid = I('post.uid');
        $userinfo = $user->field(array('id','production','photo','username','focus','fans','contentcount'))->where('id=%d',$uid)->find();
        foreach ($userinfo as $key => $value) {
             $userinfo[$key] =  urlencode(str_replace("\n", "", $value));
            
          }
        $json .= urldecode(json_encode($userinfo)).',';  
        echo substr($json, 0,strlen($json)-1);
    }



    //tupiam
    public function up(){
     $upload =new \Think\Upload();
            $uid = cookie('uid');
            $username = cookie('username');
            $length = I('post.total');
           // $abc = I("post.file_name");
          if(I('post.responsedata')){
                $time = I('post.responsedata');
             }else{
                return ;
             }
           
          //if(!I('post.file_id')) $time = time().mt_rand(10,30);
            //$abc = I("post.extra");
            $upload->maxSize = 1024*1024*10;
            $upload->exts = array('jpg','gif','png','jpeg');
            $upload->savePath = './Public/'; 

            $upload->subName = $uid.'/content/'.$time.'/'.$file['exts'];

            $info  =  $upload->upload(); 
            if($info){
                if($length >1){
                // 修剪图片
                foreach ($info as $file) {

                    $name = './Uploads/Public/'.$uid.'/contentsmall/'.$time.'/';
                    $name1 = './Uploads/Public/'.$uid.'/contentmiddle/'.$time.'/';
                    $filename1 = './Uploads/Public/'.$uid.'/content/'.$time.'/'.$file['savename'].$file['exts'];
                    $filename2 = './Uploads/Public/'.$uid.'/contentsmall/'.$time.'/'.$file['savename'].$file['exts'];
                    $filename3 = './Uploads/Public/'.$uid.'/contentmiddle/'.$time.'/'.$file['savename'].$file['exts'];
                    $img = new Image(); 
                    $img->open($filename1); 
                    $width = $img->width(); 
                    $height = $img->height(); 
                    $h = 440*$height/$width; 
                    if(!is_dir($name1)) mkdir($name1,0777,true);
                    if($width < 440){
                        $img->save($filename3);
                    }else{
                        $img->thumb(440,$h)->save($filename3);
                    }
                                 
                    if(!is_dir($name)) mkdir($name,0777,true);
                    $img->thumb(80,80,\Think\Image::IMAGE_THUMB_CENTER)->save($filename2);
                        
                }
                echo $time; 
            } else{
                foreach ($info as $file) {
                   $name1 = './Uploads/Public/'.$uid.'/contentsmall/'.$time;
                   $name2 = './Uploads/Public/'.$uid.'/contentmiddle/'.$time;
                    $filename1 = './Uploads/Public/'.$uid.'/content/'.$time.'/'.$file['savename'].$file['exts'];
                    $filename2 = './Uploads/Public/'.$uid.'/contentsmall/'.$time.'/'.$file['savename'].$file['exts'];
                    $filename3 = './Uploads/Public/'.$uid.'/contentmiddle/'.$time.'/'.$file['savename'].$file['exts'];
                    $img = new Image(); 
                    $img->open($filename1); 
                    $width = $img->width(); 
                    $height = $img->height(); 
                    $h = 440*$height/$width;                   
                    if(!is_dir($name1)) mkdir($name1,0777,true);
                    if(!is_dir($name2)) mkdir($name2,0777,true);
                    $img->thumb(440,$h)->save($filename3);
                    $img->thumb(120,120)->save($filename2);
                    
                }
                echo $time; 
            }                                               
        }
    }

   


    // 验证码功能
    public function verify(){
        $verify = new Verify();
        $verify->imageH = 28;
        $verify->imageW =100;
        $verify->fontSize = 18;
        $verify->length = 1;
        $verify->useNoise = false;
        $verify->entry();

    }

    // 验证验证码
    public function checkverify(){
        // if(!IS_AJAX) halt('页面不存在');

        $code = I('post.verify');
        // $code= '111';
        // var_dump($code) ;
        $verify = new Verify();
        $states = $verify->check($code);
        echo $states? 1:0;


    }

    // 添加好友
     public function addfriend(){
        $data['fromuser'] = cookie('uid');
        $data['touser'] = I('post.touser');
        $data['date'] = C('NOW_TIME');
        $data['state'] = 1;
        var_dump($data);

        $addfriends = M('friend');
        if($addfriends->data($data)->add()){
            echo 1;
        };
        
     }

     //删除微博
     public function deletecontent(){
        $content = M('content');
        $news = M('news');
        $uid = I('post.uid');
        $cid = I('post.cid');
        if($uid == cookie('uid')){
            echo $content->delete($cid);
            $news->where('conid=%d',$cid)->delete();
        }
     }

     //添加转发内容
     public function addrepost(){
        if(!cookie('uid')) return ;
        $content = trim(I('post.contentvalue'));
        $cid = I('post.cid');

        $num = mb_strlen($content,'utf8');

        if(isset($cid)) {
            if($num > 0 && $num <= 280){
               $repost =  M('content');
               $data['cid'] = $cid;
               $data['uid'] = cookie('uid');
               $data['date'] = C('NOW_TIME');
               $data['content'] = $content;
               if($repost->create($data) &&$repost->add()){

                    echo 1;
               }
            }
        }
        
     }


     //添加评论
     public function addcomment(){
        if(!cookie('uid')) return ;
        $comment = M('comment');
        $user = M('user');
        $data['cid'] = I('post.cid');
        $data['uid'] = cookie('uid');

        $reg = '/@([\x{4e00}-\x{9fa5}A-Za-z0-9_]{1,5})/u';
        $zjsz = '';
        $regb = array();
        $regc = array();
        $regd = array();
        $string = trim(I('post.content'));
         preg_match_all($reg, $string ,$rega);
         for ($i=0; $i < count($rega[1]) ; $i++) { 
            $zjsz = $user->getFieldByUsername($rega[1][$i],'id');
            $regd[$i] = $zjsz;
            if(!$zjsz) $zjsz = 0;
            array_push($regc, '['.$zjsz.$rega[0][$i].'/]');
            $regb[$i] = '/'.$rega[0][$i].'/';
         }
            $data['comment'] = preg_replace($regb, $regc, $string);


        if(I('post.toid')) $data['toid'] = I('post.toid');
        if($comment->create($data)&& $abc = $comment->add()){
            if($regd){
                foreach ($regd as $key => $value) {
                    $data1['uid'] = $value;
                    $data1['comid'] = $abc;

                   if($value && $value !== $uid){
                      //提醒@的人
                        $user->where('id=%d',$value)->setInc('atnewcom',1);
                       $aaa = $news->data($data1)->add(); ;
                    } 
                }                            
            } 
            $user->where('id=%d',I('post.fromid'))->setInc('comment',1);
            echo 1;
        }

     }

     //显示评论
     public function showcomment(){
       $cid =  I('post.cid');
        $commentview = D('CommentView');
        $commentlist = $commentview->field(array('commentid','comment','date','uid','photo','cid','username'))->where('cid=%d',$cid)->order('commentid desc')->limit(10)->select();  
        foreach ($commentlist as $key => $value) {
            $commentlist[$key]['date'] =  todate($commentlist[$key]['date']);
        }
        foreach ($commentlist as $key => $value) {
           foreach ($value as $key2 => $val) {
               $commentlist[$key][$key2] = urlencode(str_replace("\n", "", $val));               
             };             
        }; 
        //var_dump($commentlist);
        $json .= urldecode(json_encode($commentlist)).',';
        echo substr($json, 0,strlen($json)-1);
          
         
     }


     public function addabstract (){
        $abstract  = I('post.abstract');
        $user = M('user');
        $data['production'] = $abstract;
        $where['id'] = cookie('uid');
        $result = $user->data($data)->where($where)->save();
        if($result){
            echo 1;
        }
     }

    public function askat(){
        //if(!I('post.time')) exit();
        set_time_limit(0);
        $i = 1;
        $con = I('post.con');
        $com = I('post.com');
        $comc = I('post.comc');
        $time = I('post.time');

        $arr = array();
        while(true){
            $i ++;
            $user = M('user');
            $news = $user->field(array('atnewcon,atnewcom,comment'))->where('id=%d',cookie('uid'))->find();
            $atnewcon = $news['atnewcon'];
            $atnewcom = $news['atnewcom'];
            $comment = $news['commment'];

            if(($atnewcom != $com) || ($atnewcon != $con) || ($i == $time) || $comment != $comc){
                $arr=array('atnewcon'=>$atnewcon,'atnewcom'=>$atnewcom,'comment'=>$comment);
                echo json_encode($arr);
                exit();
            }else{
                sleep(2);
            }

        }
    }

    
     




    
}


?>