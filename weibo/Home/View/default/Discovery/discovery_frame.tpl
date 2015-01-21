<include file='Common/header' />
    <link rel="stylesheet" href="__PUBLIC__/CSS/discovery.css">
    <script src="__PUBLIC__/Js/focus.js" type="text/javascript" charset="utf-8" ></script>
</head>
<body>
<div class="wbbody" style="padding-top:50px">
    <div>
        <include file="Common/top"/>
    </div>
    <div class="frame" >
        <div class="header">
            <div class="findpic">
                <div class="findlogo"></div>
            </div>
        </div>
        <div class="main">
            <!-- 左边 -->
            <div class="weibo-left">
                <div class="leftnav">
                    <div class="wb_leftnav">
                        <div class="left_nav">
                            <h3>
                                <a href="{:U('Discovery/discovery')}" class="hotwb"><span>热门微博</span></a>
                            </h3>
                            <h3>
                                <a href="javascript:void(0)" class="minihuati"><span>微话题</span></a>
                            </h3>
                            <h3>
                                <a href="{:U('Discovery/findpeople')}" class="findsomebody"><span>找人</span></a>
                            </h3>
                            <h3>
                                <a href="javascript:void(0)" class="movie"><span>电影</span></a>
                            </h3>
                            <h3>
                                <a href="javascript:void(0)" class="song"><span>听歌</span></a>
                            </h3>
                            <h3>
                                <a href="javascript:void(0)" class="postcard"><span>播客</span></a>
                            </h3>
                            <h3>
                                <a href="javascript:void(0)"><span>视频</span></a>
                            </h3>
                            <h3>
                                <a href="javascript:void(0)"><span>新闻</span></a>
                            </h3>
                           

                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 右边和中间 -->
            <div class="wbmain">
                <div class="mainmain">
                    <block name="midtop">
                            
                    </block>
                    <block name="midmid">
                    </block>
                    <div class="wbcontent" >
                        <block name="midbot">
                            
                        </block>
                       
                    </div>
                    <div class="wbcontent">
                        <block name="midbot1">
                            
                        </block>
                    </div>
                    
                    <div class="wbcontent">  
                        <block name="midbot2">
                            
                        </block>
                     </div> 
                     <div class="wbcontent">  
                        <block name="midbot3">
                            
                        </block>
                     </div>   
                </div>


                <!-- 右边 -->
                <div class="WB_main_r">
                    <div class="discoverytext">
                        <block name="right">
                            
                        </block>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <include file="Common/bottom"/>
</div>