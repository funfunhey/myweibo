<?php
/**
 * @Author: anchen
 * @Date:   2014-12-19 10:36:05
 * @Last Modified by:   anchen
 * @Last Modified time: 2015-01-01 16:32:32
 */
namespace Home\Model;
    use Think\Model\ViewModel;

/**
* 
*/
class FriendfansViewModel extends ViewModel
{
    
    Protected $viewFields = array(

        'friend' =>array(
            'state'=>'astate',
            'fromuser','touser','date',
            '_type' => 'LEFT',
            
            ),
         'user' =>array(
            'id','username','production','photo',
            '_on' => 'user.id=friend.fromuser',
            ),
        // 'friend' =>array(
        //     'state'=>'bstate',
        //     '_on' => 'user.id=friend.touser'
        //     )

        );
}



?>