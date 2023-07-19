<?php
if(empty($_SESSION['login'])){
    $items = [
        "index.php" => "Главная",
        "login.php" => "Вход",
        "register.php" => "Регистрация",
        "admin.php" => "Администрирование",
        "lk.php" => "Личный кабинет",
        "logout.php" => "Выход"
    ];
}
    elseif($_SESSION['login'] == 'admin'){
        $items = [
            "index.php" => "Главная",
            "admin.php" => "Администрирование",
            "logout.php" => "Выход"
        ];
    }
else{
    $items = [
        "index.php" => "Главная",
        "lk.php" => "Личный кабинет",
        "logout.php" => "Выход"
    ];
}
    echo "<nav>";
?>