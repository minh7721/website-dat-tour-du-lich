<?php
$idPT = $_POST["idPT"];
$loaiPhuongTien = $_POST["loaiPhuongTien"];
$tenPhuongTien = $_POST["tenPhuongTien"];
$moTaPT = $_POST["moTaPT"];
//$anhPT = $_POST["anhPT"];
$anhPT = basename($_FILES['anhPT']['name']);
 //upload file
 
 $fileimg = "../customer/public/images/phuongtien/";

 $fileanhPT = $fileimg . $anhPT;


include("./config/db.php");
$sql = "INSERT INTO `phuongtien`(`idPT`, `loaiPhuongTien`, `tenPhuongTien`,`moTaPT`, `anhPT`) 
VALUES ('$idPT','$loaiPhuongTien','$tenPhuongTien','$moTaPT','$fileanhPT')";
echo $sql;
$result = mysqli_query($connect,$sql);
move_uploaded_file($_FILES["anhPT"]["tmp_name"], $fileanhPT);
if($result > 0){
    header("Location: PT.php");
}else{
    echo "Lỗi!";
}
mysqli_close($connect);