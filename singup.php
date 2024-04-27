<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация повторения</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href= "style.css">
</head>
 <style>

 </style>
<body>

    <div class="container1">
        <h1> Регистрация</h1>
        <form action="" method="post">
            <label class="label-container">Логин:</label> <input class="input-container" type="text" name="login" placeholder="введите логин" ><br>
            <label class="label-container">Эл.Почта:</label> <input class="input-container" type="email" name="email" placeholder="введите email" ><br>
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
            <button type="submit" class="btn btn-success">Зарегестрироваться</button>
            <button onclick="history.back();" class="btn btn-danger">Назад на главную</button>
        </form>

    </div>
</body>
</html>

