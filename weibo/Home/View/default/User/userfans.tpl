<extend name="user/user_frame"/>

<block name="main">
<style type="text/css">
    .myfans1{
        background: #f2f2f5;
    }
    .myfocus1 a{
        background: #fff;
    }
    .member_box li{
        background:#fff;
        padding:16px 0;
        width: 568px;
        border-top: 1px solid #f2f2f5;
        margin-top:-1px;
    }
    .member_box{
        padding:0 16px;
    }
</style>
    <div class="relation">
        <div class="cardwrap">
            <div>
                <div class="relationnav">
                    <div class="opt_choose">
                        <div>
                            <ul>
                                <li>
                                    <span>
                                        <span class="f14">粉丝</span>
                                        <em>{$fans}</em>
                                        <em></em>
                                    </span>
                                    <span>
                                        <span class="f14">垃圾箱</span>
                                        <em></em>
                                        <em></em>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="opt_bar">
                            <div>
                                <a href="">排序<em class="f">g</em></a>
                            </div>
                        </div>
                        <div>
                            <div class="search_box">
                                
                            </div>
                        </div>
                    </div>
                    <div class="member_box">
                        <ul>
                            <foreach name="newfriend" item="v">
                                <li uid="{$v.id}" class="overf ">
                                    <include file="Common/fanslist" name="{$v.username}" fans="{$v.fans}" focus="{$v.focus}" uid="{$v.id}" info="{$v.production}" state="{$state}" weibo="{$v.weibo}" photo="{$v.photo}" zubie="吐槽"/>
                                </li>
                            </foreach>
                        </ul>
                    </div>

                </div>
                <div class="cardpage">
                        <div>
                            <a href="" class="page_dis line5">
                                <span>上一页</span>
                            </a>
                            <a href="" class="page_s"></a>
                            <a href="" class="page_cis line2">
                                <span>下一页</span>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</block>