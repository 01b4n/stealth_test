<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mail = $_POST['id'];
$pw = md5($_POST['pw']);

$mysqli = new mysqli("localhost", "stealth", "dimigo123", "st_user");
$sql = "SELECT * FROM member WHERE email = '$mail' AND pw = '$pw'";
$res = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($res);
$name = $row['name_'];

if($row != null)
{
    /*echo ("<script>alert('Hello!');</script>");*/
}

if($row == null)
{
    echo ("<script>alert('Fail to Login');</script>");
    echo("<script>location.replace('../index');</script>");
    exit;
}

session_start();
$_SESSION['name'] = $row['name_'];
$_SESSION['grade']=$row['grade'];
$_SESSION['class']=$row['class'];

echo("<script>location.replace('../index');</script>");
exit;

?>
