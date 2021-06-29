<?php
    header("conten-type:text/html;charset=utf-8");
    $userName = $_POST['userName'];
    $pwd = $_POST['pwd'];
    if($userName = 'tom' and $pwd = '123'){
        header("location:manage.php");
    }else{
        echo '<script>alert("用户名或密码错误，请重试");location.href="index.html";</script>';
    }
?>