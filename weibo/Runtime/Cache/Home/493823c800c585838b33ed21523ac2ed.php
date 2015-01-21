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
                    
    <div class="advert bg">
        <div class="hover">
            <div class="pic_box">
                <p>
                    <a href="">
                        <img src="/weibo/Public/Images/faxian/ad.jpg" alt="" />
                    </a>
                </p>
            </div>
        </div>
    </div>

                    
<style type="text/css" media="screen">
    .left_nav .findsomebody{
       background:rgba(255,255,255,0.3);
    }
    .b11{
    width: 28px;
    }
    .bl .r{
        width: 38px;
    }
    .arrow_bor1{
        padding-left:28px;
    }
</style>
    <div class="choose choosefind">
                <div class="chooseall">
                    <ul class="choose-ul f14 bgw">
                        <li class="bgw"><a href="javascript:void(0)"><span class="choose-li ">首页</span>
                        </a></li>
                        <li class="bgw"><a href="javascript:void(0)"><span class="choose-li ">标签地图</span>
                        </a></li>
                        <li class="bgw"><a href="javascript:void(0)"><span class="choose-li ">名人</span>
                        </a></li>
                        <li class="bgw"><a href="javascript:void(0)"><span class="choose-li ">兴趣</span>
                        </a></li><li class="bgw"><a href="javascript:void(0)"><span class="choose-li ">24小时热门人物</span>
                        </a></li>
                        <li class="bgw"><a href="javascript:void(0)"><span class="choose-li ">好友关注动态</span>
                        </a></li>
                        
                         <div class="screen_box  rights">
                            <a href=""><i class="f">c</i></a>
                        </div>
                    </ul>
                   
                </div>
            </div>

                    <div class="wbcontent" >
                        
    <div class="famouspeople">
        
<div class="discoveryuser">
    <div class="cardwrap">
        <div class="famous">
            <div class="cardtitle ">
                <h4 class="h38 f14 fw"><span>名人推荐</span></h4>
            </div>
            <div class="cardcontent ">
                <div class="inner overf ">
                    <div class="line1">
                        <div class="minitag ">
                            <ul>
                                <li><a href="">娱乐明星</a></li>
                                <li><a href="">企业高管</a></li>
                                <li><a href="">体育明星</a></li>
                                <li><a href="">政府官员</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix overf">
                        <ul class="picul overf">
                            <?php if(is_array($newfriend)): foreach($newfriend as $key=>$v): ?><li uid="<?php echo ($v["id"]); ?>">
                                    <div class="minibox bg1 innerwrap overf">
    <div class="picwrap">
        <p><a href=""><img src="/weibo/<?php echo ((isset($v["photo"]) && ($v["photo"] !== ""))?($v["photo"]):'Public/Images/doge.jpg'); ?>" alt="" class="pic" /></a></p>
    </div>
    <div class="info">
        <div class="title">
            <a href="/weibo/index.php/Home/User/index/id/<?php echo ($v["id"]); ?>" class="fw f14"><?php echo ($v["username"]); ?></a>
            <a href="javascript:void(0);">
                <em></em>
            </a>
        </div>
        <?php if(!empty($yigz)): ?><div class="status">
                <em class="f">Y</em>
                <span>已关注</span>
            </div><?php endif; ?>
            <div class="subtitle">
                <?php echo ($v["production"]); ?>
            </div>
        <?php if(!empty($gz)): ?><div class="subtitle c999">
                粉丝200万
            </div>
        
            <div class="focus ">
                <p action-data="<?php echo ($v["id"]); ?>"><a href="javascript:void(0)"><em class="f">+</em>关注</a></p>
            </div><?php endif; ?>
        <?php if(!empty($yigz)): ?><div class="info_from">
                通过 <a href="">微博 weibo.com</a>关注
            </div>
            <div class="opt">
                <p>
                    <a href=""  class="btn_b f">
                    <span>[zubie]</span>
                    <em>g</em>
                    </a>
                    <a href="" class="btn_c f">J</a>
                </p>
            </div><?php endif; ?>
            
        
    </div>
</div>
                                </li><?php endforeach; endif; ?>
                           
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hottag">
                <p>热门标签</p>
                <div class="taglist">
                    <a href="javascript:void(0)">篮球明星</a>
                    <a href="javascript:void(0)">内地</a>
                    <a href="javascript:void(0)">港台</a>
                    <a href="javascript:void(0)">影视明星</a>
                    <a href="javascript:void(0)">日韩</a>
                    <a href="javascript:void(0)">互联网高管</a>
                    <a href="javascript:void(0)">小说</a>
                    <a href="javascript:void(0)">财经高官</a>
                    <a href="javascript:void(0)">歌手</a>
                </div>
            </div>
            <a href=""class="line1">
                <span>查看更多
                        <em class="f">a</em>
                </span>
            </a>
        </div>
    </div>
</div>
    </div>

                       
                    </div>
                    <div class="wbcontent">
                        
    <div class="newpeople">    
        
