$(function(){
    var uid2,uname=$(".word").attr("uname"),state;
   $(".ajaxcon").delegate(".rbtn","click",function(){
        uid2=$(this).attr("uid2");
       state=$(this).attr("idnum");
       $(this).parents(".clist").find(".addmessage").css("display","block");
       if($(".replayform").offset().top>$(window).scrollTop()+$(window).height()){
           $(window).scrollTop($(".replayform").offset().top-$(window).height()/2)
       }
       $(this).parents(".clist").find(".replayform").animate({height:100});


       if($(this).attr("author")){
           $(this).parents(".clist").find("textarea").val("@"+$(this).attr("author")+":");
       }else{
           $(this).parents(".clist").find("textarea").val("");
       }
   })

    $(".ajaxcon").delegate(".cancel1","click",function(){
        $(this).parents(".clist").find(".replayform").animate({height:0});
    })


    /*发送留言
    *      uid1  uid2  conid  con  state
    * */
    $(".sendMessage").click(function(){
        var uid1=$(".word").attr("uid1");
        var uid2=$(".word").attr("uid2");
        var conid=$(".word").attr("cid");
        var mcon=$(".messageCon").val();
        var state=0
        if(mcon!=""){
                $.ajax({
                    url:"index.php?m=index&f=message&a=add",
                    data:{uid1,uid2,conid,mcon,state},
                    type:"post",
                    success:function(e){
                        if(e=="nologin"){
                            location.href="index.php?m=index&f=login"
                        }else{

                            $("<div class='clist'></div>").html(e).prependTo(".commentbox");
                        }
                    }
                })
        }
    })


    /*回复按钮*/

    $(".commentbox").delegate(".replayBtn","click",function(){
          var uid1=$(".word").attr("uid1");
          var conid=$(".word").attr("cid");
          var mcon=$(this).parents(".clist").find("textarea").val();

          console.log({uid1,uid2,conid,mcon,state});

          $.ajax({
              url:"index.php?m=index&f=message&a=add",
              data:{uid1,uid2,conid,mcon,state},
              type:"post",
              success:function(e){
                  if(e=="nologin"){
                      location.href="index.php?m=index&f=login"
                  }else{
                    $("<div class='replaylist'></div>").html(`<div class="replayauthor">
                        ${uname}
                         </div>
                         <div class="replaycon">
                             ${mcon}
                         </div>
                         <div class="replaystste">
                             <div class="replaytime">
                             
</div>
                             <div class="replaybtn">

                                 <button type="button" class="rbtn" author="${uname}" uid2="${uid1}">回复</button>
                             </div>
                         </div>`).prependTo(".replaybox")
                  }
              }
          })
    })

$(".ajaxcon").delegate(".page","click",function(){
    console.log(1);
    $.ajax({
        url:$(this).attr("url"),
        success:function(e){
            console.log(e);
            $(".ajaxcon").html(e);
        }
    })

})


})