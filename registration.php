<?php
    session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $btnDangKy = $_POST['btnDangKy'];

    if(isset($btnDangKy)){
        
    }
?>



<!doctype html>
<html lang="en">

<head>
    <title>Đăng ký</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="heading-section">Đăng ký</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="#" class="signin-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Họ tên" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" name="phone" class="form-control" placeholder="Số điện thoại" required>
                            </div>
                            <div class="form-group">
                                <input type="date" name="birthday" class="form-control" placeholder="Ngày sinh" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" name="pass1" type="password" class="form-control" placeholder="Mật khẩu" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input id="password-field" name="pass2" type="password" class="form-control" placeholder="Nhập lại mật khẩu" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button name="btnDangKy"type="submit" class="form-control btn btn-primary submit px-3">Đăng ký</button>
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