<div class="discoveryuser">
    <div class="cardwrap">
        <div class="famous">
            <div class="cardtitle ">
                <h4 class="h38 f14 fw"><span>热门推荐</span></h4>
            </div>
            <div class="cardcontent ">
                <div class="inner overf ">
                    <div class="line1">
                        <div class="minitag ">
                            <ul>
                                <li><a href="">搞笑幽默</a></li>
                                <li><a href="">星座命理</a></li>
                                <li><a href="">动物萌宠</a></li>
                                <li><a href="">影视</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix overf">
                        <ul class="picul overf">
                            <?php if(is_array($hotfriend)): foreach($hotfriend as $key=>$v): ?><li uid="<?php echo ($v["id"]); ?>">
                                    <div class="minibox bg1 innerwrap overf">
    <div class="picwrap">
        <p><a href=""><img src="/weibo/<?php echo ((isset($v["photo"]) && ($v["photo"] !== ""))?($v["photo"]):'Public/Images/doge.jpg'); ?>" alt="" class="pic" /></a></p>
    </div>
    <div class="info">
        <div class="title">
            <a href="/weibo/index.php/Home/User/index/id/<?php echo ($v["id"]); ?>" class="fw f14"><?php echo ($v["username"]); ?></a>
            <a href="javascript:void(0);">
                <em></em>
            </a>
        </div>
        <?php if(!empty($yigz)): ?><div class="status">
                <em class="f">Y</em>
                <span>已关注</span>
            </div><?php endif; ?>
            <div class="subtitle">
                <?php echo ($v["production"]); ?>
            </div>
        <?php if(!empty($gz)): ?><div class="subtitle c999">
                粉丝200万
            </div>
        
            <div class="focus ">
                <p action-data="<?php echo ($v["id"]); ?>"><a href="javascript:void(0)"><em class="f">+</em>关注</a></p>
            </div><?php endif; ?>
        <?php if(!empty($yigz)): ?><div class="info_from">
                通过 <a href="">微博 weibo.com</a>关注
            </div>
            <div class="opt">
                <p>
                    <a href=""  class="btn_b f">
                    <span>[zubie]</span>
                    <em>g</em>
                    </a>
                    <a href="" class="btn_c f">J</a>
                </p>
            </div><?php endif; ?>
            
        
    </div>
</div>
                                </li><?php endforeach; endif; ?>
                           
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hottag">
                <p>热门标签</p>
                <div class="taglist">
                    <a href="javascript:void(0)">段子手</a>
                    <a href="javascript:void(0)">新闻趣事</a>
                    <a href="javascript:void(0)">搞笑</a>
                    <a href="javascript:void(0)">重口味</a>
                    <a href="javascript:void(0)">幽默艺术</a>
                    <a href="javascript:void(0)">三俗</a>
                    <a href="javascript:void(0)">欧美电影</a>
                    <a href="javascript:void(0)">日韩音乐</a>
                    <a href="javascript:void(0)">影评</a>
                </div>
            </div>
            <a href=""class="line1">
                <span>查看更多
                        <em class="f">a</em>
                </span>
            </a>
        </div>
    </div>
</div>
    </div>

                    </div>
                    
                    <div class="wbcontent">  
                        
    <div class="newpeople">    
        
<div class="discoveryuser">
    <div class="cardwrap">
        <div class="famous">
            <div class="cardtitle ">
                <h4 class="h38 f14 fw"><span>新人推荐</span></h4>
            </div>
            <div class="cardcontent ">
                <div class="inner overf ">
                    <div class="line1">
                        <div class="minitag ">
                            <ul>
                                <li><a href="">搞笑幽默</a></li>
                                <li><a href="">星座命理</a></li>
                                <li><a href="">动物萌宠</a></li>
                                <li><a href="">影视</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix overf">
                        <ul class="picul overf">
                            <?php if(is_array($newfriend)): foreach($newfriend as $key=>$v): ?><li uid="<?php echo ($v["id"]); ?>">
                                    <div class="minibox bg1 innerwrap overf">
    <div class="picwrap">
        <p><a href=""><img src="/weibo/<?php echo ((isset($v["photo"]) && ($v["photo"] !== ""))?($v["photo"]):'Public/Images/doge.jpg'); ?>" alt="" class="pic" /></a></p>
    </div>
    <div class="info">
        <div class="title">
            <a href="/weibo/index.php/Home/User/index/id/<?php echo ($v["id"]); ?>" class="fw f14"><?php echo ($v["username"]); ?></a>
            <a href="javascript:void(0);">
                <em></em>
            </a>
        </div>
        <?php if(!empty($yigz)): ?><div class="status">
                <em class="f">Y</em>
                <span>已关注</span>
            </div><?php endif; ?>
            <div class="subtitle">
                <?php echo ($v["production"]); ?>
            </div>
        <?php if(!empty($gz)): ?><div class="subtitle c999">
                粉丝200万
            </div>
        
            <div class="focus ">
                <p action-data="<?php echo ($v["id"]); ?>"><a href="javascript:void(0)"><em class="f">+</em>关注</a></p>
            </div><?php endif; ?>
        <?php if(!empty($yigz)): ?><div class="info_from">
                通过 <a href="">微博 weibo.com</a>关注
            </div>
            <div class="opt">
                <p>
                    <a href=""  class="btn_b f">
                    <span>[zubie]</span>
                    <em>g</em>
                    </a>
                    <a href="" class="btn_c f">J</a>
                </p>
            </div><?php endif; ?>
            
        
    </div>
