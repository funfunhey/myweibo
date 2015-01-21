                <eq name="[name]" value="[value]">
                <div class="menulist">
                    <ul>
                        <li>
                            <a href="javascript:void(0)"  data="delete">删除</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">转为好友圈可见</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">转为自己可见</a>
                        </li>      
                    </ul>
                </div>
                <else/>
                <div class="menulist">
                    <ul>
                        <li>
                            <a href="javascript:void(0)">屏蔽这条微博</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">屏蔽{$vo.username}的微博</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">屏蔽来自的微博</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">取消关注{$vo.username}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">屏蔽关键词</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">举报</a>
                        </li>

                    </ul>
                </div>
                </eq> 