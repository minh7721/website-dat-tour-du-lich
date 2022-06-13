
<?php
            if (isset($_POST['btnDangKy'])) {
                $Name = $_POST['Name'];
                $Avatar = basename($_FILES['Avatar']['name']);
                $Birthday = $_POST['Birthday'];
                $GioiTinh = $_POST['GioiTinh'];
                $code = md5(rand());
                $Phone = $_POST['Phone'];
                $Email = $_POST['Email'];
                $Pass1 = $_POST['Pass1'];
                $Pass2 = $_POST['Pass2'];
                $Pass1_hash = password_hash($Pass1, PASSWORD_DEFAULT);
                //upload file
                $fileimg = "img/";
                $fileAvatar = $fileimg . $Avatar;
                //SQL
                $sql_checkemail = "select * from db_users where user_email = '$Email'";
                $check_email = mysqli_query($conn, $sql_checkemail);
                if (mysqli_num_rows($check_email) > 0) {
                  $_SESSION['emailTonTai'] = "<h2 class='text-warning'>Email đã tồn tại</h2>";
                } else {
                    if ($Pass1 == $Pass2) {
                        if (move_uploaded_file($_FILES["Avatar"]["tmp_name"], $fileAvatar)) {
                            $sql = "insert into db_users(user_name,user_avatar ,user_birthday, user_gioitinh , user_phone, user_email, user_pass, code) 
                            values('$Name','$fileAvatar' ,'$Birthday', '$GioiTinh','$Phone','$Email','$Pass1_hash', '$code')";
                            $rs = mysqli_query($conn, $sql);
                            $_SESSION['check-email'] = "<h3 class='text-success text-center'>Vui lòng kiểm tra email để kích hoạt tài khoản</h3>";
                            header('location:login.php');

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

                                $mail->addAddress($Email); // Add a recipient
                                // Content
                                $mail->isHTML(true);   // Set email format to HTML
                                $tieude = '[Đăng ký tài khoản] Danh bạ Trường DHTL';
                                $mail->Subject = $tieude;

                                //  Mail body content 
                                $bodyContent = '<h2><p>Xin chào<p></h2>';
                                $bodyContent .= '<p>Nhấn vào đây để kích hoạt <a href="http://localhost/cnwebb/dhtl_danhba/xacnhanEmail.php?email=' . $Email . '&code=' . $code . '">Xác nhận</a></p>';
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