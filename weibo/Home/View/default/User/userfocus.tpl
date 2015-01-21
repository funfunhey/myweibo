<extend name="user/user_frame"/>

<block name="main">
    <div class="relation">
        <div class="cardwrap">
            <div>
                <div class="relationnav">
                    <div class="opt_choose">
                        <div>
                            <ul>
                                <li>
                                    <span>
                                        <span class="f14">全部关注</span>
                                        <em>{$friendcount}</em>
                                        <em></em>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="opt_bar">
                            <div>
                                <a href="" class="txt1">批量管理</a>
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
                                <li uid="{$v.id}" class="overf">
                                    <include file="Common/minibox" name="{$v.username}" fans="200万" uid="{$v.id}" info="{$v.production}" state="{$state}" photo="{$v.photo}" zubie="吐槽"/>
                                </li>
                            </foreach>
                        </ul>
                    </div>

                </div>
                <div class="cardpage">
                        <div>
                            <a href="__ACTION__/page/{$pagepre}" class="page_dis line5">
                                <span>上一页</span>
                            </a>
                            <for  start='1' end='$page+1' >
                            <a href="__ACTION__/page/{$i}" class="page_s">{$i}</a>
                            </for>
                            <a href="__ACTION__/page/{$pagenext}" class="page_cis line2">
                                <span>下一页</span>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</block>