<?php
session_start();
include "db_con.php"

if(isset($_POST['IC']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return data;
    }
}

$IC = validate($_POST['IC']);
$password = validate($_POST['password']);

if(empty($IC)){
    header ("Location: index.php?error=IC is required");
    exit();
}
else if(empty($password)){
    header("Location: index.php?error=Password is required");
    exit();
}

$sql = ""