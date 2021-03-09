<?php

ini_set('display_errors',1);

ini_set('display_startup_errors',1);

error_reporting(E_ALL);



$servername = "localhost";

$username = "stealth";

$password = "dimigo123";

$dbname = "st_user";



$conn = new mysqli($servername, $username, $password, $dbname);



$name_=$_POST['name_'];

$grade=$_POST['grade'];

$class=$_POST['class'];

$email=$_POST['email'];

$pw=md5($_POST['pw']);



$sql = "SELECT * FROM member WHERE email = '$email'";

$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_array($result);



if ($data != null)

{

    echo("<script>alert('id is aready exist');</script>");

    echo("<script>location.replace('./../sign_up');</script>");

    exit;

}



$sql = "INSERT INTO member (name_, grade, class, email, pw)

VALUES ('$name_', '$grade','$class','$email', '$pw')";



if ($conn->query($sql) === TRUE) {

    echo ("<script>alert('Sign up successfully');</script>");

    echo ("<script>location.replace('./../index');</script>");

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}



$conn->close();

?>

