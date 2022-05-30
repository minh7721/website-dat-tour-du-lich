<?php

$idHoaDon = $_GET['idHoaDon'];
$connect = mysqli_connect('localhost', 'root', '', 'travel');
if (!$connect) {
    die("Không thể kết nối");
}
$sql = "DELETE FROM hoadon WHERE idHoaDon = $idHoaDon";
echo $sql;
$result = mysqli_query($connect, $sql);
if ($result > 0) {
    header("Location: hoadon.php");
} else {
    echo "Lỗi!";
}
mysqli_close($connect);
