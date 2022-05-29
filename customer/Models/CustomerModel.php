<?php

    class CustomerModel extends BaseModel{
        CONST TOUR = 'tour';
       
        public function getTour(){
            $sql = "SELECT * FROM tour, diadiem, khachsan, phuongtien where tour.idDiaDiem = diadiem.idDiaDiem and tour.idPhuongTien = phuongtien.idPT and tour.idKhachSan = khachsan.idKS";
            $query = $this -> query($sql);
            $ar = [];
            // while($row = mysqli_fetch_assoc($query)){
                while($row = $query->fetch()){
                array_push($ar, $row);
            }
            return $ar;
        }
        public function getTourName($idTour){
            $sql = "SELECT * FROM tour where idTour = ".$idTour;
            $query = $this -> query($sql);
            $ar = [];
            // while($row = mysqli_fetch_assoc($query)){
                while($row = $query->fetch()){
                array_push($ar, $row);
            }
            return $ar;
        }

        public function countTour(){
            $sql = "SELECT count(idTour) as slSP from tour";
            $query = $this -> query($sql);
            $row = $query -> fetch();
            return $row;
        }

        public function getTourPT($cr_page, $limit){
            $sql = "SELECT * FROM tour, diadiem, khachsan, phuongtien 
                    where tour.idDiaDiem = diadiem.idDiaDiem and tour.idPhuongTien = phuongtien.idPT and tour.idKhachSan = khachsan.idKS
                    limit $cr_page,$limit";
            $query = $this -> query($sql);
            $ar = [];
                while($row = $query->fetch()){
                array_push($ar, $row);
            }
            return $ar;
        }


    //     public function getSPbyLH($id){
    //         $sql = "SELECT * FROM sanpham SP ,loaihang LH where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = '$id'";
    //         $query = $this -> query($sql);
    //         $ar = [];
    //         while($row = mysqli_fetch_assoc($query)){
    //           array_push($ar,$row);
    //         }
    //         return $ar;
    //     }
    //     public function search($keySearch){
    //         $sql = "SELECT * FROM sanpham where TenSP like '%$keySearch%'";
    //         $query = $this -> query($sql);
    //         $ar = [];
    //         while($row = mysqli_fetch_assoc($query)){
    //             array_push($ar, $row);
    //         }
    //         return $ar;
    //     }
    //     public function changePrice($idLH, $maxPrice){
    //         if($idLH == 0){
    //             $sql = "SELECT * FROM sanpham where DonGiaBan between '0' and '$maxPrice'";
    //             $query = $this -> query($sql);
    //             $ar = [];
    //             while($row = mysqli_fetch_assoc($query)){
    //                 array_push($ar, $row);
    //             }
    //             return $ar;
    //         }
    //         else{
    //             $sql = "SELECT * FROM sanpham SP ,loaihang LH where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = '$idLH' and SP.DonGiaBan between '0' and '$maxPrice'";
    //             $query = $this -> query($sql);
    //             $ar = [];
    //             while($row = mysqli_fetch_assoc($query)){
    //                 array_push($ar, $row);
    //             }
    //             return $ar;
    //         }
         
    //     }

    //     public function countProduct($idLH){
    //         if($idLH == 0){
    //             $sql = "SELECT count(IDSanPham) as slSP from sanpham";
    //             $query = $this -> query($sql);
    //             $row = mysqli_fetch_assoc($query)['slSP'];
    //             return $row;
    //         }
    //         else{
    //             $sql = "SELECT count(IDSanPham) as slSP FROM sanpham SP ,loaihang LH where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = '$idLH'";
    //             $query = $this -> query($sql);
    //             $row = mysqli_fetch_assoc($query)['slSP'];
    //             return $row;
    //         }
    //     }

    //     public function getProductByPages($idLH, $current_page, $step){
    //         if($idLH == 0){
    //             $sql = "SELECT * FROM sanpham group by IDSanPham limit $current_page, $step";
    //             $query = $this -> query($sql);
    //             $ar = [];
    //             while($row = mysqli_fetch_assoc($query)){
    //                 array_push($ar, $row);
    //             }
    //             return $ar;
    //         }
    //         else{
    //             $sql = "SELECT * FROM sanpham SP ,loaihang LH 
    //                     where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = '$idLH'
    //                     group by SP.IDSanPham limit $current_page, $step";
    //             $query = $this -> query($sql);
    //             $ar = [];
    //             while($row = mysqli_fetch_assoc($query)){
    //                 array_push($ar, $row);
    //             }
    //             return $ar;
    //         }
    //     }
    }
