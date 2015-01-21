/* 
* @Author: anchen
* @Date:   2014-12-06 16:07:25
* @Last Modified by:   anchen
* @Last Modified time: 2014-12-24 10:22:39
*/

$(function (){
                $('.focus p').click(function(event) {
                var _this = $(this);
                var uid = $(this).attr('action-data');
                

                    $.ajax({
                        url: COMMON + 'addfriend',
                        type: 'POST',
                        data: {touser: uid},
                        // beforeSend : function(jqXHR, settings,o){
                        //     _this.parent().html('<p action-data="[uid]"><a href="javascript:void(0)"><em class="f">Y </em>正在关注</a></p>');
                        // },
                        success :function(response, status){
                            _this.parent().html('<p action-data="[uid]"><a href="javascript:void(0)"><em class="f">Y </em>已关注</a></p>')
                        }
                    })
                    // .done(function() {
                        
                    // })
                    .fail(function() {
                        alert('关注失败，请稍候重试');
                    })
                    
                    
            });

});