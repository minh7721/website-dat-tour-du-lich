<?php
    class QuanLyTourController extends BaseController{
        public function __construct()
        {
          $this->loadModel('QuanLyTourModel');
          $this->QuanLyTourModel = new QuanLyTourModel();
        }

        public function index(){
            $idKH = $_GET['idKH'];
            $tourDaDat = $this -> QuanLyTourModel -> getTourKH($idKH);
            return $this -> view('frontend.customer.quanLyTour', ['tourDaDat' => $tourDaDat]);
        }
    }

?>