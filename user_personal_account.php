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
            <p>Здравствуй: <b><?php echo $_COOKIE['login']?></b>!</p>
        </div>

</body>
</html>