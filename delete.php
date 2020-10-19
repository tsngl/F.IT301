<?php
require './config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM `student` WHERE `student`.`id` = $id";
    if(mysqli_query($conn, $query)){
        header("location: welcome.php");
    }
    else{
        echo 'Error';
    }
}
else{ 
    header("location: welcome.php");
}