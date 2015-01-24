
<foreach name="[contentlist]" item="vo">
<eq name ="vo['cid']" value="0">

<div class="wbcontent" contentid={$vo.id} fromid={$vo.uid} username={$vo.username}>
    <div class="content-detail">
        <div class="WB_screen">
            <div class="screen_box">
                <a href="javascript:void(0)" class="screen_a"><i class="f">c</i></a>
                <include file="Common/menulist" name="vo['uid']" value="$_COOKIE['uid']"/>
                <div class="layer_pop">
                    <div class="mini-opt">
                        <p class="pop-text">
                            <span >
                                <span class="f"></span>
                            </span>
                            <span class="pop-txt"></span>
                        </p>
                        <p class="button1">
                            <a href="javascript:void(0)" class="btn-a">
                                <span action-type="ok">
                                    确定
                                </span>
                            </a>
                            <a href="javascript:void(0)" class="btn-b">
                                <span action-type="cancel">
                                    取消
                                </span>
                            </a>

                        </p>
                        <div class="arrow">
                            <i class="ftri"></i>
                        </div>

                    </div>
                </div>
                <div class="pop_states ">
                           <i></i>
                           <span></span>
                </div>
            </div>
        </div>
        <div class="WB_face WB_face_big">
            <div class="faces">
                <a href="{:U('User/index',array('id'=>$vo[uid]))}" ><img src="__ROOT__/{$vo.photo}" height="50" width="50"alt="" class="usercard" uid={$vo[uid]} /></a>
            </div>
            
        </div>
        <div class="WB_detail">
            <div class="WB_info">
                <a href="{:U('User/index',array('id'=>$vo[uid]))}"style="color:#333;font-size:14px;"  uid={$vo[uid]}  class="usercard">{$vo.username}</a>
                <a href="" class=""><i></i></a>
                <a href="" class=""><i></i></a>
            </div>
            <div class="WB_txt content">
                 {$vo.content}
            </div>
            <neq name="vo.position" value="0" >
                <neq name="vo.filenamecount" value="1">
                <div class="WB_photo_list overf">
                    <div class="photo_box">
                        <ul>
                        <foreach name="vo.filename" item="fo">
                            <li>
                                <img src='__ROOT__/Uploads/Public/{$vo.uid}/contentsmall/{$vo.position}/{$fo}' asrc='__ROOT__/Uploads/Public/{$vo.uid}/contentmiddle/{$vo.position}/{$fo}' alt="" uid='{$vo.uid}' pid='{$vo.position}' fid='{$fo}'/>
                            
                            </li>
                        </foreach> 

                        </ul>
                    </div>
                </div>
                <include file="Common/media" />
                </neq>
                <eq name="vo.filenamecount" value="1" >
                    <div class="WB_photo_list overf">
                        <div class="photo_box1">
                            <ul>
                            <foreach name="vo.filename" item="fo">
                                <li>
                                    <img src='__ROOT__/Uploads/Public/{$vo.uid}/contentsmall/{$vo.position}/{$fo}' asrc='__ROOT__/Uploads/Public/{$vo.uid}/contentmiddle/{$vo.position}/{$fo}' alt="" uid='{$vo.uid}' pid='{$vo.position}' fid='{$fo}'/>
                                
                                </li>
                            </foreach> 

                            </ul>
                        </div>
                    </div>
                    <include file="Common/media" />
                </eq>
            </neq> 
            <div class="WB_from txt2 f12">
                <a href=""class="txt2">{$vo.date}</a>
                 来自 
                <a href=""class="txt2">微博客户端</a>
            </div>
        </div>
    </div>
    <div class="feed_handle f12 overf feedfeed">
        <div>
            <ul class="line3 overf">
                <li><a href="javascript:void(0)"class="txt2"><span class="pos"><span class="line2">收藏</span></span></a></li>
                <li>
                    <a href="javascript:void(0)" class="txt2 forrepost" uid={$vo[uid]} username={$vo[username]} contentid={$vo[id]}>
                    <span class="pos"><span class="line2">转发 {$vo.repostcount}</span></span>
                    </a>
                    
                </li>
                <li>
                    <a href="javascript:void(0)" class="txt2">
                    <span class="pos"><span class="line2 forcomment">评论 {$vo.commentcount}</span></span>
                    </a>
                    <div class="arrow arrow-comment" style="margin:-7px 0 0 -16px;text-align:center;display:none;">
                        <i class="sw tri"></i>
                    </div>
                </li>
                <li><a href="javascript:void(0)" class="txt2"><span class="pos"><span class="line2">赞 </span></span></a></li>
            </ul>
        </div>
        <include file="Common/load" />
        <include file="Common/comment" fromuser="{$vo.username}" />
    </div>

