<?php

    $sname = "localhost";
    $username = "root";
    $password = "";

    $db_name = "systemkaunselingptss";

    $conn = mysqli_connect( $sname, $username, $password, $db_name);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    echo "Connected successfully";


?>