<?php

$login = htmlspecialchars($_POST['login']);
$name = htmlspecialchars($_POST['name']);
$pass = htmlspecialchars($_POST['pass']);

if (mb_strlen($login) < 4 || mb_strlen($login) > 50) {
    echo "Некорректная длина логина";
    exit();
} elseif (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "Некорректная длина имени";
    exit();
} elseif (mb_strlen($pass) < 5 || mb_strlen($pass) > 20) {
    echo "Некорректная длина пароля";
    exit();
}

$pass = md5($pass . "wio8rh2398r");

$mysql = mysqli_connect('localhost', 'root', 'mysql', 'register_bd');
$mysql->query("INSERT INTO `users` (`login`, `name`, `pass`) VALUES ('$login', '$name', '$pass')");
$mysql->close();

header('Location: /index.php');