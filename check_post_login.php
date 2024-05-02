<?php
    //получаем через пост данные с регистрации и проверяем
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    if(strlen($login) < 5){
        echo "Логин должен быть больше 5 символов!";
        exit;
    }
    elseif (strlen($password) < 6) {
        echo "Пароль должен быть больше 6 символов!";
        exit;
    }
    elseif (strlen($email) < 2 && str_contains($email, '@')){
        echo 'email слишком короткий и нет @!';
        exit;
    }
    else {
        header('location: /');
    }

    $salt = "fwafo3pawf90p[-_+)fw02fpo2p3pkl2[k5i";
    $password = md5($salt.$password);

    //подключение к бд экспериментальное
    $pdo = new PDO('mysql:hosts=localhost;dbname=sait;', 'root', 'root');
    //insert
    $sql = 'INSERT INTO users(login, password, email) VALUES(?,?,?)';
    $query = $pdo->prepare($sql);
    $query->execute([$login, $password, $email]);


