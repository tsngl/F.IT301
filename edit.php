<?php
require './config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM `student` WHERE `student`.`id` = $id";
    $result = mysqli_query($conn,$query);

    if($result){
        echo $result[0];
    }
    else{
        echo 'Error';
    }
}
else{ 
    header("location: welcome.php");
}