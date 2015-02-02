<?php
/**
 * @Author: anchen
 * @Date:   2014-12-26 22:09:49
 * @Last Modified by:   anchen
 * @Last Modified time: 2014-12-28 22:06:49
 */

namespace Admin\Model;
use Think\Model\ViewModel;

class ContentViewModel extends ViewModel{
    
   protected $viewFields = array(
        'content'=>array(
            'id','content','uid','position','date','cid',
            '_type'=>'LEFT',
            ),
     
          'user'=>array(
            'username','production','photo',
            '_on'=>'content.uid = user.id',
            ), 


    );
}


?>