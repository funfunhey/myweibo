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
        .atme{
            background-color: rgba(255,255,255,0.2);

        }
        .atme em:after{
            content:"B";
        }
    </style>
            <div class="choose">
                <div class="chooseall">
                    <ul class="choose-ul">
                        <li >
                            <span class="somespan bgw">
                               <a  href="<?php echo U('News/newsat');?>" class="atblog">@我的微博</a>
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
                        <li class="bgw">
                            <span class="somespan bgw">
                               <a  href="<?php echo U('News/newsatcomment');?>" class="atblog">@我的评论</a>
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
                        <li class="bgw li-last"></li>
                    </ul>
                    <div class="r-fix overf bgw">
                        <div class="search-boxes ">
                            <span>
                                 <form action="single-form" method="get">
                                    <div id="search-box" >
                                        <input type="text"  name="search" value="查找@我的微博">
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
                            
<?php if(is_array($contentinput)): foreach($contentinput as $key=>$vo): if(($vo['cid']) == "0"): ?><div class="wbcontent" contentid=<?php echo ($vo["id"]); ?> fromid=<?php echo ($vo["uid"]); ?> username=<?php echo ($vo["username"]); ?>>
    <div class="content-detail">
        <div class="WB_screen">
            <div class="screen_box">
                <a href="javascript:void(0)" class="screen_a"><i class="f">c</i></a>
                                <?php if(($vo['uid']) == $_COOKIE['uid']): ?><div class="menulist">
                    <ul>
                        <li>
                            <a href="javascript:void(0)"  data="delete">删除</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">转为好友圈可见</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">转为自己可见</a>
                        </li>      
                    </ul>
                </div>
                <?php else: ?>
                <div class="menulist">
                    <ul>
                        <li>
                            <a href="javascript:void(0)">屏蔽这条微博</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">屏蔽<?php echo ($vo["username"]); ?>的微博</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">屏蔽来自的微博</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">取消关注<?php echo ($vo["username"]); ?></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">屏蔽关键词</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">举报</a>
                        </li>

                    </ul>
                </div><?php endif; ?> 
                <div class="layer_pop">
                    <div class="mini-opt">
                        <p class="pop-text">
                            <span >
                                <span class="f"></span>
                            </span>
                            <span class="pop-txt"></span>
                        </p>
                        <p class="button1">
                            <a href="javascript:void(0)" class="btn-a">
                                <span action-type="ok">
                                    确定
                                </span>
                            </a>
                            <a href="javascript:void(0)" class="btn-b">
                                <span action-type="cancel">
                                    取消
                                </span>
                            </a>

                        </p>
                        <div class="arrow">
                            <i class="ftri"></i>
                        </div>

                    </div>
                </div>
                <div class="pop_states ">
                           <i></i>
                           <span></span>
                </div>
            </div>
        </div>
        <div class="WB_face WB_face_big">
            <div class="faces">
                <a href="<?php echo U('User/index',array('id'=>$vo[uid]));?>"><img src="/weibo/<?php echo ($vo["photo"]); ?>" height="50" width="50"alt="" /></a>
            </div>
            
        </div>
        <div class="WB_detail">
            <div class="WB_info">
                <a href="<?php echo U('User/index',array('id'=>$vo[uid]));?>"style="color:#333;font-size:14px;"><?php echo ($vo["username"]); ?></a>
                <a href="" class=""><i></i></a>
                <a href="" class=""><i></i></a>
            </div>
            <div class="WB_txt content">
                 <?php echo ($vo["content"]); ?>
            </div>
            <?php if(($vo["position"]) != "0"): ?><div class="WB_photo_list overf">
                <div class="photo_box">
                    <ul>
                    <?php if(is_array($vo["filename"])): foreach($vo["filename"] as $key=>$fo): ?><li>
                        <img src='/weibo/Uploads/Public/<?php echo ($vo["uid"]); ?>/content/<?php echo ($vo["position"]); ?>/<?php echo ($fo); ?>' alt="" />
                            <i class="loading"></i>
                        </li><?php endforeach; endif; ?> 

                    </ul>
                </div>
            </div><?php endif; ?> 
            <div class="WB_from txt2 f12">
                <a href=""class="txt2"><?php echo ($vo["date"]); ?></a>
                 来自 
                <a href=""class="txt2">微博客户端</a>
            </div>
        </div>
    </div>
    <div class="feed_handle f12 overf feedfeed">
        <div>
            <ul class="line3 overf">
                <li><a href="javascript:void(0)"class="txt2"><span class="pos"><span class="line2">收藏</span></span></a></li>
                <li>
                    <a href="javascript:void(0)" class="txt2 forrepost" uid=<?php echo ($vo[uid]); ?> username=<?php echo ($vo[username]); ?> contentid=<?php echo ($vo[id]); ?>>
                    <span class="pos"><span class="line2">转发 <?php echo ($vo["repostcount"]); ?></span></span>
                    </a>
                    
                </li>
                <li>
                    <a href="javascript:void(0)" class="txt2">
                    <span class="pos"><span class="line2 forcomment">评论 <?php echo ($vo["commentcount"]); ?></span></span>
                    </a>
                    <div class="arrow arrow-comment" style="margin:-7px 0 0 -16px;text-align:center;display:none;">
                        <i class="sw tri"></i>
                    </div>
                </li>
                <li><a href="javascript:void(0)" class="txt2"><span class="pos"><span class="line2">赞 </span></span></a></li>
            </ul>
        </div>
        <style type="text/css" media="screen">
    .loadings{
        text-align: center;
        overflow: hidden;
        padding: 16px;
        background: #f2f2f5;
        display: none;
    }
    .loadings i{
        background: url(/weibo/Public/Images/loading.gif) no-repeat;
        width: 16px;
        height: 16px;
        display: inline-block;
        color:pink;
        vertical-align: middle;
        margin-right: 5px;

    }
