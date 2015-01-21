<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo (C("webname")); ?></title>
	<link rel="stylesheet" href="/weibo/Public/CSS/common.css" />
    <script type="text/javascript" src="/weibo/Public/Js/jquery.min.js"></script>
    <script src="/weibo/Public/Js/common.js" type="text/javascript" charset="utf-8" ></script>
    <script src="/weibo/Public/Js/index.js" type="text/javascript" charset="utf-8" ></script>
    <script src="/weibo/Public/Js/validate.js" type="text/javascript" charset="utf-8" ></script>
	


    <link rel="stylesheet" href="/weibo/Public/CSS/discovery.css">
    <script src="/weibo/Public/Js/focus.js" type="text/javascript" charset="utf-8" ></script>
</head>
<body>
<div class="wbbody" style="padding-top:50px">
    <div>
        <div class="weibo-top">
	<div class="weibo-top-in">
		<div class="logo"><a href="" class="a-logo"></a><span class="s-logo"></span></div>
		<div id="search-box" >
			<input type="text" class="search-all" name="search">
			<a href="javascript:void(0);" class="f f3" style="font-size:18px">f</a>
		</div>
		<div class="top-right">
			<ul class="top-nav">
				<li >
					<a href="/weibo/index.php" class="home_nav">
						<em class="i">E</em>
						<em class="nav">首页</em>
					</a>
				</li>
				<li >
					<a href="<?php echo U('Discovery/discovery');?>" class="home_nav">
						<em class="i ficon-find">F</em>
						<em class="nav">发现</em>
					</a>
				</li>
				<li >
					<a href="javascript:void(0);" class="home_nav">
						<em class="i ficon-game">G</em>
						<em class="nav">游戏</em>
					</a>
				</li>
				<?php if(isset($_COOKIE['username'])): ?><li class="userinfo">
						<a href="<?php echo U('User/index',array('id'=>$_COOKIE['uid']));?>" >
							<em class="i ficon-find">H</em>
							<em class="use"><?php echo (cookie('username')); ?></em>
						</a>
					</li>
				<?php else: ?>
					<li class="userinfo"><a href="javascript:void(0)" class="login">登陆</a></li>
					<li class="userinfo"><a href="javascript:void(0)" class="register">注册</a></li><?php endif; ?>
			</ul>
				<?php if(isset($_COOKIE['username'])): ?><div class="setting-all">
						<div id="news-list">
							<a href="javascript:void(0)"class="mail">
								<em class="i ">I</em>
                                <em class="new_count"></em>
							</a>
							<div class="newslist">
								<div class="arrow">
	                                <i class="wtri"></i>
	                                <em></em>
	                         	</div>
								<ul>
									<li><a href="<?php echo U('News/newsat');?>">@我的<em class="new_count"></em></a>

                                    </li>
									<li><a href="<?php echo U('News/newscomment');?>">评论<em class="com_count"></em></a></li>
									<li><a href="">赞</a></li>
									<li><a href="<?php echo U('News/newsmsg');?>">私信</a></li>
									<li><a href="javascript:void(0)">未关注人私信</a></li>
									<li><a href="javascript:void(0)" class="news-set">消息设置</a></li>
								</ul>
							</div>
							<div class="topmenutip">
                                <a href="javascript:void(0)" class="f fclose1">X</a> <ul>
                                    
                                </ul>                   
                            </div>   
						</div>

						<div id="setting-list">
							<a href="javascript:void(0)" class="setting" ><em class="i ">*</em></a>
							
							<div class="set-list">
								<div class="arrow">
	                                <i class="wtri"></i>
	                                <em></em>
	                         	</div>
								<ul>
									<li><a href="<?php echo U('set/settings');?>">帐号设置</a></li>
									<li><a href="">V认证</a></li>
									<li><a href="">帐号安全</a></li>
									<li><a href="">隐私设置</a></li>
									<li><a href="">消息设置</a></li>
									<li><a href="">帮助中心</a></li>
									<li><a href="<?php echo U('Common/logout');?>"class="logout">退出</a></li>
								</ul>
							</div>
						</div>	

						<div id="write"><a title="试一下n键" href="javascript:void(0)"><em class="i try" style="color:#fff">ß</em></a></div>	

					</div><?php endif; ?>
			
		</div>
	</div>
