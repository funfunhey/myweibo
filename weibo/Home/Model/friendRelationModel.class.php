<?php
/**
 * @Author: anchen
 * @Date:   2014-12-19 11:08:52
 * @Last Modified by:   anchen
 * @Last Modified time: 2014-12-19 11:34:26
 */
namespace Home\Model;
use Think\Model\RelationModel;

/**
* 
*/
class FriendRelationModel extends RelationModel
{
    
    protected $_link = array(
        'Friend'=>array(
            'mapping_type'=>self::MANY_TO_MANY,
            'relation_table'=>'think_user_friend',
            'foreign_key'=>'guanzhu',
            'relation_foreign_key'=>'beiguanzhu',
            )

        );
}











?>