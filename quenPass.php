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

<?php
 setcookie('codeV', mt_rand(100000,999999) , time() + 300 );
if (isset($_POST['btnMaXN'])) {
	$email = $_POST['email'];
    $checkCode = $_COOKIE['codeV'];
	$sqlCheckU = $conn->prepare("SELECT * FROM user where email = '" . $email . "'");
	$sqlCheckU->execute();
    if($sqlCheckU->rowCount() > 0){
        $sqlCheckU->setFetchMode(PDO::FETCH_ASSOC);
		$row = $sqlCheckU->fetch();
        $sql_code =  $conn->prepare("UPDATE user set codeReset = '$checkCode' where email = '$email'");
        $sql_code -> execute();
        header('location: nhapMaXN.php?userEmail='.$email);

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
            $mail->setFrom('aplungduoc1@gmail.com', '[Pancake Store] Cấp lại mật khẩu');

            $mail->addReplyTo('aplungduoc1@gmail.com', '[Pancake Store] Cấp lại mật khẩu');

            $mail->addAddress($email); // Add a recipient
            // Content
            $mail->isHTML(true);   // Set email format to HTML
            $tieude = '[Pancake Store] Cấp lại mật khẩu';
            $mail->Subject = $tieude;

            //  Mail body content 
            $bodyContent = '<h2><p>Xin chào<p></h2>';
            $bodyContent .= '<p>Mã xác nhận của bạn là '.$checkCode.'</p>';
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
    else {
        $_SESSION['no-find-email'] = "<h2 class='text-warning'>Email không tồn tại!</h2>";
    }
}
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

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Nhập email</h2>
					<div class="heading-section">
                    <?php
            if (isset($_SESSION['no-find-email'])) {
                echo $_SESSION['no-find-email'];
                unset($_SESSION['no-find-email']);
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
								<input value="" name="email" type="email" class="form-control" placeholder="Email" required>
							</div>

							<div class="form-group">
								<button name="btnMaXN" type="submit" class="form-control btn btn-primary submit px-3">Gửi mã xác nhận</button>
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