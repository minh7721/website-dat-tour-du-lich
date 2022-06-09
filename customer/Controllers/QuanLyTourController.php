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
            $idHoaDon = $_GET['idHD'];
            $chiTietTour = $this -> QuanLyTourModel -> getChiTietTourKH($idHoaDon);
            return $this -> view('frontend.customer.chiTietTourDaDat', ['chiTietTour' => $chiTietTour]);
          
        }}

        public function huyTour(){
            // $idKH = $_GET['idKH'];
            // $idTour = $_GET['idTour'];
            // $idHoaDon = $_GET['idHD'];
            $idHoaDon = $_POST['idHD'];
            $this -> QuanLyTourModel -> huyTourKH($idHoaDon);
        }

    }

?>