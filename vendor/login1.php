<?php
    session_start();   
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $check_user = mysqli_query($db, "SELECT * FROM `users` WHERE `login`= '$login' AND `password` = '$password'");
    if(mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);
        
        $check_verify = mysqli_query($db, "SELECT `email_confirmed` FROM `users` WHERE `login`= '$login' AND `password` = '$password'");
        $checkver = mysqli_fetch_assoc($check_verify);
        if($checkver['email_confirmed'] != 0){
            echo 'Почта не подтверждена';
            exit();
        }
        
        

        $_SESSION['user'] = [
        "id" => $user['id'],
        "email" => $user['email'],
        "login" => $user['login']
        ];
        header('Location: /indexlog.php');
        }else{
            echo 'Не верный логин или пароль';
            header('Location: /index.php')
            ;
            exit();
        }