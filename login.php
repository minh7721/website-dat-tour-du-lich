<?php
session_start();
include('./database/db.php');
?>

<?php
if (isset($_POST['btnLogin'])) {
	$email = $_POST['email'];
	$pass_raw = $_POST['pass'];
	$btnLogin = $_POST['btnLogin'];
	$sqlCheckU = $conn->prepare("SELECT * FROM user where email = '" . $email . "'");
	$sqlCheckU->execute();
	//Thiết lập kiểu dữ liệu trả về
	if ($sqlCheckU->rowCount() > 0) {
		$sqlCheckU->setFetchMode(PDO::FETCH_ASSOC);
		$row = $sqlCheckU->fetch();
		$pass_hash = $row['password'];
		if (password_verify($pass_raw, $pass_hash)) {
			if (isset($_POST['rememberMe'])) {
				setcookie('rememberEmail', $email, time() + 300);
				setcookie('rememberPass', $pass_raw, time() + 300);
			}
			$sqlttKH = $conn->prepare("SELECT * FROM khachhang where emailKH = '" . $email . "'");
			$sqlttKH->execute();
			$sqlttKH->setFetchMode(PDO::FETCH_ASSOC);
			$rowTTKH = $sqlttKH->fetch();
			$_SESSION['loginOK'] = $email;
			// $_SESSION['loginSuccess'] = "<h1 class='text-success text-center'>Xin chào " . $rowTTKH['8'] . "</h1>";
			if($row['status'] == 1){
				$_SESSION['idKH'] = $rowTTKH['idKH'];
				header("location:http://localhost/website_book_tour/customer/?controller=customer&action=index");
			}
			if($row['status'] == 0){
				$_SESSION['quyen'] = $row['status'];
				header("location:http://localhost/website_book_tour/admin/index.php");
			}
		} else {
			$_SESSION['titleFalse'] = "<h2 class='text-warning text-center'>Tài khoản hoặc mật khẩu không chính xác</h2>";
		}
	}
}
?>


<!doctype html>
<html lang="en">

<head>
	<title>Đăng nhập</title>
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
					<h2 class="heading-section">Đăng nhập</h2>
					<div class="heading-section">
						<?php
						if (isset($_SESSION['titleFalse'])) {
							echo $_SESSION['titleFalse'];
							unset($_SESSION['titleFalse']);
						}
						if (isset($_SESSION['check-email'])) {
							echo $_SESSION['check-email'];
							unset($_SESSION['check-email']);
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
								<input value="<?php if (isset($_COOKIE['rememberEmail'])) {
				echo $_COOKIE['rememberEmail'];
			} ?>" name="email" type="text" class="form-control" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input value="<?php if (isset($_COOKIE['rememberPass'])) {
													echo $_COOKIE['rememberPass'];
												} ?>" name="pass" id="password-field" type="password" class="form-control" placeholder="Password" required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button name="btnLogin" type="submit" class="form-control btn btn-primary submit px-3">Đăng nhập</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Nhớ tôi
										<input name="rememberMe" <?php if (isset($_COOKIE['rememberPass'])) {
													echo "checked";
												} ?> type="checkbox">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Quên mật khẩu</a>
								</div>
							</div>
						</form>
						<div class="text-center">Bạn chưa có tài khoản? <a href="./registration.php">dăng ký ngay</a></div>
						<p class="w-100 text-center">&mdash; hoặc đăng nhập bằng &mdash;</p>
						<div class="social d-flex text-center">
							<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
							<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Gmail</a>
						</div>
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