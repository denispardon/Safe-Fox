<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Безопасный Лис</title>
</head>
   <!-- sign_in -->
    <div class="sign__in" id="sign_in">
        <div class="sign_in__container">
            <div class="sign_in__body" id="sign_in_body">
                <div class="sign_in__img">
                    <img class="sign_in__logo" src="assets/img/logo.png" alt="">
                    <p>Вход в аккаунт</p>
                </div>
                <form action="vendor/login1.php" method="post">
                    <input type="text" name="login" placeholder="Введите Логин">
                    <input type="password" name="password" placeholder="Введите Пароль">
                    <button type="submit" class="login_button">Вход</button>
                </form>
                <div class="sign_in__close" id="sign_in_close">&#10006</div>
                
            </div>   
        </div><!-- ./sign_in_container -->
    </div><!-- ./sign_in -->
</html>