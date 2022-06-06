<?php
        class QuanLyTourModel extends BaseModel{
            public function getTourKH($idKH){
                $sql = "SELECT * FROM hoadon where idKhachHang = $idKH";
                $query = $this -> query($sql);
                $ar = [];
                // while($row = mysqli_fetch_assoc($query)){
                    while($row = $query->fetch()){
                    array_push($ar, $row);
                }
                return $ar;
            }
        }

?>