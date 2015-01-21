<extend name="discovery_frame"/>
<block name="midtop">
    <div class="advert bg">
        <div class="hover">
            <div class="pic_box">
                <p>
                    <a href="">
                        <img src="__PUBLIC__/Images/faxian/ad.jpg" alt="" />
                    </a>
                </p>
            </div>
        </div>
    </div>
</block>
<block name="midmid">
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
</block>
<block name="midbot">
    <div class="famouspeople">
        <include file="Common/cardbig" recommend="名人推荐" type1="娱乐明星" type2="企业高管" type3="体育明星" type4="政府官员" style1="篮球明星" style2="内地" style3="港台" style4="影视明星" style5="日韩" style6="互联网高管" style7="小说" style8="财经高官" style9="歌手" style10="小说" n="newfriend" />
    </div>
</block>

<block name="midbot1">
    <div class="newpeople">    
        <include file="Common/cardbig" recommend="热门推荐" type1="搞笑幽默" type2="星座命理" type3="动物萌宠" type4="影视" style1="段子手" style2="新闻趣事" style3="搞笑" style4="重口味" style5="幽默艺术" style6="三俗" style7="欧美电影" style8="日韩音乐" style9="影评" style10="恋爱" name="萧敬腾" fans="20万" uid="15" info="雨神" n="hotfriend" />
    </div>
</block>
<block name="midbot2">
    <div class="newpeople">    
        <include file="Common/cardbig" recommend="新人推荐" type1="搞笑幽默" type2="星座命理" type3="动物萌宠" type4="影视" style1="段子手" style2="新闻趣事" style3="搞笑" style4="重口味" style5="幽默艺术" style6="三俗" style7="欧美电影" style8="日韩音乐" style9="影评" style10="恋爱" n="newfriend"/>      

    </div>
</block>
<block name="midbot3">
    <div class="newpeople">    
        <include file="Common/cardbig" n="newfriend"/>
    </div>
</block>

<block name="right">
    <include file="Common/someinterest"/>
</block>