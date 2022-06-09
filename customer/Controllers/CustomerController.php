<?php
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
}
