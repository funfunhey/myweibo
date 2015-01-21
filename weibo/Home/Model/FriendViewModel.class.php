<?php
/**
 * @Author: anchen
 * @Date:   2014-12-19 10:36:05
 * @Last Modified by:   anchen
 * @Last Modified time: 2014-12-31 22:42:14
 */
namespace Home\Model;
    use Think\Model\ViewModel;

/**
* 
*/
class FriendViewModel extends ViewModel
{
    
    Protected $viewFields = array(

        'friend' =>array(
            'state'=>'astate',
            'fromuser','touser','date',
            '_type' => 'LEFT',
            
            ),
         'user' =>array(
            'id','username','production','photo',
            '_on' => 'user.id=friend.touser',
            ),
        // 'friend' =>array(
        //     'state'=>'bstate',
        //     '_on' => 'user.id=friend.touser'
        //     )

        );
}



?>