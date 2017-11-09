$(function(){
    $('.search1').mouseenter(function () {
        $('.search').css({'width':'230px','transition':'all 2s'});
        $('.search2').css({'width':'200px','transition':'all 2s'});
    })
    $('input').blur(function () {
        $('.search').css({'width':'40px','transition':'all 2s'});
        $('.search2').css({'width':'0px','transition':'all 2s'});
    })
    var ele;
    window.onscroll=function(){
        if(document.body.scrollTop){
            ele=document.body;
        }else{
            ele=document.documentElement;
        }
        if(ele.scrollTop>0){
            $('.top').css({'display':'block'});
        }else{
            $('.top').css({'display':'none'});
        }
        $('.top').click(function(){
            ele.scrollTop=0;
        })
    }
})