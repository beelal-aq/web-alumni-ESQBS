<?php

session_start();

   define('SITEURL','http://localhost/web-alumni/'); 
   define('LOCALHOST','localhost');
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_NAME','alumnidb');
   
   $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die (mysqli_error());
   $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());
 
?>