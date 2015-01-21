<extend name="Set/set_frame"/>
<block name="hover"></block>
 <block name='title'>
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

 </block>

 <block name="main">
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
            <li class="namename">{$_COOKIE['username']}</li>
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
                            <for start="1" end="13" >
                                <option value="">{$i}</option>
                            </for>
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
                            <textarea name="abstract" id="abstract">{$abstract}</textarea>
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

 </block>