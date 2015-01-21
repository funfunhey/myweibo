
<extend name="user/user_frame" />

            <block name='left' >
                    <div class="frameb_l_t">
                        <div class="card_wrap bg2">
                            <div class="fans_count">
                                <div class="inner_wrap">
                                <foreach name="people" item="vo" >
                                    <table>
                                        <tr>
                                            <td>
                                                <a href="{:U('User/userfocus')}">
                                                    <strong>{$vo.focus}</strong>
                                                    <span>关注</span>
                                                </a>
                                            </td>
                                            <td class="line4">
                                                <a href="{:U('User/userfans')}">
                                                    <strong>{$vo.fans}</strong>
                                                    <span>粉丝</span>
                                                </a>
                                            </td>
                                            <td class="line4">
                                                <a href="">
                                                    <strong>{$vo.contentcount}</strong>
                                                    <span>微博</span>
                                                </a>
                                            </td>
                                            
                                        </tr>
                                    </table>
                                    </foreach>
                                </div>
                            </div>
                        </div>
                    </div>
                </block>
                    
            <block name="main">
                <div class="frame_c">
                    <div class="choose">
                        <div class="chooseall">
                            <ul class="choose-ul">
                                <li class="l-fix bgw"><a href="javascript:void(0)"><span class="choose-li">全部
                                <i class="f h31">c</i>
                                </span>
                                <include file="Common/span"/></a></li>
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
                    <include file="Common/usercontent"  contentlist="contentinput"/>
                </div>
             </block>
         
