<?php
date_default_timezone_set('Asia/Colombo');
$message = $_POST['message'];
$sender = $_POST['sender'];
$reciever = $_POST['reciever'];
$now = date("Y-m-d H:i:s  a");

$con = new mysqli("localhost:3308", "root", "", "mydb01");

$query = "insert into chat values (null, '$message', '$sender','$reciever', '$now')";
$con->query($query);
$con->close();          
?>