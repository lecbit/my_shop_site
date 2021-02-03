<?php
if(isset($_COOKIE['user']) == 'admin'){
    setcookie('user', $user['login'], time() - 3600, "/");
}

header('Location: /');
?>