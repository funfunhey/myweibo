<?php
namespace Home\Controller;
use Think\Controller;
use Think\Image;
class IndexController extends Controller {
    public function index(){
        $user = M('user');
        $uid = cookie('uid');
        $this->pictures = $user->where('id='.$uid)->getField('photo');

        $this->username = cookie('username');
        // 关注和粉丝数微博数
        $this->myinfo = $user->field(array('fans','focus','contentcount'))->where('id=%d',$uid)->select();

        //我的关注
          $friends = D('FriendView');
          $uid = cookie('uid');
          $this->myfocus = $friends->field(array('username','id'))->where('fromuser='.$uid)->select();


        // 显示微博
        $contents = D("IndexView");
        $friend = M('friend');
        $this->fromcontent = $friend->field('touser')->where('fromuser=%d',$uid)->buildSql();
         $contentcount = $contents->where("uid in ".$this->fromcontent .'or uid=%d',$uid)->count();
         $this->contentcount = $contentcount;
         $contentcount>=100 ? $this->page = 10 : $this->page = ceil($contentcount/10);
        $pages = I('get.page');
        if( $pages <= 0 || $pages > $this->page || !is_numeric($pages) ||$pages == -0 || !$pages) {
          $pages = 1;
        }

         $contentinput = $contents->field(array('id','content','uid','position','date','username','production','photo','cid',))->where("uid in ".$this->fromcontent .'or uid=%d',$uid)->order('date desc')->page($pages.',10')->select();
        $this->pages = $pages;
        $this->page_pre = $pages-1;
        $this->page_next = $pages+1;


         foreach ($contentinput as $key => $value) {
            if($value['cid']){
                $contentinput[$key]['cid'] = $contents->field(array('id','content','uid','position','date','username','production','photo'))->where('content.id=%d',$value['cid'])->limit(1)->select();
                $contentinput[$key]['cid'][0]['content'] = facelook($contentinput[$key]['cid'][0]['content'],__ROOT__,__MODULE__);
                $contentinput[$key]['cid'][0]['date'] = todate($contentinput[$key]['cid'][0]['date']);
            };
            if ($value['position'] !== 0) {
                $contentinput[$key]['filename'] = filename($value['uid'],$value['position']);
                 $contentinput[$key]['filenamecount'] = count($contentinput[$key]['filename']);
            }
            $contentinput[$key]['content'] = facelook($contentinput[$key]['content'],__ROOT__,__MODULE__);
            // 评论数
            $comment = M('comment');
            $commentcount = $comment->where('cid=%d',$contentinput[$key]['id'])->count('id');
            $commentcount ?  $contentinput[$key]['commentcount'] = $commentcount : '';


        //转发数
        $content = M('content');
            $repostcount = $content->where('cid=%d',$contentinput[$key]['id'])->count('id');
            $repostcount ?  $contentinput[$key]['repostcount'] = $repostcount : '';

          //转日期   
        $contentinput[$key]['date'] = todate($value['date']);        
        }              

        //var_dump($contentinput[1]);
        $this->index = true;
        $this->contentinput = $contentinput;
        $this->display();
        
    }

    public function atuser(){
          $user = M('user');
          $friend = M('friend');
          $uid = cookie('uid');
          $statea = $friend->where('fromuser='.$uid)->getField('touser',true);
          $data['id'] = array('IN',$statea);
          $cont = $user->where($data)->getField('username',true);
          foreach ($cont as $key => $value) {
             $cont[$key] =  urlencode(str_replace("\n", "", $value));
            
          }
        $json .= urldecode(json_encode($cont)).',';  
        echo substr($json, 0,strlen($json)-1);
    }
    public function fans(){
          $user = M('user');
          $friend = M('friend');
          $uid = cookie('uid');
          $statea = $friend->where('touser='.$uid)->getField('fromuser',true);
          $stateb = $friend->where('fromuser='.$uid)->getField('touser',true);
          foreach ($statea as $key => $value) {
             $statea[$key] =  urlencode(str_replace("\n", "", $value));           
          }
        $json .= urldecode(json_encode($statea)).',';  
        echo substr($json, 0,strlen($json)-1);
    }
    public function focus(){
          $user = M('user');
          $friend = M('friend');
          $uid = cookie('uid');
          $stateb = $friend->where('fromuser='.$uid)->getField('touser',true);
          foreach ($stateb as $key => $value) {
             $stateb[$key] =  str_replace("\n", "", $value);           
          }
        $json .= json_encode($stateb).',';  
        echo substr($json, 0,strlen($json)-1);
    }
 
    

     
    


}
   
?>