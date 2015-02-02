<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
     // 验证码功能
    public function verify(){
        $verify           = new \Think\Verify();
        $verify->imageH   = 28;
        $verify->imageW   =100;
        $verify->fontSize = 18;
        $verify->length   = 1;
        $verify->useNoise = false;
        $verify->entry();

    }
    // 验证验证码
    public function checkverify(){
        // if(!IS_AJAX) halt('页面不存在');
        $code = I('post.verify');
        $verify = new \Think\Verify();
        $states = $verify->check($code);
        echo $states? 1:0;
    }

        // 
        // denglu功能
    public function login(){
        if(!IS_POST) halt('页面不存在');
        $db = D('user');
        $db->create();
        if(!$db->create()){
            $this->error($db->getError());
        }
        $username = $db->username;
        if(!$uid =$db->add()) $this->error('登陆失败，请稍候重试');

        cookie('uid',$uid,C('AUTO_LOGIN_LIFETIME'));
        cookie('username',$username,C('AUTO_LOGIN_LIFETIME'));
        $this->success('登陆成功，正在为您跳转...',__CONTROLLER__.'/content');
    }
    Public function checkPwd () {
        $account = I('post.username');
        $pwd = sha1(I('post.password'));
        $where = array('user' => $account);
        $password = M('manager')->where($where)->getField('password');
        if ($password && $password == $pwd) {
            echo 1;
        } else {
            echo 0;
        }
    }

    public function content(){

        $this->display();
    }

    public function sidebar(){
        $this->action = I('get.action');
        $this->display();
    }

    public function top(){
        $this->display();
    }

    public function main(){
        $this->sidebar = I('get.sidebar');
        $this->display();
    }

    public function main_user(){
            $user = M('user');
            $page = I('post.page');
            $pageSize = I('post.rows');

            $order = I('post.order');
            $sort = I('post.sort');
            $contentcount = trim(I('post.contentcount'));
            $fans = trim(I('post.fans'));
            $focus = trim(I('post.focus'));
            //var_dump($contentcount);
            $where = array();
            
           if(I('post.username')) $where['username'] = array('LIKE','%'.I('post.username').'%');
            if(I('post.date_from')) $where['date'] = array('EGT',I('post.date_from'));
            if($fans !== '') $where['fans'] = array('ELT',I('post.fans'));
            if($focus !== '') $where['focus'] = array('ELT',I('post.focus'));
            if($contentcount !== '') $where['contentcount'] = array('ELT',I('post.contentcount'));
            if($date_to = I('post.date_to') ) $where['date'] = array('ELT',$date_to);

            $userinfo = $user->field(array('id','username','email','date','fans','contentcount','focus'))->order($sort.' '.$order)->page($page,$pageSize)->where($where)->select();
            $total = $user->where($where)->count('id');
            $json = '';
            foreach ($userinfo as $key => $value) {
                $json .= json_encode($value).',';
            }

            $json = substr($json, 0, -1);
            echo '{"total" : '.$total.', "rows" : ['.$json.'], "footer" : [{"user" : "统计","email" : "统计","date" : "统计"}]}';
        
    }

    public function main_user_add(){
        $user = M('user');
        $row = I('post.row');
        $data['username'] = $row['username'];
        $data['date'] = $row['date'];
        $data['fans'] = $row['fans'];
        $data['focus'] = $row['focus'];
        $data['contentcount'] = $row['contentcount'];
        $data['email'] = $row['email'];
        //var_dump($row);
        if($result = $user->data($data)->add()) echo $result;
        
    }
    public function main_user_update(){
        $user = M('user');
        $row = I('post.row');
        $id = $row['id'];
        $data['username'] = $row['username'];
        $data['date'] = $row['date'];
        $data['fans'] = $row['fans'];
        $data['focus'] = $row['focus'];
        $data['contentcount'] = $row['contentcount'];
        $data['email'] = $row['email'];
        //var_dump($row);
        if($result = $user->where('id=%d',$id)->save($data)) echo $result;
        
    }
    public function main_content(){
            $contents = D('ContentView');
            $content = M('content');
            $page = I('post.page');
            $pageSize = I('post.rows');

            $order = I('post.order');
            $sort = I('post.sort');
            //var_dump($contentcount);
            $where = array();
            
           if(I('post.content')) $where['content'] = array('LIKE','%'.I('post.content').'%');
            if(I('post.position')) $where['position'] = array('LIKE','%'.I('post.position').'%');
            if(I('post.date_from')) $where['date'] = array('EGT',I('post.date_from'));
            if($date_to = I('post.date_to') ) $where['date'] = array('ELT',$date_to);
            
            

            $contentinfo = $contents->field(array('id'=>'contentid','username','content','date','position'))->order($sort.' '.$order)->page($page,$pageSize)->where($where)->select();
            foreach ($contentinfo as $key => $value) {
                if(!$contentinfo[$key]['repostnum'] = $content->where('cid=%d',$contentinfo[$key]['id'])->count()) $contentinfo[$key]['repostnum'] = 0;

            }
            $total = $contents->where($where)->count();
            $json = '';
            foreach ($contentinfo as $key => $value) {
                $json .= json_encode($value).',';
            }

            $json = substr($json, 0, -1);
            echo '{"total" : '.$total.', "rows" : ['.$json.']}';
        
    }

    public function main_user_del(){
        $user = M('user');
       if($result = $user->delete(I('post.ids'))) echo $result;
        
    }
    public function main_content_del(){
        $user = M('content');
       if($result = $user->delete(I('post.ids'))) echo $result;
        
    }

        // 退出功能
    public function logout () {
        cookie('username',null);
        cookie('uid',null);
        redirect(__APP__);
    }
}