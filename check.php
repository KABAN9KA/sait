<?php
     session_start();

     unset($_SESSION['sUser_name']);
     unset($_SESSION['sEmail']);
     unset($_SESSION['sSubject']);
     unset($_SESSION['message']);

     unset($_SESSION['error_username']);
     unset($_SESSION['error_email']);
     unset($_SESSION['error_message']);
     unset($_SESSION['error_subject']);

     function redirect(){
         header('Location: contac.php');
         exit();
     }

     $sUser_name = htmlspecialchars(trim($_POST['username']));
     $sEmail = htmlspecialchars(trim($_POST['email']));
     $sSubject = htmlspecialchars(trim($_POST['subject']));
     $message = htmlspecialchars(trim($_POST['message']));

     $_SESSION['sUser_name'] = $sUser_name;
     $_SESSION['sEmail'] = $sEmail;
     $_SESSION['sSubject'] = $sSubject;
     $_SESSION['message'] = $message;

     if(strlen($sUser_name) <= 3) {
         $_SESSION['error_username'] = "Введите имя настоящее";
         redirect();
     }
     else if(strlen($sEmail) <= 5 || strpos($sEmail,"@" ) == false ){
         $_SESSION['error_email'] = "Введите корректный email";
         redirect();
     }
     else if(strlen($sSubject) <= 3) {
         $_SESSION['error_subject'] = "Тема сообщения не менее 3 символов";
         redirect();
     }
     else if(strlen($message) <= 15) {
         $_SESSION['error_message'] = "Длина сообщения не менее 15 символов";
         redirect();
     }
     else {
         redirect();
     }

