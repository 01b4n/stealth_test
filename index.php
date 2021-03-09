<!DOCTYPE html>

<?php
session_start();
if (isset($_SESSION['name'])) {
    if ($_SESSION['grade'] == 1) {
        echo "<meta http-equiv='refresh' content='0;url=./homework/stu/index'>";
        exit;
    }else {
        echo "<meta http-equiv='refresh' content='0;url=./homework/stu/index'>";
        exit;
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>S T E A L T H</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel|Lora" rel="stylesheet">
    <link rel="shortcut icon" href="assets/imgs/logo.png.ico">

    <!--favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/stealth_logo_symbol_c.ico">

    <style>
        a {
            color: #FFFFFF;
        }

        a:hover {
            color: #7478fa;
        }

        #sub_title {
            margin-top: -75px;
            color: #FFFFFF;
            font-family: 'Kaushan Script', cursive;
            text-align: center;
            text-shadow: 2px 2px 2px #737373;
            font-size: 25px;
        }body {
             transition: 1s;
             background: url("homework/assets/image/plane-223366_1920.jpg") no-repeat center center fixed;
             /*background: linear-gradient(to top right, #9effbb 60%, #ffdfe5 50%) no-repeat fixed;*/
             background-size: cover;
         }

        body:hover {
            transition: 2s;
            background: url("homework/assets/image/plane-223366_1920_1.jpg") no-repeat center center fixed;
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
        <p id="login"
           style="font-family: 'NanumR_R', sans-serif; font-size: 30px; font-weight: bold; padding-bottom: 10px; padding-top: 40px">
            LOGIN
        </p>
        <hr style="border: 2px solid #FFFFFF; border-radius: 25px; padding-top: 3px">

        <form name="inputed" method="post" action="login/login">
            <input style="margin-top: 35px; font-family: NanumR_B" type="email" placeholder="E-mail" name="id" autocomplete="off" autofocus
                   required>
            <input style="font-family: NanumR_B" type="password" placeholder="password" name="pw" autocomplete="off" required>
            <button style="margin-top: 30px; font-family: NanumR_B; font-size: 20px" onclick="submited(1)">login</button>
        </form>
        <a style=" font-size: 10px;" href="sign_up">Do you want register?</a>
        <hr>
    </div>

</div>
</body>

</html>
