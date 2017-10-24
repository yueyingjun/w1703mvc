$(function(){
   $(".sendbtn").click(function(){
      var phone=$("input[name=aphone]").val();
      $.ajax({
          url:"index.php?m=admin&f=login&a=sendCode",
          type:"post",
          data:{phonecode:phone},
          success:function (e) {
               if(e){



                  $(".sendbtn").html("发送成功");
               }
          }
      })
   })
})