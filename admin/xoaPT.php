<?php

$idPT = $_GET['idPT'];
$connect = mysqli_connect('localhost', 'root', '', 'travel');
if (!$connect) {
    die("Không thể kết nối");
}
$sql = "DELETE FROM phuongtien WHERE idPT = $idPT";
echo $sql;
$result = mysqli_query($connect, $sql);
if ($result > 0) {
    header("Location: PT.php");
} else {
    echo "Lỗi!";
}
mysqli_close($connect);