</div>
<else/>
<div class="wbcontent" contentid={$vo.id} fromid={$vo.uid}  username={$vo.username} >
    <div class="content-detail">
        <div class="WB_screen">
            <div class="screen_box">
                <a href="javascript:void(0)" class="screen_a"><i class="f">c</i></a>
                <include file="Common/menulist" name="vo['uid']" value="$_COOKIE['uid']"/>


                <div class="layer_pop">
                    <div class="mini-opt">
                        <p class="pop-text">
                            <span >
                                <span class="f"></span>
                            </span>
                            <span class="pop-txt"></span>
                        </p>
                        <p class="button1">
                            <a href="javascript:void(0)" class="btn-a">
                                <span action-type="ok">
                                    确定
                                </span>
                            </a>
                            <a href="javascript:void(0)" class="btn-b">
                                <span action-type="cancel">
                                    取消
                                </span>
                            </a>

                        </p>
                        <div class="arrow">
                            <i class="ftri"></i>
                        </div>
                    </div>
                </div>
                <div class="pop_states ">
                           <i></i>
                           <span></span>
                </div>
            </div>
        </div>
        <div class="WB_face">
            <div class="faces">
                <a href="{:U('User/index',array('id'=>$vo[uid]))}"><img src="__ROOT__/{$vo.photo}" height="50" width="50"alt=""  class="usercard"  uid={$vo[uid]} /></a>
            </div>
            
        </div>
        <div class="WB_detail">
            <div class="WB_info">
                <a href="{:U('User/index',array('id'=>$vo[uid]))}"style="color:#333;font-size:14px;" class="username1 usercard"  uid={$vo[uid]} >{$vo.username}</a>
                <a href="" class=""><i></i></a>
                <a href="" class=""><i></i></a>
            </div>
            <div class="WB_txt reposttxt">
                {$vo.content}
            </div>
            
            <empty name="vo['cid']">
                <div class="feed_expand">
                    <div class="arrow">
                        <i class="sw tri"></i>
                    </div>
                    <div class="expand2 bg1">
                        <div class="innerwrap">
                            <div class="txt1 f14 wbempty">
                                <i class=""></i>
                                抱歉，此微博已被作者删除。查看帮助：http://t.cn/zWSudZc
                            </div>                             
                        </div>
                       
                        
                    </div>
                </div>
            <else/>
                <div class="feed_expand">
                    <div class="arrow">
                        <i class="sw tri"></i>
                    </div>
                    <div class="expand2 bg1">
                        <div class="WB_info">
                            <a href="{:U('User/index',array('id'=>$vo[cid][0][uid]))}"style="color:#333;font-size:12px;font-weight:bold"  class="usercard" uid={$vo[cid][0][uid]}>@{$vo['cid'][0]['username']}</a>
                            <a href="" class=""><i></i></a>
                            <a href="" class=""><i></i></a>
                        </div>
                        <div class="txt1 f12 content">
                            {$vo['cid'][0][content]}
                        </div>
                         <neq name="vo.filenamecount" value="1">
                            <div class="WB_photo_list overf">
                                <div class="photo_box">
                                    <ul>
                                    <foreach name="vo['cid'][0]['filename']" item="fo">
                                        <li>
                                            <img src='__ROOT__/Uploads/Public/{$vo['cid'][0]['uid']}/contentsmall/{$vo['cid'][0]['position']}/{$fo}' asrc='__ROOT__/Uploads/Public/{$vo['cid'][0]['uid']}/contentmiddle/{$vo['cid'][0]['position']}/{$fo}' alt="" uid='{$vo['cid'][0]['uid']}' pid='{$vo['cid'][0]['position']}' fid='{$fo}'/>
                                        
                                        </li>
                                    </foreach> 

                                    </ul>
                                </div>
                            </div>
                            <include file="Common/media" />
                            </neq>
                            <eq name="vo.filenamecount" value="1" >
                                <div class="WB_photo_list overf">
                                    <div class="photo_box1">
                                        <ul>
                                        <foreach name="vo['cid'][0]['filename']" item="fo">
                                            <li>
                                                <img src='__ROOT__/Uploads/Public/{$vo['cid'][0]['uid']}/contentsmall/{$vo['cid'][0]['position']}/{$fo}' asrc='__ROOT__/Uploads/Public/{$vo['cid'][0]['uid']}/contentmiddle/{$vo['cid'][0]['position']}/{$fo}' alt="" uid='{$vo['cid'][0]['uid']}' pid='{$vo['cid'][0]['position']}' fid='{$fo}'/>
                                            
                                            </li>
                                        </foreach> 

                                        </ul>
                                    </div>
                                </div>
                                <include file="Common/media" />
                            </eq>
                        </neq> 
                        <div class="WB_from txt2 f12">
                            <a href=""class="txt2 ">{$vo['cid'][0][date]}</a>
                             来自 
                            <a href=""class="txt2">微博客户端</a>
                        </div>
                        
                    </div>
                </div>
            <div class="WB_from txt2 f12">
                <a href=""class="txt2">{$vo.date}</a>
                 来自 
                <a href=""class="txt2">微博客户端</a>
            </div>
            </empty>
        </div>
    </div>
    <div class="feed_handle f12 feedfeed">
        <div class="overf">
            <ul class="line3">
                <li><a href=""class="txt2"><span class="pos"><span class="line2">收藏</span></span></a></li>
                <li><a href="javascript:void(0)"class="txt2 forrepost" uid={$vo['cid'][0][uid]} username={$vo['cid'][0][username]} contentid={$vo['cid'][0][id]}><span class="pos"><span class="line2">转发 {$vo.repostcount}</span></span></a></li>
                <li>
                    <a href="javascript:void(0)"class="txt2 forcomment"><span class="pos"><span class="line2">评论 {$vo.commentcount}</span></span></a>
                    <div class="arrow arrow-comment" style="margin:-7px 0 0 -16px;text-align:center;display:none;">
                        <i class="sw tri"></i>
                    </div>
                </li>
                <li><a href=""class="txt2"><span class="pos"><span class="line2">赞 </span></span></a></li>
            </ul>
        </div>
        <include file="Common/load" />
       <include file="Common/comment" fromuser="{$vo.username}" />
    </div>
    
   
</div>
</eq>
</foreach>

 <include file="Common/page" page="$page" pages="{$pages}" pagenext="{$page_next}" pagepre="{$page_pre}"/>