<include file="Common/header"/>
    <link rel="stylesheet" href="__PUBLIC__/CSS/news.css" />
    <script src="__PUBLIC__/Js/news.js" type="text/javascript" charset="utf-8" async defer></script>
    </head>
    <style type="text/css">
        span.ico{
            clear:both;
        }
    </style>
<body>
<div class="wbbody" style="padding-top:50px">
    <div>
        <include file="Common/top" />
    </div>
    <div class="miniblogblog">
        <div class="miniblog">
            <div class="main">
        <!-- 左边 -->
                <div class="main_l inb">
                    <div class="left_nav">
                        <div>
                            
                            <div class="lev_box ">
                                <h3 class="f14">
                                    我的消息箱
                                    <a href="" class="i">J</a>
                                </h3>
                                <div class="lev ">
                                    <a href="{:U('News/newsat')}" class="atme">
                                        <span class="ico">
                                            <em class="f"></em>
                                         </span>    
                                        <span>
                                             @我的
                                        </span>
                                    </a>
                                </div> 
                                <div class="lev ">
                                    <a href="{:U('News/newscomment')}" class="mycomment">
                                        <span class="ico">
                                            <em class="f"></em>
                                         </span>    
                                        <span>
                                            评论
                                        </span>
                                    </a>
                                </div> 
                                <div class="lev ">
                                    <a href="{:U('News/newsat')}">
                                        <span class="ico">
                                            <em class="f"></em>
                                         </span>    
                                        <span>
                                           赞
                                        </span>
                                    </a>
                                </div> 
                            </div>
                            <div class="lev_box">
                                <div class="lev ">
                                    <a href="{:U('News/newsmsg')}" class="mymsg">
                                        <span class="ico">
                                            <em class="f"></em>
                                         </span>    
                                        <span>
                                            私信
                                        </span>
                                    </a>
                                </div> 
                                <div class="lev ">
                                    <a href="">
                                        <span class="ico">
                                            <em class="f"></em>
                                         </span>    
                                        <span>
                                           未关注人私信
                                        </span>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
        <!-- 左边结束 -->
                <!-- 中间开始 -->
                <div class="wbmain">
                    <div class="mainmain">
                        <div class="">
                            <block name="title">
                            </block>
                            
                        </div>
                        <!-- 中下部 -->
                        <div class="">
                            <block name="main">
                            </block>
                        </div>
                    </div>
                        <!-- 中下部结束 -->
                    <!-- 右边开始 -->
                    <div class="WB_main_r">
                        <block name="right">
                            <div class="bg2">
                                <div class="right_module">
                                    <div class="card_b">
                                        <h4 class="obj_name"><span><a href="">使用小帮助</a></span></h4>
                                        
                                    </div>
                                    <div class="innerwrap">
                                        <dl>
                                            <dt>
                                            <em class="f">9</em>
                                            <span>：什么是@提醒？</span>                           
                                            </dt>
                                            <dd>
                                                <span>
                                                    A：在微博中@他人的昵称，如"@微博小秘书"，他就会收到你@他的提醒。
                                                </span>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                            <em class="f">9</em>
                                            <span>：@太多怎样防骚扰？</span>                           
                                            </dt>
                                            <dd>
                                                <span>
                                                    A：你可以设置为仅接收关注的人发出的@信息现在去设置»
                                                </span>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>        
                            </div>
                        </block>
                    </div>
                    <!-- 右边结束   、 -->
                </div>
                
                
            </div>
        </div>
    </div>

   
</div>
<include file="Common/repost" />
<include file="Common/bottom"/>



