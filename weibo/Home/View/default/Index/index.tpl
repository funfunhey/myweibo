<include file='Common/header' />
    <link rel="stylesheet" href="__PUBLIC__/CSS/index.css">
    <!-- <link rel="stylesheet" href="__ROOT__/boot/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="__ROOT__/boot/css/fileinput.css">
    <script src="__PUBLIC__/Js/jquery-migrate-1.2.1.js" type="text/javascript" charset="utf-8" ></script>
    <script src="__PUBLIC__/Js/send.js" type="text/javascript" charset="utf-8" ></script>
    <script src="__ROOT__/boot/js/fileinput.js" type="text/javascript" charset="utf-8" ></script>
    <script src="__ROOT__/boot/js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>

</head>
<body>
<div class="wbbody" style="padding-top:50px">
    <div>
        <include file="Common/top"/>
    </div>
    <div class="frame" >
        <div class="main">
            
                <include file="Common/left" name="notfix"/>    
                <include file="Common/left" name="forfix"/>

            <include file="Common/main"/>
                
        </div>
    </div>
<include file="Common/facelook" where="sendbq"/>

    <!-- 插入图片 -->
    <div class="tupianku">
        <!-- <div class="clearfixs"> -->
            <div class="arrow">
                <i class="wtri"></i>
                <em class="tria"></em>
            </div>
            <div class="inner_pic fw overf">
                <div class="close">
                    <a href="" class="i">X</a>
                </div>
                <div>
                    <ul>
                        <li>
                            <a href="javascript:void(0)" class="relat dan">
                                <span>
                                    <em class="i">È</em>
                                    单图/多图
                                </span>
                                
                            </a>
                            
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span>
                                    <em class="i">Æ</em>
                                    拼图
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span>
                                    <em class="i">Ô</em>
                                    截屏
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span>
                                    <em class="i">Ë</em>
                                    传至相册
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
        <!-- </div> -->
        </div>       
    </div>
    <!-- <form action="" enctype="multipart/form-data" class="upup"> -->
    <div class="upup">
        <div class="form-group">
            <div class="close">
                <a href="" class="i">X</a>
            </div>
            <!--<form action="{:U('common/content')}" method="post" accept-charset="utf-8">-->
                <!-- <input type="hidden" name="length" value="1" /> -->
                 <input type="file" name="file_upload[]" id="file_upload" class="file" multiple=true data-preview-file-type="image"/>
            <!--</form>-->
            
            
        </div>
    </div>

   <!-- </form> -->
    <!-- 插入图片结束 -->
    <include file="Common/bottom"/>
    <a href="" class="fortop">
        <em class="i fw">Ú</em>
    </a>
</div>
<include file="Common/repost" />