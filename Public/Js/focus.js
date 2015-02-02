/* 
 * @Author: anchen
 * @Date:   2014-12-06 16:07:25
 * @Last Modified by:   anchen
 * @Last Modified time: 2015-01-28 15:43:13
 */
$(function() {
    $('.focus p.focus-friend').click(function(event) {
        var _this = $(this);
        var parent = $(this).parent();
        var uid = $(this).attr('action-data');
        $.ajax({
            url: COMMON + 'addfriend',
            type: 'POST',
            data: {
                touser: uid
            },
            beforeSend: function(jqXHR, settings) {
                _this.parent().html('<p class="no-focus" action-data="'+uid+'"><a href="javascript:void(0)"><em class="f">Y </em>正在关注</a></p>');
            },
            success: function(response, status) {
                if(response){
                    console.log('jjd');
                    parent.html('<p class="no-focus" action-data="'+uid+'"><a href="javascript:void(0)"><em class="f">Y </em>已关注</a></p>');
                }
                
            }
        }).fail(function() {
            alert('关注失败，请稍候重试');
        })
    });
});