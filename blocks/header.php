<?php session_start(); ?>
<header>
    <div class="header">
        <div class="header__container">
            <nav>
                <div class="header__container__menu">
                    <ul class="navbar_menu1">
                        <img src="unnamed.jpg" width="84px" height="67px" alt="тут логотип">
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="contac.php">Контакты</a></li>
                        <li><a href="about.php">Все карты</a></li>

                        <?php
                       // unset($_COOKIE['login']);
                        if(isset($_SESSION['login'])) {
                                echo '<li><a href="user_personal_account.php">Личный кабинет</a></li>';
                            }
                            else {
                                echo '<li><a href="singup.php">Регистрация</a></li>
                                      <li><a href="entrance.php">Вход</a></li>';
                            }

                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>