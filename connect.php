<?php
    $DATABASE_HOST = '';//your hostname here 
    $DATABASE_USER = '';//your db username here 
    $DATABASE_PASS = ''; //your db pass here
    $DATABASE_NAME = '';//your db name here 
    $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    $mail_host = '';//yout gmail host name here
    $mail_port = 123;//Remove 123 and add your mail port
    $mail_id = '';//your mail id here
    $mail_password = '';//your mail app password here

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>