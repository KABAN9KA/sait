<?php
    require "db.php";
    unset($_SESSION['login']);
    header("Location: /");