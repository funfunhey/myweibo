<extend name="News/news_frame"/>
<block name="title">
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
                        <li >
                            <span class="somespan bgw">
                               <a  href="{:U('News/newscomment')}" class="atblog">收到的评论</a>
                               <a href="" class="f">c</a>
                            </span>
                            
                            <include file="Common/span"/>
                        </li>
                        <li class="bgw">
                            <span class="somespan bgw">
                               <a  href="{:U('News/newscomment_mine')}" class="atblog">发出的评论</a>
                               <a href="" class="f">c</a>
                            </span>
                            
                            <include file="Common/span"/>
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

</block>

<block name="main">
    <include file="News/commentreply" picture='{$picture}' username='{$username}'  contentinput="contentinput" what="notmine"/>
</block>

<block name="right">
    <include file="News/right_box" name="评论" q1="：评论太多，想分类看？" a1="A：你可以通过分类筛选，只查看自己关注的人。" q2="不希望某些人评论自己？" a2="A：可以设置仅关注的人才能给自己发评论，现在就去设置»"/>

</block>