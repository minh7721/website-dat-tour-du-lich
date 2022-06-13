<?php
session_start();
include('./database/db.php');


?>

<?php

?>


<!doctype html>
<html lang="en">

<head>
    <title>Quên mật khẩu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<?php
$userEmail = $_GET['userEmail'];
if (isset($_POST['btnCheckCode'])) {
    $codeInput = $_POST['verifyCode'];
    $sqlSelectEmail = $conn->prepare("SELECT * FROM user where email = '$userEmail' ");
    $sqlSelectEmail->execute();
    $sqlSelectEmail->setFetchMode(PDO::FETCH_ASSOC);
    $row = $sqlSelectEmail->fetch();
    if ($row['codeReset'] == $codeInput) {
        if (!isset($_COOKIE['codeV'])) {
            $_SESSION['code-het-han'] = "<h3 class='text-warning'>Mã xác nhận đã hết hạn</h3>";
            $sqlUpdateCode = $conn->prepare("UPDATE user set codeReset = '' where email = '$userEmail' ");
            $sqlUpdateCode->execute();
        } else {
            header('location: doiPass.php?userEmail=' . $userEmail);
        }
    } else {
        $_SESSION['no-find-code'] = "<h3 class='text-danger'>Mã xác nhận không đúng</h3>";
    }
}


?>




<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Nhập mã xác nhận</h2>
                    <div class="heading-section">
                        <?php
                        if (isset($_SESSION['no-find-code'])) {
                            echo $_SESSION['no-find-code'];
                            unset($_SESSION['no-find-code']);
                        }
                        if (isset($_SESSION['code-het-han'])) {
                            echo $_SESSION['code-het-han'];
                            unset($_SESSION['code-het-han']);
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="#" class="signin-form" method="POST">
                            <div class="form-group">
                                <input value="" name="verifyCode" type="number" class="form-control" placeholder="Mã xác nhận" required>
                            </div>

                            <div class="form-group">
                                <button name="btnCheckCode" type="submit" class="form-control btn btn-primary submit px-3">Gửi mã xác nhận</button>
                            </div>
                        </form>
                        <div class="text-center">Bạn chưa có tài khoản? <a href="./registration.php">Đăng ký ngay</a></div>
                        <div class="text-center">Bạn đã có tài khoản? <a href="./login.php">Đăng nhập</a></div>
                        <!-- <p class="w-100 text-center">&mdash; hoặc đăng nhập bằng &mdash;</p> -->
                        <!-- <div class="social d-flex text-center">
							<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
							<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Gmail</a>
						</div> -->
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