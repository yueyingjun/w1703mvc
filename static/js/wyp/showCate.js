var editingId;
function edit(){
    if (editingId != undefined){
        $('#tg').treegrid('select', editingId);
        return;
    }
    var row = $('#tg').treegrid('getSelected');
    if (row){
        editingId = row.id
        $('#tg').treegrid('beginEdit', editingId);
    }
}
function save(){
    if (editingId != undefined){
        var t = $('#tg');
        t.treegrid('endEdit',editingId);
        editingId = undefined;
        var persons = 0;
        var rows = t.treegrid('getChildren');
        for(var i=0; i<rows.length; i++){
            var p = parseInt(rows[i].persons);
            if (!isNaN(p)){
                persons += p;
            }
        }
        var frow = t.treegrid('getFooterRows')[0];
        frow.persons = persons;
        t.treegrid('reloadFooter');
    }
}
$('#tg').treegrid({'onAfterEdit':function (row,change) {
    var obj={};
    obj.cid=editingId;
    for(var i in change){
        obj.filed=i;
        obj.val=change[i];
    }
    console.log(obj);
    $.ajax({
        url:'index.php?m=admin1&f=cate&a=editCate',
        type:'post',
        data:obj,
        success:function (e) {
            if(e=='ok'){
                alert('修改成功');
            }else{
                alert('没有修改');
            }
        }
    });
}});
function cancel(){
    if (editingId != undefined){
        $('#tg').treegrid('cancelEdit', editingId);
        editingId = undefined;
    }
}
function del(){
    var row = $('#tg').treegrid('getSelected');
    if (row){
        editingId = row.id;
    }
    if (editingId != undefined){
        $('#tg').treegrid('remove', editingId);
        editingId = undefined;
    }
}