<?php
$ic = $_POST['ic']
$password = $_POST['password']

if(!empty($ic) || !empty($password) ){
    $host = "localhost";
    $dbIC = "root";
    $dbPassword = "";
    $dbname = "kaunseling";

    $conn = new MySqli($host, $dbIC, $dbPassword, $dbname);

    if(empty($ic)){
        header ("Location: index.php?error=IC is required");
        exit();
    }
    else if(empty($password)){
        header("Location: index.php?error=Password is required");
        exit();
    }
    
    $sql = "SELECT * FROM  student WHERE IC_Pelajar='$IC' AND Password='$password'";
    
?>