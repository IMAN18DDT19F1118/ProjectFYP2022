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

$sql = "SELECT * FROM  student WHERE IC_Pelajar='$IC' AND Password='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)== 1) {
    $row = mysqli_fecth_assoc($result);
    if($row['IC_Pelajar'] === $IC && $row['Password'] === $password){
        echo "Logged In!"
        $_SESSION['IC_Pelajar'] = $row['IC_Pelajar'];
        $_SESSION['Nama'] = $row['Nama'];
        $_SESSION['ID'] = $row['ID'];
        header("Location: home.php");
        exit();
    }
    else{
        header("Location: index.php?error=Incorrect IC or Password");
    }
}
else{
    header("Location: index.php");
    exit();
}