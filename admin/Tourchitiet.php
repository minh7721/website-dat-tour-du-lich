<?php
session_start();
if($_SESSION['status'] != 0){
    header("location: ../login.php");
}
if (isset($_GET["idTour"]))
$idTour = $_GET["idTour"];
else
$idTour = "";
include("header.php")
?>
<main>
    <div class="container-sm my-4">
        <a href="themtour.php" class="btn btn-success">Thêm Tour mới</a>
    </div>
    <div class="container-sm my-3">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID Tour</th>
                <th scope="col">Tên Tour</th>
                <th scope="col">Ngày bắt đầu</th>
                <th scope="col">Ngày kết thúc</th>
                <th scope="col">Giá ban đầu</th>
                <th scope="col">Giá sau giảm</th>
                <th scope="col">Có thể triển khai</th>
                <th scope="col">Địa điểm</th>
                <th scope="col">Khách sạn</th>
                <th scope="col">Phương tiện</th>
                <th scope="col">Lịch trình</th>
               
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                
                </tr>
            </thead>
            <tbody>
                <?php
                include("./config/db.php");

                $sql = "SELECT *
                FROM tour,khachsan,diadiem,phuongtien Where idTour= $idTour AND tour.idkhachsan=khachsan.idKS AND
                tour.idDiaDiem=diadiem.idDiaDiem AND tour.idPhuongTien=phuongtien.idPT ";
                $result = mysqli_query($connect, $sql);
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['idTour'] . '</th>';
                        echo '<td>' . $row['tenTour'] . '</td>';
                        echo '<td>' . $row['ngayBatDau'] . '</td>';
                        echo '<td>' . $row['ngayKetThuc'] . '</td>';
                        echo '<td class="priceX">' . $row['giaBanDau'] . '</td>';
                        echo '<td class="priceX">' . $row['giaSauGiam'] . '</td>';
                        echo '<td>' . $row['daSuDungHet'] . '</td>';
                        echo '<td>' . $row['tenDiaDiem'] . '</td>';
                        echo '<td>' . $row['tenKS'] . '</td>';
                        echo '<td>' . $row['tenPhuongTien'] . '</td>';
                        echo '<td>' . $row['lichTrinh'] . '</td>';
                        echo '<td><a href="suatour.php?idTour=' . $row['idTour'] . '"><i class="fas fa-edit"></i></a></td>';
                        echo '<td><a href="xoatour.php?idTour=' . $row['idTour'] . '"><i class="fas fa-trash-alt"></i></a></td>';
                        

                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
<?php
include("footer.php")
?>