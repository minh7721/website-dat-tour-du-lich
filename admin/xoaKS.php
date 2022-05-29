<?php

$idKS = $_GET['idKS'];
$connect = mysqli_connect('localhost', 'root', '', 'travel');
if (!$connect) {
    die("Không thể kết nối");
}
$sql = "DELETE FROM khachsan WHERE idKS = $idKS";
echo $sql;
$result = mysqli_query($connect, $sql);
if ($result > 0) {
    header("Location: KS.php");
} else {
    echo "Lỗi!";
}
mysqli_close($connect);
