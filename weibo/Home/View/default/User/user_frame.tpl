<include file="Common/header" />
    <link rel="stylesheet" href="__PUBLIC__/CSS/user.css" />
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/Js/focus.js"></script>
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/Js/user.js"></script>
</head>
<body>
<div class="wbbody" style="padding-top:50px">
    <div>
        <include file="Common/top" />
    </div>
    <div class="userframe">
        <div class="userframea">
            <div class="userheader">
                <div class="user-header">
                    <div class="headerpic">
                        
                    </div>
                    <div class="shadowshadow">
                        <div class="shadowphoto">
                            <p>
                            <foreach name= "people" item="vv">
                                <a href="">
                                    <img src="__ROOT__/{$vv.photo}" alt="" />
                                </a>
                            </p>
                        </div>
                        <div class="shadowusername">
                            <span class="f22">{$vv.username}</span>
                            <span class="icon">
                                <a >
                                    <i></i>
                                </a>
                            </span>
                        </div>
                        <div class="shadowinfo f12">
                            {$vv.production}
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- 中间的导航条 -->
            <div class="official_nav">
                <div class="tab-user f14">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="{:U('User/index')}"><span>我的主页</span></a>
                                </td>
                            
                                <td>
                                    <a href=""><span>我的相册</span></a>
                                </td>
                                <eq name="vv.id" value="$cookieid">
                                <td>
                                    <a href=""><span>管理中心</span></a>
                                </td>
                                </eq>
                            </tr>
                            </foreach>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 中间结束 -->
            <!-- 主要内容 -->
            <div class="plc_main">
            <!-- 主要内容左部   -->
                <div class="frameb_l f14 ">
                    <block name='left'>
                            <div class="focuspart">
                                <div class="">
                                    <div class="lev_box">
                                        <ul class="somelist">
                                            <li class="somelist1 myfocus1">
                                                <a href="{:U('User/userfocus')}" >
                                                    <em class="h">á </em>                       
                                                    <span>关注</span>
                                                    <em></em>
                                                </a>
                                                <ul class="level2">
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <em class="f">C</em>                       
                                                            <span>好友圈</span>
                                                            <em></em>
                                                        </a>
                                                    </li>
                                                    <li>                       
                                                        <a href="javascript:void(0)">
                                                            <em class="f">ê </em>                       
                                                            <span>兴趣主页</span>
                                                            <em></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <em class="f">D</em>                       
                                                            <span>未分组</span>
                                                            <em></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <em class="f">D</em>                       
                                                            <span>吐槽</span>
                                                            <em></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <em class="f">D</em>                       
                                                            <span>查看其他分组</span> 
                                                            <em></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <em class="f">+</em>                       
                                                            <span class="">创建新分组</span>
                                                            <em></em>
                                                        </a>
                                                    </li>

                                                </ul>
                                                
                                            </li>
                                            <li class="level1">
                                                <a href="javascript:void(0)">
                                                    <em class="h">¿</em>                       
                                                    <span>群</span>
                                                    <em></em>
                                                </a>                        
                                            </li>
                                            <li class="level1 myfans1">
                                                <a href="{:U('User/userfans')}" >
                                                    <em class="h">à</em>                       
                                                    <span>粉丝</span>
                                                    <em></em>
                                                </a>
                                            </li>
                                            <li class="level1">
                                                <a href="javascript:void(0)">
                                                    <em class="h">Ç</em>                       
                                                    <span>黑名单</span>
                                                    <em></em>
                                                </a>
                                            </li class="level1">
                                            <li class="level1">
                                                <a href="{:U('discovery/findfriend')}">
                                                    <em class="h">æ</em>                       
                                                    <span>可能感兴趣的人</span>
                                                    <em></em>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </block>
                      <!-- 资料完成程度 -->
                    <div class="frameb_l_b">
                        <div class="card_wrap">
                            <div class="personinfo bg2">
                                <div class="clearfixs">
                                    <p class="clearfix">
                                        <span>
                                            
                                        </span>
                                        <span class="icon_group">
                                            <a href="" class="level">
                                                <span>lv.23</span>
                                            </a>
                                        </span>
                                    </p>
                                </div>
                                <div class="innerwrap">
                                    <div class="bars_box">
                                        <p>
                                        个人资料完成度
                                            <span>55%</span>
                                        </p>
                                        <div class="bar_box">
                                            <div class="bars"></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="cardmore">
                                    <span>
                                        编辑个人资料
                                        <em class="f">a</em>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 资料完成 -->
                </div>
            <!-- 主要内容左部结束  -->
                <block name="main" ></block>
            </div>           
            <!-- 主要内容结束 -->
        </div>
    </div>
</div>
<!-- <include file="Common/repost"/> -->
<include file="Common/bottom"/>
 