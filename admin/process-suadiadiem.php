<?php

$idDiaDiem = $_POST["idDiaDiem"];
$tenDiaDiem = $_POST["tenDiaDiem"];
$quocGia = $_POST["quocGia"];
$moTaDiaDiem = $_POST["moTaDiaDiem"];
$anhDiaDiem = $_POST["anhDiaDiem"];

include("./config/db.php");
$sql = "UPDATE `diadiem` 
SET `idDiaDiem`='$idDiaDiem',`tenDiaDiem`='$tenDiaDiem',`quocGia`='$quocGia',`moTaDiaDiem`='$moTaDiaDiem',`anhDiaDiem`='$anhDiaDiem'
WHERE `idDiaDiem`='$idDiaDiem'";
echo $idDiaDiem;
$result = mysqli_query($connect,$sql);

if($result > 0){
    header("Location: diadiem.php");
}else{
    echo "Lỗi!";
}
mysqli_close($conn);