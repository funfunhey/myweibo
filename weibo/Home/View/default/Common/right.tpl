<div class="WB_main_r">
    <div class="myinfo">
        <div class="bg2">
            <if condition="isset($_COOKIE['username'])">
                <div class="personinfo">
                    <div class="cover">
                        <div class="headpic">
                            <a href="{:U('set/setphoto')}"><img src="__ROOT__{$pictures}" width="60px" height="60px" alt="" /></a>
                        </div>                   
                    </div>
                    <div class="innerwrap">
                            <div class="namebox">
                                <a href="">
                                    {$Think.cookie.username}
                                </a>
                                <a href="">
                                    <span class="levell">
                                        <span class="level">LV11</span>
                                    </span>
                                </a>
                            </div>
                            <foreach name="myinfo" item="info" >
                            <ul class="user_atten">
                                <li>
                                    <a href="{:U('user/userfocus')}">
                                        <strong>{$info.focus}</strong>
                                        <span>关注</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{:U('user/userfans')}">
                                        <strong>{$info.fans}</strong>
                                        <span>粉丝</span>
                                    </a>
                                </li>
                                <li style="border:0;">
                                    <a href="{:U('user/index',array('id'=>$_COOKIE['uid']))}">
                                        <strong>{$info.contentcount}</strong>
                                        <span>微博</span>
                                    </a>
                                </li>
                            </ul>
                            </foreach>
                    </div> 
                </div>
            </if>
        </div>
    </div>
    <div>
        <div class="bg2">
            <div class="card_a">
                <h4><span><a href="">新版微博使用指南</a></span></h4>
            </div>
        </div>
    </div>
    <div>
        <div class="bg2">
            <div class="right_module">
                <div class="card_b">
                    <h4 class="obj_name"><span><a href="">热门话题</a></span></h4>
                    <div class="opt_box">
                        <a href="javascript:void(0)">
                            <em class="f">e</em>换一换
                        </a>
                    </div>
                </div>
                <div class="innerwrap">
                    <div class="m_wrap"></div>
                    <div class="m_wrap">
                        <ul class="hot_topic">
                            <li>
                                <p>
                                    <span>804万</span>
                                    <a href="">#呐喊哥#</a>
                                </p>
                            </li> 
                            <li>
                                <p>
                                    <span>804万</span>
                                    <a href="">#呐喊哥#</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="" class="line1">
                    <span>查看更多
                        <em class="f">a</em>
                    </span>
                </a>
            </div>
        </div>
    </div>
        <div>
        <div class="bg2">
            <div class="right_module">
                <div class="card_b">
                    <h4 class="obj_name"><span><a href="">可能感兴趣的人</a></span></h4>
                    <div class="opt_box">
                        <a href="javascript:void(0)">
                            <em class="f">e</em>换一换
                        </a>
                    </div>
                </div>
                <div class="innerwrap">
                    <div class="m_wrap"></div>
                    <div class="m_wrap">
                        <ul class="person_list">
                            <li>
                                <div class="pic">
                                    <a href=""class=""><img src="__PUBLIC__/Images/0.jpg" alt="" /></a>
                                </div>
                                <div class="con">
                                        <p>
                                            <a href="">一只学霸</a>
                                            <a href="">
                                                <em class="f">
                                                </em>
                                            </a>
                                            <a href="">
                                            <i class="f"></i></a>
                                        </p>

                                        <span>
                                            <a href="javascript:void(0)">
                                                <em class="f">+</em>关注
                                            </a>
                                        </span>
                                        <div class="change"><a href="" class="f">X</a>
                                        </div>
                                </div>
                                <div class="right_expand">
                                    <div class="arrow">
                                        <i class="sw tri"></i>
                                    </div>
                                    <div class="expand bg1">
                                        <p class="txt2"><span>平面设计师，漫画家</span></p>
                                        <p class="txt2"><a href="">回忆专用小...</a>等10个人关注</p>
                                    </div>
                                </div>
                            </li>
                        </ul>                              
                    </div>
                </div>
                <a href="" class="line1">
                    <span>查看更多
                        <em class="f">a</em>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>