<?php

session_start();

echo 'this is page 2<br />';

if($_SESSION['username']=="16222555"&&$_SESSION['pw']=="123456"){
    $_SESSION['userID']=$_SESSION['username'];
    echo "Your username is".$_SESSION['username']."</br>";
    echo "Your password is".$_SESSION['pw']."</br>";
    echo "<a href='c.php'>登陆成功！点击此处进入</a>"."</br>";


}
else echo "输入信息有误！"
?>