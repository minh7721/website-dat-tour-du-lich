<?php
session_start();
if($_SESSION['status'] != 0){
    header("location: ../login.php");
}
include("header.php")
?>
<form action="hoadon.php" method="get" class="container-md my-3">

<div class="row align-items-center">
<input type="text" class="form-control" id="shoadon" name="shoadon" placeholder="Nhập từ khoá">

    <div class="d-flex justify-content-end my-3">
        <button class="btn btn-success" type="submit">Tìm kiếm</button>
    </div>
</div>
</form>

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
                <th scope="col">Tên khách hàng</th>
                <th scope="col">ID Tour</th>
                <th scope="col">Tên Tour</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("./config/db.php");

                if (isset($_GET["shoadon"]) && !empty($_GET["shoadon"]))
                {
                $key = $_GET["shoadon"];
                $sql = "SELECT * FROM hoadon,khachhang WHERE idHoaDon LIKE '%$key%' OR ngayDatTour LIKE '%$key%' OR soLuongNguoi LIKE '%$key%'
                OR tongTien LIKE '%$key%' OR idKhachHang LIKE '%$key%' OR idTour LIKE '%$key%' OR tenKH LIKE '%$key%' and idkhachhang=idKH "; 
                }
               
                
            else {
                $sql = "SELECT * FROM hoadon,khachhang,tour WHERE idkhachhang=idKH AND tour.idTour=hoadon.idTour"; }
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
                        echo '<td>' . $row['tenKH'] . '</td>';
                        echo '<td>' . $row['idTour'] . '</td>';
                        echo '<td>' . $row['tenTour'] . '</td>';
                        
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