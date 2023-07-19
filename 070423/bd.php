<?php
$dbhost = "localhost";
$dbname = "dbit18";
$dbuser = "root";
$dbpassword = "";
//подключение к бд
$link = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
//проверка наличия подключения
if ($link -> connect_errno)
{
    echo "Ошибка при подключении к БД: $link->connect_error";
}
?>