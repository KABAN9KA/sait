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
        <h2>Карты</h2>
        <p> а вот хуй тебе а не карты я не нашел всех png блять<br>
            главное есть оверпасс а даста нит!</p>
    </div>


    <div class="maps">
        <?php
        //bd
        //require_once "vhandlog/db.php";

        //select
        //$sql = 'SELECT * FROM maps ORDER BY id DESC LIMIT 7';
        //$query = $pdo->prepare($sql);
        //$query->execute();
        //$arMaps = $query->fetchAll(PDO::FETCH_OBJ);
        //foreach ($arMaps as $el) {
          //  echo ' <div class="map">
            //                    <p>'.$el->name.'</p>
              //                  <img src="'.$el->image.'" alt="dust2" width="200px" height="200px">
                //                <p>Followers: '.$el->folowers.'</p>
                  //          </div>';
        //}
        ?>
    </div>
    <?php

    ?>
</div>

<?php require_once "blocks/footer.php";?>

</body>
</html>