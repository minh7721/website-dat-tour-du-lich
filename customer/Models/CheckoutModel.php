<?php
    class CheckoutModel extends BaseModel{
        public function getTTKH($idKH){
            $sql = "SELECT * FROM khachhang where idKH = ".$idKH;
            $query = $this-> query($sql);
            $row = $query->fetch();
            return $row;
          }

          public function datTour($ngayDatTour, $slNguoi, $tongTien, $idKH, $idTour){
                $sql = "INSERT INTO hoadon(ngayDatTour, soLuongNguoi, tongTien, idKhachHang, idTour) 
                            VALUES ('$ngayDatTour', $slNguoi, $tongTien, $idKH, $idTour)";
                $query = $this->query($sql);
          }
    }
?>