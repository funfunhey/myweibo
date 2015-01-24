
/* 
* @Author: anchen
* @Date:   2014-12-16 15:11:44
* @Last Modified by:   anchen
* @Last Modified time: 2015-01-24 10:22:04
*/

$(function (){

    // 加载用户的关注
    var json_user = '';
    var json_user10 = '';
    if(!json_user){
        $.post(INDEX + 'atuser', function(status) {
            if(status){ 
                json_user = $.parseJSON(status);
                json_user10 = json_user.slice(0,10);
                // console.log(json_user);               
           }            
        })

    }
// 调出字数的div

    $('.inputcontent textarea').focus(function(event) {
        /* Act on the event */
        $('.num-txt').show();
        $('.clearfix .title').hide();


    }).blur(function(event) {
        /* Act on the event */
        $('.num-txt').hide();
        $('.clearfix .title').show();
    });



    $('.inputcontent textarea').off('keyup').on('keyup', function(event) {
        // 数出多少个字
    var contentnum = 140;
        var contentvalues = $(this).val();
        var contentvalue = $.trim(contentvalues);
        var num = contentnum - Math.ceil(check(contentvalue));
        if(num<0){
            $('.num-txt').html("已经超出<span ></span>个字");
            $('.num-txt span').html(Math.abs(num)).addClass('red');
        }
        

        if(num>=0 && num <= contentnum){
            $('.cb-right .submits').removeClass('pink').addClass('highlight');
            $('.num-txt').html("你还可以输入<span ></span>个字");
            $('.num-txt span').html(num);

        }else{
            $('.cb-right .submits').removeClass('highlight').addClass('pink');
         }   

         if(num == contentnum) $('.cb-right .submits').removeClass('highlight').addClass('pink');


         // 输入框寻找可能认识的人
        var reg = /@([\u4e00-\u9fa5|\w]{1,6})$/;
        var reg1 = /@$/;
        var atuser ='';
        
        var atpop = $('.atpop');
        var atpopx = atpop.width();
        var atpopy = atpop.height();
        var startpos = $('.inputcontent textarea')[0].selectionStart;
        var focustxt = contentvalues.substr(0,startpos);
        var focusnum = check(focustxt);  
        var atpophang = Math.ceil(focusnum/41)*20;        
        var atpoplie = (focusnum%41)*14; 
        var html4 = '';
        atpop.hide();
        if(reg1.test(focustxt)){
            atpop.css({
                top: atpophang,
                left: atpoplie
            }).show();
            html4 = '<span>选择最近@的人或直接输入</span>';
            $.each(json_user10, function(index, val) {

                 html4 += ' <li class="hover1">' + val +' </li>';
            });
            atpop.find('ul').html(html4);

            atpop.find('li').unbind('click').click(function(event1) {
                 $('.inputcontent textarea').insertAtCaret($(this).html());
                 $('.inputcontent textarea').trigger('.keyup');
                 atpop.hide();
            });

        };
        if(reg.test(focustxt)){
            // console.log(RegExp.$1);
            var atname1 = RegExp.$1;
            var focusindex = focustxt.lastIndexOf('@');
            atpop.css({
                top: atpophang,
                left: atpoplie
            }).show();
            html5 = '<span>选择昵称或轻敲空格输入</span>';
            for (var i = 0; i < json_user.length; i++) {
                if(json_user[i].match(atname1)){
                  html5 += ' <li class="hover1">' + json_user[i] +' </li>';
                }
            };
            // console.log();
            if(!atpop.find('li').length){
                html5 = '<span>轻敲空格输入</span>';
            }
            atpop.find('ul').html(html5);

            atpop.find('li').unbind('click').click(function(event) {

                 $('.inputcontent textarea').insertAtCaret($(this).html(),focusindex+1);
                 atpop.hide();
            });
        }       

        
         
    });

        var flag = false;
        var pid = '';

        $("#submits").off('click').click(function(event) {
            /* Act on the event */
            
            if(flag) return;
            var contents = $('.inputcontent textarea').val();
            var content = $.trim(contents);
            var num = 140 - Math.ceil(check(content));
            if(num>=0 && num <140){

                $('.cb-right .submits').removeClass('highlight').addClass('pink');

                var length = $('.file-preview-thumbnails').children().length;
                var file_name = null;
                if(length){
                    console.log(length);
                    $('.kv-fileinput-upload').click();
                    $("#file_upload").off('fileuploaded').on('fileuploaded', function(event, data, previewId, index){
                        $(this).fileinput('clear');
                        $(this).fileinput('enable');
                        $('.upup').hide();
                        console.log(previewId);
                         console.log(data.files.length);
                        file_name = data.response;
                        console.log(index);

                       if(index == 0){
                         contentajax(file_name) ;
                       }
                       
                    });
                } else{
                    contentajax(null);
                }
               //$('.wbcontent').clone(true).prepend('.content');
                
                
                function contentajax(file_name) {
                    $.ajax({
                        url: COMMON + 'content/',
                        type: 'POST',
                        data: {
                            content : content,
                            num : num,
                            length : length,
                            file_name :file_name,
                        },
                        beforeSend : function (jqXHR, settings) {
                            flag = true ;
                        },
                        success : function (status){
                            if(status){
                                alert(status);
                                $('.succ').fadeIn('slow');
                                $('.inputcontent textarea').val('');
                                $('.num-txt').html("你还可以输入<span >140</span>个字");
                                 setTimeout(function(){
                                    $('.succ').fadeOut();
                                }, 500);                                 
                                flag = false;
                               }
                            },
                        error : function(){
                            $('.succ').fadeIn('slow');
                            $('.inputcontent textarea').val('');
                            $('.num-txt').html("你还可以输入<span >140</span>个字");
                             setTimeout(function(){
                                $('.succ').hide();
                            }, 500);
                            flag = false;
                            }
                        })
                    }                       
            }
           
        });

            
             // 上传图片---主页

                 $("#file_upload").fileinput({

                      'allovedFileExtensions' : ['jpg','png','gif','jpeg'],
                        'uploadUrl' : COMMON + 'up',
                        'maxFileSize':10240,
                        'maxFileCount':9,
                        'removeLabel' : '移除',
                        'cancelLabel' : '取消',
                        'browseLabel' : '浏览',
                        'uploadLabel'   : '上传',
                        'dropZoneTitle' : '拖至此处',
                        'msgFilesTooMany': '图片个数已超出最大值10张',
                        'msgInvalidFileType': '只允许jpg,png,gif,jpeg格式',
                        'allowedFileTypes'  : ['image'],                        
                        });

            $("#file_upload").on('filepreupload', function(event, data, previewId, index){
                // $(this).fileinput('clear');
                // $(this).fileinput('enable');
                // $('.upup').hide();
                var formdata = data.form, files = data.files,  extradata = data.extra , responsedata = data.response; 
                
                console.log(data);
               
            });
           
             
            
              
        
    








})



  
    // 鼠标点击位置的确定
    function mousepos(objx,objy,e,obj) {
        var selfX = objx + e.pageX;
        var selfY = objy + e.pageY;
        var bodyX = document.documentElement.clientWidth + $(document).scrollLeft();

        var bodyY = document.documentElement.clientHeight + $(document).scrollTop();

        if(selfX > bodyX && selfY > bodyY){
            obj.css({top:(bodyY - objy),left:(bodyX - objx)}).fadeIn();

        }else if(selfY > bodyY){
            obj.css({top:(bodyY - objy),left:e.pageX}).fadeIn();
        }else if(selfX > bodyX){
            obj.css({top:e.pageY,left:(bodyX - objx)}).fadeIn();
        }else {
            obj.css({top:e.pageY,left:e.pageX}).fadeIn();;
        }
    };  


