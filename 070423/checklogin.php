<?php
include 'db.php';
if (!empty($_POST)){
    $login = $_POST['login'];
    $query = "SELECT * FROM `users` WHERE `login`='$Login'";
    if($result->num_rows > 0){
        $message = "Пользователь с таким логином существует";
        $response = ['status' => 'error', 'message' => $message];
    }
    else
    $redponse = ['status' => 'ok'];
    echo json_encode($response);
}
?>