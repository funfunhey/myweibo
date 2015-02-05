<foreach name="[contentinput]" item="vo" >
<assign name="var" value="[what]" />
<div class="fixbottom" />
    <div class="content-detail bgw">
        <div class="WB_screen">
            <div class="screen_box">
                <a href=""><i class="f">c</i></a>
            </div>
        </div>

        <div class="WB_face">
            <div class="faces WB_face_big">
            <eq name="var" value="mine">
                <a href=""><img src='__ROOT__/[picture]'  height="50" width="50"alt="" /></a>
            </eq>
            <eq name="var" value="notmine">
                <a href=""><img src='__ROOT__/{$vo.photo}'  height="50" width="50"alt="" /></a>
            </eq>
            <eq name="var" value="atcomment">
                <a href=""><img src='__ROOT__/{$vo.photo}'  height="50" width="50"alt="" /></a>
            </eq>
            </div>
        </div>
        <div class="WB_detail">
            <div class="WB_info">
            <eq name="var" value="mine">
                <a href=""style="color:#333;font-size:14px;">[username]</a>
                <a href="" class=""><i></i></a>
                <a href="" class=""><i></i></a>
            </eq>
            <eq name="var" value="notmine">
                <a href=""style="color:#333;font-size:14px;">{$vo.username}</a>
                <a href="" class=""><i></i></a>
                <a href="" class=""><i></i></a>
            </eq>
            <eq name="var" value="atcomment">
                <a href=""style="color:#333;font-size:14px;">{$vo.username}</a>
                <a href="" class=""><i></i></a>
                <a href="" class=""><i></i></a>
            </eq>
            </div>
            <div class="WB_txt">
               {$vo.comment}
            </div>

            <div class="feed_expand">
                <div class="expand2 bg1">
                        <eq name="var" value="mine">

                        <empty name="vo['ccid']">
                        <div class="txt1"> 
                            该微博已被删除
                        </div>
                        <else />
                        <div class="txt1"> 
                            评论{$vo['ccid']['username']}的微博：
                            <a href="javascript:void(0)" title="" class="f333">
                                {$vo['ccid']['content']}
                            </a>
                        </div>
                        </empty>
                        </eq>
                        <eq name="var" value="atcomment">

                        <empty name="vo['cid']">
                        <div class="txt1"> 
                            该微博已被删除
                        </div>
                        <else />
                        <div class="txt1"> 
                            评论{$vo['cid']['username']}的微博：
                            <a href="javascript:void(0)" title="" class="f333">
                                {$vo['cid']['content']}
                            </a>
                        </div>
                        </empty>
                        </eq>
                        <eq name="var" value="notmine">
                            <notpresent name="vo.toid" >
                                <div class="txt1">
                                    评论我的微博：
                                    <a href="javascript:void(0)" title="" class="f333">
                                        {$vo['content']}
                                    </a>
                                </div>
                            </notpresent>
                            <present name="vo.toid" >
                                <div class="txt1">
                                    回复我的微博：
                                    <a href="javascript:void(0)" title="" class="f333">
                                        {$vo['comment']}
                                    </a>
                                </div>
                            </present>
                        </eq>
                </div>
            </div>
            <div class="WB_from txt2">
                <a href=""class="txt2">{$vo.date}</a>
                 来自 
                <a href="javascript:void(0)"class="txt2">微博客户端</a>
            </div>
        </div>
    </div>
    <div class="feed_handle bgw">
        <div>
            <ul class="line1">
                <li class="w100"><a href=""class="txt2"><span class="pos"><span class="f333">回复</span></span></a></li>
            </ul>
        </div>
    </div>
</div>
</foreach>
<include file="Common/page" page="$page" pages="{$pages}" pagenext="{$page_next}" pagepre="{$page_pre}" />