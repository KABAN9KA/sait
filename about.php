<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Саит</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href= "style.css">
</head>
<body>
<?php require_once "blocks/header.php";?>
<div class="container">
    <div class="nadpis">
        <h1>Карты</h1>
    </div>
    <div class="maps">
        <?php
        //bd
        require_once "lib/db.php";

        //select
        $sql = 'SELECT * FROM maps ORDER BY id';
        $query = $pdo->prepare($sql);
        $query->execute();
        $arMaps = $query->fetchAll(PDO::FETCH_OBJ);
        foreach ($arMaps as $el) {
            echo ' <div class="map">
                                <p>'.$el->name.'</p>
                                <img src="img_maps/'.$el->image.'" alt="dust2" width="150px" height="150px">
                                <p>Followers: '.$el->folowers.'</p>
                            </div>';
        }
        ?>
    </div><br>
    <div class="forum">
        <?php
        if(isset($_SESSION['login'])) {
            $login = $_SESSION['login'];
            echo "<p><b>$login! напиши шонить</b></p><br>";
            echo '<form action="lib/check_message.php" method="post" >
            <textarea class="form-control" name="message" placeholder="введи своё сообщение"></textarea><br>
            <button type="submit" class="btn btn-success">Отправить сообщение</button>
        </form>';
        }
        else {
            echo '<b><a href="entrance.php">Залогинься</a> или <a href="singup.php">зарегиструйся</a> чтобы писать сообщения на этом форуме!</b>';
        }
        ?>
    <p>ооо много сообщенивое:</p>

        <div class="forum_message">
            <?php
            require_once "lib/db.php";

            //select
            $sql = 'SELECT * FROM comments ORDER BY id';
            $query = $pdo->prepare($sql);
            $query->execute();
            $arMaps = $query->fetchAll(PDO::FETCH_OBJ);
            foreach ($arMaps as $el) {
                echo ' <div class="message_f">
                                    <p>'.$el->date.' '.$el->login.': '.$el->message.'</p>
                                </div>';
            }
            ?>
        </div>
    </div>
</div>

<?php require_once "blocks/footer.php";?>

</body>
</html>