</style>
<div class="loadings">
    <i></i>
    正在加载...
</div>
        <div class="bg1 overf comments">
    <div class="commentlist ">
        <div class="W_tips">
            <div>
                <p>
                    <i class="f"></i>
                </p>
                <p class="txt">
                    微博社区管理中心举报处理大厅, 
                    <a href=""> 欢迎查阅</a>
                </p>
                <p class="close">
                    <a href="" class="f">X</a>  
            </div>
            
        </div>
        <div class="publish">
            <?php if(isset($index)): ?><div class="wb_face">
                <img src="/weibo/<?php echo ($pictures); ?>" alt="" />
            </div><?php endif; ?>
            <div class="wb_publish">
                <div class="p_publish">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="p_opt overf">
                    <div class="btn">
                        <a href="javascript:void(0)" class="submits pink comment-submit" >评论</a>
                    </div>
                    <div class="opt">
                        <span class="ico">
                            <a href="" >
                                <i class="jk">o</i>
                            </a>
                        </span>
                        <ul class="ipt">
                            <li>
                                <label for="">
                                    <input type="checkbox" />
                                    <span>同时转发到我的微博</span>
                                </label>
                            </li>                            
                            <li>
                                <label for="">
                                    <input type="checkbox" />
                                    <span>同时评论到原文作者  <?php echo ($vo["username"]); ?></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="repeat_list">
                <?php if(!empty($vo[commentcount])): ?><div class="tab overf">
                        <div class="commentlistnum">
                            <span>共<?php echo ($vo["commentcount"]); ?>条</span>
                        </div>
                        <div class="tabs">
                            <ul>
                                <li>
                                    <span>
                                        <a href="">全部</a>
                                    </span>
                                </li>                            
                                <li>
                                    <span>
                                        <a href="">热门</a>
                                    </span>
                                </li>                            
                                <li>
                                    <span>
                                        <a href="">认证用户</a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <a href="">关注的人</a>
                                    </span>
                                </li>

                            </ul>
                        </div>
                    </div><?php endif; ?>
                <div class="list_box">
                    <div class="list_ul" >
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

