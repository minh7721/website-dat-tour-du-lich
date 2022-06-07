<?php
        class QuanLyTourModel extends BaseModel{
            public function getTourKH($idKH){
                $sql = "SELECT * FROM hoadon, khachhang, tour where hoadon.idTour = tour.idTour and hoadon.idKhachHang = khachhang.idKH and idKhachHang = $idKH";
                $query = $this -> query($sql);
                $ar = [];
                    while($row = $query->fetch()){
                    array_push($ar, $row);
                }
                return $ar;
            }

            public function getChiTietTourKH($idKH, $idTour){
                $sql = "SELECT * FROM hoadon, khachhang, tour, khachsan, phuongtien, diadiem 
                        where khachsan.idKS = tour.idKhachSan and phuongtien.idPT = tour.idPhuongTien 
                        and diadiem.idDiaDiem = tour.idDiaDiem and hoadon.idTour = tour.idTour 
                        and hoadon.idKhachHang = khachhang.idKH and idKhachHang = $idKH and hoadon.idTour = $idTour";
                $query = $this -> query($sql);
                $row = $query->fetch();
                return $row;
            }

            public function huyTourKH($idHoaDon){
                $sql = "DELETE FROM hoadon where idHoaDon = $idHoaDon";
                $this -> query($sql);
            }
        }

?>