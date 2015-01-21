<include file="Common/header" />
    <link rel="stylesheet" href="__PUBLIC__/CSS/set.css" />
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/Js/set.js"></script>
</head>
<body>
<div class="wbbody" style="padding-top:50px">
    <div>
        <include file="Common/top" />
    </div>
    <div class="miniblogblog">
        <div class="miniblog">
            <div class="main">
        <!-- 左边 -->
                <div class="main_l">
                    <div class="setnav_left">
                        <div class="level_l_box ">
                            <form >
                                <fieldset class="line3 forma">
                                    <legend class="txt-ae">帐号设置</legend> 
                                </fieldset>
                            </form>
                            <div class="lev">
                                
                                <a href="{:U('set/settings')}" class="choose-mine">
                                
                                    <i class="myinfo"></i>
                                    我的信息
                                </a>
                            </div>
                            <div class="lev">
                                <a href="{:U('set/setphoto')}" class="mine-photo">
                                    <i class="myphoto"></i>
                                    头像
                                </a>
                            </div>
                            <div class="lev">
                                <a href="" class="" class="mine-safe">
                                    <i class="mysafe"></i>
                                    帐号安全
                                </a>
                            </div>
                            <form action="">
                                <fieldset class="line3 nav_line">
                                    
                                </fieldset>
                            </form>

                        </div>
                        
                        <div class="level_l_box ">
                            <div class="lev-nav ">
                                <a href="" class="">
                                    <i class="mysecret"></i>
                                    隐私设置
                                </a>
                            </div>
                           <div class="lev">
                                <a href="" class="">
                                    <i class="mynews"></i>
                                    消息设置
                                </a>
                            </div>
                            <div class="lev">
                                <a href="" class="">
                                    <i class="mypre"></i>
                                    偏好设置
                                </a>
                            </div>
                            <form action="">
                                <fieldset class="line3 nav_line">
                                    
                                </fieldset>
                            </form>

                        </div>
                        <div class="level_l_box ">
                            <div class="lev-nav ">
                                <a href="" class="">
                                    <i class="myaccout"></i>
                                    帐号绑定
                                </a>
                            </div>
                            <form action="">
                                <fieldset class="line3 nav_line">
                                    
                                </fieldset>
                            </form>

                        </div>
                        <div class="level_l_box ">
                            <div class="lev-nav ">
                                <a href="" class="">
                                    <i class="mymedal"></i>
                                    我的勋章
                                </a>
                            </div>
                            

                        </div>
                    </div>
                </div>
        <!-- 左边结束 -->
                <!-- 右边开始 -->
                <div class="main_a">
                    <div class="bg4">
                        <div class="group_read">
                            <block name="title">
                            </block>
                            
                        </div>
                        <div class="accout_event">
                            <block name="main">
                            </block>
                        </div>
                    </div>
                </div>
                
                <!-- 右边结束   、 -->
            </div>
        </div>
    </div>

   
</div>
<include file="Common/bottom"/>