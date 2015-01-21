<script src="__PUBLIC__/Js/jq_content.js" type="text/javascript" charset="utf-8" async defer></script>
<div class="wbmain">
    <div class="mainmain">
        <if condition="isset($_COOKIE['username'])">
            <div class="mycontent">
                <div class="mycontent-all">
                    <div class="clearfix">
                        <div class="titlearea">
                        <p class="what-news">
                            <em class="spac1">有什么新</em>
                            <em class="spac2">鲜</em>
                            <em class="spac3">事告诉大家</em>
                            <em class="spac4">?</em>
                        </p>
                    </div>
                    <div class="num-txt " style="display:none">
                            你还可以输入
                            <span >140</span>
                            个字
                    </div>
                    <div class="num-txt1 " style="display:none">
                            已经超出
                            <span ></span>
                            个字
                    </div>
                    <div class="title"><a href="javascript:void(0)">2014十大热点事件：你对哪个印象深刻</a>
                    </div>
                    </div>
                    
                    <div class="inputcontent">
                        <textarea name="" id=""style="font-size:14px;word-wrap:break-word; line-height:18px; overflow-y:auto; overflow-x:hidden  "></textarea>
                        <div class="boxstyle atpop"> 
                            <ul class="overf f12">
                            </ul> 
                        </div>
                        <div class="succ">
                            <span class=" success "></span>
                            <span  class="succtext"> 发布成功</span>
                        </div>
                    </div>
                    <div class="content-bottom">
                        <div class="cb-left">
                            <a href="javascript:void(0)" class="S-txt1 biaoqing">
                                <em class="f">o</em>
                                表情
                            </a>
                            <a href="javascript:void(0)" class="S-txt2 tupian">
                                <em class="f">p</em>
                                图片
                            </a>
                            <a href="javascript:void(0)" class="S-txt3 shipin">
                                <em class="f">q</em>
                                视频
                            </a>
                            <a href="javascript:void(0)" class="S-txt4 huati">
                                <em class="f">"</em>
                                话题
                            </a>
                            <a href="javascript:void(0)" class="S-txt5 changwb">
                                <em class="f">s</em>
                                长微博
                            </a>
                            <a href="javascript:void(0)" class="S-txt6 f">…</a>
                        </div>
                        <div class="cb-right">
                            <div class="limits">
                                <a href="javascript:void(0)" class="S-txt1 ">
                                    <span>公开</span>
                                    <em class="f">c</em>
                                </a>
                            </div>
                                <a href="javascript:void(0)" id="submits"class="submits pink">发布</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </if>
        <div class="contenttotal">
            <div class="choose">
                <div class="chooseall">
                    <ul class="choose-ul">
                        <li ><a href="javascript:void(0)" class="bgw"><span class="choose-li">全部</span>
                        </a><include file="Common/span"/></li>
                        <li class="bgw"><a href="javascript:void(0)" class="bgw"><span class="choose-li">原创</span></a><include file="Common/span"/></li>
                        <li class="bgw"><a href="javascript:void(0)" class="bgw"><span  class="choose-li">图片</span></a><include file="Common/span"/></li>
                        <li  class="bgw"><a href="javascript:void(0)" class="bgw"><span  class="choose-li">视频</span></a><include file="Common/span"/></li>
                        <li class="bgw" ><a href="javascript:void(0)" class="bgw"><span class="choose-li">音乐</span></a><include file="Common/span"/></li>
                    </ul>
                    <div class="r-fix bgw">
                        <div class="search-boxes">
                        <span>
                             <form action="single-form" method="get">
                                <div id="search-box" >
                                    <input type="text"  name="search">
                                    <span class="pos1">
                                        <a href="javascript:void(0);" class="f f1" style="font-size: 16px;color: #6582ab;">f</a>
                                        <a href="javascript:void(0);" class="f f2" style="font-size: 16px;color: #6582ab;margin: 0 0 0 3px;">g</a>
                                    </span>
                                    
                                </div>
                            </form>
                        </span>
                           
                        </div>                    
                    </div>

                </div>
            </div>
            <div class="content">
                <include file="Common/maincontent" contentlist="contentinput"/>
            </div>
        </div>
    </div>
                <include file="Common/right"/>
</div>
