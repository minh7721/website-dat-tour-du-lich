<?php
session_start();
include('./database/db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './sendEmail/Exception.php';
require './sendEmail/PHPMailer.php';
require './sendEmail/SMTP.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <?php
    if (isset($_POST['btnDoiPass'])) {
        $email = $_GET['userEmail'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        $sqlcheckEmail = $conn->prepare("SELECT * FROM user where email = '$email'");
        $sqlcheckEmail->execute();

        $sqlcheckEmail->setFetchMode(PDO::FETCH_ASSOC);
        if($pass1 = $pass2) {
            $pass1_hash = password_hash($pass1, PASSWORD_DEFAULT);
            $sqlUpdatePass = $conn->prepare("UPDATE user set password = '$pass1_hash' where email = '$email'");
            $sqlUpdatePass->execute();
            $_SESSION['changePassOK'] = "<h3 class='text-success'>Đổi mật khẩu thành công</h3>";
            header('location: login.php');
                // echo "OK";
        } else {
            $_SESSION['khacPass'] = "<h3 class='text-warning'>Mật khẩu nhập lại chưa đúng</h3>";
            // echo "Không ok";
        }
    }
    ?>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="heading-section">Đổi mật khẩu</h2>
                    <h2 class="heading-section">
                        <?php
                        if (isset($_SESSION['khacPass'])) {
                            echo $_SESSION['khacPass'];
                            unset($_SESSION['khacPass']);
                        }
                        ?></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="#" class="signin-form" method="POST">
                            <div class="form-group">
                                <input id="password-field" name="pass1" type="password" class="form-control" placeholder="Mật khẩu" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input id="password-field1" name="pass2" type="password" class="form-control" placeholder="Nhập lại mật khẩu" required>
                                <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input name="btnDoiPass" type="submit" class="form-control btn btn-primary px-3" value="Đổi mật khẩu">
                            </div>
                        </form>
                        <div class="text-center">Bạn đã có tài khoản? <a href="./login.php">đăng nhập</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>