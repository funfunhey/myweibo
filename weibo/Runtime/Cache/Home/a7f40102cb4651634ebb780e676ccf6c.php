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
	


    <link rel="stylesheet" href="/weibo/Public/CSS/news.css" />
    <script src="/weibo/Public/Js/news.js" type="text/javascript" charset="utf-8" async defer></script>
    </head>
    <style type="text/css">
        span.ico{
            clear:both;
        }
    </style>
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
                                    <a href="<?php echo U('News/newsat');?>" class="atme">
                                        <span class="ico">
                                            <em class="f"></em>
                                         </span>    
                                        <span>
                                             @我的
                                        </span>
                                    </a>
                                </div> 
                                <div class="lev ">
                                    <a href="<?php echo U('News/newscomment');?>" class="mycomment">
                                        <span class="ico">
                                            <em class="f"></em>
                                         </span>    
                                        <span>
                                            评论
                                        </span>
                                    </a>
                                </div> 
                                <div class="lev ">
                                    <a href="<?php echo U('News/newsat');?>">
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
                                    <a href="<?php echo U('News/newsmsg');?>" class="mymsg">
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
                            
    <style type="text/css" media="screen">
        .mycomment{
            background-color: rgba(255,255,255,0.2);

        }
        .mycomment em:after{
            content:"B";
        }
    </style>
            <div class="choose">
                <div class="chooseall">
                    <ul class="choose-ul">
                        <li class="bgw">
                            <span class="somespan bgw">
                               <a  href="<?php echo U('News/newscomment');?>" class="atblog">收到的评论</a>
                               <a href="" class="f">c</a>
                            </span>
                            
                            <span class="b">
    <span class="bl">
        <em class = "b11"><i class="sbg2"></i></em>
        <em class = "r"><i class="sbg2"></i></em>
    </span>
    <span class="arrow_bor1">
        <i class="sbg2_br"></i>
    </span>
</span>
                        </li>
                        <li >
                            <span class="somespan bgw">
                               <a  href="<?php echo U('News/newscomment-mine');?>" class="atblog">发出的评论</a>
                               <a href="" class="f">c</a>
                            </span>
                            
                            <span class="b">
    <span class="bl">
        <em class = "b11"><i class="sbg2"></i></em>
        <em class = "r"><i class="sbg2"></i></em>
    </span>
    <span class="arrow_bor1">
        <i class="sbg2_br"></i>
    </span>
</span>
                        </li>
                        <li class="li-last bgw">
                            
                        </li>
                        
                        
                    </ul>
                    <div class="r-fix bgw">
                       <div class="search-boxes">
                            <span>
                                 <form action="single-form" method="get">
                                    <div id="search-box" >
                                        <input type="text"  name="search" value="查找评论内容或评论人" class="f12">
                                        <span class="pos1">
                                            <a href="javascript:void(0);" class="f f1" style="font-size: 16px;color: #696e78; opacity:0.5;filter:alpha(opacity=30);">f</a>
                                        </span>
                                        
                                    </div>
                                </form>
                            </span>
                            <a href="" class="i se">J</a>
                        </div> 
                    </div>
                    

            </div>
        </div>


                            
                        </div>
                        <!-- 中下部 -->
                        <div class="">
                            
                            <div class="content-detail bgw">
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

                                <div class="feed_expand">
                                    <div class="expand2 bg1">
                                        <div class="txt1">
                                            评论某人的微博：
                                            <a href="javascript:void(0)" title="" class="f333">
                                                 国家工商总局：天猫、1号店、亚马逊“双11”售假】工商总局公布“双11”期间对电商促销商品的抽检结果：已确认8批次样品为假冒商品，天猫3个，1号店2个，乐蜂网、苏宁易购、亚马逊各1个，另有7批次样品质量不合格或标签不合法。涉品牌有新百伦、阿迪达斯、雅诗兰黛、金士顿、蔻驰、万宝龙等。
                                            </a>
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
                        <div class="feed_handle bgw">
                            <div>
                                <ul class="line1">
                                    <li class="w100"><a href=""class="txt2"><span class="pos"><span class="f333">回复</span></span></a></li>
                                </ul>
                            </div>
                        </div>

                        </div>
                    </div>
                        <!-- 中下部结束 -->
                    <!-- 右边开始 -->
                    <div class="WB_main_r">
                        
        <div class="bg2">
            <div class="right_module">
                <div class="card_b">
                    <h4 class="obj_name"><span><a href="">评论使用小帮助</a></span></h4>
                    
                </div>
                <div class="innerwrap">
                    <dl>
                        <dt>
                        <em class="f">9</em>
                        <span>：评论太多，想分类看？</span>                           
                        </dt>
                        <dd>
                            <span>
                                A：你可以通过分类筛选，只查看自己关注的人。
                            </span>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                        <em class="f">9</em>
                        <span>不希望某些人评论自己？</span>                           
                        </dt>
                        <dd>
                            <span>
                                A：可以设置仅关注的人才能给自己发评论，现在就去设置»
                            </span>
                        </dd>
                    </dl>
                </div>
            </div>        
        </div>


                    </div>
                    <!-- 右边结束   、 -->
                </div>
                
                
            </div>
        </div>
    </div>

   
