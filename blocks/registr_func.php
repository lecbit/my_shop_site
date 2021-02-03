<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
    echo "Недопустимая длина логина";
    exit();
}
elseif(mb_strlen($password) < 5 || mb_strlen($password) > 90){
    echo "Недопустимая длина пароля";
    exit();
}

$password = md5($password."grdwerxt322");

$mysql = new mysqli('localhost', 'root', '', 'my_shop_db');
$mysql->query("INSERT INTO `users` (`login`,`password`)
VALUES('$login','$password')");
$mysql->close();
header('Location: /');
?>