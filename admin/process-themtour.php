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
$sql = "INSERT INTO `tour`(`idTour`, `tenTour`, `ngayBatDau`,`ngayKetThuc`,`giaBanDau`,`giaSauGiam`, `daSuDungHet`,
`idDiaDiem`,`idKhachSan`, `idPhuongTien`, `lichTrinh`) 
VALUES ('$idTour','$tenTour','$ngayBatDau','$ngayKetThuc','$giaBanDau','$giaSauGiam',
'$daSuDungHet','$idDiaDiem','$idKhachSan','$idPhuongTien','$lichTrinh')";
echo $sql;
$result = mysqli_query($connect,$sql);

if($result > 0){
    header("Location: Tour.php");
}else{
    echo "Lỗi!";
}
mysqli_close($connect);