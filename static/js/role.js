BUI.use(['bui/grid','bui/data'],function(Grid,Data){
    var Grid = Grid,
        Store = Data.Store,
        enumObj = {"1" : "选项一","2" : "选项二","3" : "选项三"},
        columns = [
            {title : 'id',dataIndex :'lid'}, //editor中的定义等用于 BUI.Form.Field.Text的定义
            {title : '角色名称', dataIndex :'lname'},
            {title : '操作',renderer : function(){
                return '<span class="grid-command btn-edit">编辑</span>'
            }}
        ];

//分页
    if(location.search.indexOf("pages")>-1){
        var pages=location.search.substr(location.search.lastIndexOf("=")+1)
    }else{
        var pages=0;
    }


//依赖注入
    var isAddRemote = false,
        editing = new Grid.Plugins.DialogEditing({
            contentId : 'content', //设置隐藏的Dialog内容
            triggerCls : 'btn-edit', //触发显示Dialog的样式
            editor : {
                title : '自定义',
                width : 600,
              success:function () {
                  var edtor = this,
                  form = edtor.get('form');
                  form.valid();
                  var type=(editing.get("editType"));
                  if(form.isValid()){
                      form.ajaxSubmit({
                        url:"index.php?m=admin&f=member&a=addRole&type="+type,
                          type:"post",
                          data:form.serializeToObject(),
                          dataType:"text",
                          success:function(e){

                                if(e!="edit") {
                                    form.setFieldValue("lid", e);
                                }
                                edtor.accept();
                          }
                      })
                  }
              }
            }
        }),
        store = new Store({
            url : 'index.php?m=admin&f=member&a=selectRole&pages='+pages,
            autoLoad:true,
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



console.log(pages);
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
            data+=a.lid+",";
        })
        data="("+data.slice(0,-1)+")";
        $.ajax({
            url:"index.php?m=admin&f=member&a=delete",
            type:"post",
            data:"lids="+data,
            success:function(e){
                store.remove(selections);
            }
        })



    }

});