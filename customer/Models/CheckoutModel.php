<?php
    class CheckoutModel extends BaseModel{
        public function getTTKH($idKH){
            $sql = "SELECT * FROM khachhang where idKH = ".$idKH;
            $query = $this-> query($sql);
            $row = $query->fetch();
            return $row;
          }
    }
?>