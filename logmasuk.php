<?php
session_start();
include("db_conn.php");
include("func.php");

?>
<style>
    body{
  margin: 0;
  padding: 0;
  background: url(gambar/wall.jpg);
  background-size: cover;
  background-position:top;
  font-family:sans-serif;
}

.form{
  font-family: "Roboto",sans-serif;
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  opacity: 99%;
  max-width: 260px;
  margin: 200px auto 100px;
  padding: 10px 45px 30px 45px;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  border-radius: 10px;
}

.form p{
  font-size: 15px;
  padding: 1px;
  text-align: center;
}
.form input{
  outline: 0;
  border-radius: 10px;
  background: #F2F2F2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form input:hover{
  background-color: #D3F8F9;
  transition: all 1s ease 0s;
}
.form input:focus{
  background-color: #D3F8F9;
  transition: all 1s ease 0s;
}
.form button{
  text-transform: uppercase ;
  outline: 0;
  border-radius: 10px;
  background: #1ADBE5;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  cursor: pointer;
}
.form button:hover, .form button:active, .form button:focus{
  background-color: #06C5CF ;
  transition: all 1s ease 0s;
}

.form .message{
  margin: 15px 0 0;
  color: #B3B3B3;
  font-size: 12px;
}
.form  .message{
  color: #06C5CF;
  text-decoration: none ;
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Masuk Sistem Kaunseling PTSS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <h1 class="h3 mb-0 text-gray-800" style="Text-align: center,">Unit Pengurusan Psikologi Politeknik Tuanku Syed Sirajuddin</h1>
        </nav>
    </div>

    <div class="form">
        <p>Log Masuk</p>
        <form method="post" action="login.php">
            <input type="text" name="ic" placeholder="Sila Masukan IC Anda" required>
            <input type="password" name="password" placeholder="Kata Laluan Anda" required>
            <button>Login</button>
        </form>
    </div>
</body>

</html>