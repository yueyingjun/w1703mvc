BUI.use(['bui/grid','bui/data'],function(Grid,Data){
    var Grid = Grid,
        Store = Data.Store;


        enumObj = {"1" : "选项一","2" : "选项二","3" : "选项三"},
        columns = [
            {title : '文本',dataIndex :'a',id:1}, //editor中的定义等用于 BUI.Form.Field.Text的定义
            {title : '数字', dataIndex :'b',id:2},
            {title : '日期',dataIndex :'c',id:3},
            {title : '单选',dataIndex : 'd',renderer : Grid.Format.enumRenderer(enumObj),id:4},
            {title : '多选',dataIndex : 'e',renderer : Grid.Format.multipleItemsRenderer(enumObj),id:5},
            {title : '操作',renderer : function(){
                return '<span class="grid-command btn-edit">编辑</span>'
            },id:6}
        ],
        data = [{a:'123',id:1},{a:'cdd',c:'2013-03-13'},{a:'1333',b:2222,d:2,e:'1,2'}];

    var isAddRemote = false,
        editing = new Grid.Plugins.DialogEditing({
            contentId : 'content', //设置隐藏的Dialog内容
            triggerCls : 'btn-edit', //触发显示Dialog的样式
            editor : {
                title : '自定义',
                width : 600,
                listeners:{
                    hide:function() {
                        if(isAddRemote) {
                            var form = this.get("form");
                            console.log(form);
                            form.ajaxSubmit({
                                url: "a.php",
                                type: "post"
                            })
                            console.log(this);
                        }
                        isAddRemote=true;
                    }
                }

            },

        }),
        store = new Store({
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
        var newData = {a : 0};
        editing.add(newData,'a'); //添加记录后，直接编辑
    }
    //删除选中的记录
    function delFunction(){
        var selections = grid.getSelection();
        console.log(selections);
        store.remove(selections);
    }
});