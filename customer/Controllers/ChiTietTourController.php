<?php

class ChiTietTourController extends BaseController{
    public function __construct()
    {
      $this->loadModel('CustomerModel');
      $this->CustomerModel = new CustomerModel();
      $this->loadModel('ChiTietTourModel');
      $this->ChiTietTourModel = new ChiTietTourModel();     
    }

    public function index(){
      $idTour = $_GET['idTour'];
      $chiTietTour = $this -> ChiTietTourModel -> chiTietTour($idTour);
        return $this -> view('frontend.customer.chiTietTour', ['chiTietTour' => $chiTietTour]);
        // echo "<pre>";
        // print_r($chiTietTour);
        // echo "</pre>";
    }
}

?>