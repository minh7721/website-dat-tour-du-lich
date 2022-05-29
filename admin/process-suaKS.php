<?php

$idKS = $_POST["idKS"];
$tenKS = $_POST["tenKS"];
$loaiPhong = $_POST["loaiPhong"];
$giaPhong = $_POST["giaPhong"];
$diaChiKS = $_POST["diaChiKS"];

include("./config/db.php");
$sql = "UPDATE `khachsan` 
SET `idKS`='$idKS',`tenKS`='$tenKS',`loaiPhong`='$loaiPhong',`giaPhong`='$giaPhong',`diaChiKS`='$diaChiKS'
WHERE `idKS`='$idKS'";
echo $idKS;
$result = mysqli_query($connect,$sql);

if($result > 0){
    header("Location: KS.php");
}else{
    echo "Lỗi!";
}
mysqli_close($conn);