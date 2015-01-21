/* 
* @Author: anchen
* @Date:   2014-12-14 21:42:11
* @Last Modified by:   anchen
* @Last Modified time: 2015-01-15 11:14:06
*/

$(function () {
    // alert('message');
    // 注册框显示
    $('.register').click(function () {
        var obj = $('#register');
        dialog(obj);
        return false;

    });

    // // 关闭弹出框
    var flagclose = false;
    $('.close').click(function(event) {

       $(this).parent().parent().fadeOut();
       $('#background').fadeOut();
       return false;
        
    });
    $('.fclose').click(function(event) {

       $(this).parent().parent().fadeOut();
       return false;        
    });
    $('.fclose1').click(function(event) {

       $(this).parent().fadeOut();
       return false;        
    });

    // 登陆框弹出
    $('.login').click(function () {
        var obj = $('#login');
        dialog(obj);
        return false;

    });

    // 转发框弹出

$('.forrepost').unbind('click').click( function(event) {
    //var reposthtml = '';
        $('.faceico').unbind('click').click(function(event){
            $('.repostbq').css('left',14).show();
              $('.repost .face_list li').unbind('click').click(function(event) {
                         /* Act on the event */
                        var _this = $(this);
                        var txt = $('.repost textarea');
                        txt.insertAtCaret(_this.attr("data"));
                        txt.trigger('keydown');
                    
                 });  
        })
        var obj = $('.repost');
        var thiscontent = $(this).closest('.wbcontent');
        dialog(obj);
         _this = $(this);
         
        $('.my_wb').css({
            background: '#fff',
        });

        uid = _this.attr('uid');
        contentid = _this.attr('contentid');
       username = _this.attr('username');

       // textarea里面的内容
       textareaname = $.trim(thiscontent.attr('username'));
       textareatxt = $.trim(thiscontent.find('.reposttxt').html());
       textareatxt = facelook(textareatxt);
       textareatxt ? reposthtml = '//@'+ textareaname + ':'+ textareatxt : reposthtml='';
        $('.repost textarea').val(reposthtml);


       var ccc = setstring($.trim(thiscontent.find('.content').html()),25);
       check(ccc)<25 ? ddd = "" :ddd ="...";
        var txt = "<a href='' class=\"tosb\">@"+username+"</a>:"+ccc+ddd;       
        $('span.s_txt').html(txt);

        // 光标位置
            var location = 0;
             var txtFocus = $('.repost textarea')[0];
                         
            focuspos(txtFocus,location);



        var contentnum = 140;
        var contentvalue = $.trim($('.repost textarea').html());
        num = contentnum - Math.ceil(check(contentvalue));
        $('.r_textarea textarea').on('keyup keydown change', function(event) {
        // 数出多少个字
                contentvalues = $(this).val();

                contentvalue = $.trim(contentvalues);
                num = contentnum - Math.ceil(check(contentvalue));
                num<0 ? $('span.num').html(num).removeAttr('color').css('color','red'):$('span.num').html(num).removeAttr('color').css('color','#333'); 
            });
        
        num<0 ? $('span.num').html(num).removeAttr('color').css('color','red'):$('span.num').html(num).removeAttr('color').css('color','#333');







        var flag = false;
         $('.submit_post').unbind('click').click(function(event) {
            if(flag) return;
                

            $('.r_textarea textarea').trigger('keydown');
            if(num <140 && num >=0 && contentvalue && contentid)  {
                 $.ajax({
                    url: COMMON+'/addrepost',
                    type: 'POST',                
                    data: {contentvalue:contentvalue,cid:contentid},
                    beforeSend : function (jqXHR, settings) {
                            flag = true ;                            
                        },
                    success : function (status){
                        if(status){
                            $('.succ').fadeIn('slow');
                            $('.r_textarea textarea').val('');
                            $('repost .num').html('140');
                             setTimeout(function(){
                                $('.succ').hide('slow');
                                $('.repost').hide('slow');
                                $('#background').hide();
                            }, 500);
                            
                            flag = false;
                           }
                        },
                    error : function(){
                            $('.succ').fadeIn('slow');
                            $('.succ .succtext').html('发布失败');
                            $('.succ .success').css('background-position','-375px -150px');
                            $('.r_textarea textarea').val('');
                            $('repost .num').html('140');
                            setTimeout(function(){
                                $('.succ').hide('slow');
                                $('.repost').hide('slow');
                                $('#background').hide();
                            }, 500);
                            flag = false;
                            }
                })
                
             } 

                
            });
        $('.close').click(function (event) {
            $('.repost textarea').val(reposthtml);
        });

        return false;
    });


    $('#login_now').click(function(event) {
        /* Act on the event */
        $('#login').fadeIn();
        $('#register').fadeOut();
    });

    // 设置框的显示与隐藏
    $('.setting').hover(function() {
        /* Stuff to do when the mouse enters the element */
        $('.set-list').show();
        $('.newslist').hide(); 
        $('.topmenutip').hide();      
    },function(){
        var b = setTimeout(function(){
            $('.set-list').slideUp()
        }, 1500);
        $('.set-list').mouseenter(function(event) {
            $('.set-list').show();
            clearTimeout(b);
        });

        $('.set-list').mouseleave(function(event) {
            $('.set-list').hide();
        });  
    });


    // 私信框显示以及隐藏
     $('.mail').hover(function() {
        $('.newslist').show(); 
        $('.set-list').hide(); 
        $('.topmenutip').hide();      
    },function(){
         var  b = setTimeout(function(){
                $('.newslist').hide();
            }, 1500);
        $('.newslist').mouseenter(function(event) {
            /* Act on the event */
            clearTimeout(b);
            $('.newslist').show();
        });
        
        $('.newslist').mouseleave(function(event) {
            /* Act on the event */
            $('.newslist').hide();
        });  
    })


     // 表情框弹出

     $('.biaoqing').off('click').on('click', function(event) {

        var biaoqingku = $('.sendbq');
         biaoqingku.show();
        event.stopPropagation();                   
         $(document).click(function(event) {
                var target = $(event.target);
                if(biaoqingku.is(':visible')){
                   if(target.closest('.sendbq').length == 0) biaoqingku.hide();
               }

         })
              $('.sendbq .face_list li').unbind('click').click(function(event) {
                         /* Act on the event */
                        var _this = $(this);
                        var txt = $('.inputcontent textarea');
                        txt.insertAtCaret(_this.attr("data"));
                        txt.trigger('keyup');
                    
                 });  



             
       
     });

     // 图片框的弹出
     $('.tupian').on('click', function(event) {
        $(window).width()>1000 ? num = ($(window).width()-1000)/2+165 : num = 165;
         $('.tupianku').show();
         $('.tupianku').css('left',num);

         $('.tupianku .dan').off('click').on('click', function(event) {
            $('.tupianku').hide();
             $('.upup').show().css('left',num);
         });

     });

     // 屏蔽要弹出
     $('.screen_a').on('click', function(event) {
         var menulist = $(this).closest('.screen_box').find('.menulist');
         menulist.show();
         
            event.stopPropagation();
            $(document).not($('.menulist')).click(function(event) {
                menulist.hide();
             })
         
     });

     //点击删除和屏蔽的下拉菜单
     $('.menulist a').on('click', function(event) {
        var data = $(this).attr('data');
        var wbcontent = $(this).closest('.wbcontent');
        var cid = $(this).closest('.wbcontent').attr('contentid');
        var uid = $(this).closest('.wbcontent').attr('fromid');
        var screenbox = $(this).closest('.screen_box');
        var menulist = screenbox.find('.menulist');
        var layer_pop = screenbox.find('.layer_pop');

        // alert(cid);
       
            if(data == 'delete'){
                layer_pop.show().css({
                    width: 191,
                    top: -95,
                    left:-75,
                });
                layer_pop.find('.pop-txt').html('确定要删除这条微博么？');
                layer_pop.find('.btn-a').on('click', function(event) {
                    $.post(COMMON + '/deletecontent', {cid:cid,uid:uid}, function(data,status, xhr) {
                        if(data){                            
                            screenbox.find('.pop_states').fadeIn();
                            screenbox.find('.pop_states span').html('删除成功');
                          setTimeout(function(){  
                                screenbox.find('.pop_states').fadeOut();
                                wbcontent.slideUp();
                          }, 500);

                        }else{                          
                            screenbox.find('.pop_states').fadeIn();
                            screenbox.find('.pop_states span').html('删除失败');
                            screenbox.find('.pop_states i').css('background-position','-350px -150px');
                         setTimeout(function(){   
                            screenbox.find('.pop_states').fadeOut();
                            wbcontent.slideUp();
                         }, 300);
                        }
                        layer_pop.hide();
                    });

                });
                layer_pop.find('.btn-b').on('click', function(event) {
                   layer_pop.hide();
                });
                
            }
     });

     // 滚动时左右两边固定住
     $(window).scroll(function () {
         $('.notfix').css("visibility","hidden");
         $('.forfix').show().addClass('l_fix');
         $(window).resize(function(event) {
         //     /* Act on the event */
             var wid = $(window).width();
             var wids = -wid/2;
             // alert(wids);
             if(wid < 1000){
                $('.forfix').css('marginLeft',wids);
             }else{
                $('.forfix').css('marginLeft',-500);
             }
         });
         $(window).trigger('resize');

         // 飞到上方要隐藏
         if ($(window).scrollTop() == 0) {
                $('.fortop').hide();
            }else{
                $('.fortop').show();
            }
         
     });


     // 飞到上方
     $('.fortop').on('click',  function(event) {
         $(window).scrollTop(0);
     });

     // 页面
    $('.first_page').hover(function() {
          $('.pagelist').show();             
        }) 

    },function(){
                  var a = setTimeout(function(){
                $('.pagelist').hide();
            }, 1000);
          $('.pagelist').mouseenter(function(event) {
                $(this).show();
                clearTimeout(a);
            });

          $('.pagelist').mouseleave(function(event) {
                $('.pagelist').hide();  

    });



     

     
     // $("#file_upload").on('filepreupload', function(event, data, previewId, index){
     //    alert(previewId);
     //    $(this).fileinput('clear');
     //    $(this).fileinput('enable');
     //    // $(this).fileinput('refresh');
     //    $('.upup').hide();
     //    return 10;
     // })

     
        
     

   



    


     





});

    function dialog(obj){
        obj.css({
            left:($(window).width()-obj.width())/2,
            top:($(window).height()-obj.height()>0) ? $(document).scrollTop() + ($(window).height() - obj.height())/2 + 48 : $(document).scrollTop() + 50
        }).fadeIn();

        $('#background').show();
    }

    // 转发内容表情处理
    function facelook(txt) {
        var reg = /<img src="\/weibo\/Public\/Images\/biaoqing\/(.*?).gif" alt="图片">/g;
        txt = txt.replace(reg,'[$1]');
        return txt;
    }

    //光标
    function focuspos(obj,location){
        
        if (document.body.createTextRange) {  
            var range = document.body.createTextRange();  
            range.moveEnd("character",0); 
            range.collapse(true);          
            range.move('character', location);  
            range.select();  
        }else{  
            obj.focus();  
            obj.setSelectionRange(location,location);  
        }       
    }

                   