<?php
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    if(strlen($login) < 5){
        echo "Логин должен быть больше 5 символов!";
        exit;
    }
    elseif (strlen($password) < 6) {
        echo "Пароль должен быть больше 6 символов!";
        exit;
    }

    //пароль
    $salt = "fwafo3pawf90p[-_+)fw02fpo2p3pkl2[k5i";
    $password = md5($salt.$password);

    //подключение к бд экспериментальное
    require "db.php";

    //select
    $sql = 'SELECT id FROM users WHERE login = ? AND password = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$login, $password]);

    if($query->rowCount() == 0){
        echo 'такого пользователя нит!';
    }
    else {
//        setcookie('login', $login, time() + 120, "/");
        $_SESSION['login'] = $login;
        header('Location: /user_personal_account.php');
    }
