<?php
$idKH = $_POST["idKH"];
$tenKH = $_POST["tenKH"];
$emailKH = $_POST["emailKH"];
$soDTKH = $_POST["soDTKH"];
$ngaySinh = $_POST["ngaySinh"];
$diaChiKH = $_POST["diaChiKH"];

include("./config/db.php");
$sql = "INSERT INTO `khachhang`(`idKH`, `tenKH`, `emailKH`,`soDTKH`, `ngaySinh`, `diaChiKH`) 
VALUES ('$idKH','$tenKH','$emailKH','$soDTKH','$ngaySinh','$diaChiKH')";
echo $sql;
$result = mysqli_query($connect,$sql);

if($result > 0){
    header("Location: KH.php");
}else{
    echo "Lỗi!";
}
mysqli_close($connect);