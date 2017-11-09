
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



$('#tg').treegrid({'onAfterEdit': function(a,b){

    var obj={};
    obj.cid=editingId;
    for(var i in b){
        obj.field=i;
        obj.val=b[i];
    }

    $.ajax({
        url:"index.php?m=admin&f=cat&a=edit",
        data:obj,
        type:"post",
        success:function(e){
            if(e=="ok"){
                alert("成功");


            }else{
               alert("没有更新");

            }


        }
    })


}});


function save(){

    if (editingId != undefined){
        var t = $('#tg');

       t.treegrid('endEdit', editingId);

        editingId = undefined;

    }
}
function cancel(){
    if (editingId != undefined){
        $('#tg').treegrid('cancelEdit', editingId);
        editingId = undefined;

    }
}

function del(){

    var row = $('#tg').treegrid('getSelected');
    if (row){
        editingId = row.id
    }


    if (editingId != undefined){
        $('#tg').treegrid('remove', editingId);


        $.ajax({
            url:"index.php?m=admin&f=cat&a=del",
            data:{cid:editingId},
            type:"post",
            success:function(e){
                if(e=="ok"){
                    alert("成功");


                }else{
                    alert("没有更新");

                }
                editingId = undefined;

            }
        })



    }




    var t=$("#tg");
    var rows = t.treegrid('getChildren');

    var frow = t.treegrid('getFooterRows')[0];
    frow.cinfo = rows.length-1;
    t.treegrid('reloadFooter');
}