<?php
    session_start();
    ob_start();
    require_once 'connect.php';

    if ($_GET['hash']) {
    $hash = $_GET['hash'];
    // Получаем id и подтверждено ли Email
    if ($result = mysqli_query($db, "SELECT `id`, `email_confirmed` FROM `users` WHERE `hash`='" . $hash . "'")) {
        while( $row = mysqli_fetch_assoc($result) ) { 
            echo $row['id'] . " " . $row['email_confirmed'];
            // Проверяет получаем ли id и Email подтверждён ли 
            if ($row['email_confirmed'] == 1) {
                // Если всё верно, то делаем подтверждение
                mysqli_query($db, "UPDATE `users` SET `email_confirmed`= 0 WHERE `id`=". $row['id'] );
                
                header('Location: /indexlog.php');
            } else {
                echo "Что то пошло не так1";
                header('Location: /index.php');
            }
        } 
    } else {
        echo "Что то пошло не так2";
    }
} else {
    echo "Что то пошло не так3";
}