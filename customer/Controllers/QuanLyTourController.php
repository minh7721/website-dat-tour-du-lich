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

        public function chiTietTour(){{
            $idKH = $_GET['idKH'];
            $idTour = $_GET['idTour'];
            $chiTietTour = $this -> QuanLyTourModel -> getChiTietTourKH($idKH, $idTour);
            return $this -> view('frontend.customer.chiTietTourDaDat', ['chiTietTour' => $chiTietTour]);
          
        }}

        public function huyTour(){
            // $idKH = $_GET['idKH'];
            // $idTour = $_GET['idTour'];
            $idHoaDon = $_POST['idHoaDon'];
            $this -> QuanLyTourModel -> huyTourKH($idHoaDon);
        }

    }

?>