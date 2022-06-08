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
    <title>Đăng ký</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <?php
    if (isset($_POST['btnDangKy'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
       
        
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        $linkAvatar = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEBBlPGF0oyXLLs6eUIbQtpBR3xEyd0VLRaQ&usqp=CAU";
        $sqlcheckEmail = $conn->prepare("SELECT * FROM user where email = '$email'");
        $sqlcheckEmail->execute();
        if ($sqlcheckEmail->rowCount() > 0) {
            $_SESSION['emailTonTai'] = "<h2 class='text-warning'>Email đã tồn tại</h2>";
        } else {
            $sqlcheckEmail->setFetchMode(PDO::FETCH_ASSOC);

            if ($pass1 = $pass2) {
                $pass1_hash = password_hash($pass1, PASSWORD_DEFAULT);
                $sqlInputUser = $conn->prepare("INSERT INTO user(email, password) values('$email', '$pass1_hash')");
                $sqlInputUser->execute();
                if ($sqlInputUser) {
                    $sqlcheckEmail->execute();
                    $row = $sqlcheckEmail->fetch();
                    $idUser = $row['idU'];
                    $sqlInputKH = $conn->prepare("INSERT INTO khachhang(tenKH, emailKh) 
                                                    values('$name', '$email')");
                    $sqlInputKH->execute();
                    $_SESSION['check-email'] = "<h3 class='text-white text-center'>Vui lòng kiểm tra email để kích hoạt tài khoản</h3>";
                    header('location: login.php');
                    $mail = new PHPMailer(true);
                    try {
                        //Server settings
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
                        $mail->isSMTP(); // gửi mail SMTP
                        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
                        $mail->SMTPAuth = true; // Enable SMTP authentication
                        $mail->Username = 'aplungduoc1@gmail.com'; // SMTP username
                        $mail->Password = 'wtbfjnirdekoxqby'; // SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                        $mail->Port = 587; // TCP port to connect to
                        $mail->CharSet = 'UTF-8';
                        //Recipients
                        $mail->setFrom('aplungduoc1@gmail.com', 'MinhHN');

                        $mail->addReplyTo('aplungduoc1@gmail.com', 'MinhHN');

                        $mail->addAddress($email); // Add a recipient
                        // Content
                        $mail->isHTML(true);   // Set email format to HTML
                        $tieude = '[Pancake Store] Xác nhận đăng ký tài khoản';
                        $mail->Subject = $tieude;

                        //  Mail body content 
                        $bodyContent = '<h2><p>Xin chào<p></h2>';
                        // $bodyContent .= '<p>Nhấn vào đây để kích hoạt <a href="http://localhost/cnwebb/dhtl_danhba/xacnhanEmail.php?email=&code=">Xác nhận</a></p>';
                        $bodyContent .= '<p>Nhấn vào đây để kích hoạt <a href="https://minh7721.github.io/sound-mp3">Xác nhận</a></p>';
                        $bodyContent .= '<p>Vui lòng không trả lời thư này .</p>';
                        $bodyContent .= '<p><b>Trân trọng cảm ơn !</b></p>';
                        $bodyContent .= '<p><b>Chào !Thân ái!</b></p>';

                        $mail->Body = $bodyContent;
                        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                        if ($mail->send()) {
                            echo 'Thư đã được gửi đi';
                        } else {
                            echo 'Lỗi. Thư chưa gửi được';
                        }
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                }
            } else {
                $_SESSION['khacPass'] = "<h3 class='text-warning'>Mật khẩu nhập lại chưa đúng</h3>";
            }
        }
    }
    ?>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="heading-section">Đăng ký</h2>
                    <h2 class="heading-section">
                        <?php
                        if (isset($_SESSION['emailTonTai'])) {
                            echo $_SESSION['emailTonTai'];
                            unset($_SESSION['emailTonTai']);
                        }
                        if (isset($_SESSION['khacPass'])) {
                            echo $_SESSION['khacPass'];
                            unset($_SESSION['khacPass']);
                        }
                        if (isset($_SESSION['cungPass'])) {
                            echo $_SESSION['cungPass'];
                            unset($_SESSION['cungPass']);
                        }
                        ?></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="#" class="signin-form" method="POSt">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Họ tên" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
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
                                <input name="btnDangKy" type="submit" class="form-control btn btn-primary px-3" value="Đăng ký">
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