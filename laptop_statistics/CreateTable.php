<?php
    $con = mysqli_connect("localhost","root","");
    if(!$con){
        die('Could not connect to mysql:'.mysqli_error());
    }

    mysqli_select_db($con,"laptops");
    $query = "CREATE TABLE CONTACTS(
        ID_USER int(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        FIRSTNAME varchar(50) NOT NULL,
        LASTNAME varchar(50) NOT NULL,
        EMAIL varchar(50) NOT NULL,
        TELEPHONE varchar(50) NOT NULL,
        MESSAGE varchar(100) NOT NULL
        )";
        mysqli_query($con,$query);
        mysqli_close($con);

?>