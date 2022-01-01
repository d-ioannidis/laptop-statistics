<?php
    $con = mysqli_connect("localhost","root","");
    if(!$con){
        die('Could not Connect to mysql:'.mysqli_error());
    }

    $query = "create database LAPTOPS COLLATE utf8_general_ci";
    mysqli_query($con,$query);
    mysqli_close($con);
?>