</div>
<?php else: ?>
<div class="wbcontent" contentid=<?php echo ($vo["id"]); ?> fromid=<?php echo ($vo["uid"]); ?>  username=<?php echo ($vo["username"]); ?> >
    <div class="content-detail">
        <div class="WB_screen">
            <div class="screen_box">
                <a href="javascript:void(0)" class="screen_a"><i class="f">c</i></a>
                                <?php if(($vo['uid']) == $_COOKIE['uid']): ?><div class="menulist">
                    <ul>
                        <li>
                            <a href="javascript:void(0)"  data="delete">删除</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">转为好友圈可见</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">转为自己可见</a>
                        </li>      
                    </ul>
                </div>
                <?php else: ?>
                <div class="menulist">
                    <ul>
                        <li>
                            <a href="javascript:void(0)">屏蔽这条微博</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">屏蔽<?php echo ($vo["username"]); ?>的微博</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">屏蔽来自的微博</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">取消关注<?php echo ($vo["username"]); ?></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">屏蔽关键词</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">举报</a>
                        </li>

                    </ul>
                </div><?php endif; ?> 


                <div class="layer_pop">
                    <div class="mini-opt">
                        <p class="pop-text">
                            <span >
                                <span class="f"></span>
                            </span>
                            <span class="pop-txt"></span>
                        </p>
                        <p class="button1">
                            <a href="javascript:void(0)" class="btn-a">
                                <span action-type="ok">
                                    确定
                                </span>
                            </a>
                            <a href="javascript:void(0)" class="btn-b">
                                <span action-type="cancel">
                                    取消
                                </span>
                            </a>

                        </p>
                        <div class="arrow">
                            <i class="ftri"></i>
                        </div>
                    </div>
                </div>
                <div class="pop_states ">
                           <i></i>
                           <span></span>
                </div>
            </div>
        </div>
        <div class="WB_face">
            <div class="faces">
                <a href="<?php echo U('User/index',array('id'=>$vo[uid]));?>"><img src="/weibo/<?php echo ($vo["photo"]); ?>" height="50" width="50"alt="" /></a>
            </div>
            
        </div>
        <div class="WB_detail">
            <div class="WB_info">
                <a href="<?php echo U('User/index',array('id'=>$vo[uid]));?>"style="color:#333;font-size:14px;" class="username1"><?php echo ($vo["username"]); ?></a>
                <a href="" class=""><i></i></a>
                <a href="" class=""><i></i></a>
            </div>
            <div class="WB_txt reposttxt">
                <?php echo ($vo["content"]); ?>
            </div>
            
            <?php if(empty($vo['cid'])): ?><div class="feed_expand">
                    <div class="arrow">
                        <i class="sw tri"></i>
                    </div>
                    <div class="expand2 bg1">
                        <div class="innerwrap">
                            <div class="txt1 f14 wbempty">
                                <i class=""></i>
                                抱歉，此微博已被作者删除。查看帮助：http://t.cn/zWSudZc
                            </div>                             
                        </div>
                       
                        
                    </div>
                </div>
            <?php else: ?>
                <div class="feed_expand">
                    <div class="arrow">
                        <i class="sw tri"></i>
                    </div>
                    <div class="expand2 bg1">
                        <div class="WB_info">
                            <a href=""style="color:#333;font-size:12px;font-weight:bold" >@<?php echo ($vo['cid'][0]['username']); ?></a>
                            <a href="" class=""><i></i></a>
                            <a href="" class=""><i></i></a>
                        </div>
                        <div class="txt1 f12 content">
                            <?php echo ($vo['cid'][0][content]); ?>
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
                        <div class="WB_from txt2 f12">
                            <a href=""class="txt2 "><?php echo ($vo['cid'][0][date]); ?></a>
                             来自 
                            <a href=""class="txt2">微博客户端</a>
                        </div>
                        
                    </div>
                </div>
            <div class="WB_from txt2 f12">
                <a href=""class="txt2"><?php echo ($vo["date"]); ?></a>
                 来自 
                <a href=""class="txt2">微博客户端</a>
            </div><?php endif; ?>
        </div>
    </div>
    <div class="feed_handle f12 feedfeed">
        <div class="overf">
            <ul class="line3">
                <li><a href=""class="txt2"><span class="pos"><span class="line2">收藏</span></span></a></li>
                <li><a href="javascript:void(0)"class="txt2 forrepost" uid=<?php echo ($vo['cid'][0][uid]); ?> username=<?php echo ($vo['cid'][0][username]); ?> contentid=<?php echo ($vo['cid'][0][id]); ?>><span class="pos"><span class="line2">转发 <?php echo ($vo["repostcount"]); ?></span></span></a></li>
                <li>
                    <a href="javascript:void(0)"class="txt2 forcomment"><span class="pos"><span class="line2">评论 <?php echo ($vo["commentcount"]); ?></span></span></a>
                    <div class="arrow arrow-comment" style="margin:-7px 0 0 -16px;text-align:center;display:none;">
                        <i class="sw tri"></i>
                    </div>
                </li>
                <li><a href=""class="txt2"><span class="pos"><span class="line2">赞 </span></span></a></li>
            </ul>
        </div>
        <style type="text/css" media="screen">
    .loadings{
        text-align: center;
        overflow: hidden;
        padding: 16px;
        background: #f2f2f5;
        display: none;
    }
    .loadings i{
        background: url(/weibo/Public/Images/loading.gif) no-repeat;
        width: 16px;
        height: 16px;
        display: inline-block;
        color:pink;
        vertical-align: middle;
        margin-right: 5px;

    }