</div>

<script  type="text/javascript" charset="utf-8" >
	var COMMON = "/weibo/index.php/Home/Common/";
    var INDEX = "/weibo/index.php/Home/Index/";
	var USER = "/weibo/index.php/Home/User/";
    var NEWS = "/weibo/index.php/Home/News/";
	var ROOT = "/weibo";
	var VERIFY = "<?php echo U('Common/verify');?>";
	var PICTURE = "/weibo/<?php echo ($pictures); ?>";
	var USERNAME = "<?php echo (cookie('username')); ?>";



	// alert(COMMON);
</script>
				<!-- 注册框 -->
<div id="register">
	<div class="reg_title">
		<p>欢迎<em>注册</em>微博</p>
		<a href="javascript:void(0)" title="关闭" class="f close">X</a>
	</div>
	<div id="reg_wrap" class="line1">
		<div class="reg_left">
			<div class="reg_left_all">
				<ul>
					<li><img src="/weibo/Public/Images/logo.jpg" alt="" /></li>
					<li>欢迎注册微博</li>
				</ul>
				<div class="reg_l_bottom">
					<a href="javascript:void(0)" id="login_now">已有帐号登录</a>
				</div>
			</div>
		</div>
		<div class="reg_right">
			<form action="<?php echo U('Common/register');?>" method="post" name="register">

				<ul>
					<li>
						<label for="reg_username" >用户名</label>
						<input type="text" name="username" id="reg_username" required="required"/>
						<span >2-6个字符：字母、数字或中文</span>
					</li>
					<li>
						<label for="reg_email">邮箱</label>
						<input type="email" name="email" id="reg_email" />
						<span></span>
					</li>
					<li>
						<label for="reg_password">密码</label>
						<input type="password" name="password" id="reg_password" />
						<span>6-15个字符：字母、数字或中文</span>
					</li>
					<li>
						<label for="reg_pwd">确认密码</label>
						<input type="password" name="pwd" id="reg_pwd" />
						<span>请再次输入密码</span>
					</li>
					<li>
						<label for="reg_verify">验证码</label>
						<input type="text" name="verify" id="reg_verify" />
						<img src="<?php echo U('Common/verify');?>" id="verify_img" alt="" />
						<span>必须是四位</span>
					</li>
					<li class="submit">
						<input type="submit" value="立即注册" id="reg_sub" />
					</li>

				</ul>
			</form>
		</div>
		
	</div>
</div>

<div id="login">
	<div class="login_title">
		<p>欢迎登录微博</p>
		<a href="javascript:void(0)" title="关闭" class="f close">X</a>
	</div>
	<div id="login_wrap" class="">
		<div class="login_right">
			<form action="<?php echo U('Common/login');?>" method="post" name="login">
				<ul>
					<li>
						<label for="login_username" >用户名</label>
						<input type="text" name="username" id="login_username" required="required"/>
						<span></span>
					</li>
					<li>
						<label for="login_password">密码</label>
						<input type="password" name="password" id="login_password" />
						<span></span>
					</li>
					<!-- <li>
						<label for="reg_verify">验证码</label>
						<input type="text" name="verify" id="reg_verify" />
						<img src="/weibo/Public/Images/2.jpg" alt="" />
						<span>必须是四位</span>
					</li> -->
					<li class="submit">
						<input type="submit" value="立即登录" id="login_sub" />
					</li>

				</ul>
			</form>
		</div>
		
	</div>
</div>



