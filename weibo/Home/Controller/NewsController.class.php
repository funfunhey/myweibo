<?php

namespace Home\Controller;
use Think\Controller;

/**
*
*/
class NewsController extends Controller
{
    public function news() {

        $this->display();
    }
        public function newsatcomment(){
         $user              = M('user');
         $news              = M('news');
         $comments          = D('CommentView');
         $uid               = cookie('uid');

         $this->username    = cookie('username');
         $content           = M('content');
         $where['fromuser'] = $uid;
         $this->pictures    = $user->where('id='.$uid)->getField('photo');

        // 消除@我的微博的条目
        $user->where('id=%d',$uid)->setField('atnewcom',0);

        // 显示微博
         $wheref['uid']      = $uid;
         $newsatid           = $news->field('comid')->where($wheref)->order('id desc')->find();
         $contents           = D("IndexView");
         $newscount          = $news->where($wheref)->count();
         $newscount          >=100 ? $this->page = 10 : $this->page = ceil($contentcount/10);
         $this->contentcount = $newscount;
         $pages              = I('get.page');

        if( $pages <= 0 || $pages > $this->page || !is_numeric($pages) ||$pages == -0 || !$pages) {
          $pages = 1;
        }
         $wheres['comment.id']    = array('in',$newsatid);
         $contentinput    = $comments->field(array('id','comment','uid','position','date','username','production','photo','cid','commentid'))->where($wheres)->order('commentid desc')->page($pages.',10')->select();
         
         $this->pages     = $pages;
         $this->page_pre  = $pages-1;
         $this->page_next = $pages+1;


         foreach ($contentinput as $key => $value) {
            $contentinput[$key]['comment'] = facelook($contentinput[$key]['comment'],__ROOT__,__MODULE__);
            $contentinput[$key]['cid'] = $contents->field(array('content','uid','username'))->where('content.id = %d',$value['cid'])->find();
            //转日期
            $contentinput[$key]['date']    = todate($value['date']);
          }

        $this->index        = true;
        $this->contentinput = $contentinput;
        $this->concominput = $concominput;
        $this->display();
    }

