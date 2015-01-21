<div class="superpage">
    <div class="page f12">
        <if condition="($pages gt 1) AND ($pages elt 10)" >
                <a href="__ACTION__/page/[pagepre]"class="page_pre">上一页</a>
        </if>
                <span class="list">
                    <div class="pagelist boxstyle">
                        <ul>
                        <for start="[page]" end="0" comparison="gt" step="-1" >
                            <empty name="Think.get.id" >
                            <li><a href="__ACTION__/page/{$i}">第{$i}页</a></li>
                            <else/>
                            <li><a href="__ACTION__/page/{$i}/id/{$Think.get.id}">第{$i}页</a></li>
                            </empty>
                         </for>
                        </ul>
                    </div>
                    <a href="javascript:void(0)" class="first_page">第[pages]页 <em class="f f12">c</em></a>
                </span>

        <if condition='($pages egt 1) AND ($pages lt $page)' >
                <a href="__ACTION__/page/[pagenext]"class="page_next">下一页</a>
         </if>

    </div>
</div>