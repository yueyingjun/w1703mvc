$(function () {
    $('.word81').click(function () {
        $('.word81').css({'background':'#ff605b','color':'#fff'});
        let num=$('.word81>span').html();
        $('.word81>span').html(++num);
    })
})