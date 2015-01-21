<?php
/**
 * @Author: anchen
 * @Date:   2014-12-19 17:03:41
 * @Last Modified by:   anchen
 * @Last Modified time: 2014-12-23 14:20:45
 */
namespace Home\Controller;
use Think\Controller;
use Think\Image;
/**
*  
*/
class SetController extends Controller
{
    public function settings (){
        $user = M('user');
        $this->abstract = $user->where('id=%d',cookie('uid'))->getField('production');
        $this->display();
    }
    public function setphoto (){
        $uid = cookie('uid');
        $user = M('user');
        $this->pictures = $user->where('id='.$uid)->getField('photo');
        $this->display();

    }
    
    // 上传文件
    public function uploadimg (){
        $uid = cookie('uid');
        $upload =new \Think\Upload();
        $upload->maxSize = 1024*1024;
        $upload->exts = array('jpg','gif','png','jpeg');
        $upload->savePath = './Public/';
        $upload->subName = $uid.'/face'.$file['exts'];
        
        $info   =   $upload->upload();
        if(!$info) {
            $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息   

            foreach($info as $file){        
                $userphoto =  M('user');
                $where['id'] = $uid;
                $filename = $file['savepath'].$file['savename'].$file['exts'];
                $filename1 = './Uploads/Public/'.$uid.'/face/'.$file['savename'].$file['exts'];
                $filename2 = './Uploads/Public/'.$uid.'/180/'.$file['savename'].$file['exts'];
                $data['photo'] = '/Uploads/Public/'.$uid.'/180/'.$file['savename'].$file['exts'];
                 $name = './Uploads/Public/'.$uid.'/180/';

                // 修剪图片
                $img = new Image(); 
                $img->open($filename1);
                if(!is_dir($name)) mkdir($name);
                $img->thumb(180,180,\Think\Image::IMAGE_THUMB_CENTER)->save($filename2);
                $userphoto->where($where)->save($data);                
                
            }
            
            $this->success('上传成功');
            
        }


    }











}





?>