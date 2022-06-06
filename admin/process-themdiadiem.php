<?php
$idDiaDiem = $_POST["idDiaDiem"];
$tenDiaDiem = $_POST["tenDiaDiem"];
$quocGia = $_POST["quocGia"];
$moTaDiaDiem = $_POST["moTaDiaDiem"];
$anhDiaDiem = $_POST["anhDiaDiem"];
$anhDiaDiem2 = $_POST["anhDiaDiem2"];
$anhDiaDiem3 = $_POST["anhDiaDiem3"];
//$anhDiaDiem = $_FILES["anhDiaDiem"]["name"];
//$anhDiaDiem_tmp = $_FILES["anhDiaDiem"]["tmp_name"];
include("./config/db.php");
$sql = "INSERT INTO `diadiem`(`idDiaDiem`, `tenDiaDiem`, `quocGia`,`moTaDiaDiem`, `anhDiaDiem`, `anhDiaDiem2`, `anhDiaDiem3`) 
VALUES ('$idDiaDiem','$tenDiaDiem','$quocGia','$moTaDiaDiem','$anhDiaDiem','$anhDiaDiem2','$anhDiaDiem3')";
echo $sql;
$result = mysqli_query($connect,$sql);
move_uploaded_file($anhDiaDiem_tmp,'img/'.$anhDiaDiem);
if($result > 0){
    header("Location: diadiem.php");
}else{
    echo "Lỗi!";
}
mysqli_close($connect);