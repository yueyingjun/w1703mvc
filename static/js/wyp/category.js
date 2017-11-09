$(function(){
    $('.navi>ul>li').click(function(){
        let i=$(this).index();
        $('.line').css('width',0).eq(i).css('width','130px');
        $('.navi>ul>li').css('color','#666').eq(i).css('color','#111');
        console.log($('.hot3'))
        $('.hot3').css({'opacity':'0','zIndex':0}).eq(i).css({'opacity':'1','zIndex':1});
    });


})