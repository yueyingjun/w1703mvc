$(function(){
    $('.navi>ul>li').click(function(){
        let i=$(this).index();
        $('.line').css('width',0).eq(i).css('width','130px');
        $('.navi>ul>li').css('color','#666').eq(i).css('color','#111');
        $('.content1').css('display','none').eq(i).css('display','block');
    });

})