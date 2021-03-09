<!DOCTYPE html>
<html>

<?php
session_start();
if (isset($_SESSION['name']) == false) {
    echo "<script>alert('Hmm... Login plz..^^7');</script>";
    echo "<meta http-equiv='refresh' content='0;url=../../index'>";
} else {
    if ($_SESSION['grade'] == 1) {
        echo "<script>alert('You are not 2nd grade!!!!');</script>";
        echo "<meta http-equiv='refresh' content='0;url=../../index'>";
        exit;
    } else {

    }
}

$servername = "localhost";
$username = "stealth";
$password = "dimigo123";
$dbname = "st_user";// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEALTH_CHECK_1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/image/stealth_logo_symbol_c.ico">


    <style>
        @font-face {
            font-family: 'H2GPRM';
            src: url('../assets/font/H2GPRM.TTF') format('truetype');
        }

        body {
            transition: 1s;
            background: url("../assets/image/canvas-1009232_1920.jpg") no-repeat center center fixed;
            /*background: linear-gradient(to top right, #9effbb 60%, #ffdfe5 50%) no-repeat fixed;*/
            background-size: cover;
        }

        body:hover {
            transition: 1s;
            background: url("../assets/image/canvas-1009232_1920_1.jpg") no-repeat center center fixed;
            /*background: linear-gradient(to top right, #9effbb 60%, #ffdfe5 50%) no-repeat fixed;*/
            background-size: cover;

        }

        .grade_link1, .grade_link2, .grade_link3 {
            color: #FFFFFF;
        }

        .grade_link1:hover {
            color: #c6bd1a;
        }

        .grade_link2:hover {
            color: #5fc695;
        }

        .grade_link3:hover {
            color: #6d83dd;
        }


        th {
            transition: 0.1s;
        }

        th:hover {
            transition: 0.1s;
            font-size: 22px;
        }

        .features-boxed .item .box {
            transition: 0.5s;

        }

        .features-boxed .item .box:hover {
            transition: 0.5s;
            transform: rotate(360deg);
            background: #a1a1a1;
        }
        .btn-primary{
            border: none;
        }
        .btn-primary {
            background-color: #4d4d4d !important;
            margin-top: 15px !important;
            color: #fff !important;
            transition: 0.5s !important;
            border: none;
        }

        .btn-primary:hover {
            transition: 0.5s !important;
            background-color: #ffffff !important;
            color: #4d4d4d !important;
            border: none;
        }
    </style>
</head>

<body>
<div class="features-boxed" style="margin-left: 18px;">
    <div class="container">
        <div class="intro">
            <h2 class="text-center"
                style="font-family: H2GPRM; font-size: 80px; font-weight: lighter;color: #ffffff; margin-top: -20px; text-shadow: 5px 5px 5px #000000; margin-top: 20px;">
                <img src="../assets/image/stealth_logo_full_W.png" style="width: 60%" alt=""></h2>
        </div>
        <div class="row justify-content-center features">

            <!--검색 폼-->
            <form action="search" method="get">
                <div class="form-group input-group mb-3" style="width: 500px;">
                    <select class="custom-select" name="catgo" style="width: 20px;">
                        <option value="title_name">제목</option>
                        <option value="user_name">이름</option>
                    </select>
                    <input class="form-control" type="search" name="search" required="required" style="width: 300px;">
                    <div class="input-group-append">
                        <button class="btn">검색</button>
                    </div>
                </div>
            </form>

            <table class="table table-striped table-dark table_">
                <thead>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">학년</th>
                    <th scope="col">이름</th>
                    <th scope="col">제목</th>
                    <th scope="col">파일이름</th>
                    <th scope="col">업로드 날짜</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $servername = "localhost";
                $username = "stealth";
                $password = "dimigo123";
                $dbname = "st_user";// Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                $query = "SELECT * FROM files ORDER BY reg_time DESC";
                $result = mysqli_query($conn, $query);

                $catagory = $_GET['catgo'];
                $search_con = $_GET['search'];

                $query2 = "select * from files where $catagory like '%$search_con%' order by Order_number desc;";
                $result2 = mysqli_query($conn, $query2);


                while ($row = mysqli_fetch_array($result2)) {
                    $ori = $row['original_name'];
                    ?>
                    <tr>
                        <td><?= $row['Order_number'] ?></td>
                        <td><?= $row['grade'] ?></td>
                        <td><?= $row['user_name'] ?></td>
                        <td><?= $row['title_name'] ?></td>
                        <td>
                            <a href="../download?files=<?= $row['original_name'] ?>"><?= $row['original_name'] ?></a>
                        </td>
                        </td>
                        <td><?= $row['reg_time'] ?></td>
                    </tr>
                    <?php
                }

                ?>

                </tbody>
            </table>
            <div style="margin-top: 40px; border: 1px solid rgba(255,255,255,0)" class="text-center">
                <button class="btn btn-primary btn_style" type="button"
                        onclick="location.href = '../admin'">
                    목록으로 가기
                </button>
                <button class="btn btn-primary btn_style" type="button"
                        onclick="location.href = '../../login/logout'">
                    LOGOUT
                </button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>