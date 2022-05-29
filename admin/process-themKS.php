<?php
$idKS = $_POST["idKS"];
$tenKS = $_POST["tenKS"];
$loaiPhong = $_POST["loaiPhong"];
$giaPhong = $_POST["giaPhong"];
$diaChiKS = $_POST["diaChiKS"];

include("./config/db.php");
$sql = "INSERT INTO `khachsan`(`idKS`, `tenKS`, `loaiPhong`,`giaPhong`, `diaChiKS`) 
VALUES ('$idKS','$tenKS','$loaiPhong','$giaPhong','$diaChiKS')";
echo $sql;
$result = mysqli_query($connect,$sql);

if($result > 0){
    header("Location: KS.php");
}else{
    echo "Lỗi!";
}
mysqli_close($connect);