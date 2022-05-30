<?php

$idKH = $_GET['idKH'];
$connect = mysqli_connect('localhost', 'root', '', 'travel');
if (!$connect) {
    die("Không thể kết nối");
}
$sql = "DELETE FROM khachhang WHERE idKH = $idKH";
echo $sql;
$result = mysqli_query($connect, $sql);
if ($result > 0) {
    header("Location: KH.php");
} else {
    echo "Lỗi!";
}
mysqli_close($connect);
