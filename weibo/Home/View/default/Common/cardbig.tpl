
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
                            <foreach name="[n]" item="v">
                                <li uid="{$v.id}">
                                    <include file="Common/minibox" name="{$v.username}" fans="200万" uid="{$v.id}" info="{$v.production}" state="{$state}" photo="{$v.photo|default='Public/Images/doge.jpg'}"/>
                                </li>
                            </foreach>
                           
                            
                            
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