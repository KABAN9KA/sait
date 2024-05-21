<?php
require 'db.php';

$message =  htmlspecialchars(trim($_POST['message']));
$tek_date = date("d.m.Y H:i:s");

if(strlen($message) <= 3) {
        echo 'Длина собоощения маловата!';
    }else {
        if(isset($_SESSION['login'])) {
            $login = $_SESSION['login'];
            //insert
            $sql = 'INSERT INTO comments(login, message, date) VALUES(?,?,?)';
            $query = $pdo->prepare($sql);
            $query->execute([$login, $message, $tek_date]);
            header('Location: /about.php');
        }
        else {
            echo 'Как пользователь не залогинен ошбика!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!';
        }
    }
