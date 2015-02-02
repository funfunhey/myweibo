/*
* @Author: anchen
* @Date:   2015-01-26 21:14:32
* @Last Modified by:   anchen
* @Last Modified time: 2015-01-31 21:53:02
*/

//扩展 dateTimeBox
$.extend($.fn.datagrid.defaults.editors, {
    datetimebox : {
        init: function(container, options){
            var input = $('<input type="text">').appendTo(container);
            options.editable = false;
            input.datetimebox(options);
            return input;
        },
        getValue: function(target){
            return $(target).datetimebox('getValue');
        },
        setValue: function(target, value){
            $(target).datetimebox('setValue', value);
        },
        resize: function(target, width){
            $(target).datetimebox('resize', width);
        },
        destroy : function (target) {
            $(target).datetimebox('destroy');
        },
    }
});

$(function () {

    obj = {
        editRow : undefined,
        search : function () {
            $('#box').datagrid('load', {
                username : $.trim($('input[name="user"]').val()),
                date_from : $('input[name="date_from"]').val(),
                date_to : $('input[name="date_to"]').val(),
                fans:$('input[name="fans"]').val(),
                focus:$('input[name="focus"]').val(),
                contentcount:$('input[name="contentcount"]').val(),
            });
            $('#contentweibo').datagrid('load', {
                content : $.trim($('input[name="content"]').val()),
                date_from : $('input[name="date_from"]').val(),
                date_to : $('input[name="date_to"]').val(),
                position : $('input[name="position"]').val(),
            });
        },
        add : function () {
            $('#save,#redo').show();

            if (this.editRow == undefined) {
                //添加一行
                $('#box').datagrid('insertRow', {
                    index : 0,
                    row :{
                        id:'',
                    }                   
                });
                //将第一行设置为可编辑状态
                $('#box').datagrid('beginEdit', 0);
                this.editRow = 0;

            }
        },
        save : function () {
            //将第一行设置为结束编辑状态
            $('#box').datagrid('endEdit', this.editRow);
        },
        redo : function () {
            $('#save,#redo').hide();
            this.editRow = undefined;
            $('#box').datagrid('rejectChanges');
        },
        edit : function () {
            var rows = $('#box').datagrid('getSelections');
            if (rows.length == 1) {
                if (this.editRow != undefined) {
                    $('#box').datagrid('endEdit', this.editRow);
                }

                if (this.editRow == undefined) {
                    var index = $('#box').datagrid('getRowIndex', rows[0]);
                    $('#save,#redo').show();
                    $('#box').datagrid('beginEdit', index);
                    this.editRow = index;
                    $('#box').datagrid('unselectRow', index);
                }
            } else {
                $.messager.alert('警告', '修改必须或只能选择一行！', 'warning');
            }
        },
        remove : function () {
            var rows = $('#box').datagrid('getSelections');
            if (rows.length > 0) {
                $.messager.confirm('确定操作', '您正在要删除所选的记录吗？', function (flag) {
                    if (flag) {
                        var ids = [];
                        for (var i = 0; i < rows.length; i ++) {
                            ids.push(rows[i].id);
                        }
                        $.ajax({
                            type : 'POST',
                            url :   INDEX + '/main_user_del',
                            data : {
                                ids : ids.join(','),
                            },
                            beforeSend : function () {
                                $('#box').datagrid('loading');
                            },
                            success : function (data) {
                                if (data) {
                                    $('#box').datagrid('loaded');
                                    $('#box').datagrid('load');
                                    $('#box').datagrid('unselectAll');
                                    $.messager.show({
                                        title : '提示',
                                        msg : data + '个用户被删除成功！',
                                    });
                                }
                            },
                        });
                    }
                });
            } else {
                $.messager.alert('提示', '请选择要删除的记录！', 'info');
            }
        },
        removecontent: function(){
            var rows_content = $('#contentweibo').datagrid('getSelections');
            if (rows_content.length > 0) {
                $.messager.confirm('确定操作', '您正在要删除所选的记录吗？', function (flag) {
                    if (flag) {
                        var ids_content = [];
                        for (var i = 0; i < rows_content.length; i ++) {
                            ids_content.push(rows_content[i].id);
                        }
                        $.ajax({
                            type : 'POST',
                            url :   INDEX + '/main_content_del',
                            data : {
                                ids : ids_content.join(','),
                            },
                            beforeSend : function () {
                                $('#contentweibo').datagrid('loading');
                            },
                            success : function (data) {
                                if (data) {
                                    $('#contentweibo').datagrid('loaded');
                                    $('#contentweibo').datagrid('load');
                                    $('#contentweibo').datagrid('unselectAll');
                                    $.messager.show({
                                        title : '提示',
                                        msg : data + '条微博被删除成功！',
                                    });
                                }
                            },
                        });
                    }
                });
            } else {
                $.messager.alert('提示', '请选择要删除的记录！', 'info');
            }
        }
    };

    $('#box').datagrid({
        width : 1000,
        url : INDEX + '/main_user',
        title : '用户列表',
        iconCls : 'icon-search',
        striped : true,
        nowrap : true,
        rownumbers : true,
        fitColumns : true,
        columns : [[
            {
                field : 'id',
                title : '编号',
                sortable : true,
                width : 100,
                checkbox : true,
            },
            {
                field : 'username',
                title : '帐号',
                sortable : true,
                width : 100,
                editor : {
                    type : 'validatebox',
                    options : {
                        required : true,
                    },
                },
            },
            {
                field : 'fans',
                title : '粉丝数',
                sortable : true,
                width : 30,
                editor : {
                    type : 'validatebox',
                    options : {
                        required : true,
                    },
                },
            },
            {
                field : 'focus',
                title : '关注数',
                sortable : true,
                width : 30,
                editor : {
                    type : 'validatebox',
                    options : {
                        required : true,
                    },
                },
            },
            {
                field : 'contentcount',
                title : '微博数',
                sortable : true,
                width : 30,
                editor : {
                    type : 'validatebox',
                    options : {
                        required : true,
                    },
                },
            },
            {
                field : 'email',
                title : '邮件',
                sortable : true,
                width : 100,
                editor : {
                    type : 'validatebox',
                    options : {
                        required : true,
                        validType : 'email',
                    },
                },
            },
            {
                field : 'date',
                title : '注册时间',
                sortable : true,
                width : 100,
                editor : {
                    type : 'datetimebox',
                    options : {
                        required : true,
                    },
                },
            },
            

        ]],
        toolbar : '#tb',
        pagination : true,
        pageSize : 10,
        pageList : [10, 20, 30],
        pageNumber : 1,
        sortName : 'date',
        sortOrder : 'desc',
        onDblClickRow : function (rowIndex, rowData) {

            if (obj.editRow != undefined) {
                $('#box').datagrid('endEdit', obj.editRow);
            }

            if (obj.editRow == undefined) {
                $('#save,#redo').show();
                $('#box').datagrid('beginEdit', rowIndex);
                obj.editRow = rowIndex;
            }

        },
        onAfterEdit : function (rowIndex, rowData, changes) {
            $('#save,#redo').hide();

            var inserted = $('#box').datagrid('getChanges', 'inserted');
            var updated = $('#box').datagrid('getChanges', 'updated');

            var url = info =  '';

            //新增用户
            if (inserted.length > 0) {
                url = INDEX + '/main_user_add';
                info = '新增';
            }

            //修改用户
            if (updated.length > 0) {
                url = INDEX +'/main_user_update';
                info = '修改';
            }

            $.ajax({
                type : 'POST',
                url : url,
                data : {
                    row : rowData,
                },
                beforeSend : function () {
                    $('#box').datagrid('loading');
                },
                success : function (data) {
                    if (data) {
                        $('#box').datagrid('loaded');
                        $('#box').datagrid('load');
                        $('#box').datagrid('unselectAll');
                        $.messager.show({
                            title : '提示',
                            msg : '第'+data + '个用户被' + info + '成功！',
                        });
                        obj.editRow = undefined;
                    }
                },
            });
        },
        onRowContextMenu : function (e, rowIndex, rowData) {
            e.preventDefault();
            $('#menu').menu('show', {
                left : e.pageX,
                top : e.pageY,
            });
        }
    });
    $('#contentweibo').datagrid({
        width : 1000,
        url : INDEX + '/main_content',
        title : '微博列表',
        iconCls : 'icon-search',
        striped : true,
        nowrap : true,
        rownumbers : true,
        fitColumns : true,
        columns : [[
            {
                field : 'id',
                title : '编号',
                sortable : true,
                width : 100,
                checkbox : true,
            },
            
            {
                field : 'username',
                title : '名字',
                sortable : true,
                width : 30,
                editor : {
                    type : 'validatebox',
                    options : {
                        required : true,
                    },
                },
            },
            {
                field : 'content',
                title : '内容',
                sortable : true,
                width : 100,
                editor : {
                    type : 'validatebox',
                    options : {
                        required : true,
                    },
                },
            },
            {
                field : 'position',
                title : '图片',
                sortable : true,
                width : 100,
            },
            //{
                //field : 'repostnum',
                //title : '转发数',
                //sortable : true,
                //width : 100,
            //},
            {
                field : 'date',
                title : '发表时间',
                sortable : true,
                width : 100,
                editor : {
                    type : 'datetimebox',
                    options : {
                        required : true,
                    },
                },
            }
            
            

        ]],
        toolbar : '#tb',
        pagination : true,
        pageSize : 10,
        pageList : [10, 20, 30],
        pageNumber : 1,
        sortName : 'date',
        sortOrder : 'desc',

    });

});













