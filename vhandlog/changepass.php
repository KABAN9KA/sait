<?php
    require "db.php";
    $password = trim(filter_var($_POST['password_old'], FILTER_SANITIZE_SPECIAL_CHARS));
    $new_pass = trim(filter_var($_POST['password_new'], FILTER_SANITIZE_SPECIAL_CHARS));
    $conf_pass = trim(filter_var($_POST['password_confirm'], FILTER_SANITIZE_SPECIAL_CHARS));

    if($new_pass !== $conf_pass) {
        echo 'Пароли не совпадают<br>';
    }
    elseif (strlen($new_pass) < 6) {
        echo "Пароль должен быть больше 6 символов!";
        exit;
    }

    $salt = "fwafo3pawf90p[-_+)fw02fpo2p3pkl2[k5i";
    $new_pass = md5($salt.$new_pass);

//    тут над дописать обновление пароля
    $sql = 'UPDATE id FROM users WHERE login = ? AND password = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$new_pass]);


//    echo "$password.<br>.$new_pass.<br>.$conf_pass";