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
	


    <link rel="stylesheet" href="/weibo/Public/CSS/set.css" />
    <script type="text/javascript" charset="utf-8" src="/weibo/Public/Js/set.js"></script>
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
    var PUBLIC = "/weibo/Public";
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

<div class="usercardload">
    <div class="boxstyle">
        <div class="loadinga f12">
            正在加载中，请稍候.....
        </div>
    </div>
</div>
<div class="pop_usercard f12">
    <div class="boxstyle">
        <div class="personcard">
            <div>
                <div style="background-image:url(/weibo/Public/Images/t.jpg)" class="nc_head overf">
                    <div class="pic_box">
                        <a href="#" class="WB_face">
                            <img src="/weibo/Public/Images/0.jpg" alt="" width="50" height="50"  />
                        </a>
                        <a href="">
                            <i></i>
                        </a>
                    </div>
                    <div class="mask">
                        <div class="name">
                            <a href="" class="namename"></a>
                            <span class="remark">
                                (<a href="javascript:void(0)">设置备注</a>)
                            </span>
                            <em class="f"></em>
                            <a href="" title="huiyuan">
                                <i></i>
                            </a>
                        </div>
                        <div class="autocut">
                            
                        </div>
                    </div>
                </div>
                <div class="nc_content">
                    <div class="count fw">
                        
                    </div>
                    
                    
                    <div class="usercardinfo">
                        <ul>
                            <li class="info_li  h15">
                                <a href="">北京</a>
                            </li>
                            <!--<li class="info_li h15">
                                <em class="c8080">就职于</em>
                                <a href="" class="h15">人民日报</a>
                            </li>-->
                        </ul>
                    </div>
                    <div class="c_btnbox h25">
                        <a href="javascript:void(0)" class="btn-focus">
                            
                        </a>
                        <a href="javascript:void(0)" class="btn-msg ">私信</a>
                        <a href="javascript:void(0)" class="btn-menu ">
                            <em class="f">=</em>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                
                                <a href="<?php echo U('set/settings');?>" class="choose-mine">
                                
                                    <i class="myinfo"></i>
                                    我的信息
                                </a>
                            </div>
                            <div class="lev">
                                <a href="<?php echo U('set/setphoto');?>" class="mine-photo">
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
                            
    <div class="title f14">我的信息
        <div class="ratio txt2 ">
            <span>资料完整度</span>
            <div class="p_bar">
                <em>100%</em>
            </div>
        </div>
        <span>
            <a href="javascript:void(0);"class="looklook">预览我的主页</a>
        </span>
    </div>

 
                            
                        </div>
                        <div class="accout_event">
                            
 <style type="text/css">
     .choose-mine{
        background-color: #fafafa;
        font-weight: bold;
    }
    .myinfo{
    background-position: -25px 0;
}
 </style>
    <div class="funbg">
        <ul>
            <li class="namename">登录名</li>
            <li class="contentcontent">13*******08</li>
            <li class="options"><a href="javascript:void(0);">修改密码</a></li>
        </ul>
    </div>
    <div class="funbg">
        <ul>
            <li class="namename">手机号</li>
            <li class="contentcontent">13*******08</li>
            <li class="options"><a href="javascript:void(0);">查看</a></li>
        </ul>
    </div>
        <div class="funbg">
        <ul>
            <li class="namename"><?php echo ($_COOKIE['username']); ?></li>
            <li class="contentcontent">13*******08</li>
            <li class="options"><a href="javascript:void(0);">编辑</a></li>
        </ul>
    </div>
    <div class="funbg " id="personalinfo">
        <ul>
            <li class="namename">个人资料</li>
            <li class="contentcontent">完善资料，让大家更了解你</li>
            <li class="options"><a href="">编辑</a></li>
        </ul>
        <div class="unfold f12 abstractwhole">
            <p >以下信息将显示在个人资料页，方便大家了解你。</p>
            <div class="acc_from">
                <div>
                    基本信息
                </div>
                <div>
                    <div class="tit">真实姓名</div>
                    <div class="inp">
                        <input type="text" value="填写真实姓名" class="inp1" />
                    </div>
                    <div class="set">
                        <a href="javascript:void(0)">
                            <span>
                                <em>仅自己可见</em>
                                <i>
                                    <em class="down sw">◆</em>
                                </i>
                            </span>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="tit">所在地</div>
                    <div class="inp">
                        <span>
                            <select name="" id="">
                                <option value="">广东</option>
                            </select>
                        </span>                            
                        <span>
                            <select name="" id="">
                                <option value="">汕头</option>
                            </select>
                        </span>
                    </div>
                </div>
                <div>
                    <div class="tit">性别</div>
                    <div class="inp">
                        <label for="">
                            <input type="radio" value="m" name="gender">
                            男
                        </label>                            
                        <label for="">
                            <input type="radio"  value="f" name="gender">
                            女
                        </label>
                    </div>
                </div>                    
                <div>
                    <div class="tit">性取向</div>
                    <div class="inp">
                        <label for="">
                            <input type="checkbox" >
                            男
                        </label>                            
                        <label for="">
                            <input type="checkbox" >
                            女
                        </label>
                    </div>
                    <div class="set">
                        <a href="javascript:void(0)">
                            <span>
                                <em>我关注的人可见</em>
                                <i>
                                    <em class="down">◆</em>
                                </i>
                            </span>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="tit">感情状况</div>
                    <div class="inp">
                        <select name="" id="">
                            <option value="">丧偶</option>
                            <option value="">单身</option>
                            <option value="">婚恋</option>
                            <option value="">交往中</option>
                        </select>
                    </div>
                    <div class="set">
                        <a href="javascript:void(0)">
                            <span>
                                <em>我关注的人可见</em>
                                <i>
                                    <em class="down">◆</em>
                                </i>
                            </span>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="tit">生日</div>
                    <div class="inp">
                        <select name="" id="">
                            <option value="">1991</option>
                            <option value="">1990</option>
                            <option value="">1992</option>
                            <option value="">1993</option>
                        </select>
                        <i>年</i>
                        <select name="" id="">
                            <?php $__FOR_START_1710__=1;$__FOR_END_1710__=13;for($i=$__FOR_START_1710__;$i < $__FOR_END_1710__;$i+=1){ ?><option value=""><?php echo ($i); ?></option><?php } ?>
                        </select>
                        <i>月</i>
                    </div>
                    <div class="set">
                        <a href="javascript:void(0)">
                            <span>
                                <em>只显示星座</em>
                                <i>
                                    <em class="down">◆</em>
                                </i>
                            </span>
                        </a>
                    </div>
                </div>
                 <div>
                    <div class="tit">血型</div>
                    <div class="inp">
                        <select name="" id="">
                            <option value="">A型</option>
                            <option value="">B型</option>
                            <option value="">O型</option>
                            <option value="">AB型</option>
                        </select>
                    </div>
                    <div class="set">
                        <a href="javascript:void(0)">
                            <span>
                                <em>我关注的人可见</em>
                                <i>
                                    <em class="down">◆</em>
                                </i>
                            </span>
                        </a>
                    </div>
                </div>
                 <div class="lastarea">
                    <div class="tit">简介</div>
                    <div class="inp">
                        <div>
                            <textarea name="abstract" id="abstract"><?php echo ($abstract); ?></textarea>
                        </div>
                    </div>
                </div> 
                <div class="inp lastlast abstractsave">
                    <div class="btn-save">
                        <a href="javascript:void(0)"> 
                        <span>保存</span></a>    
                    </div>
                
                </div>                   
                <div class="succfix boxstyle">
                    <em class='successsmall'></em>
                    <span>修改成功</span>
                </div>
            </div>
        </div>
    </div>
    <div class="funbg">
        <ul>
            <li class="namename">教育信息</li>
            <li class="contentcontent">未填写学校</li>
            <li class="options"><a href="javascript:void(0);">编辑</a></li>
        </ul>
    </div>
    <div class="funbg">
        <ul>
            <li class="namename">职业信息</li>
            <li class="contentcontent">未填写公司</li>
            <li class="options"><a href="javascript:void(0);">编辑</a></li>
        </ul>
    </div>
    <div class="funbg">
        <ul>
            <li class="namename">个人标签</li>
            <li class="contentcontent">IT</li>
            <li class="options"><a href="javascript:void(0);">编辑</a></li>
        </ul>
    </div>
    <div class="funbg">
        <ul>
            <li class="namename">收货地址</li>
            <li class="contentcontent">未填写</li>
            <li class="options"><a href="javascript:void(0);">编辑</a></li>
        </ul>
    </div>
    <div class="funbg">
        <ul>
            <li class="namename">个性域名</li>
            <li class="contentcontent">设置个性域名</li>
            <li class="options"><a href="javascript:void(0);">编辑</a></li>
        </ul>
    </div>

 
                        </div>
                    </div>
                </div>
                
                <!-- 右边结束   、 -->
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