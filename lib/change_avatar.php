<?php
if ($_FILES && $_FILES["avatar-p"]["error"]== UPLOAD_ERR_OK)
{
    $name = "upload/" . $_FILES["avatar-p"]["name"];
    move_uploaded_file($_FILES["avatar-p"]["tmp_name"], $name);
    echo "Файл загружен";
}