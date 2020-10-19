<?php
 require('config.php');
 session_start();
$user_check = $_SESSION['login_user'];

 $result=$conn->query("select username from admin where username = '$user_check'");
 if(!isset($result)){
     header("Location: login.php");
 }
 
?>