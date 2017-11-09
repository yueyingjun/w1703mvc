BUI.use(['bui/grid','bui/data'],function(Grid,Data){
    var Grid = Grid,
        Store = Data.Store,
        enumObj = {"1" : "增加","2" : "删除","3" : "修改","4" : "查看"},
        columns = [
            {title : 'lid',dataIndex :'lid'},
            {title : '角色名称',dataIndex :'lname'},
            {title : '内容权限',dataIndex : 'connum',renderer : Grid.Format.multipleItemsRenderer(enumObj)},
            {title : '留言权限',dataIndex : 'messagenum',renderer : Grid.Format.multipleItemsRenderer(enumObj)},
            {title : '管理员权限',dataIndex : 'adminnum',renderer : Grid.Format.multipleItemsRenderer(enumObj)},
            {title : '角色权限',dataIndex : 'rolenum',renderer : Grid.Format.multipleItemsRenderer(enumObj)},
            {title : '操作',renderer : function(){
                return '<span class="grid-command btn-edit">编辑</span>'
            }}
        ];

    var isAddRemote = false,
        editing = new Grid.Plugins.DialogEditing({
            contentId : 'content', //设置隐藏的Dialog内容
            triggerCls : 'btn-edit', //触发显示Dialog的样式
            editor : {
                title : '自定义',
                width : 600,
                success:function () {
                    var edtor = this,
                        form = edtor.get('form'),
                        editType = editing.get('editType');
                    form.valid();
                    if(form.isValid()){
                        form.ajaxSubmit({
                            url:'index.php?m=admin1&f=admin1&a=addlevel&type='+editType,
                            type:'post',
                            data:form.serializeToObject(),
                            dataType:'text',
                            success:function (e) {
                                if(e!='edit'){
                                   form.setFieldValue('lid',e);
                                   edtor.accept();
                                }else{
                                    form.setFieldValue('lid',e);
                                }
                            }

                        })
                    }
                }


            }
        }),
        store = new Store({
            url:'index.php?m=admin1&f=admin1&a=selectlevel',
            autoLoad:true
        }),
        grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            width : 700,
            forceFit : true,
            tbar:{ //添加、删除
                items : [{
                    btnCls : 'button button-small',
                    text : '<i class="icon-plus"></i>添加',
                    listeners : {
                        'click' : addFunction
                    }
                },
                    {
                        btnCls : 'button button-small',
                        text : '<i class="icon-remove"></i>删除',
                        listeners : {
                            'click' : delFunction
                        }
                    }]
            },
            plugins : [editing,Grid.Plugins.CheckSelection],
            store : store
        });

    grid.render();

    //添加记录
    function addFunction(){
        var newData = {b : 0};
        editing.add(newData,'a'); //添加记录后，直接编辑
    }
    //删除选中的记录
    function delFunction(){
        var selections = grid.getSelection();
        var data="";
        selections.map(function(a){
            data+=a.lid+',';
        });
        data="("+data.slice(0,-1)+")";
        $.ajax({
            url:"index.php?m=admin1&f=admin1&a=delete",
            type:"post",
            data:{lids:data},
            success:function (e) {
                if(e!='no'){
                    store.remove(selections);
                }else{
                    alert('没有权限');
                    location.href='index.php?m=admin1&f=admin1&a=showlevel';
                }
            }
        })

    }
});