</div>
 <!-- 转发的框 -->

<div class="repost ">
    <div class="repostcon">
        <div class="reposttitle">
            转发微博
        </div>
        <div class="close">
            <a href="javascript:void(0)" class="i">X</a>
        </div>
        <div class="repostinner">
            <div class="repostwrap">
                <div class="reposttab">
                    <span class="f12">转发到：</span>
                    <ul>
                        <li>
                            <a href="" class="my_wb">我的微博</a>
                        </li>
                        <li>
                            <a href="">好友圈</a>
                        </li>
                        <li>
                            <a href="">私信</a>
                        </li>

                    </ul>
                </div>
                <div class="repostclient">
                    <div class="reposttab clientwrap">
                        <a href="" class="f">g</a>
                        <span class="s_txt">

                        </span>
                    </div>
                </div>
                <div class="repostrepeat">
                    <div class="publish">
                        <div class="r_textarea">
                            <textarea name="repeat" id="repeat" cols="30" rows="10"></textarea>
                            <span>
                                <span class="num">140</span>
                            </span>
                            <div class="succ">
                                <span class=" success "></span>
                                <span  class=""> 发布成功</span>
                            </div>
                        </div>
                        <div class="repeat_opt">
                        <div class="btnb">
                            <div class="limits">
                                <a href="">
                                    <span>公开</span>
                                    <i class="f">
                                        c
                                    </i>
                                </a>
                                
                            </div>
                            <a href="javascript:void(0)" class="submit_post">转发</a>
                        </div>
                    <div class="re_opt">
                        <span class="ico faceico">
                            <a href="javascript:void(0)">
                                <i class="i">o</i>
                            </a>
                        </span>
                        
                        <ul>
                            <li>
                                <label for="">
                                    <input type="checkbox" />
                                    <span>同时评论给红烧排骨</span>
                                </label>

                            </li>
                            <li>
                                <label for="">
                                    <input type="checkbox" />
                                    <span>同时评论给红烧排骨</span>
                                </label>

                            </li>
                        </ul>
                    </div>
                </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
       <div class="biaoqingku repostbq">
        <div class="bqcontent">
            <div class="fclose">
                <a href="" class="i">X</a>
            </div>
            <div class="bqface">
                <div class="minitab">
                    <ul>
                        <li><a href="javascript:void(0)">默认</a></li>
                        <li><a href="javascript:void(0)">浪小花</a></li>
                        <li><a href="javascript:void(0)">暴走漫画</a></li>
                        <li><a href="javascript:void(0)">小恐龙</a></li>
                        <li><a href="javascript:void(0)">冷兔</a></li>
                        
                    </ul>
                    <ul class="fx">
                        <li><a href="javascript:void(0)"><i class="f">j</i></a></li>
                        <li><a href="javascript:void(0)"><i class="f">i</i></a></li>
                    </ul>
                </div>
                <div class="list-box overf">
                    <div class="face_list">
                        <ul>
                            <li title="债见" data="[88_org]"><img src="/weibo/Public/Images/biaoqing/88_org.gif" alt="" /></li>
                            <li title="惊讶 " data="[cj_org]"><img src="/weibo/Public/Images/biaoqing/cj_org.gif" alt="" /></li>
                            <li title="可恶" data="[crazya_org]"><img src="/weibo/Public/Images/biaoqing/crazya_org.gif" alt="" /></li>
                            <li title="晕" data="[dizzya_org]"><img src="/weibo/Public/Images/biaoqing/dizzya_org.gif" alt="" /></li>
                            <li title="doge" data="[doge_org]"><img src="/weibo/Public/Images/biaoqing/doge_org.gif" alt="" /></li>
                            <li title="偷笑" data="[heia_org]"><img src="/weibo/Public/Images/biaoqing/heia_org.gif" alt="" /></li>
                            <li title="挖鼻屎" data="[kbsa_org]"><img src="/weibo/Public/Images/biaoqing/kbsa_org.gif" alt="" /></li>
                            <li title="可怜" data="[kl_org]"><img src="/weibo/Public/Images/biaoqing/kl_org.gif" alt="" /></li>
                            <li title="爱你" data="[lovea_org]"><img src="/weibo/Public/Images/biaoqing/lovea_org.gif" alt="" /></li>
                            <li title="加油" data="[lxhjiayou_org]"><img src="/weibo/Public/Images/biaoqing/lxhjiayou_org.gif" alt="" /></li>
                            <li title="偷笑笑" data="[lxhtouxiao_org]"><img src="/weibo/Public/Images/biaoqing/lxhtouxiao_org.gif" alt="" /></li>
                            <li title="喵喵" data="[mm_org]"><img src="/weibo/Public/Images/biaoqing/mm_org.gif" alt="" /></li>
                            <li title="怒骂" data="[nm_org]"><img src="/weibo/Public/Images/biaoqing/nm_org.gif" alt="" /></li>
                            <li title="哭" data="[sada_org]"><img src="/weibo/Public/Images/biaoqing/sada_org.gif" alt="" /></li>
                            <li title="害羞" data="[shamea_org]"><img src="/weibo/Public/Images/biaoqing/shamea_org.gif" alt="" /></li>
                            <li title="呵呵" data="[smilea_org]"><img src="/weibo/Public/Images/biaoqing/smilea_org.gif" alt="" /></li>
                            <li title="失望" data="[sw_org]"><img src="/weibo/Public/Images/biaoqing/sw_org.gif" alt="" /></li>
                            <li title="流汗" data="[sweata_org]"><img src="/weibo/Public/Images/biaoqing/sweata_org.gif" alt="" /></li>
                            <li title="笑哭" data="[xiaoku_org]"><img src="/weibo/Public/Images/biaoqing/xiaoku_org.gif" alt="" /></li>
                            <li title="奸笑" data="[yx_org]"><img src="/weibo/Public/Images/biaoqing/yx_org.gif" alt="" /></li>
                            <li title="哈哈" data="[laugh_org]"><img src="/weibo/Public/Images/biaoqing/laugh_org.gif" alt="" /></li>
                            <li title="睡觉" data="[sleepa_org]"><img src="/weibo/Public/Images/biaoqing/sleepa_org.gif" alt="" /></li>
                            <li title="兔子" data="[rabbit_org]"><img src="/weibo/Public/Images/biaoqing/rabbit_org.gif" alt="" /></li>
                            <li title="吐" data="[t_org]"><img src="/weibo/Public/Images/biaoqing/t_org.gif" alt="" /></li>

                        </ul>
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