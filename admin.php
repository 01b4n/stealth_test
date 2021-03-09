<!DOCTYPE html><?php session_start();
if ($_SESSION['name'] != '안정현') {
    echo "<meta http-equiv='refresh' content='0;url=/index'>";
    exit;
} ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S T E A L T H</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="homework/assets/css/styles.min.css">
    <link rel="stylesheet" href="homework/assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/imgs/logo.png.ico">
    <style> @font-face {
            font-family: 'H2GPRM';
            src: url('assets/font/H2GPRM.TTF') format('truetype');
        }</style>
    <script> function delete_() {
            location.href = "delete";
        }

        function reset_() {
            location.href = "reset";
        }</script>
</head>
<body>
<div class="contact-clean">
    <form method="post" action="check_page/upload"><h2 id="title" class="text-center">STEALTH</h2><h4
                id="sub_title">Fly High</h4>
        <div class="text-center">
            <hr>
            <p>DB 초기화</p><input type="button" style="margin-top: -20px;" onclick="delete_()" value="DB RESET">
            <hr>
            <p style="margin-top: 30px">AUTO_INCREMENT 초기화</p><input type="button" style="margin-top: -20px;"
                                                                     onclick="reset_()" value="AUTO_INCREMENT RESET">
        </div>
        <hr>
        <p style="font-size: 15px; text-align: center;">STEALTH INFRA_PROJECT</p>
        <p style="font-size: 10px; text-align: right; margin-top: -15px; margin-bottom: -30px;">ver_2.0</p>
        <p style="font-size: 10px; text-align: right; margin-top: 30px; margin-bottom: -30px;">Made by zet109</p></form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
