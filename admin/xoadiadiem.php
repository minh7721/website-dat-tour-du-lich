<?php
$idDD = $_GET['idDiaDiem'];
$connect = mysqli_connect('localhost', 'root', '', 'travel');
if (!$connect) {
    die("Không thể kết nối");
}
$sql = "DELETE FROM diadiem WHERE idDiaDiem = $idDD";
echo $sql;
$result = mysqli_query($connect, $sql);
if ($result > 0) {
    header("Location: diadiem.php");
} else {
    echo "Lỗi!";
}
mysqli_close($connect);
