<?php


$idPT = $_POST["idPT"];
$loaiPhuongTien = $_POST["loaiPhuongTien"];
$tenPhuongTien = $_POST["tenPhuongTien"];
$moTaPT = $_POST["moTaPT"];
$anhPT = $_POST["anhPT"];

include("./config/db.php");
$sql = "UPDATE `phuongtien` 
SET `idPT`='$idPT',`loaiPhuongTien`='$loaiPhuongTien',`tenPhuongTien`='$tenPhuongTien',`moTaPT`='$moTaPT',`anhPT`='$anhPT'
WHERE `idPT`='$idPT'";
echo $idKH;
$result = mysqli_query($connect,$sql);

if($result > 0){
    header("Location: PT.php");
}else{
    echo "Lỗi!";
}
mysqli_close($conn);