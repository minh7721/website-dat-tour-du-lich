<?php
    class CheckoutController extends BaseController{
        public function __construct()
        {
          $this->loadModel('CustomerModel');
          $this->CustomerModel = new CustomerModel();
          $this->loadModel('CheckoutModel');
          $this->CheckoutModel = new CheckoutModel();  
          $this->loadModel('ChiTietTourModel');
      $this->ChiTietTourModel = new ChiTietTourModel();       
        }
    
        public function index(){
            $idTour = $_GET['idTour'];
            $ttKH = $this -> CheckoutModel -> getTTKH(1);
            $chiTietTour = $this -> ChiTietTourModel -> chiTietTour($idTour);
            return $this -> view('frontend.customer.checkout', ['thongTinKH' => $ttKH, 'chiTietTour' => $chiTietTour]);
        }
    }

?>