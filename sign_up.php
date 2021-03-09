<?php
/*ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$conn = new mysqli("localhost", "ajhrc08070", "xhdka2256", "ajhrc08070");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$mail=$_POST['email'];
$pw=$_POST['pw'];
$serial=$_POST['grade'];
$name=$_POST['name_'];

$sql = "INSERT INTO account (email, password, serial, name)
VALUES ('$mail', '$pw','$serial', '$name')";

if ($conn->query($sql) === TRUE) {
    echo ("<script>alert('성공적으로 가입되었습니다');</script>");
    echo ("<script>location.replace('../index.php');</script>");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>S T E A L T H</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel|Lora" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/stealth_logo_symbol_c.ico">


    <style>
        a{
            color: #FFFFFF;
        }
        a:hover {
            color: #7478fa;
        }
        #sub_title{
            margin-top: -75px;
            color: #FFFFFF;
            font-family: 'Kaushan Script', cursive; text-align: center;
            text-shadow: 2px 2px 2px #737373;
            font-size: 30px;
        }
        body {
            transition: 1s;
            background: url("homework/assets/image/fractal-art-3206739_1.jpg") no-repeat center center fixed;
            /*background: linear-gradient(to top right, #9effbb 60%, #ffdfe5 50%) no-repeat fixed;*/
            background-size: cover;
        }

        body:hover {
            transition: 2s;
            background: url("homework/assets/image/fractal-art-3206739.jpg") no-repeat center center fixed;
            /*background: linear-gradient(to top right, #9effbb 60%, #ffdfe5 50%) no-repeat fixed;*/
            background-size: cover;

        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
</head>

<body>
<div class="login-page">
    <div class="form">
        <p id="logo">
            <img src="homework/assets/image/stealth_logo_full_W.png" style="width: 100%" alt="">
        </p>
        <h4 id="sub_title">Fly High</h4>
        <p id="login" style="font-family: NanumR_B, sans-serif; font-size: 30px; font-weight: bold; padding-bottom: 10px; padding-top: 40px">
            REGISTER
        </p>
        <hr style="border: 2px solid #FFFFFF; border-radius: 25px; padding-top: 3px">

        <form name="inputed" method="post" action="login/sign_up">
            <input style="margin-top: 35px; font-family: NanumR_B;" type="text" placeholder="Name //ex)안정현" name="name_" autocomplete="off" autofocus
                   required>
            <input style="font-family: NanumR_B" type="text" placeholder="Grade //ex)2" name="grade" autocomplete="off" required>
            <input style="font-family: NanumR_B" type="text" placeholder="Class //ex)6" name="class" autocomplete="off" required>
            <input style="font-family: NanumR_B" type="email" placeholder="E-mail" name="email" autocomplete="off" required>
            <input style="font-family: NanumR_B" type="password" placeholder="Password" name="pw" autocomplete="off" required>
            <button style="margin-top: 30px; font-size: 20px; font-family: NanumR_B;" onclick="submited(1)">Register</button>
        </form>
        <a style=" font-size: 10px;" href="index">Do you want login?</a>
        <hr>
        <p style="color: #FFFFFF; font-size: 20px;">STEALTH INFRA_PROJECT</p>
        <!--
        <p style="color: #FFFFFF">아직 기능이 완성 되지않았으니 여기로 가세여</p>
        <a href="/homework/index.php">숙제 제출 사이트</a>
      -->
    </div>

</div>
</body>

</html>
