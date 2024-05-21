<?php
    //получаем через пост данные с регистрации и проверяем
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
    $conf_password = trim(filter_var($_POST['conf_password'], FILTER_SANITIZE_SPECIAL_CHARS));

    $avatar = 'noavatar.png';

    if(strlen($login) < 3){
        echo "Логин должен быть больше 3 символов!";
        exit;
    }
    elseif ((strlen($password) && strlen($conf_password))< 6) {
        echo "Пароль должен быть больше 6 символов!";
        exit;
    }
    elseif ($password !== $conf_password){
        echo 'пароли не совпадают!';
        exit;
    }
    elseif (strlen($email) < 2 && str_contains($email, '@')){
        echo 'email слишком короткий и нет @!';
        exit;
    }
    //пароль
    $salt = "fwafo3pawf90p[-_+)fw02fpo2p3pkl2[k5i";
    $conf_password = md5($salt.$conf_password);

    //подключение к бд экспериментальное
    require "db.php";

    $sq1l = 'SELECT id FROM users WHERE login = ?';
    $query1 = $pdo->prepare($sq1l);
    $query1->execute([$login]);

    if($query1->rowCount() > 0){
        echo "пользователь исть!";
    } else {
       //insert
       $sql = 'INSERT INTO users(login, password, email, avatar) VALUES(?,?,?,?)';
       $query = $pdo->prepare($sql);
        $query->execute([$login, $conf_password, $email, $avatar]);
        $_SESSION['login'] = $login;
         header('Location: /user_personal_account.php');
    }




