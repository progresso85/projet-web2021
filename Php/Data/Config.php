<?php

    $name= "localhost";
    $unmae= "root";
    $password= "";

    $db_name = "Forum";

    $conn = mysqli_connect($name, $unmae, $password, $db_name);

    if(!$conn){
        echo "Connection failed!";
    }

?>