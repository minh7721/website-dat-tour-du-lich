<?php

$idTour = $_POST["idTour"];
$tenTour = $_POST["tenTour"];
$ngayBatDau = $_POST["ngayBatDau"];
$ngayKetThuc = $_POST["ngayKetThuc"];
$giaBanDau = $_POST["giaBanDau"];
$giaSauGiam = $_POST["giaSauGiam"];
$daSuDungHet = $_POST["daSuDungHet"];
$idDiaDiem = $_POST["idDiaDiem"];
$idKhachSan = $_POST["idKhachSan"];
$idPhuongTien = $_POST["idPhuongTien"];
$lichTrinh = $_POST["lichTrinh"];
include("./config/db.php");
$sql = "UPDATE `tour` 
SET `idTour`='$idTour',`tenTour`='$tenTour',`ngayBatDau`='$ngayBatDau',`ngayKetThuc`='$ngayKetThuc'
,`giaBanDau`='$giaBanDau',`giaSauGiam`='$giaSauGiam',`daSuDungHet`='$daSuDungHet',`idDiaDiem`='$idDiaDiem'
,`idKhachSan`='$idKhachSan',`idPhuongTien`='$idPhuongTien',`lichTrinh`='$lichTrinh'
WHERE `idTour`='$idTour'";


echo $idTour;
$result = mysqli_query($connect,$sql);

if($result > 0){
    header("Location: Tour.php");
}else{
    echo "Lỗi!";
}
mysqli_close($conn);