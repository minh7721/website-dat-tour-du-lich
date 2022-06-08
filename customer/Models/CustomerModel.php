<?php

class CustomerModel extends BaseModel
{
    const TOUR = 'tour';

    public function getTour()
    {
        $sql = "SELECT * FROM tour, diadiem, khachsan, phuongtien where tour.idDiaDiem = diadiem.idDiaDiem and tour.idPhuongTien = phuongtien.idPT and tour.idKhachSan = khachsan.idKS";
        $query = $this->query($sql);
        $ar = [];
        while ($row = $query->fetch()) {
            array_push($ar, $row);
        }
        return $ar;
    }
    public function getTourName($idTour)
    {
        $sql = "SELECT * FROM tour where idTour = " . $idTour;
        $query = $this->query($sql);
        $ar = [];
        while ($row = $query->fetch()) {
            array_push($ar, $row);
        }
        return $ar;
    }

    public function countTour()
    {
        $sql = "SELECT count(idTour) as slSP from tour";
        $query = $this->query($sql);
        $row = $query->fetch();
        return $row;
    }

    public function getTourPT($cr_page, $limit)
    {
        $sql = "SELECT * FROM tour, diadiem, khachsan, phuongtien 
                    where tour.idDiaDiem = diadiem.idDiaDiem and tour.idPhuongTien = phuongtien.idPT and tour.idKhachSan = khachsan.idKS
                    limit $cr_page,$limit";
        $query = $this->query($sql);
        $ar = [];
        while ($row = $query->fetch()) {
            array_push($ar, $row);
        }
        return $ar;
    }

    public function thongTinKH($idKH)
    {
        $sql = "SELECT * FROM khachhang where idKH = $idKH";
        $query = $this->query($sql);
        $row = $query->fetch();
        return $row;
    }

    public function updateTTKH($idKH, $hoTenKH, $soDTKH, $emailKH, $ngaySinhKH, $urlAvatar, $diaChiKH)
    {
        $sql = "UPDATE khachhang SET tenKH = '$hoTenKH', soDTKH = '$soDTKH', ngaySinh = '$ngaySinhKH', avatar = '$urlAvatar', diaChiKH = '$diaChiKH'
                where idKH = $idKH";
        $this->query($sql);
    }
}
