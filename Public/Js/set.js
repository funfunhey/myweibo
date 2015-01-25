/* 
 * @Author: anchen
 * @Date:   2014-12-19 22:20:48
 * @Last Modified by:   anchen
 * @Last Modified time: 2015-01-24 19:24:23
 */
$(function() {
    // 上传图片显示栏
    $('#filedata').change(function(event) {
        var path = $('#filedata').val();
        $('.weizhi').val(path);
    });
    //收起和编辑
    $('#personalinfo ul').off('click').on('click', function(event) {
        var personalinfo = $(this).closest('#personalinfo');
        var abstractwhole = personalinfo.find('.abstractwhole');
        if (abstractwhole.is(':visible')) {
            abstractwhole.hide();
            personalinfo.css('background', '#f2f2f5');
            return false;
        }
        abstractwhole.show();
        personalinfo.css('background', '#fff');
    });
    // 提交简介
    $('.abstractsave').off('click').on('click', function(event) {
        var whole = $('.abstractsave').closest('.abstractwhole');
        var abstract = whole.find('#abstract').val();
        $.post(COMMON + '/addabstract', {
            abstract: abstract
        }, function(status) {
            if (status) {
                whole.find('.succfix').css('display', 'inline-block').fadeIn(800).delay(1000).fadeOut(600);
            } else {
                //错误的时候弹出
            }
        });
    });;
})