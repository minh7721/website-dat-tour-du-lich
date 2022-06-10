<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../sendEmail/Exception.php';
require '../sendEmail/PHPMailer.php';
require '../sendEmail/SMTP.php';



class CusTomerController extends BaseController
{
  public function __construct()
  {
    $this->loadModel('CustomerModel');
    $this->CustomerModel = new CustomerModel();
  }
  public function index()
  {
    if (isset($_POST['page'])) {
      $page = $_POST['page'];
    } else {
      $page = 0;
    }
    $getAllTour = $this->CustomerModel->getTour();
    $slTour = $this->CustomerModel->countTour();
    $slTours = $slTour['slSP'];
    $limit = 3;
    $soTrang = ceil($slTours / $limit);
    $getTourPT = $this->CustomerModel->getTourPT($page, $limit);
    return $this->view('frontend.customer.index', ['getAllTour' => $getTourPT, 'soTrang' => $soTrang]);
  }

  public function getAllTour()
  {
    $getAllTour = $this->CustomerModel->getTour();
    echo "<pre>";
    print_r($getAllTour);
    echo "</pre>";
    // return $this -> view('frontend.customer.index', ['getAllTour' => $getAllTour]);
  }
  public function getTourName()
  {
    $getTourName = $this->CustomerModel->getTourName(2);
    echo "<pre>";
    print_r($getTourName);
    echo "</pre>";
    // return $this -> view('frontend.customer.index', ['getAllTour' => $getAllTour]);
  }

  public function countTour()
  {
    $slTour = $this->CustomerModel->countTour();
    $slTours = $slTour['slSP'];
    $limit = 2;
    $current_page = 0;
    $soTrang = ceil($slTours / $limit);
    return $this->view('frontend.customer.index', ['soTrang' => $soTrang]);
  }

  public function getTourPT()
  {
    if (isset($_POST['page'])) {
      $page = $_POST['page'];
    } else {
      $page = 0;
    }
    $slTour = $this->CustomerModel->countTour();
    $slTours = $slTour['slSP'];
    $limit = 3;
    $start = $limit * ($page - 1);
    $soTrang = ceil($slTours / $limit);
    $getTourPT = $this->CustomerModel->getTourPT($start, $limit);
    return $this->view('frontend.customer.thongTinTour', ['getAllTour' => $getTourPT, 'soTrang' => $soTrang]);
  }

  public function profile()
  {
    $idKH = $_GET['idKH'];
    $thongTinKH = $this->CustomerModel->thongTinKH($idKH);
    // echo "<pre>";
    // print_r($thongTinKH);
    // echo "</pre>";
    return $this->view('frontend.customer.profile', ['thongTinKH' => $thongTinKH]);
  }

  public function uploadimg()
  {
    $Avatar = basename($_FILES['file']['name']);
    $fileAvatar = "public/images/avatarKH/" . $Avatar;
    // $validates = array('.jpg', '.png', '.jpeg');
    move_uploaded_file($_FILES["file"]["tmp_name"], $fileAvatar);
  }

  public function updateTTKH()
  {
    if (isset($_POST['urlAvatar'])) {
      $urlAvatar = $_POST['urlAvatar'];
    } else {
      $urlAvatar = "";
    }
    $idKH = $_POST['idKH'];
    $hoTenKH = $_POST['hoTenKH'];
    $soDTKH = $_POST['soDTKH'];
    $emailKH = $_POST['emailKH'];
    $ngaySinhKH = $_POST['ngaySinhKH'];
    $diaChiKH = $_POST['diaChiKH'];

    $this->CustomerModel->updateTTKH($idKH, $hoTenKH, $soDTKH, $emailKH, $ngaySinhKH, $urlAvatar, $diaChiKH);
  }

  public function search()
  {
    $valSearch = $_POST['valSearch'];
    // $valSearch = 'hawaa';
    $cr_page = 1;
    $limit = 3;
    $slTour = $this->CustomerModel->countTourSearch($valSearch);
    $slTours = $slTour['slSP'];
    $soTrang = ceil($slTours / $limit);
    $start = $limit * ($cr_page - 1);
    $dtTour = $this->CustomerModel->searchTour($valSearch, $start, $limit);
    return $this->view('frontend.customer.index', ['getAllTour' => $dtTour, 'soTrang' => $soTrang]);
  }

  public function contact()
  {
    $contactName = $_POST['contactName'];
    $contactEmail = $_POST['contactEmail'];
    $contactPhone = $_POST['contactPhone'];
    $contactContent = $_POST['contactContent'];
    $contactMessage = $_POST['contactMessage'];
    $emailAdmin = "nhatminh7721@gmail.com";

    $this -> CustomerModel -> contactAdd($contactName,$contactEmail,$contactPhone,$contactContent,$contactMessage);


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

        $mail->addAddress($emailAdmin); // Add a recipient
        // Content
        $mail->isHTML(true);   // Set email format to HTML
        $tieude = '[Pancake Store] Contact khách hàng';
        $mail->Subject = $tieude;

        //  Mail body content 
        $bodyContent = '<h2><p>Khách hàng: '.$contactName.'<p></h2>';
        // $bodyContent .= '<p>Nhấn vào đây để kích hoạt <a href="http://localhost/cnwebb/dhtl_danhba/xacnhanEmail.php?email=&code=">Xác nhận</a></p>';
        $bodyContent .= '<p>Email: '.$contactEmail.'</p>';
        $bodyContent .= '<p>Số điện thoại: '.$contactPhone.'</p>';
        $bodyContent .= '<p>Tiêu đề: '.$contactContent.'</p>';
        $bodyContent .= '<p>Nội dung: '.$contactMessage.'</p>';
        // $bodyContent .= '<p><b>Chào !Thân ái!</b></p>';

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
}
