<?php

$login = htmlspecialchars($_POST['login']);
$pass = htmlspecialchars($_POST['pass']);

$pass = md5($pass . "wio8rh2398r");

$mysql = mysqli_connect('localhost', 'root', 'mysql', 'register_bd');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if(count($user) == 0) {
    echo "Некорректный логин или пароль";
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location: /index.php');