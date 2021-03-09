<?php
session_start();
$db_conn = new mysqli("localhost", "stealth", "dimigo123", "st_user");




if(isset($_FILES['upfile']) && $_FILES['upfile']['name'] != "") {
    $user_name=$_SESSION['name'];
    $grade=$_SESSION['grade'];
    $file = $_FILES['upfile'];
    $name_orig = $file['name'];
    $title = $_POST['title'];

    $upload_directory = 'data/';

    $ext_str = "hwp,xls,doc,xlsx,docx,pdf,jpg,gif,png,txt,ppt,pptx,html,zip,php";

    $allowed_extensions = explode(',', $ext_str);

    $max_file_size = 5242880;

    $ext = substr($file['name'], strrpos($file['name'], '.') + 1);

    // 확장자 체크

    if(!in_array($ext, $allowed_extensions)) {
        echo "업로드할 수 없는 확장자 입니다.";
    }
    // 파일 크기 체크

    if($file['size'] >= $max_file_size) {
        echo "5MB 까지만 업로드 가능합니다.";
    }

    if(move_uploaded_file($file['tmp_name'], $upload_directory.$name_orig)) {

        $query = "INSERT INTO files (grade,user_name, original_name, title_name, reg_time) VALUES('$grade','$user_name','$name_orig','$title',now())";
        if ($db_conn->query($query) === TRUE) {
            echo ("<script>alert('Upload successfully');</script>");

            echo ("<script>location.replace('./stu/index');</script>");

        } else {

            echo "Error: " . $query . "<br>" . $conn->error;

        }

    }

} else {
    echo ("<script>alert('Upload failed');</script>");

    echo ("<script>location.replace('./stu/index');</script>");
}

mysqli_close($db_conn);

?>

