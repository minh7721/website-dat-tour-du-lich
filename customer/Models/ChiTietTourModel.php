<?php
    class ChiTietTourModel extends BaseModel{

        public function chiTietTour($idTour){
            $sql = "SELECT * FROM tour, diadiem, khachsan, phuongtien where tour.idDiaDiem = diadiem.idDiaDiem and tour.idPhuongTien = phuongtien.idPT and tour.idKhachSan = khachsan.idKS
                    and idTour = '".$idTour."'";
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