<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход повторение</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href= "css/stylevh.css">
</head>
<body>
    <div class="header">
        <div class="header__container">
            <nav>
                <div class="header__container__menu">
                    <ul class="navbar_menu1">
                        <img src="unnamed.jpg" width="84px" height="67px" alt="тут логотип">
                        <li><a href="contac.php">Контакты</a></li>
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="about.php">Не  очем</a></li>
                        <li><a href="singup.php">Регистрация</a></li>
                        <li><a href="entrance.php">Вход</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
<div class="container1">
    <h1> Вход</h1>
    <form action="" method="post">
        <label class="label-container">Логин:</label> <input class="input-container" type="text" name="login" placeholder="введите логин" ><br>
        <label class="label-container">пароль:</label> <input class="input-container" type="password" id="password-input" name="password" placeholder="введите пароль"><br>
        <label class="label1">Показать пароль</label><input type="checkbox" class="password-checkbox">
        <input class="hidden" type = "hidden" name = "form" value = "registration"><br>
        <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $('body').on('click', '.password-checkbox', function()
            {
                if ($(this).is(':checked'))
                {
                    $('#password-input').attr('type', 'text');
                } else
                {
                    $('#password-input').attr('type', 'password');
                }
            });
        </script>
        <button type="submit" class="btn btn-success">Войти</button>
        <!--<button onclick="history.back();" class="btn btn-danger">Назад на главную</button>-->
    </form>
</div>
</body>
</html>