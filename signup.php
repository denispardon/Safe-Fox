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
 <!-- sign_up -->
 <div class="sign__up" id="sign_up">
        <div class="sign_up__container">
            <div class="sign_up__body" id="sign_up_body">
                <div class="sign_up__img">
                    <img class="sign_up__logo" src="assets/img/logo.png" alt="">
                    <p>Регистрация аккаунта</p>
                </div>
                <form action="vendor/signup.php" method="post">
                    <input type="text" name="login" placeholder="Введите Логин">
                    <input type="email" name="email"placeholder="Введите Почту">
                    <input type="password" name="pass1" placeholder="Введите пароль">
                    <input type="password" name="pass2" placeholder="Подтвердите пароль">
                    <button type="submit">Регистрация</button>             
                </form>
                
                <div class="sign_up__close" id="sign_up_close">&#10006</div>
            </div>
        </div><!-- ./sign_up_container -->
    </div><!-- ./sign_up -->
    </html>