<?php
/**
 * @Author: anchen
 * @Date:   2015-01-03 17:04:08
 * @Last Modified by:   anchen
 * @Last Modified time: 2015-01-16 12:20:46
 */
namespace Home\Model;
use Think\Model\ViewModel;


/**
* 
*/
class ComconViewModel extends ViewModel
{
   protected $viewFields = array(
        'comment'=>array(
            'comment','cid','uid','date','id'=>'commentid','toid',
            '_type'=>'LEFT',
            ),
        'content'=>array(
            'id'=>'contentid','content','uid'=>'contentuid',
            '_on'=>'comment.cid=content.id',
            '_type'=>'RIGHT',
            ),
        'user' =>array(
            'id','username','production','photo',
            '_on' => 'user.id=comment.uid',
            ),  /**/
    );

}

?>