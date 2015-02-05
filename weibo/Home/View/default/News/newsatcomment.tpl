<extend name="News/news_frame"/>
<block name="title">
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
                        <li class="bgw">
                            <span class="somespan bgw">
                               <a  href="{:U('News/newsat')}" class="atblog">@我的微博</a>
                               <a href="" class="f">c</a>
                            </span>
                            
                            <include file="Common/span"/>
                        </li>
                        <li >
                            <span class="somespan bgw">
                               <a  href="{:U('News/newsatcomment')}" class="atblog">@我的评论</a>
                               <a href="" class="f">c</a>
                            </span>
                            
                            <include file="Common/span"/>
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

</block>

<block name="main">
<include file="News/commentreply" picture='{$picture}' username='{$Think.cookie.username}' contentinput="contentinput" what="atcomment"/>
  
</block>

<block name="right">
    <include file="News/right_box" name="" q1="：什么是@提醒？" a1="A：在微博中@他人的昵称，如@微博小秘书，他就会收到你@他的提醒。" q2="：@太多怎样防骚扰？" a2="A：你可以设置为仅接收关注的人发出的@信息现在去设置»" />
</block>