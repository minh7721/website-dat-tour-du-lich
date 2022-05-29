<?php
$idPT = $_POST["idPT"];
$loaiPhuongTien = $_POST["loaiPhuongTien"];
$tenPhuongTien = $_POST["tenPhuongTien"];
$moTaPT = $_POST["moTaPT"];
$anhPT = $_POST["anhPT"];


include("./config/db.php");
$sql = "INSERT INTO `phuongtien`(`idPT`, `loaiPhuongTien`, `tenPhuongTien`,`moTaPT`, `anhPT`) 
VALUES ('$idPT','$loaiPhuongTien','$tenPhuongTien','$moTaPT','$anhPT')";
echo $sql;
$result = mysqli_query($connect,$sql);

if($result > 0){
    header("Location: PT.php");
}else{
    echo "Lỗi!";
}
mysqli_close($connect);