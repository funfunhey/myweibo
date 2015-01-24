<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        $this->username = cookie('username');      
        $uid = I('get.id');
        if( $uid <= 0 || !is_numeric($uid) ||$uid == -0 || !$uid) {
          $uid = cookie('uid');
        }

        $this->cookieid = cookie('uid');
        $user = M('user');
        $this->people = $user->field(array('username','id','photo','production','fans','focus','contentcount'))->where('id=%d',$uid)->select();
        if (!$this->people){
          $this->people = $user->field(array('username','id','photo','production'))->where('id=%d',$this->cookieid)->limit(1)->select();  
          $this->uid = $this->cookieid; 
        }else{
            $this->uid = $uid;          
        } 

       $this->pictures = $user->where('id='.$this->cookieid)->getField('photo'); 
        
        // 用视图模型
        //每页个数
        $pagenum = 10;
        $contents = D('IndexView');
        $wherecontents['content.uid'] = $this->uid;
        $ccount = $user->where('id=%d',$this->uid)->getField('contentcount');
        $this->page = ceil($ccount/$pagenum);

        $pages = I('get.page');
        if( $pages <= 0 || $pages > $this->page || !is_numeric($pages) ||$pages == -0 || !$pages) {
          $pages = 1;
        }
        $this->pages = $pages;

        $contentinput = $contents->field(array('id','content','uid','position','date','username','production','photo','cid',))->where($wherecontents)->order('date desc')->page($pages.',10')->select();

    // 
        foreach ($contentinput as $key => $value) {
            if($value['cid']){
               $contentinput[$key]['cid'] = $contents->field(array('id','content','uid','position','date','username','production','photo'))->where('content.id=%d',$value['cid'])->find();
               $contentinput[$key]['cid']['content'] = facelook($contentinput[$key]['cid']['content'],__ROOT__,__MODULE__);
               $contentinput[$key]['cid']['date'] = todate($contentinput[$key]['cid']['date']);
               if ($contentinput[$key]['cid']['position'] !== 0) {
                    $contentinput[$key]['cid']['filename'] = filename($contentinput[$key]['cid']['uid'],$contentinput[$key]['cid']['position']);
                    $contentinput[$key]['cid']['filenamecount'] = count($contentinput[$key]['cid']['filename']);
                }
            }
             if ($value['position'] !== 0) {
                $contentinput[$key]['filename'] = filename($value['uid'],$value['position']);
                 $contentinput[$key]['filenamecount'] = count($contentinput[$key]['filename']);
            }
             $contentinput[$key]['content'] = facelook($contentinput[$key]['content'],__ROOT__,__MODULE__);
           // 评论数
            $comment = M('comment');
            $commentcount = $comment->where('cid=%d',$contentinput[$key]['id'])->count('id');
            $commentcount ?  $contentinput[$key]['commentcount'] = $commentcount : $contentinput[$key]['commentcount'] = '';


          //转发数
            $content = M('content');
            $repostcount = $content->where('cid=%d',$contentinput[$key]['id'])->count('id');
            $repostcount ?  $contentinput[$key]['repostcount'] = $repostcount : '';

            //转日期   
            $contentinput[$key]['date'] = todate($value['date']);
           
        }

       
        
        $this->comment = true;
        $this->contentinput = $contentinput;
        // var_dump($this->contentinput);           

       $this->display();
        
    }

    public function userfocus(){
        $uid = I('get.id');
        $friend = M('friend');
        if( $uid <= 0 || !is_numeric($uid) ||$uid == -0 || !$uid) {
          $uid = cookie('uid');
        }

        $this->cookieid = cookie('uid');
        $user = M('user');
        $this->people = $user->field(array('username','id','photo','production'))->where('id=%d',$uid)->limit(1)->select();
        if (!$this->people){
          $this->people = $user->field(array('username','id','photo','production'))->where('id=%d',$this->cookieid)->limit(1)->select();  
          $this->uid = $this->cookieid; 
        }else{
            $this->uid = $uid;          
        } 
        // 关注和粉丝数
        $this->focus = $friend->where($where)->count('id');

        $this->photo = $user->where('id=%d',$this->uid)->getfield('photo');
        $friendview = D('FriendView');
        $map['fromuser'] = cookie('uid');
        $uid=cookie('uid');

        //分页
        $pages = I('get.page');
        $this->friendcount = $friend->where($map)->count('id');
        $this->page = ceil($this->friendcount/5);
        if( $pages <= 0 || $pages > $this->page || !is_numeric($pages) ||$pages == -0 || !$pages) {
          $pages = 1;
        }

        $this->pagepre = $pages - 1;
        $this->pagenext = $pages + 1;
        $this->newfriend = $friendview->field(array('id','username','fromuser','touser','production','photo'))->where($map)->order('date desc')->page($pages.',5')->select();
        $this->yigz = true;
      $this->display();
    }    

    public function userfans(){
        $uid = I('get.id');
        if( $uid <= 0 || !is_numeric($uid) ||$uid == -0 || !$uid) {
          $uid = cookie('uid');
        }

        $this->cookieid = cookie('uid');
        $user = M('user');
        $this->people = $user->field(array('username','id','photo','production'))->where('id=%d',$uid)->limit(1)->select();
        if (!$this->people){
          $this->people = $user->field(array('username','id','photo','production'))->where('id=%d',$this->cookieid)->limit(1)->select();  
          $this->uid = $this->cookieid; 
        }else{
            $this->uid = $uid;          
        } 
        $this->photo = $user->where('id=%d',$this->uid)->getfield('photo');
        $friend = M('friend');
        $content = M('content');

        // 关注和粉丝数
        $this->fans = $friend->where('touser=%d',$this->uid)->count('id');

        $friendfansview = D('FriendfansView');
        $map['touser'] = cookie('uid');
        $uid=cookie('uid');
        $newfriend = $friendfansview->field(array('id','username','fromuser','touser','production','photo'))->where($map)->order('date desc')->limit(30)->select();
       foreach ($newfriend as $key => $value) {
          $newfriend[$key]['fans'] = $friend->where('touser=%d',$newfriend[$key]['fromuser'])->count('id');  
          $newfriend[$key]['focus'] = $friend->where('fromuser=%d',$newfriend[$key]['fromuser'])->count('id');
          $newfriend[$key]['weibo'] = $content->where('uid=%d',$newfriend[$key]['fromuser'])->count('id');
       };
       $this->newfriend = $newfriend;
      $this->display();
    }


}
?>