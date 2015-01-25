/* 
 * @Author: anchen
 * @Date:   2014-12-06 16:07:25
 * @Last Modified by:   anchen
 * @Last Modified time: 2015-01-24 19:22:30
 */
$(function() {
    $('.focus p').click(function(event) {
        var _this = $(this);
        var uid = $(this).attr('action-data');
        $.ajax({
            url: COMMON + 'addfriend',
            type: 'POST',
            data: {
                touser: uid
            },
            beforeSend: function(jqXHR, settings) {
                _this.parent().html('<p action-data="[uid]"><a href="javascript:void(0)"><em class="f">Y </em>正在关注</a></p>');
            },
            success: function(response, status) {
                _this.parent().html('<p action-data="[uid]"><a href="javascript:void(0)"><em class="f">Y </em>已关注</a></p>')
            }
        }).fail(function() {
            alert('关注失败，请稍候重试');
        })
    });
});