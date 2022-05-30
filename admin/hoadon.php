<?php
include("header.php")
?>
<main>
    <div class="container-sm my-4">
        <a href="themhoadon.php" class="btn btn-success">Thêm hoá đơn mới</a>
    </div>
    <div class="container-sm my-3">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID hoá đơn</th>
                <th scope="col">Ngày đặt tour</th>
                <th scope="col">Số lượng người</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">ID khách hàng</th>
                <th scope="col">ID tour</th>
               
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("./config/db.php");

                $sql = "SELECT *
                FROM hoadon";
                $result = mysqli_query($connect, $sql);
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['idHoaDon'] . '</th>';
                        echo '<td>' . $row['ngayDatTour'] . '</td>';
                        echo '<td>' . $row['soLuongNguoi'] . '</td>';
                        echo '<td>' . $row['tongTien'] . '</td>';
                        echo '<td>' . $row['idKhachHang'] . '</td>';
                        echo '<td>' . $row['idTour'] . '</td>';
                        
                        echo '<td><a href="suahoadon.php?idHoaDon=' . $row['idHoaDon'] . '"><i class="fas fa-edit"></i></a></td>';
                        echo '<td><a href="xoahoadon.php?idHoaDon=' . $row['idHoaDon'] . '"><i class="fas fa-trash-alt"></i></a></td>';
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