    public function newsat(){
         $user           = M('user');
         $news           = M('news');
         $uid            = cookie('uid');
         
         $this->username = cookie('username');
         $friend         = M('friend');
         $content        = M('content');
         $this->pictures = $user->where('id='.$uid)->getField('photo');

        //我的关注
          $friends       = D('FriendView');
          $uid           = cookie('uid');
          $this->myfocus = $friends->field(array('username','id'))->where('fromuser='.$uid)->select();

        // 消除@我的微博的条目
        $user->where('id=%d',$uid)->setField('atnewcon',0);


        // 显示微博
        $wheref['uid']      = $uid;
        $newsatid           = $news->where($wheref)->getField('conid',true);
        $contents           = D("IndexView");
        $newscount          = $news->where($wheref)->count();
        $this->page         = ceil($contentcount/10);
        $this->contentcount = $newscount;
        $pages              = I('get.page');
        if( $pages <= 0 || $pages > $this->page || !is_numeric($pages) ||$pages == -0 || !$pages) {
          $pages = 1;
        }
         $where2['id']    = array('IN',$newsatid);
         $contentinput    = $contents->field(array('id','content','uid','position','date','username','production','photo','cid',))->where($where2)->order('id desc')->page($pages.',10')->select();
         $this->pages     = $pages;
         $this->page_pre  = $pages-1;
         $this->page_next = $pages+1;


         foreach ($contentinput as $key => $value) {
            if($value['cid']){
                $contentinput[$key]['cid']            = $contents->field(array('id','content','uid','position','date','username','production','photo'))->where('content.id=%d',$value['cid'])->limit(1)->find();
                $contentinput[$key]['cid']['content'] = facelook($contentinput[$key]['cid']['content'],__ROOT__,__MODULE__);
                $contentinput[$key]['cid']['date']    = todate($contentinput[$key]['cid']['date']);
            };
            $contentinput[$key]['content'] = facelook($contentinput[$key]['content'],__ROOT__,__MODULE__);
            // 评论数
            $comment = M('comment');
            $commentcount = $comment->where('cid=%d',$contentinput[$key]['id'])->count('id');
            $commentcount ?  $contentinput[$key]['commentcount'] = $commentcount : '';


        //转发数
            $repostcount = $content->where('cid=%d',$contentinput[$key]['id'])->count('id');
            $repostcount ?  $contentinput[$key]['repostcount'] = $repostcount : '';
        //转日期
            $contentinput[$key]['date'] = todate($value['date']);
        }



        $this->index        = true;
        $this->contentinput = $contentinput;
        $this->display();
    }
    public function newscomment(){
      $comments      = D('ComconView');
      $comment       = M('Commnent');
      //   $contents = D('IndexView');
      $user          = M('User');
      $cookieid      = cookie('uid');
      // 消除评论的条目
        $user->where('id=%d',$cookieid)->setField('atnewcon',0);
        //评论数
        $where['uid']       = $cookieid;
        $newscount          = $comment->where($wheref)->count();
        $this->page         = ceil($newscount/10);
        $this->contentcount = $newscount;

        //我的头像
        $this->picture = $user->where('id=%d',$cookieid)->getField('photo');
        $pages = I('get.page');
        if( $pages <= 0 || $pages > $this->page || !is_numeric($pages) ||$pages == -0 || !$pages) {
          $pages = 1;
        }
         $contentinput    = $comments->field(array('id','comment','uid','position','date','username','production','photo','cid','contentuid','toid','content'))->where('content.uid=%d or comment.toid=%s',$cookieid,$cookieid)->page($pages.',10')->select();
         $this->pages     = $pages;
         $this->page_pre  = $pages-1;
         $this->page_next = $pages+1;


         foreach ($contentinput as $key => $value) {
            $contentinput[$key]['content'] = facelook($contentinput[$key]['content'],__ROOT__,__MODULE__);

            if($value['toid']){
             $contentinput[$key]['comment'] = $comment->field(array('id','comment'))->where('comment.id=%d',$value['toid'])->find();
             $contentinput[$key]['comment'] = facelook($contentinput[$key]['content'],__ROOT__,__MODULE__);
            } ;
            //转日期
            $contentinput[$key]['date'] = todate($value['date']);
        }/**/
        $this->contentinput = $contentinput;
        //var_dump($this->contentinput);
        $this->display();
    }
    public function newscomment_mine(){
      $comments = D('CommentView');
      $comment  = M('Commnent');
      $contents = D('IndexView');
      $user     = M('User');
      $cookieid = cookie('uid');
      // 消除评论的条目
        $user->where('id=%d',$cookieid)->setField('atnewcon',0);
        //评论数
        $where['uid']       = $cookieid;
        $newscount          = $comment->where($wheref)->count();
        $this->page         = ceil($newscount/10);
        $this->contentcount = $newscount;

        //我的头像
        $this->picture = $user->where('id=%d',$cookieid)->getField('photo');
        $pages = I('get.page');
        if( $pages <= 0 || $pages > $this->page || !is_numeric($pages) ||$pages == -0 || !$pages) {
          $pages = 1;
        }
         $contentinput = $comments->field(array('id','comment','uid','position','date','username','production','photo','cid'))->where('uid=%d',$cookieid)->page($pages.',10')->select();
        $this->pages     = $pages;
        $this->page_pre  = $pages-1;
        $this->page_next = $pages+1;


         foreach ($contentinput as $key => $value) {
            $contentinput[$key]['content']        = facelook($contentinput[$key]['content'],__ROOT__,__MODULE__);
            $contentinput[$key]['ccid']            = $contents->field(array('id','content','uid','username'))->where('content.id=%d',$value['cid'])->find();
            $contentinput[$key]['cid']['content'] = facelook($contentinput[$key]['cid']['content'],__ROOT__,__MODULE__);

            //转日期
            $contentinput[$key]['date'] = todate($value['date']);
            $contentinput[$key]['comment'] = facelook($contentinput[$key]['comment'],__ROOT__,__MODULE__);
        }
        $this->contentinput = $contentinput;
        //var_dump($this->contentinput);
         $this->display();
    }
    public function newsmsg(){
        $this->display();
    }





}


?>