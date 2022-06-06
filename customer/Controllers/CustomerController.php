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
    if(isset($_POST['page'])){
      $page = $_POST['page'];
    }
    else {
      $page = 0;
    }
    $getAllTour = $this->CustomerModel->getTour();
    $slTour = $this->CustomerModel->countTour();
    $slTours = $slTour['slSP'];
    $limit = 3;
    $soTrang = ceil($slTours / $limit);
    $getTourPT = $this -> CustomerModel -> getTourPT($page, $limit);
    return $this->view('frontend.customer.index', ['getAllTour' => $getAllTour, 'soTrang' => $soTrang]);
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

  public function getTourPT(){
    if(isset($_POST['page'])){
      $page = $_POST['page'];
    }
    else {
      $page = 1;
    }
    $slTour = $this->CustomerModel->countTour();
    $slTours = $slTour['slSP'];
    $limit = 3;
    $start = $limit*($page-1);
    $soTrang = ceil($slTours / $limit);
    $getTourPT = $this -> CustomerModel -> getTourPT($start, $limit);
    return $this->view('frontend.customer.thongTinTour', ['getAllTour' => $getTourPT, 'soTrang' => $soTrang]);
  }

  public function profile(){
    return $this->view('frontend.customer.profile');
  }

  //   public function getAllLoaiHang()
  //   {
  //     $getAllLoaiHang = $this->CustomerModel->getAllLoaiHang();
  //     // return $this-> view('frontend.customer.index',['getAllLoaiHang' => $getAllLoaiHang]);
  //     echo "<pre>";
  //     print_r($getAllLoaiHang);
  //     echo "</pre>";
  //   }

  //   public function getAllSP()
  //   {
  //     $getAllSP = $this->CustomerModel->getAllSP();
  //     // return $this -> view('frontend.customer.index', ['getAllSP' => $getAllSP]);
  //   }

  //   public function getSPLH()
  //   {
  //     $idLH = $_POST['idLH'];
  //     if(isset($_POST['current_page'])){
  //       $current_pages = $_POST['current_page'];
  //     }
  //     else {
  //       $current_pages = 1;
  //     }
  //     $step = 4;
  //     $slSP = $this->CustomerModel->countProduct($idLH);
  //     $soTrang = ceil($slSP / $step);
  //     $current_page = ($current_pages - 1)*$step;
  //     $getProducts = $this->CustomerModel->getProductByPages($idLH, $current_page, $step);
  //     return $this->view(
  //       'frontend.customer.product_action',
  //       ['getProducts' => $getProducts, 'soTrang' => $soTrang, "current_page" => $current_page, "idLH" => $idLH]
  //     );
  //   }

  //   public function search()
  //   {
  //     $keySearch = $_POST['keySearch'];
  //     $listSP = $this->CustomerModel->search($keySearch);
  //     return $this->view(
  //       'frontend.customer.product_action',
  //       ['getProducts' => $listSP]
  //     );
  //   }

  //   public function changePrice()
  //   {
  //     $maxPrice = $_POST['maxPrice'];
  //     $idLH = $_POST['idLH'];
  //     $listSP = $this->CustomerModel->changePrice($idLH, $maxPrice);
  //     return $this->view(
  //       'frontend.customer.product_action',
  //       ['getProducts' => $listSP]
  //     );
  //   }

  //   public function countProduct()
  //   {
  //     $idLH = $_POST['idLH'];
  //     $slSP = $this->CustomerModel->countProduct($idLH);
  //     $soTrang = ceil($slSP / 4);
  //     return $this->view(
  //       'frontend.customer.product_action',
  //       ['soTrang' => $soTrang]
  //     );
  //   }
}
