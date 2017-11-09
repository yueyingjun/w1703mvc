$(function () {
    var obj=new upload();
    obj.createView({parent:document.querySelector('.parent')});
    obj.up('index.php?m=admin&f=index&a=up',function(e){
        $('.photo').val(e);
    })
})