<!-- 背景遮罩 -->
<div id="background" class="hidden"></div>

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
                                <a href="<?php echo U('Discovery/discovery');?>" class="hotwb"><span>热门微博</span></a>
                            </h3>
                            <h3>
                                <a href="javascript:void(0)" class="minihuati"><span>微话题</span></a>
                            </h3>
                            <h3>
                                <a href="<?php echo U('Discovery/findpeople');?>" class="findsomebody"><span>找人</span></a>
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
                    
                        <style type="text/css" media="screen">
                            .left_nav .hotwb{
                               background:rgba(255,255,255,0.3);
                            }
                        </style>
                        <div class="choose choosesize bgw">
                            <div class="chooseall">
                                <div class="choosesizeall">
                                    <ul class="choose-ul f14">
                                        <li class="hotwb"><a href=""><span>热门微博榜</span></a></li>
                                        <li class="tabwb"><a href=""><span>分类</span></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    
                    
                        <div class="choose choosetime">
                            <div class="chooseall ">
                                <ul class="choose-ul">
                                    <li class="lifirst bgw"></li>
                                    <li ><a href="javascript:void(0)"><span class="choose-li bgw">1小时</span>
                                    <span class="b">
    <span class="bl">
        <em class = "b11"><i class="sbg2"></i></em>
        <em class = "r"><i class="sbg2"></i></em>
    </span>
    <span class="arrow_bor1">
        <i class="sbg2_br"></i>
    </span>
</span></a></li>
                                    <li class="bgw"><a href="javascript:void(0)"><span class="choose-li bgw">24小时</span>
                                    <span class="b">
    <span class="bl">
        <em class = "b11"><i class="sbg2"></i></em>
        <em class = "r"><i class="sbg2"></i></em>
    </span>
    <span class="arrow_bor1">
        <i class="sbg2_br"></i>
    </span>
</span></a></li>
                                    <li class="bgw"><a href="javascript:void(0)"><span  class="choose-li bgw">周榜</span>
                                    <span class="b">
    <span class="bl">
        <em class = "b11"><i class="sbg2"></i></em>
        <em class = "r"><i class="sbg2"></i></em>
    </span>
    <span class="arrow_bor1">
        <i class="sbg2_br"></i>
    </span>
</span></a></li>
                                    <li class="bgw"><a href="javascript:void(0)"><span  class="choose-li bgw">月榜</span>
                                    <span class="b">
    <span class="bl">
        <em class = "b11"><i class="sbg2"></i></em>
        <em class = "r"><i class="sbg2"></i></em>
    </span>
    <span class="arrow_bor1">
        <i class="sbg2_br"></i>
    </span>
