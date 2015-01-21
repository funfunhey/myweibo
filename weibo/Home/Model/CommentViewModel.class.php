<?php
/**
 * @Author: anchen
 * @Date:   2015-01-03 17:04:08
 * @Last Modified by:   anchen
 * @Last Modified time: 2015-01-03 17:46:22
 */
namespace Home\Model;
use Think\Model\ViewModel;


/**
* 
*/
class CommentViewModel extends ViewModel
{
   protected $viewFields = array(
        'comment'=>array(
            'comment','cid','uid','date','id'=>'commentid',
            '_type'=>'LEFT',
            ),
        'user' =>array(
            'id','username','production','photo',
            '_on' => 'user.id=comment.uid',
            ),  
    );

}

?>