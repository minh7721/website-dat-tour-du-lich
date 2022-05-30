<?php

$idHoaDon = $_POST["idHoaDon"];
$ngayDatTour = $_POST["ngayDatTour"];
$soLuongNguoi = $_POST["soLuongNguoi"];
$tongTien = $_POST["tongTien"];
$idKhachHang = $_POST["idKhachHang"];
$idTour = $_POST["idTour"];

include("./config/db.php");
$sql = "UPDATE `hoadon` 
SET `idHoaDon`='$idHoaDon',`ngayDatTour`='$ngayDatTour',`soLuongNguoi`='$soLuongNguoi',`tongTien`='$tongTien'
,`idKhachHang`='$idKhachHang',`idTour`='$idTour'";



$result = mysqli_query($connect,$sql);

if($result > 0){
    header("Location: hoadon.php");
}else{
    echo "Lỗi!";
}
mysqli_close($conn);