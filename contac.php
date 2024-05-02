<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Повторение</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once "blocks/header.php";?>
    <div class="container">
     <h1>Контакты</h1>
        <form action="check.php" method="post">
            <input type="text" name="username" value="<?=$_SESSION['sUser_name']?>" placeholder="Введите имя ничего страшного" class="form-control">
            <div class="text-danger"> <?=$_SESSION['error_username']?> </div><br>
            <input type="email" name="email" value="<?=$_SESSION['sEmail']?>" placeholder="Введите email ничего страшного" class="form-control">
            <div class="text-danger"><?=$_SESSION['error_email']?></div><br>
            <input type="text" name="subject" value="<?=$_SESSION['sSubject']?>" placeholder="Введите тему сообщения" class="form-control">
            <div class="text-danger"><?=$_SESSION['error_subject']?></div><br>
            <textarea name="message" <?=$_SESSION['message']?> placeholder="Введите ваше сообщение" class="form-control"></textarea>
            <div class="text-danger"><?=$_SESSION['error_message']?></div><br>
            <button type="submit" class="btn btn-success">Оправить</button><br>
        </form>
     </div>
<?php

?>

 <footer> Вск права защищены &copy; 2055</footer>
</body>
</html>

