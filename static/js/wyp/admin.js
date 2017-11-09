BUI.use(['bui/grid','bui/data'],function(Grid,Data){
    var enumObj={};
    $.ajax({
        url:"index.php?m=admin1&f=admin1&a=showAdms",
        dataType:'json',
        success:function(e){
            for(let i=0;i<e.length;i++){
                enumObj[e[i].lid]=e[i].lname;
            }
        }
    })
    var Grid = Grid,
        Store = Data.Store,
        columns = [
            {title : 'aid',dataIndex :'aid'},
            {title : '姓名',dataIndex :'aname'},
            {title : '性别',dataIndex :'asex'},
            {title : '电话',dataIndex :'aphone'},
            {title : '等级',dataIndex :'alevel',renderer : Grid.Format.multipleItemsRenderer(enumObj)},
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
                            url:'index.php?m=admin1&f=admin1&a=addAdm&type='+editType,
                            type:'post',
                            data:form.serializeToObject(),
                            dataType:'text',
                            success:function (e) {
                                if(e!='edit'){
                                    form.setFieldValue('aid',e);
                                }
                                edtor.accept();
                            }

                        })
                    }
                }


            }
        }),
        store = new Store({
            url:'index.php?m=admin1&f=admin1&a=selectadmin',
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
            data+=a.aid+',';
        });
        data="("+data.slice(0,-1)+")";
        $.ajax({
            url:"index.php?m=admin1&f=admin1&a=deleteAdm",
            type:"post",
            data:{aids:data},
            success:function (e) {
                if(e!='no'){
                    store.remove(selections);
                }else{
                    alert('没有权限');
                    location.href='index.php?m=admin1&f=admin1&a=showAdm';
                }
            }
        })

    }
})

