<?php
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
                <th scope="col">Đã sử dụng hết</th>
                <th scope="col">ID địa điểm</th>
                <th scope="col">ID khách sạn</th>
                <th scope="col">ID phương tiện</th>
                <th scope="col">Lịch trình</th>
               
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                
                </tr>
            </thead>
            <tbody>
                <?php
                include("./config/db.php");

                $sql = "SELECT *
                FROM tour Where idTour= $idTour";
                $result = mysqli_query($connect, $sql);
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['idTour'] . '</th>';
                        echo '<td>' . $row['tenTour'] . '</td>';
                        echo '<td>' . $row['ngayBatDau'] . '</td>';
                        echo '<td>' . $row['ngayKetThuc'] . '</td>';
                        echo '<td>' . $row['giaBanDau'] . '</td>';
                        echo '<td>' . $row['giaSauGiam'] . '</td>';
                        echo '<td>' . $row['daSuDungHet'] . '</td>';
                        echo '<td>' . $row['idDiaDiem'] . '</td>';
                        echo '<td>' . $row['idKhachSan'] . '</td>';
                        echo '<td>' . $row['idPhuongTien'] . '</td>';
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