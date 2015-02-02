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
	


    <link rel="stylesheet" href="/weibo/Public/CSS/user.css" />
    <script type="text/javascript" charset="utf-8" src="/weibo/Public/Js/focus.js"></script>
    <script type="text/javascript" charset="utf-8" src="/weibo/Public/Js/user.js"></script>
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
    <div class="userframe">
        <div class="userframea">
            <div class="userheader">
                <div class="user-header">
                    <div class="headerpic">
                        
                    </div>
                    <div class="shadowshadow">
                        <div class="shadowphoto">
                            <p>
                            <?php if(is_array($people)): foreach($people as $key=>$vv): ?><a href="">
                                    <img src="/weibo/<?php echo ($vv["photo"]); ?>" alt="" />
                                </a>
                            </p>
                        </div>
                        <div class="shadowusername">
                            <span class="f22"><?php echo ($vv["username"]); ?></span>
                            <span class="icon">
                                <a >
                                    <i></i>
                                </a>
                            </span>
                        </div>
                        <div class="shadowinfo f12">
                            <?php echo ($vv["production"]); ?>
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
                                    <a href="<?php echo U('User/index');?>"><span>我的主页</span></a>
                                </td>
                            
                                <td>
                                    <a href=""><span>我的相册</span></a>
                                </td>
                                <?php if(($vv["id"]) == $cookieid): ?><td>
                                    <a href=""><span>管理中心</span></a>
                                </td><?php endif; ?>
                            </tr><?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 中间结束 -->
            <!-- 主要内容 -->
            <div class="plc_main">
            <!-- 主要内容左部   -->
                <div class="frameb_l f14 ">
                    
                            <div class="focuspart">
                                <div class="">
                                    <div class="lev_box">
                                        <ul class="somelist">
                                            <li class="somelist1 myfocus1">
                                                <a href="<?php echo U('User/userfocus');?>" >
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
                                                <a href="<?php echo U('User/userfans');?>" >
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
                                                <a href="<?php echo U('discovery/findfriend');?>">
                                                    <em class="h">æ</em>                       
                                                    <span>可能感兴趣的人</span>
                                                    <em></em>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                    
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
                
<style type="text/css">
    .myfans1{
        background: #f2f2f5;
    }
    .myfocus1 a{
        background: #fff;
    }
    .member_box li{
        background:#fff;
        padding:16px 0;
        width: 568px;
        border-top: 1px solid #f2f2f5;
        margin-top:-1px;
    }
    .member_box{
        padding:0 16px;
    }
</style>
    <div class="relation">
        <div class="cardwrap">
            <div>
                <div class="relationnav">
                    <div class="opt_choose">
                        <div>
                            <ul>
                                <li>
                                    <span>
                                        <span class="f14">粉丝</span>
                                        <em><?php echo ($fans); ?></em>
                                        <em></em>
                                    </span>
                                    <span>
                                        <span class="f14">垃圾箱</span>
                                        <em></em>
                                        <em></em>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="opt_bar">
                            <div>
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
                            <?php if(is_array($newfriend)): foreach($newfriend as $key=>$v): ?><li uid="<?php echo ($v["id"]); ?>" class="overf ">
                                    <style type="text/css" media="screen">
   dd,dt{
        float: left;
   } 
   dt{
    margin-right: 15px;
   }
   dl{
    position: relative;
   }
   .info div{
    padding-top:5px;
   }
   .opt{
       position: absolute;
        top: 16px;
        right: 0px;
   }

</style>
<dl>
    <dt class="overf">
         <p><a href=""><img src="/weibo/<?php echo ($v["photo"]); ?>" alt="" class="pic" /></a></p>
       
    </dt>
    <dd>
        <div class="info">
            <div class="title">
                <a href="/weibo/index.php/Home/User/index/id/<?php echo ($v["id"]); ?>" class="fw f14 usercard"><?php echo ($v["username"]); ?></a>
                <a href="">
                    <em></em>
                </a>
            </div>
            <div class="info_connect">
                <span>
                    关注
                    <em>
                        <a href=""><?php echo ($v["focus"]); ?></a>
                    </em>
                </span>            
                <span>
                    粉丝
                    <em>
                        <a href=""><?php echo ($v["fans"]); ?></a>
                    </em>
                </span>            
                <span>
                    微博
                    <em>
                        <a href=""><?php echo ($v["weibo"]); ?></a>
                    </em>
                </span>
            </div>
            <div>
                <em>地址</em>
            </div>
            <div>
                简介：<?php echo ($v["production"]); ?>
            </div>
               
                <div class="info_from">
                    通过 <a href="javascript:void(0);">微博 weibo.com</a>关注
                </div>           
        </div>        

    </dd>
    <dd class="opt">
            <p>
                <a href=""  class="btn_b f">
                <em>Y</em>
                <em style="border-left:1px solid #d9d9d9;margin-right:5px"></em>
                <em style="color:#fa7d3c">+</em>
                关注
                </a>
                <a href=""  class="btn_b f">
                <span>更多</span>
                <em>g</em>
                </a>
                
            </p>
    </dd>

</dl>


                                </li><?php endforeach; endif; ?>
                        </ul>
                    </div>

                </div>
                <div class="cardpage">
                        <div>
                            <a href="" class="page_dis line5">
                                <span>上一页</span>
                            </a>
                            <a href="" class="page_s"></a>
                            <a href="" class="page_cis line2">
                                <span>下一页</span>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>

            </div>           
            <!-- 主要内容结束 -->
        </div>
    </div>
</div>
<!--  <!-- 转发的框 -->

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

 -->

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