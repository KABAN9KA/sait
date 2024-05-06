<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href= "style.css">
</head>
<style>

</style>
<body>
    <?php require_once "blocks/header.php";?>
        <div class="lk">
            <h1>Личный кабинет</h1>
            <p>Здравствуй: <b><?php echo $_SESSION['login']?>!</b></p>
            <form action="vhandlog/changepass.php" method="post">
                <label> Старый пароль:</label> <input class="input-container" type="password" id="password-input" name="password_old" placeholder="введите старый пароль"><br>
                <label> Новый пароль:</label> <input class="input-container" type="password" id="password-input" name="password_new" placeholder="введите новый пароль"><br>
                <label> Повторите пароль:</label> <input class="input-container" type="password" id="password-input" name="password_confirm" placeholder="введите новый еще раз пароль"><br>
                <button type="submit" class="btn btn-success">Смненить пароль</button>
            </form>
            <a style="color: red;" href="vhandlog/logout.php">Выйти</a>
        </div>
    <!-- хрень для загрузки аватарки-->
        <input type="file">
    <?php require_once "blocks/footer.php";?>
</body>
</html>