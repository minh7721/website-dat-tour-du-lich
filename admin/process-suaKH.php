<?php

$idKH = $_POST["idKH"];
$tenKH = $_POST["tenKH"];
$emailKH = $_POST["emailKH"];
$soDTKH = $_POST["soDTKH"];
$ngaySinh = $_POST["ngaySinh"];
$diaChiKH = $_POST["diaChiKH"];

include("./config/db.php");
$sql = "UPDATE `khachhang` 
SET `idKH`='$idKH',`tenKH`='$tenKH',`emailKH`='$emailKH',`soDTKH`='$soDTKH',`ngaySinh`='$ngaySinh',`diaChiKH`='$diaChiKH'
WHERE `idKH`='$idKH'";
echo $idKH;
$result = mysqli_query($connect,$sql);

if($result > 0){
    header("Location: KH.php");
}else{
    echo "Lỗi!";
}
mysqli_close($conn);