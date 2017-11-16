$(function(){

    $("input[name=cquanxian]").change(function(){
       var cquanxian=$(this).val();
       var cid=$("body").attr("cid");
       $.ajax({
           url:"index.php?m=admin&f=con&a=ajax",
           type:"post",
           data:{cquanxian,cid},
           success:function(e){
               if(e=="ok"){
                   alert("修改成功");
               }
           }
       })
    })

    $("input[name=state]").change(function(){
        var state=$(this).val();
        var cid=$("body").attr("cid");
        $.ajax({
            url:"index.php?m=admin&f=con&a=ajax1",
            type:"post",
            data:{state,cid},
            success:function(e){
                if(e=="ok"){
                    alert("修改成功");
                }
            }
        })
    })
})