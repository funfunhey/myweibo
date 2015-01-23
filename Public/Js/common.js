/* 
* @Author: anchen
* @Date:   2014-12-19 17:00:51
* @Last Modified by:   anchen
* @Last Modified time: 2015-01-23 17:00:07
*/

$(function(){
    // 加载用户的关注
    var json_focus = '';
    var json_fans = '';
    if(!json_focus){
        $.post(INDEX + 'focus', function(status) {
            if(status){ 
                json_focus = $.parseJSON(status);           
           }            
        })
    }
    if(!json_fans){
        $.post(INDEX + 'fans', function(status) {
            if(status){ 
                json_fans = $.parseJSON(status);  
                console.log(json_fans);         
           }            
        })
    }
    //单张图片点击效果
    $.each($('.photo_box1 li '), function(index, val) {
        var _this = $(this);
        _this.off('click').on('click', function(event) {
            var detail = _this.closest('.WB_detail');
            var detail_ex_me =  detail.find('.expand_media');
            var wpl = _this.closest('.WB_photo_list');
            var artworkimg = detail.find('.artwork img');
            var asrc = _this.find('img').attr('asrc');
            var clickid = _this.find('img').attr('fid').substring(0,13);
            var html = '';

            _this.append('<i class="loadingb"></i>');
            wpl.hide();
            detail_ex_me.show();
            artworkimg.attr('src',asrc);
            detail_ex_me.find('.pic_choose').hide();
            detail.find('.shouqi').off('click').on('click', function(event) {
               detail_ex_me.hide();
                wpl.show();
                _this[0].removeChild($('.loadingb')[0]);
             });

            var artworkid = _this.attr('src');
            var angle = 90;
            $('.rotatel').off('click').on('click',  function(event) {
                artworkimg.attr('id',clickid);
                rotate(artworkimg.attr('id'),angle==undefined?-90:-angle);
            });
            $('.rotater').off('click').on('click',  function(event) {
                artworkimg.attr('id',clickid);
                rotate(artworkimg.attr('id'),angle==undefined?90:angle);
            });
            artworkimg.off('mouseover').on('mouseover',function(event3){
               artworkimg.removeClass().addClass('smallcursor');
               artworkimg.click(function(event4) {
                   detail_ex_me.hide();
                    wpl.show();
                    _this[0].removeChild(_this.find('.loadingb')[0]); 
               });
                
            })
            
            // $.load(ROOT+'Uploads/' ,function(){

            // })
        });
    });
//多图显示效果 
    $.each($('.photo_box li'), function(index, val) {
        $(this).off('click').on('click', function(event) {
            var _this = $(this);
            var detail = _this.closest('.WB_detail');
            var detail_ex_me =  detail.find('.expand_media');
            var wpl = _this.closest('.WB_photo_list');
            var artworkimg = detail.find('.artwork img');
            var asrc = _this.find('img').attr('asrc');
            var clickid = _this.find('img').attr('fid').substring(0,13);
            var html = '';
            var imgindex = index ; 
            var totallength = _this.parent().children('li').length;

            var toimg = _this.parent();
            //添加下面的缩略图
            $.each(detail.find('.photo_box li img'), function(index1, val1) {
                html +='<li > <a href="javascript:void(0)"> <img src='+detail.find('.photo_box li img').eq(index1).attr('src')+' alt="" /> </a> </li>';  
            });
             detail.find('.picchoose ').html(html);
             detail.find('.picchoose li').eq(imgindex).find('a').addClass('colorline');
             var picchooseli = detail.find('.picchoose li');
             //点击缩略图弹出对应图片
             $.each(picchooseli, function(index4, val) {
                  $(this).off('click').on('click', function(event) {
                    imgindex = index4;
                    artworkimg.attr('src',toimg.find('li').eq(index4).find('img').attr('asrc'));
                    detail.find('.picchoose li a').removeClass('colorline');
                    picchooseli.eq(imgindex).find('a').addClass('colorline');

                  });
             });

             //加载功能和弹出大图
            _this.append('<i class="loadingb"></i>');
            wpl.hide();
            detail_ex_me.show();
            artworkimg.attr('src',asrc);
            //收起功能
            detail.find('.shouqi').off('click').on('click', function(event) {
               detail_ex_me.hide();
                wpl.show();
                _this[0].removeChild(_this.find('.loadingb')[0]);
             });

             //下一张和上一张
        artworkimg.off('mousemove').on('mousemove',function(event6) {
            var wzx = event6.pageX - getX(artworkimg[0]);
            var wzy = event6.pageY - getY(artworkimg[0]);         
            var nextli = _this.nextAll('li').length;
            var prevli = _this.prevAll('li').length;

               if(wzy){
                    if(wzx){
                        if(wzx<140  && prevli !== 0){
                           
                             artworkimg.off('click').on('click', function(event) {
                                if (imgindex <= 0){
                                     artworkimg.removeClass();
                                }else{
                                    imgindex += -1;                                   
                                    artworkimg.attr('src',toimg.find('li').eq(imgindex).find('img').attr('asrc'));
                                    detail.find('.picchoose li a').removeClass('colorline');
                                    detail.find('.picchoose li').eq(imgindex).find('a').addClass('colorline');
                                }
                               
                            });
                             imgindex >0 ? artworkimg.removeClass().addClass('leftcursor') : artworkimg.removeClass();

                        }else if(wzx>300 && nextli !== 0){
                           
                             artworkimg.off('click').on('click', function(event) { 
                                 
                                if (imgindex >= totallength-1){
                                     artworkimg.removeClass();
                                }else{
                                    imgindex += 1;
                                    artworkimg.attr('src',toimg.find('li').eq(imgindex).find('img').attr('asrc'));
                                    detail.find('.picchoose li a').removeClass('colorline');
                                    detail.find('.picchoose li').eq(imgindex).find('a').addClass('colorline');
                                }                         
                            });
                             imgindex < totallength -1 ? artworkimg.removeClass().addClass('rightcursor') : artworkimg.removeClass();  
                        }else if(wzx>140 && wzx<300){
                            artworkimg.removeClass().addClass('smallcursor');
                            artworkimg.off('click').on('click', function(event) {
                                    detail_ex_me.hide();
                                    wpl.show();
                                    _this[0].removeChild($('.loadingb')[0]);

                            });
                        }
                    }
               }   
            });

            var artworkid = _this.attr('src');
            var angle = 90;
            $('.rotatel').off('click').on('click',  function(event) {
                artworkimg.attr('id',clickid);
                rotate(artworkimg.attr('id'),angle==undefined?-90:-angle);
            });
            $('.rotater').off('click').on('click',  function(event) {
                artworkimg.attr('id',clickid);
                rotate(artworkimg.attr('id'),angle==undefined?90:angle);
            });
            // $.load(ROOT+'Uploads/' ,function(){

            // })
        });
    });
    $.each($('.usercard'), function(index, val) {

        $(this).unbind('mouseover').bind('mouseover',function(e){
            var obj1 = $('.usercardload');
            var objx1 = obj1.width();
            var objy1 = obj1.height();

            var obj = $('.pop_usercard');
            var objx = $('.pop_usercard').width();
            var objy = $('.pop_usercard').height();
            var uid  = $(this).attr('uid');
           if (uid !== getcookie('uid')) mousepos(objx1,objy1,e,obj1);
            if (uid !== getcookie('uid')){
                $.post(COMMON+'showusercard', {uid: uid}, function(status) {
                obj1.hide();
                    var usercardinfo = $.parseJSON(status);
                    console.log(status);
                     obj.find('.WB_face img').attr('src',ROOT+usercardinfo.photo); 
                     obj.find('.count').html('<span class="c_follow "> <a href="" target="_blank"> 关注 <em class="focuscount">'+usercardinfo.focus+'</em> </a> </span> <span class="c_follow"> <a href="" target="_blank"> 粉丝 <em class="fanscount">'+usercardinfo.fans+'</em> </a> </span> <span class="c_follow"> <a href="" target="_blank"> 微博 <em class="weibocount">'+usercardinfo.contentcount+'</em> </a> </span>  ');
                     obj.find('.namename').html(usercardinfo.username);
                     obj.find('.autocut').html('<span>'+usercardinfo.production+'</span>');
                      mousepos(objx,objy,e,obj); 
                      if(json_fans.indexOf(uid) !== -1 && json_focus.indexOf(uid) !== -1){
                            obj.find('.btn-focus').html('<em class="f">Z</em> 互相关注 <em class="f">g</em>'); 
                        }else if(json_fans.indexOf(uid) !== -1 ){
                            obj.find('.btn-focus').html('<em class="f">+</em> 关注 ');
                        }else if(json_focus.indexOf(uid) !== -1){
                            obj.find('.btn-focus').html('<em class="f">Y</em> 已关注 <em class="f">g</em>'); 
                        }else {
                           obj.find('.btn-focus').html('<em class="f">+</em> 关注ta '); 
                        }
                      
                }); 
            }
           
            
           
 
        })
        $(this).mouseleave(function(){
            obj = $('.pop_usercard');
           var  ac = setTimeout(function(){
            obj.hide()
            },1200);
            obj.mouseenter(function() {
                clearTimeout(ac);
            });
            obj.mouseleave(function() {
                $('.pop_usercard').fadeOut();
            });
        })
    });
    


    $('.forcomment').unbind('click').click(function(event) {
       var wbcontent = $(this).closest('.wbcontent');
       var commentsub = wbcontent.find('.comment-submit'); 
       var cid = wbcontent.attr('contentid');
       var fromid = wbcontent.attr('fromid');
       //var cuid = 

       wbcontent.find('.list_ul').html('');
        var random = '#' + new Date().getTime() + Math.floor(Math.random()*10000); 
        if(wbcontent.find('.comments').is(':visible')){
            wbcontent.find('.comments').slideUp();
            wbcontent.find('.arrow-comment').hide();
            
            // var html = '';
            return;
        }
        if(!cid) return;
            $.ajax({
            url: COMMON + '/showcomment',
            type:  'POST',
            data: {cid: cid},
            beforeSend: function (jqXHR, settings){
                wbcontent.find('.loadings').show();
                window.location.hash= random;
            },
            success: function (response){
              if(wbcontent.find('.comments').is(':hidden')){                                       
                     wbcontent.find('.loadings').hide();
                    wbcontent.find('.comments').slideDown();
                    wbcontent.find('.arrow-comment').show(); 
                }
               
                var html='';
                console.log(response);
                wbcontent.find('.loadings').hide();
                var json_comment = $.parseJSON(response);

               if(json_comment){
                      $.each(json_comment,function(index, value) {

                             html +='<div class="list_li " commentid="'+ value.commentid +'"><div class="wb_face overf"><a href="#"><img src="' + ROOT+'/'+value.photo + '" alt="" /></a></div><div class="list_con"><div class="text overf"><a href="'+ USER +'index/id/'+ value.uid+'" class="username">'+ value.username + '</a><a href=""><i class="f"></i></a>：' + value.comment + '</div><div class="wb_func"><div class="handle"><ul><li class="hover"><span class="overf"><a href="javascript:void(0);">举报</a></span></li><li><span><a href="javascript:void(0);" class="reply">回复</a></span></li><li><span><a href="javascript:void(0);"><span class="liky"><i class=""></i><em></em></span></a></span></li></ul></div><div class="wb_from">'+ value.date+'</div></div></div></div>';

                     });
                    wbcontent.find('.list_ul').val('');
                     wbcontent.find('.list_ul').append(html);               
               }

             
              
              

                 $('.commentlist textarea').on('keyup keydown change', function(event) {
                // 数出多少个字
                        contentvalues = $(this).val();
                        contentvalue = $.trim(contentvalues);
                        num = Math.ceil(check(contentvalue));
                        num<=0 ? $('.comment-submit').removeClass('highlight').addClass('pink') :$('.comment-submit').removeClass('pink').addClass('highlight');

                    });
                commentsubflag = false;
                // 提交评论
                commentsub.unbind('click').click(function(){
                    if(commentsubflag) return ;

                        contentvalues =wbcontent.find('.commentlist textarea').val();
                        contentvalue = $.trim(contentvalues);
                        num = Math.ceil(check(contentvalue));
                        
                           if(num<=140 && num>0){
                                $.ajax({
                                    url: COMMON + '/addcomment',
                                    type: 'POST',
                                    data: {cid: cid,content:contentvalue,fromid:fromid},
                                    beforeSend: function(jqXHR, settings){
                                        commentsubflag = true;
                                    },
                                    success: function (status){

                                        html1 = '<div class="list_li"><div class="wb_face overf"><a href="#"><img src="' + PICTURE + '" alt="" /></a></div><div class="list_con"><div class="text overf"><a href="" class=" username">'+ USERNAME + '</a><a href=""><i class="f"></i></a>：' + contentvalue + '</div><div class="wb_func"><div class="handle"><ul><li class="hover"><span><a href="javascript:void(0);">举报</a></span></li><li><span><a href="javascript:void(0);" class="reply">回复</a></span></li><li><span><a href="javascript:void(0);"><span class="liky"><i class=""></i><em></em></span></a></span></li></ul></div><div class="wb_from">10秒前</div></div></div></div>';
                                        wbcontent.find('.list_ul').prepend(html1);
                                        html1='';
                                        wbcontent.find('.commentlist textarea').val('');
                                       commentsubflag = false;
                                    }
                                });
                               
                             }
                        }); 

                    /////////////////////////
                    // 评论回复别人              //
                    /////////////////////////
                     $.each($('.list_li'),function (index1,value1){
                        $(this).on('click', '.reply',function(){
                            var commentreply = $('.list_li .commentreply').eq(index1);
                            if(commentreply.is(':visible')){
                                commentreply.hide();
                                return false;
                            }
                            var username = $('.list_li .username').eq(index1).html();
                            var commentid = $('.list_li').eq(index1).attr('commentid');
                            var li = $('.list_li').eq(index1);
                            var html2 = '<div class="fixes commentreply"><div ><div class="p_publish relat"> <textarea name="" id="" cols="30"  class="overf" ></textarea> </div> <div class="p_opt overf"> <div class="btn"> <a href="javascript:void(0)" class="submits pink comment-submit" >评论</a> </div> <div class="opt"> <span class="ico"> <a href="" > <i class="jk">o</i> </a> </span> <ul class="ipt"><li> <label for=""> <input type="checkbox" /> <span>同时转发到我的微博</span> </label> </li></ul> </div> </div> </div></div>';
                            $('.list_li .list_con').eq(index1).after(html2);
                            var textareas = $('.list_li ').eq(index1).find("textarea");
                            textareas.val('回复@'+username+':');
                            var num = -1;
                            textareas.on('keyup keydown change', function(event) {                
                                contentvalue1 = $(this).val();
                                contentvalue2 = $.trim(contentvalue1);
                                num = Math.ceil(check(contentvalue2));
                                num <= 0 ? li.find('.comment-submit').removeClass('highlight').addClass('pink') :li.find('.comment-submit').removeClass('pink').addClass('highlight');                               
                                var commentcon = textareas.val();
                                var hangnum = Math.ceil(num/33);
                                hangnum > 1 ? textareas.height(22*hangnum) : textareas.height(22);
                                if( num >140){
                                    textareas.val(setstring(commentcon,140));
                                }
                                                                
                            });
                               
                                li.find('.comment-submit').off('click').on('click',  function(event) {
                                     commentcon = textareas.val();
                                     console.log(commentcon);
                                     num = Math.ceil(check(commentcon));
                                    if(num > 0 && num <= 140){
                                    
                                       $.ajax({
                                            url: COMMON + '/addcomment',
                                            type: 'POST',
                                            data: {content: commentcon,cid:cid,toid : commentid},
                                            beforeSend :function (jqXHR, settings){

                                            },
                                            success : function (status){
                                                if(status){

                                                html3 = '<div class="succfix boxstyle"> <em class="successsmall"></em> <span>评论成功</span> </div>';
                                               li.find('.p_publish').append(html3);
                                               $('.succfix').show().width(120).css({
                                                    textalign :'center',
                                                    position : 'absolute',
                                                    top : 10,
                                                    left:160,
                                               });
                                            }
                                               
                                           }
                                        })
                                    }
                                });                           
                    })
                 });
            }                
        });                
    });
    
//轮询
function askat(atcon,atcom,comc){
    $.ajax({
        url: COMMON + 'askat',
        type: 'POST',
        timeout: 8000,
        data: {time:4,com:atcom,con:atcon,comc:comc},
        success : function(status){
            var json_at = $.parseJSON(status);
            var con = json_at.atnewcon;
            var com = json_at.atnewcom;
            var comc = json_at.comment;

                 if(con && con != 0 && com && com != 0 ){
                    $('.topmenutip').show().find('ul').html('<li>' + con +'条@我的微博, <a href="'+ NEWS +'newsat" class="linkor ">查看@我的微博</a></li><li>' + com +'条@我的评论, <a href="'+ NEWS +'/newsatcomment" class="linkor ">查看@我的评论</a></li>'); 
                    $('.new_count').show().html(parseInt(com)+parseInt(con));
                 }else if(con != 0 && con){
                    
                    $('.topmenutip').show().find('ul').html('<li>' + con +'条@我的微博, <a href="'+ NEWS +'newsat" class="linkor">查看@我的微博</a></li>'); 
                    $('.new_count').show().html(con);

                }else if(com  != 0 && com){
                    $('.topmenutip').show().find('ul').html('<li>' + com +'条@我的评论, <a href="'+ NEWS +'newsatcomment" class="linkor">查看@我的评论</a></li>'); 
                    $('.new_count').show().html(com);
                }else {
                    $('.topmenutip').hide();
                    $('newslist .new_count').hide().val('');
                    $('news-list .new_count').hide().val('');
                }
                if(comc != 0 && comc){
                    $('.topmenutip').show().find('ul').html('<li>' + com +'条评论, <a href="'+ NEWS +'newscomment" class="linkor">查看我的评论</a></li>'); 
                    $('.com_count').show().html(com);
                }
                console.log(json_at);
                  //setTimeout(askat(con,com,comc),20000);
        },
        error :function(xhr,textStatus){
            if(textStatus=="timeout"){
                console.log('超时');
            }
            setTimeout(askat(0,0,0),20000);
        }

    })
}

askat(0,0,0);

/**/
})
    
    function check(str){
        var num = 0;
     for (var i=0; i<str.length; i++) {
        //字符串不是中文时
        if (str.charCodeAt(i) >= 0 && str.charCodeAt(i) <= 255){
            num = num + 0.5;//当前字数增加0.5个
        } else {//字符串是中文时
            num ++;//当前字数增加1个
        }
    }
    return num;
};    
    function setstring(str,len){
            var num = 0;
            var s = '';
         for (var i=0; i<str.length; i++) {
            //字符串不是中文时
            if (str.charCodeAt(i) >= 0 && str.charCodeAt(i) <= 255){
                num = num + 0.5;//当前字数增加0.5个

            } else {//字符串是中文时
                num ++;//当前字数增加1个
            }
               s += str.charAt(i);
               if(num >= len){ 
                return s ;
               }
        }
        if(num < len){
            return str;
        }else{
            return s;
        }
    };

    function rotate(id,angle,whence) { 
    var p = document.getElementById(id); 

    // we store the angle inside the image tag for persistence 
    if (!whence) { 
    p.angle = ((p.angle==undefined?0:p.angle) + angle) % 360; 
    } else { 
    p.angle = angle; 
    } 

    if (p.angle >= 0) { 
    var rotation = Math.PI * p.angle / 180; 
    } else { 
    var rotation = Math.PI * (360+p.angle) / 180; 
    } 
    var costheta = Math.cos(rotation); 
    var sintheta = Math.sin(rotation); 

    if (document.all && !window.opera) { 
    var canvas = document.createElement('img'); 

    canvas.src = p.src; 
    canvas.height = p.height; 
    canvas.width = p.width; 

    canvas.style.filter = "progid:DXImageTransform.Microsoft.Matrix(M11="+costheta+",M12="+(-sintheta)+",M21="+sintheta+",M22="+costheta+",SizingMethod='auto expand')"; 
    } else { 
    var canvas = document.createElement('canvas'); 
    if (!p.oImage) { 
    canvas.oImage = new Image(); 
    canvas.oImage.src = p.src; 
    } else { 
    canvas.oImage = p.oImage; 
    } 

    canvas.style.width = canvas.width = Math.abs(costheta*canvas.oImage.width) + Math.abs(sintheta*canvas.oImage.height); 
    canvas.style.height = canvas.height = Math.abs(costheta*canvas.oImage.height) + Math.abs(sintheta*canvas.oImage.width); 

    var context = canvas.getContext('2d'); 
    context.save(); 
    if (rotation <= Math.PI/2) { 
    context.translate(sintheta*canvas.oImage.height,0); 
    } else if (rotation <= Math.PI) { 
    context.translate(canvas.width,-costheta*canvas.oImage.height); 
    } else if (rotation <= 1.5*Math.PI) { 
    context.translate(-costheta*canvas.oImage.width,canvas.height); 
    } else { 
    context.translate(0,-sintheta*canvas.oImage.width); 
    } 
    context.rotate(rotation); 
    context.drawImage(canvas.oImage, 0, 0, canvas.oImage.width, canvas.oImage.height); 
    context.restore(); 
    } 
    canvas.id = p.id; 
    canvas.angle = p.angle; 
    canvas.style.width = 440;
    p.parentNode.replaceChild(canvas, p); 
    } 
function getX(obj){ 
    var parObj=obj; 
    var left=obj.offsetLeft; 
    while(parObj=parObj.offsetParent){ 
    left+=parObj.offsetLeft; 
    } 
    return left; 
} 
function getY(obj){ 
    var parObj=obj; 
    var top=obj.offsetTop; 
    while(parObj = parObj.offsetParent){ 
    top+=parObj.offsetTop; 
    } 
    return top; 
}
function getcookie(name){
    var strCookie=document.cookie; 
    var arrCookie=strCookie.split("; "); 
    for(var i=0;i<arrCookie.length;i++){ 
    var arr=arrCookie[i].split("="); 
    if(arr[0]==name)return arr[1]; 
    } 
    return ""; 

}
