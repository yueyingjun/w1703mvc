$(function(){


    $("input[name=imgCode]").focus(function(){

        $(".imgcode").css("display","block");
    })


    $.validator.addMethod("tel", function(value, element) {
        var tel=/^(134|135|136|137)\d{8}$/;
        return tel.test(value) || this.optional(element);
    })

    $.validator.addMethod("ran", function(value, element) {
        var tel=/^[\u4e00-\u9fa5 a-z A-Z][\w \u4e00-\u9fa5]{5,9}$/;
        return tel.test(value) || this.optional(element);
    },"请输入6-10位(可以输中文)")




    $("#form").validate({
        rules: {
            uname: {
                required: true,
                ran:true,
                remote: {
                    url: "index.php?m=index&f=reg&a=select",     //后台处理程序
                    type: "post"            //数据发送方式
                }


            },
            upass1: {
                required: true,
                minlength: 6

            },
            upass2: {
                required: true,
                minlength: 6,
                equalTo: "#pass"

            },
            phone:{
                required: true,
                tel:true
            },
            imgCode:{
                required: true
            }
        },
        messages:{
            uname:{
                required:"用户名必须输入",
                remote:"用户名已存在"
            },
            upass1:{
                required:"密码必须输入",
                minlength:"不能少于六个字符",
            },
            upass2:{
                required:"密码必须输入",
                minlength:"不能少于六个字符",
                equalTo:"两次密码必须一致"
            },
            phone: {
                required: "手机号必填",
                tel:"请输入正确的手机号码"
            },
            imgCode:{
                required: "验证码必填"
            }
        }
    })


})