$(function(){
    $(".navi>ul>li").click(function(){
        let cNum = $(this).index();
        $(".navi>ul>li").css('color','#666');
        $(".navi>ul>li").eq(cNum).css('color','#111');
        $('.line').css({'width':'0'});
        $('.line').eq(cNum).css({'width':'130px'});
        $(".careBottom").css({"display":"none"});
        $(".careBottom").eq(cNum).css({"display":"block"});
    })
    let height=$('.careRight').height();
    let height1=$('.careBottom').height();
    console.log(height1+height)
    $('.care').css({"height":height1+height})
})