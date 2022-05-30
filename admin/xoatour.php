<?php

$idTour = $_GET['idTour'];
$connect = mysqli_connect('localhost', 'root', '', 'travel');
if (!$connect) {
    die("Không thể kết nối");
}
$sql = "DELETE FROM tour WHERE idTour = $idTour";
echo $sql;
$result = mysqli_query($connect, $sql);
if ($result > 0) {
    header("Location: Tour.php");
} else {
    echo "Lỗi!";
}
mysqli_close($connect);
