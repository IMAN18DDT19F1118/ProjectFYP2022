<?php

    $sname = "localhost";
    $IC = "root";
    $password = "";

    $db_name = "systemkaunselingptss";

    $conn = mysqli_connect( $sname, $IC, $password, $db_name);

    if(!$conn){
        echo "Connection Failed";
    }