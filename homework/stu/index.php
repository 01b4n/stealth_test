<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['name']) == false) {
    echo "<meta http-equiv='refresh' content='0;url=./../index'>";
    exit;
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S T E A L T H</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/image/stealth_logo_symbol_c.ico">
    <style>

        .wrap {
            top: 50%;
            left: 50%;
            text-align: center;
        }

        /* a {
             -webkit-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
             -moz-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
             -ms-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
             -o-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
             transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
             display: block;
             margin: 20px auto;
             max-width: 180px;
             text-decoration: none;
             border-radius: 4px;
             padding: 20px 30px;
         }*/

        a.button {
            color: rgba(255, 255, 255, 255);
            box-shadow: rgba(255, 255, 255, 255) 0 0px 0px 2px inset;
        }

        a.button:hover {
            color: rgba(0, 0, 0, 255);
            box-shadow: rgba(255, 255, 255, 255) 0 0px 0px 40px inset;
        }
        .btn-primary{
            border: none;
        }
        #bu{
            background: #FFFFFF;
            color: #000000;
        }
        #bu:hover{
            background: #333333;
            color: #FFFFFF;
        }
    </style>

    <script>
        function formSubmit(f) {/* 업로드 할 수 있는 파일 확장자를 제한합니다.*/
            var extArray = new Array('hwp', 'xls', 'doc', 'xlsx', 'docx', 'pdf', 'jpg', 'gif', 'png', 'txt', 'ppt', 'pptx', 'html', 'zip', 'php');
            var path = document.getElementById("upfile").value;
            if (path == "") {
                alert("파일을 선택해 주세요.");
                return false;
            }
            var pos = path.indexOf(".");
            if (pos < 0) {
                alert("확장자가 없는파일 입니다.");
                return false;
            }
            var ext = path.slice(path.indexOf(".") + 1).toLowerCase();
            var checkExt = false;
            for (var i = 0; i < extArray.length; i++) {
                if (ext == extArray[i]) {
                    checkExt = true;
                    break;
                }
            }
            if (checkExt == false) {
                alert("업로드 할 수 없는 파일 확장자 입니다.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<h2 id="title" class="text-center"><img src="../assets/image/stealth_logo_full_W.png" alt="" style="width: 30%"></h2>
<h4 id="sub_title">Fly High</h4>
<div class="wrap">
    <button id="bu" class="btn btn-primary btn_style" style="font-family: NanumR_EB; padding: 20px 30px 20px 30px;font-size: 20px" type="button" onclick="location.href = '../admin/';">CHECK PAGE</button>
</div>
<hr style="border: 1px solid rgba(255,255,255,0.58); width: 80%;">

<h3 style="font-family: NanumR_EB; font-size: 35px; text-align: center; color: #FFFFFF; padding-top: 20px;">
    <?php
    echo $_SESSION['grade'];
    echo " - ";
    echo $_SESSION['class'];
    ?>
</h3>
<h2 style="font-family: NanumR_EB;  font-size: 35px; text-align: center; color: #FFFFFF;">
    <?php
    echo $_SESSION['name'];
    ?>
</h2>
<div class="contact-clean">
    <form name="uploadForm" id="uploadForm" method="post" action="../upload" enctype="multipart/form-data"
          onsubmit="return formSubmit(this);">
        <div style="margin-top: -80px;" class="form-group select_style_2">
            <p id="title">제출</p>
            <input class="form-control" type="text" placeholder="제목" name="title" required>

            <input class="form-control" type="file" name="upfile" id="upfile" required>
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn_style" type="submit">SEND</button>
        </div>
        <hr>
        <p style="font-size: 15px; text-align: center;">STEALTH INFRA_PROJECT</p>
        <p style="font-size: 10px; text-align: right; margin-top: -15px; margin-bottom: -30px;">ver_2.0</p>
        <p style="font-size: 10px; text-align: right; margin-top: 30px; margin-bottom: -30px;">Made by zet109</p>
    </form>
    <h3 style="font-family: NanumR_EB; font-size: 35px; text-align: center; color: #FFFFFF; margin-bottom: -10px; margin-top: 30px;">제출 목록</h3>
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
        <tbody>\
        <?php
        $servername = "localhost";
        $username = "stealth";
        $password = "dimigo123";
        $dbname = "st_user";// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $query = "SELECT * FROM files ORDER BY reg_time DESC";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_array($result)) {
            $ori = $row['original_name'];
            if ($row['user_name'] == $_SESSION['name']) {
                ?>
                <tr>
                    <td><?= $row['Order_number'] ?></td>
                    <td><?= $row['grade'] ?></td>
                    <td><?= $row['user_name'] ?></td>
                    <td><?= $row['title_name'] ?></td>
                    <td><a href="../download?files=<?= $row['original_name'] ?>"><?= $row['original_name'] ?></a></td>
                    <td><?= $row['reg_time'] ?></td>
                </tr>
                <?php
            }
        }

        ?>
        <?php
        /*        while ($data = mysqli_fetch_array($result)) {
                    if ($data['stu_name'] == $_SESSION['name']) {
                        echo "<tr onclick=\"go($data[Order_number])\" style=\"cursor: pointer;\">";
                        echo "<th scope='row'>";
                        echo $data['Order_number'];
                        echo "</th>";
                        echo "<th scope='row'>";
                        echo $data['grade'];
                        echo "</th>";
                        echo "<th scope='row'>";
                        echo $data['class'];
                        echo "</th>";
                        echo "<th scope='row'>";
                        $XSS = htmlspecialchars($data['title'], ENT_QUOTES);
                        echo $XSS;
                        echo "</th>";
                        echo "<th scope='row'>";
                        echo $data['stu_name'];
                        echo "</th>";
                        echo "</tr>";
                    }
                } */ ?>
        </tbody>
    </table>
    <div style="margin-top: 40px; border: 1px solid rgba(255,255,255,0)" class="text-center">
        <button class="btn btn-primary btn_style" type="button" onclick="location.href = '../../login/logout'">
            LOGOUT
        </button>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