</style>
<div class="loadings">
    <i></i>
    正在加载...
</div>
       <div class="bg1 overf comments">
    <div class="commentlist ">
        <div class="W_tips">
            <div>
                <p>
                    <i class="f"></i>
                </p>
                <p class="txt">
                    微博社区管理中心举报处理大厅, 
                    <a href=""> 欢迎查阅</a>
                </p>
                <p class="close">
                    <a href="" class="f">X</a>  
            </div>
            
        </div>
        <div class="publish">
            <?php if(isset($index)): ?><div class="wb_face">
                <img src="/weibo/<?php echo ($pictures); ?>" alt="" />
            </div><?php endif; ?>
            <div class="wb_publish">
                <div class="p_publish">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="p_opt overf">
                    <div class="btn">
                        <a href="javascript:void(0)" class="submits pink comment-submit" >评论</a>
                    </div>
                    <div class="opt">
                        <span class="ico">
                            <a href="" >
                                <i class="jk">o</i>
                            </a>
                        </span>
                        <ul class="ipt">
                            <li>
                                <label for="">
                                    <input type="checkbox" />
                                    <span>同时转发到我的微博</span>
                                </label>
                            </li>                            
                            <li>
                                <label for="">
                                    <input type="checkbox" />
                                    <span>同时评论到原文作者  <?php echo ($vo["username"]); ?></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="repeat_list">
                <?php if(!empty($vo[commentcount])): ?><div class="tab overf">
                        <div class="commentlistnum">
                            <span>共<?php echo ($vo["commentcount"]); ?>条</span>
                        </div>
                        <div class="tabs">
                            <ul>
                                <li>
                                    <span>
                                        <a href="">全部</a>
                                    </span>
                                </li>                            
                                <li>
                                    <span>
                                        <a href="">热门</a>
                                    </span>
                                </li>                            
                                <li>
                                    <span>
                                        <a href="">认证用户</a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <a href="">关注的人</a>
                                    </span>
                                </li>

                            </ul>
                        </div>
                    </div><?php endif; ?>
                <div class="list_box">
                    <div class="list_ul" >
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    
   
</div><?php endif; endforeach; endif; ?>

 <div class="superpage">
    <div class="page f12">
        <?php if(($pages > 1) AND ($pages <= 10)): ?><a href="/weibo/index.php/Home/News/newsat/page/<?php echo ($page_pre); ?>"class="page_pre">上一页</a><?php endif; ?>
                <span class="list">
                    <div class="pagelist boxstyle">
                        <ul>
                        <?php $__FOR_START_18266__=$page;$__FOR_END_18266__=0;for($i=$__FOR_START_18266__;$i > $__FOR_END_18266__;$i+=-1){ if(empty($_GET['id'])): ?><li><a href="/weibo/index.php/Home/News/newsat/page/<?php echo ($i); ?>">第<?php echo ($i); ?>页</a></li>
                            <?php else: ?>
                            <li><a href="/weibo/index.php/Home/News/newsat/page/<?php echo ($i); ?>/id/<?php echo ($_GET['id']); ?>">第<?php echo ($i); ?>页</a></li><?php endif; } ?>
                        </ul>
                    </div>
                    <a href="javascript:void(0)" class="first_page">第<?php echo ($pages); ?>页 <em class="f f12">c</em></a>
                </span>

        <?php if(($pages >= 1) AND ($pages < $page)): ?><a href="/weibo/index.php/Home/News/newsat/page/<?php echo ($page_next); ?>"class="page_next">下一页</a><?php endif; ?>

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
                                A：在微博中@他人的昵称，如@微博小秘书，他就会收到你@他的提醒。
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
                            <li title="债见" data="[bye_org]"><img src="/weibo/Public/Images/biaoqing/bye_org.gif" alt="" /></li>
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