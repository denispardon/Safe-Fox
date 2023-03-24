<?php
define( 'DB_HOST', 'localhost');
define( 'DB_USER', 'host1753279_3601');
define( 'DB_PASS', '6IDgw9ju');
define( 'DB_NAME', 'host1753279');


$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME );

if( !$db ){
  echo 'Проблема с подключением к базе...';
  die;
}