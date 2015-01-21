<extend name="News/news_frame"/>
<block name="title">
    <style type="text/css" media="screen">
        .mymsg{
            background-color: rgba(255,255,255,0.2);

        }
        .mymsg em:after{
            content:"B";
        }
    </style>
            <div class="choose">
                <div class="chooseall">
                    <ul class="choose-ul">
                        <li >
                            <span class="somespan">
                               <a  href="javascript:void(0)" class="atblog">私信</a>
                               <a href="" class="f">c</a>
                            </span>
                            
                            <include file="Common/span"/>
                        </li>
                        
                    </ul>
                    <div class="search-boxes">
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

</block>

<block name="main">
<div class="wbcontent" >
    <div class="content-detail">
        <div class="WB_screen">
            <div class="screen_box">
                <a href=""><i class="f">c</i></a>
            </div>
        </div>
        <div class="WB_face">
            <div class="faces">
                <a href=""><img src="__PUBLIC__/Images/1.jpg" height="50" width="50"alt="" /></a>
            </div>
            
        </div>
        <div class="WB_detail">
            <div class="WB_info">
                <a href=""style="color:#333;font-size:14px;">人民日报</a>
                <a href="" class=""><i></i></a>
                <a href="" class=""><i></i></a>
            </div>
            <div class="WB_txt ">
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
                    <div class="txt1 f12">
                        爸妈必读！数据调查颠覆家庭教育9大误区】听话的孩子成绩好？教育孩子只是妈妈的事？学前班能让孩子赢在起跑线上？择校能提高孩子的成绩？……中国教育科学研究院近期对小学生和家长的调查，数据颠覆你的印象！戳图，了解传统家庭教育的常见误区，让孩子快乐长大！转给身边的爸妈！
                    </div>
                    <div class="WB_from txt2 f12">
                        <a href=""class="txt2 ">8分钟前</a>
                         来自 
                        <a href=""class="txt2">微博客户端</a>
                    </div>
                    
                </div>
            </div>
            <div class="WB_from txt2 f12">
                <a href=""class="txt2">8分钟前</a>
                 来自 
                <a href=""class="txt2">微博客户端</a>
            </div>
        </div>
    </div>
    <div class="feed_handle f12">
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
</block>

<block name="right">
     <include file="News/right_box" name="评论" q1="：什么是@提醒？" a1="A：在微博中@他人的昵称，如'@微博小秘书'，他就会收到你@他的提醒。" q2="：@太多怎样防骚扰？" a2="A：你可以设置为仅接收关注的人发出的@信息现在去设置»" />
</block>