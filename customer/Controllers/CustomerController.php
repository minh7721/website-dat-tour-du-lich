<?php
class CusTomerController extends BaseController{
    public function __construct()
    {
      $this->loadModel('CustomerModel');
      $this->CustomerModel = new CustomerModel();
    }
    public function index()
    {
    //   $getAllLoaiHang = $this->CustomerModel->getAllLoaiHang();
    //   $getAllSP = $this->CustomerModel->getAllSP();
      return $this->view(
        'index'
        // [
        //   'getAllLoaiHang' => $getAllLoaiHang,
        //   'getAllSP' => $getAllSP
        // ]
      );
    }
}
?>