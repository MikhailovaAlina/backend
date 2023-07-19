<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/main.js" defer></script>
</head>
<body>
    <?php
    include 'nav.php';
    nav(1);
    ?>
    <div class="register">
        <form action="regisraction.php" class="form" method="POST" id="regform>
        <!-- рисуем поля -->
            <input type="text" placeholder="ФИО" required id="fio" class="validate">
            <input type="text" placeholder="Логин" name="login" required class="validate">
            <input type="email" placeholder="Эл.почта" name="email" required class="validate">
            <input type="password" placeholder="Пароль" name="password" required class="validate" id="password">
            <input type="password" placeholder="Повтор пароля" name="confirm" required class="validate" id="confirm">
            <label><input type="checkbox">Согласие на обработку ПД </label>
            <button>Зарегестрировать</button>
            <p id="error" class="error"></p>
        </form>
    </div>
</body>
</html>