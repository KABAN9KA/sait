<?php
if($_POST['form']= 'login'){

    $servername = 'localhost';
    $database = 'sait';
    $username = 'root';
    $password = '';

    $mysqli = new mysqli($servername, $username, $password, $database);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $login = $mysqli->real_escape_string($_POST['login']);
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    if($query_result = $mysqli->query("SELECT login FROM users WHERE login='" . $login . "' AND password='" . $password_hash . "'" )) {

        header('location: /index.php');



        $_SESSION['login'] = $login;
        echo 'Вы успешно вошли на сайт';
    }else{
        echo 'Ошибка';
    }

    $mysqli->close();
}