</div>
                                </li><?php endforeach; endif; ?>
                           
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hottag">
                <p>热门标签</p>
                <div class="taglist">
                    <a href="javascript:void(0)">段子手</a>
                    <a href="javascript:void(0)">新闻趣事</a>
                    <a href="javascript:void(0)">搞笑</a>
                    <a href="javascript:void(0)">重口味</a>
                    <a href="javascript:void(0)">幽默艺术</a>
                    <a href="javascript:void(0)">三俗</a>
                    <a href="javascript:void(0)">欧美电影</a>
                    <a href="javascript:void(0)">日韩音乐</a>
                    <a href="javascript:void(0)">影评</a>
                </div>
            </div>
            <a href=""class="line1">
                <span>查看更多
                        <em class="f">a</em>
                </span>
            </a>
        </div>
    </div>
</div>      

    </div>

                     </div> 
                     <div class="wbcontent">  
                        
    <div class="newpeople">    
        
<div class="discoveryuser">
    <div class="cardwrap">
        <div class="famous">
            <div class="cardtitle ">
                <h4 class="h38 f14 fw"><span>[recommend]</span></h4>
            </div>
            <div class="cardcontent ">
                <div class="inner overf ">
                    <div class="line1">
                        <div class="minitag ">
                            <ul>
                                <li><a href="">[type1]</a></li>
                                <li><a href="">[type2]</a></li>
                                <li><a href="">[type3]</a></li>
                                <li><a href="">[type4]</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix overf">
                        <ul class="picul overf">
                            <?php if(is_array($newfriend)): foreach($newfriend as $key=>$v): ?><li uid="<?php echo ($v["id"]); ?>">
                                    <div class="minibox bg1 innerwrap overf">
    <div class="picwrap">
        <p><a href=""><img src="/weibo/<?php echo ((isset($v["photo"]) && ($v["photo"] !== ""))?($v["photo"]):'Public/Images/doge.jpg'); ?>" alt="" class="pic" /></a></p>
    </div>
    <div class="info">
        <div class="title">
            <a href="/weibo/index.php/Home/User/index/id/<?php echo ($v["id"]); ?>" class="fw f14"><?php echo ($v["username"]); ?></a>
            <a href="javascript:void(0);">
                <em></em>
            </a>
        </div>
        <?php if(!empty($yigz)): ?><div class="status">
                <em class="f">Y</em>
                <span>已关注</span>
            </div><?php endif; ?>
            <div class="subtitle">
                <?php echo ($v["production"]); ?>
            </div>
        <?php if(!empty($gz)): ?><div class="subtitle c999">
                粉丝200万
            </div>
        
            <div class="focus ">
                <p action-data="<?php echo ($v["id"]); ?>"><a href="javascript:void(0)"><em class="f">+</em>关注</a></p>
            </div><?php endif; ?>
        <?php if(!empty($yigz)): ?><div class="info_from">
                通过 <a href="">微博 weibo.com</a>关注
            </div>
            <div class="opt">
                <p>
                    <a href=""  class="btn_b f">
                    <span>[zubie]</span>
                    <em>g</em>
                    </a>
                    <a href="" class="btn_c f">J</a>
                </p>
            </div><?php endif; ?>
            
        
    </div>
</div>
                                </li><?php endforeach; endif; ?>
                           
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hottag">
                <p>热门标签</p>
                <div class="taglist">
                    <a href="javascript:void(0)">[style1]</a>
                    <a href="javascript:void(0)">[style2]</a>
                    <a href="javascript:void(0)">[style3]</a>
                    <a href="javascript:void(0)">[style4]</a>
                    <a href="javascript:void(0)">[style5]</a>
                    <a href="javascript:void(0)">[style6]</a>
                    <a href="javascript:void(0)">[style7]</a>
                    <a href="javascript:void(0)">[style8]</a>
                    <a href="javascript:void(0)">[style9]</a>
                </div>
            </div>
            <a href=""class="line1">
                <span>查看更多
                        <em class="f">a</em>
                </span>
            </a>
        </div>
    </div>
</div>
    </div>

                     </div>   
                </div>


                <!-- 右边 -->
                <div class="WB_main_r">
                    <div class="discoverytext">
                        
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
                                    <a href=""class=""><img src="/weibo/Public/Images/0.jpg" alt="" /></a>
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