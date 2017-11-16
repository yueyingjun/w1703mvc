$(function () {
    $('.word81').click(function () {
        $('.word81').css({'background':'#ff605b','color':'#fff'});
        let num=$('.word81>span').html();
        $('.word81>span').html(++num);
    })
    // 点击量实现
     $.ajax({
         url:"index.php?m=index&f=show&a=hit",
         data:{cid:$(".word").attr("cid")},
         type:"post",
         success:function(e){
                if(e=="ok"){
/*
                    $(".notice").css("animation" ,"notice 2s linear forwards");*/
                }

         }
     })

    //关注实现
    $(".guanzhu").click(function(){

         var uid1=$(".word").attr("uid1");
         var uid2=$(".word").attr("uid2");
        $.ajax({
            url:"index.php?m=index&f=guanzhu&a=add",
            data:{uid1,uid2},
            type:"post",
            success:function(e){
               if(e=="err"){
                   location.href="index.php?m=index&f=login";
               }else if(e=="ok"){
                    $(".guanzhu").css("display","none");
                    $(".cancel").css("display","block");
               }

            }
        })
    })


    $(".cancel").click(function(){
        var uid1=$(".word").attr("uid1");
        var uid2=$(".word").attr("uid2");
        $.ajax({
            url:"index.php?m=index&f=guanzhu&a=cancel",
            data:{uid1,uid2},
            type:"post",
            success:function(e){
                if(e=="ok"){
                    $(".guanzhu").css("display","block");
                    $(".cancel").css("display","none");
                }

            }
        })

    })


})