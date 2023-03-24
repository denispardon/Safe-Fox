<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];


    $check_login = mysqli_query($db, "SELECT `login` FROM `users` WHERE `login` = '$_POST[login]'" );
    $checklog = mysqli_fetch_assoc($check_login);
    if($checklog > 0){
    echo 'Такой логин уже существует';
    die();
    }
    
    $check_email = mysqli_query($db, "SELECT `email` FROM `users` WHERE `email` = '$_POST[email]'");
    $checkmail = mysqli_fetch_assoc($check_email);
    if($checkmail > 0){
        echo 'Аккаунт с такой почтой уже существует';
        die();
    }
    
    if($pass1 != $pass2){
    echo 'Введённые пароли не совпадают';
    die();
    }
    else{
        //connect..
        $pass1 = md5($pass1);
        $hash = md5($login . time());
            // email letter
      
      $headers  = 'MIME-Version: 1.0' . "\r\n";
	  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            
        $to = "To: <$email>\r\n"; 
        
        $subject = "Подтверждение регистрации аккаунта на Безопасный Лиc";
        $file_name="assets/img/xan.jpg";
        
        $msg = "
        <html>
        <body>
        <h2>Здравствуйте, уважаемый $login</h2>
        Нажмите на <a href=\"http://{$_SERVER['SERVER_NAME']}/vendor/confirmed.php?hash=" . $hash . "\">ссылку</a> для подтверждения email\n\n\n\n\n\n
        <p>С уважением, команда Безопасный Лис</p>        </body></html>";
        

        $headers .= "From: no-reply@{$_SERVER['SERVER_NAME']}\r\n";
        
        $_SESSION['user']['login'] = $_POST['login'];
        $check_verify = mysqli_query($db, "SELECT `email_confirmed` FROM `users` WHERE `login`= '$_POST [login]' AND `password` = '$_POST [password]'");
        $checkver = mysqli_fetch_assoc($check_verify);
        

            
    
        
        if (mail($to, $subject, $msg, $headers)) {
            // Если да, то выводит сообщение
            echo 'На ваш email-адрес отправлено сообщение для подтверждения почты!';
            // new account in db
            $res = mysqli_query($db, "INSERT INTO `users` (`login`, `password`, `email`, `hash` ,`email_confirmed`) VALUES ('" . $login . "','" . $pass1 . "','" . $email . "', '" . $hash . "', 1)");
        } else {
            // Если ошибка есть, то выводить её 
            echo $error; 
        }
    }
    ?>