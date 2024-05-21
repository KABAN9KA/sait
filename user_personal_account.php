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
          <p>Здравствуй: <b><?php echo $_SESSION['login']?></b></p>
            <form class="lk_avatar">
           <img src="uploads/noavatar.png" alt="avatar">
                <form class="lk_upload" method="post" enctype="multipart/form-data">
                    <label>смена аватара:</label> <input type="file" name="avatar-p" size="10">
                    <input type="submit" class="btn btn-success" value="Загрузить"/>
                </form>

            <form action="lib/changepass.php" class="lk_change" method="post">
               <label> Старый пароль:</label> <input class="input-container" type="password" id="password-input" name="password_old" placeholder="введите старый пароль"><br>
               <label> Новый пароль:</label> <input class="input-container" type="password" id="password-input" name="password_new" placeholder="введите новый пароль"><br>
                <label> Повторите пароль:</label> <input class="input-container" type="password" id="password-input" name="password_confirm" placeholder="введите новый еще раз пароль"><br>
               <button type="submit" class="btn btn-success">Смненить пароль</button>
            </form>
          <a style="color: red;" href="lib/logout.php">Выйти</a>
       </div>
    <?php
    if ($_FILES && $_FILES["avatar-p"]["error"]== UPLOAD_ERR_OK)
    {
        $name = "uploads/" . $_FILES["avatar-p"]["name"];
        move_uploaded_file($_FILES["avatar-p"]["tmp_name"], $name);
        echo "Файл загружен";
    }
    ?>
    <?php require_once "blocks/footer.php";?>
</body>
</html>