</span></a></li>
                                    <li class="lilast bgw"></li>
                                </ul>
                            </div>
                        </div>
                    
                    <div class="wbcontent" >
                        
                        <div class="content-detail">
                            <div class="WB_screen">
                                <div class="screen_box">
                                    <a href=""><i class="f">c</i></a>
                                </div>
                            </div>
                            <div class="WB_face">
                                <div class="faces">
                                    <a href=""><img src="/weibo/Public/Images/1.jpg" height="50" width="50"alt="" /></a>
                                </div>
                            </div>
                            <div class="WB_detail">
                                <div class="WB_info">
                                    <a href=""style="color:#333;font-size:14px;">人民日报</a>
                                    <a href="" class=""><i></i></a>
                                    <a href="" class=""><i></i></a>
                                </div>
                                <div class="WB_txt">
                                    国家工商总局：天猫、1号店、亚马逊“双11”售假】工商总局公布“双11”期间对电商促销商品的抽检结果：已确认8批次样品为假冒商品，天猫3个，1号店2个，乐蜂网、苏宁易购、亚马逊各1个，另有7批次样品质量不合格或标签不合法。涉品牌有新百伦、阿迪达斯、雅诗兰黛、金士顿、蔻驰、万宝龙等。
                                </div>
                              <!--   <div class="WB_photo_list">
                                    <div class="photo_box">
                                        <ul>
                                            <li><img src="" alt="" />
                                                <i class="loading"></i>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div> -->
                                <div class="feed_expand">
                                    <div class="arrow">
                                        <i class="sw tri"></i>
                                    </div>
                                    <div class="expand2 bg1">
                                        <div class="WB_info">
                                            <a href=""style="color:#333;font-size:12px;font-weight:bold">@人民日报</a>
                                            <a href="" class=""><i></i></a>
                                            <a href="" class=""><i></i></a>
                                        </div>
                                        <div class="txt1">
                                            爸妈必读！数据调查颠覆家庭教育9大误区】听话的孩子成绩好？教育孩子只是妈妈的事？学前班能让孩子赢在起跑线上？择校能提高孩子的成绩？……中国教育科学研究院近期对小学生和家长的调查，数据颠覆你的印象！戳图，了解传统家庭教育的常见误区，让孩子快乐长大！转给身边的爸妈！
                                        </div>
                                        <div class="WB_from txt2">
                                            <a href=""class="txt2">8分钟前</a>
                                             来自 
                                            <a href=""class="txt2">微博客户端</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="WB_from txt2">
                                    <a href=""class="txt2">8分钟前</a>
                                     来自 
                                    <a href=""class="txt2">微博客户端</a>
                                </div>
                            </div>
                        </div>
                        <div class="feed_handle">
                            <div>
                                <ul class="line1">
                                    <li><a href=""class="txt2"><span class="pos"><span class="line2">收藏</span></span></a></li>
                                    <li><a href=""class="txt2"><span class="pos"><span class="line2">转发 100</span></span></a></li>
                                    <li><a href=""class="txt2"><span class="pos"><span class="line2">评论 100</span></span></a></li>
                                    <li><a href=""class="txt2"><span class="pos"><span class="line2">赞 100</span></span></a></li>
                                </ul>
                            </div>
                        </div>
                    
                       
                    </div>
                    <div class="wbcontent">
                        
                            
                        
                    </div>
                    
                    <div class="wbcontent">  
                        
                            
                        
                     </div> 
                     <div class="wbcontent">  
                        
                            
                        
                     </div>   
                </div>


                <!-- 右边 -->
                <div class="WB_main_r">
                    <div class="discoverytext">
                        
                             <div class="bg2">
                                <div class="right_module">
                                    <div class="card_b">
                                        <h4 class="obj_name"><span><a href="">热门话题</a></span></h4>
                                        
                                    </div>
                                    <div class="innerwrap">
                                        <div class="m_wrap"></div>
                                        <div class="m_wrap">
                                            <ul class="hot_topic">
                                                <li>
                                                    <a href="">
                                                        <i><img src="/weibo/Public/Images/98350.png" alt="" /></i>
                                                        <span>笑话</span>
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="">
                                                        <i><img src="/weibo/Public/Images/faxian/98380.png" alt="" /></i>
                                                        <span>神最右</span>
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="">
                                                        <i><img src="/weibo/Public/Images/faxian/98380.png" alt="" /></i>
                                                        <span>囧人糗事</span>
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="">
                                                        <i><img src="/weibo/Public/Images/faxian/98380.png" alt="" /></i>
                                                        <span>视频</span>
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="">
                                                        <i><img src="/weibo/Public/Images/faxian/98380.png" alt="" /></i>
                                                        <span>体育</span>
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="">
                                                        <i><img src="/weibo/Public/Images/faxian/98380.png" alt="" /></i>
                                                        <span>美食</span>
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="">
                                                        <i><img src="/weibo/Public/Images/faxian/98380.png" alt="" /></i>
                                                        <span>娱乐</span>
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="">
                                                        <i><img src="/weibo/Public/Images/faxian/98380.png" alt="" /></i>
                                                        <span>韩流</span>
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="">
                                                        <i><img src="/weibo/Public/Images/faxian/98380.png" alt="" /></i>
                                                        <span>电影</span>
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="">
                                                        <i><img src="/weibo/Public/Images/faxian/98380.png" alt="" /></i>
                                                        <span>影视</span>
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="">
                                                        <i><img src="/weibo/Public/Images/faxian/98380.png" alt="" /></i>
                                                        <span>音乐</span>
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="">
                                                        <i><img src="/weibo/Public/Images/faxian/98380.png" alt="" /></i>
                                                        <span>时尚</span>
                                                    </a>
                                                </li> 
                                                
                                            </ul>
                                        </div>
                                    </div>                               
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div class="bottom">

<?php if(is_array(C("bottom"))): foreach(C("bottom") as $key=>$bo): echo ($bo); ?>　<?php endforeach; endif; ?>

<div><?php echo (C("copy")); ?></div>
</div>

<!--[if lt IE 6]>
	<script type="text/javascript" src="/weibo/Public/Js/ie.js"></script>

</div>
<![endif]-->
</body>
</html>
</div>