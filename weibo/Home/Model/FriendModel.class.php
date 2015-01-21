<?php
/**
 * @Author: anchen
 * @Date:   2014-12-19 09:41:32
 * @Last Modified by:   anchen
 * @Last Modified time: 2014-12-26 22:50:31
 */
    namespace Home\Model;
    // use Think\Model;
use Think\Model\RelationModel;

/**
* 
*/
class FriendModel extends RelationModel
{
    
    protected $_link = array(
        'User'=>array(
            'mapping_type'=>self::MANY_TO_MANY,
            // 'class_name'=>'friend',
            'relation_table'=>'think_user_friend',
            'foreign_key'=>'guanzhu',
            'relation_foreign_key'=>'beiguanzhu',
            )

        );
}







?>