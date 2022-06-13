<?php
$idDiaDiem = $_POST["idDiaDiem"];
$tenDiaDiem = $_POST["tenDiaDiem"];
$quocGia = $_POST["quocGia"];
$moTaDiaDiem = $_POST["moTaDiaDiem"];
//$anhDiaDiem = $_POST["anhDiaDiem"];
//$anhDiaDiem2 = $_POST["anhDiaDiem2"];
//$anhDiaDiem3 = $_POST["anhDiaDiem3"];
$anhDiaDiem = basename($_FILES['anhDiaDiem']['name']);
$anhDiaDiem2 = basename($_FILES['anhDiaDiem2']['name']);
$anhDiaDiem3 = basename($_FILES['anhDiaDiem3']['name']);
 //upload file
 
 $fileimg = "../customer/public/images/diadiem/";

 $fileanhDiaDiem = $fileimg . $anhDiaDiem;
 $fileanhDiaDiem2 = $fileimg . $anhDiaDiem2;
 $fileanhDiaDiem3 = $fileimg . $anhDiaDiem3;


 
//$anhDiaDiem = $_FILES["anhDiaDiem"]["name"];
//$anhDiaDiem_tmp = $_FILES["anhDiaDiem"]["tmp_name"];
include("./config/db.php");
$sql = "INSERT INTO `diadiem`(`idDiaDiem`, `tenDiaDiem`, `quocGia`,`moTaDiaDiem`, `anhDiaDiem`, `anhDiaDiem2`, `anhDiaDiem3`) 
VALUES ('$idDiaDiem','$tenDiaDiem','$quocGia','$moTaDiaDiem','$fileanhDiaDiem','$fileanhDiaDiem2','$fileanhDiaDiem3')";
echo $sql;
$result = mysqli_query($connect,$sql);
move_uploaded_file($_FILES["anhDiaDiem"]["tmp_name"], $fileanhDiaDiem);
move_uploaded_file($_FILES["anhDiaDiem2"]["tmp_name"], $fileanhDiaDiem);
move_uploaded_file($_FILES["anhDiaDiem3"]["tmp_name"], $fileanhDiaDiem);
//move_uploaded_file($anhDiaDiem_tmp,'img/'.$anhDiaDiem);
if($result > 0){
    header("Location: diadiem.php");
}else{
    echo "Lỗi!";
}
mysqli_close($connect);