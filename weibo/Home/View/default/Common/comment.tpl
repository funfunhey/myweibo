<div class="bg1 overf comments">
    <div class="commentlist ">
        <div class="W_tips">
            <div>
                <p>
                    <i class="f"></i>
                </p>
                <p class="txt">
                    微博社区管理中心举报处理大厅, 
                    <a href=""> 欢迎查阅</a>
                </p>
                <p class="close">
                    <a href="" class="f">X</a>  
            </div>
            
        </div>
        <div class="publish">
            <present name="index">
            <div class="wb_face">
                <img src="__ROOT__/{$pictures}" alt="" />
            </div>
            </present>
            <div class="wb_publish">
                <div class="p_publish">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="p_opt overf">
                    <div class="btn">
                        <a href="javascript:void(0)" class="submits pink comment-submit" >评论</a>
                    </div>
                    <div class="opt">
                        <span class="ico">
                            <a href="" >
                                <i class="jk">o</i>
                            </a>
                        </span>
                        <ul class="ipt">
                            <li>
                                <label for="">
                                    <input type="checkbox" />
                                    <span>同时转发到我的微博</span>
                                </label>
                            </li>                            
                            <li>
                                <label for="">
                                    <input type="checkbox" />
                                    <span>同时评论到原文作者  [fromuser]</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="repeat_list">
                <notempty name="vo[commentcount]">
                    <div class="tab overf">
                        <div class="commentlistnum">
                            <span>共{$vo.commentcount}条</span>
                        </div>
                        <div class="tabs">
                            <ul>
                                <li>
                                    <span>
                                        <a href="">全部</a>
                                    </span>
                                </li>                            
                                <li>
                                    <span>
                                        <a href="">热门</a>
                                    </span>
                                </li>                            
                                <li>
                                    <span>
                                        <a href="">认证用户</a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <a href="">关注的人</a>
                                    </span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </notempty>
                <div class="list_box">
                    <div class="list_ul" >
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
