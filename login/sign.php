<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册页面</title>
    <link rel="stylesheet" href="../css/sign.css">
    <link rel="stylesheet" href="../css/public.css">
</head>
<body>
<div class="head">
    <div class="prev">
        <a href="login.php">&lt;</a>
        <b><a href="login.php">返回</a></b>
    </div>
    注册账号</div>
<form action="checksign.php" method="post">
    <ul>
<!--     可以加限制 required pattern="[a-zA-Z0-9]{6,8}"-->
        <li><p>账号：</p><input type="text" placeholder="请输入账号" name="user" id="user" class="required"></li>
        <li><p>密码：</p><input type="password" placeholder="请输入密码" name="pass" id="pass1" class="required"></li>
        <li><p>确认密码：</p><input type="password" placeholder="请确认密码" name="pass2" id="pass2" class="required"></li>
        <div><input type="submit" value="注册" id="btn"></div>
        <span>已有账号，请<a href="login.php">登录</a></span>
    </ul>
</form>
<!--表单验证-->
<!--html 通过自身的属性完成验证-->
<!--js-->
<!--用插件 注册按钮改成submit-->
<script src="jquery-3.3.1.js"></script>
<script src="jquery.validate.js"></script>
<script>
    $.validator.addMethod("format",function(value){
        let reg=/[a-zA-Z0-9]{6,8}/;
        return reg.test(value);
    },"格式不符合要求！")
$("form").validate({
    rules:{
        user:{
            format:true,
            // 必须输入的字段
            required:true,
            // 使用ajax方法调用php文件验证输入值
            remote:"checkrepeat.php"
        },
        pass:{
            format:true,
            required:true
        },
        pass2:{
            format:true,
            required:true,
            // 输入值必须和xx相同
            equalTo:"#pass1"
        }
    },
    messages:{
        user:{
            required:"*请输入账号！",
            remote:"*账号已经存在"
        },
        pass:{
            required:"*请输入密码！",
        },
        pass2:{
            required:"*请确认密码！",
            equalTo:"*请保持两次输入一致"
        }
    }
})
</script>
<!--自己写代码  注册按钮改成button-->
<!--<script>-->
<!--    let user=document.querySelector("#user");-->
<!--    let pass1=document.querySelector("#pass1");-->
<!--    let pass2=document.querySelector("#pass2");-->
<!--    let btn=document.querySelector("#btn");-->
<!--    let form=document.forms[0];-->
<!--    let flag1=false;-->
<!--    let flag2=false;-->
<!--    let flag3=false;-->
<!--    user.onchange=function(){-->
<!--        let val=this.value;-->
<!--        let reg=/^[a-zA-Z0-9]{6,8}$/;-->
<!--        if(!reg.test(val)){-->
<!--            alert("格式不正确！！！");-->
<!--            return;-->
<!--        }-->
<!--        let xhr=new XMLHttpRequest();-->
<!--        xhr.open("get","checkrepeat.php?user="+val);-->
<!--        xhr.send();-->
<!--        xhr.onload=function(){-->
<!--            let r=xhr.response;-->
<!--            if(r==="1"){-->
<!--                flag1=true;-->
<!--            }-->
<!--            else{-->
<!--                alert("账号已经注册过");-->
<!--                flag1=false;-->
<!--            }-->
<!--        }-->
<!--    }-->
<!--    pass1.onchange=function(){-->
<!--        let val=this.value;-->
<!--        let reg=/^[a-zA-Z0-9]{6,8}$/;-->
<!--        if(reg.test(val)){-->
<!--            flag2=true;-->
<!--        }-->
<!--        else{-->
<!--            alert("格式错误")-->
<!--            flag2=false;-->
<!--        }-->
<!--        flag3=false;-->
<!--    }-->
<!--    pass2.onchange=function() {-->
<!--        let val = this.value;-->
<!--        if(val===pass1.value){-->
<!--            flag3=true;-->
<!--        }-->
<!--        else{-->
<!--            alert("两次输入不一致")-->
<!--            flag2=false;-->
<!--        }-->
<!--    }-->
<!--    btn.onclick=function(){-->
<!--        if(flag1===false){-->
<!--            alert("输入账号有误");-->
<!--            return;-->
<!--        }-->
<!--        if(flag2===false||flag3===false) {-->
<!--            alert("输入密码有误");-->
<!--            return;-->
<!--        }-->
<!--            form.submit();-->
<!--    }-->
<!--</script>-->

</body>
</html>