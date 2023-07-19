<?php
session_start();
if(empty($_POST))
    exit;
$login = $_POST["login"];
$password = md5($_POST["password"]);
include 'db.php';
$query = "SELECT * FROM `users` WHERE `login`=$login AND `password`= $password";
$result = $link->query($query) or die ($link->error);
if ($result->num_rows == 0){
    header("location: login.php?error=Неправильный логин или пароль");
}
else {
    $row = $result->fetch_assoc();
    $userid = $row['login'];
    $login = $row['login'];
    $_SESSION['userid'] = $userid;
    $_SESSION['login'] = $login;
    $link->close();
    if($login == 'admin')
        header("location: /admin.php");
    else
        header("location: /lk.php");
}
?>