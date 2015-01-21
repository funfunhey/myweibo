<extend name="set/set_frame"/>

<block name="title">
        <div class="title f14">头像
            <div class="ratio txt2 ">
                <span>资料完整度</span>
                <div class="p_bar">
                    <em>100%</em>
                </div>
            </div>
            <span>
                <a href=""class="looklook">无法上传头像？尝试普通方式上传</a>
            </span>
        </div>
</block>
<block name="main">
<style type="text/css" media="screen">
     .mine-photo{
       background: url(../Images/left_nav.png) no-repeat left bottom;
        background-color: #fafafa;
        font-weight: bold;
    }
    .myphoto{
        background-position: -25px -25px;
    }
</style>
    <div class="upload_avatar">
        <p class="h30">普通上传方式</p>
        <div class="flashupload">
            <div class="photo_swf">
                <div class="headimg">
                    <img src="__ROOT__{$pictures}" alt="" />
                </div>
                <form action="{:U('Set/uploadimg')}" method="post" enctype="multipart/form-data" >
                    <div class="headinfo">
                        <div class="upload">
                            <span>
                                <input type="text" readonly="readonly" class="weizhi overf" />
                            </span>
                            <a href="" class="btn btn1">
                                <span>浏览</span>
                                <q>
                                    <input type="file" name="filedata" id="filedata" />
                                </q>
                            </a>
                        </div>
                        <p class="tips">请选择jpg、gif格式，小于2m的图片（试用高质量图片，可生成高清头像）</p>
                        <div class="btn btna relate">
                            <a href="#">

                                <span>保存</span>
                                <input type="submit"  value="保存" />
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</block>
