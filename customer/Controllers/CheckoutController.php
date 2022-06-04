<?php
class CheckoutController extends BaseController
{
    public function __construct()
    {
        $this->loadModel('CustomerModel');
        $this->CustomerModel = new CustomerModel();
        $this->loadModel('CheckoutModel');
        $this->CheckoutModel = new CheckoutModel();
        $this->loadModel('ChiTietTourModel');
        $this->ChiTietTourModel = new ChiTietTourModel();
    }

    public function index()
    {
        $idTour = $_GET['idTour'];
        $idKH = $_GET['idKH'];
        $ttKH = $this->CheckoutModel->getTTKH($idKH);
        $chiTietTour = $this->ChiTietTourModel->chiTietTour($idTour);
        return $this->view('frontend.customer.checkout', ['thongTinKH' => $ttKH, 'chiTietTour' => $chiTietTour]);
    }

    public function datTour()
    {
        $idKH = $_POST['idKH'];
        $slNguoi = $_POST['slNguoi'];
        $idTour = $_POST['idTour'];
        $tongTien = $_POST['lastMoney'];
        $ngayDatTour = $_POST['thisDay'];

        $this-> CheckoutModel -> datTour($ngayDatTour, $slNguoi, $tongTien, $idKH, $idTour);
        // echo($sql);
        header('location: http://localhost/website_book_tour/customer/?controller=customer&action=index');
    }
}
