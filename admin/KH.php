<?php
session_start();
if($_SESSION['status'] != 0){
    header("location: ../login.php");
}
include("header.php")
?>
<form action="KH.php" method="get" class="container-md my-3">

    <div class="row align-items-center">
    <input type="text" class="form-control" id="sKH" name="sKH" placeholder="Nhập từ khoá">
    
        <div class="d-flex justify-content-end my-3">
            <button class="btn btn-success" type="submit">Tìm kiếm</button>
        </div>
    </div>
</form>


<main>
    <div class="container-sm my-4">
        <a href="themKH.php" class="btn btn-success">Thêm KH mới</a>
    </div>
    <div class="container-sm my-3">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Mã khách hàng</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Email</th>
                <th scope="col">SDT</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Địa chỉ</th>
               
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("./config/db.php");
                if (isset($_GET["sKH"]) && !empty($_GET["sKH"]))
                {
                $key = $_GET["sKH"];
                $sql = "SELECT * FROM khachhang WHERE idKH LIKE '%$key%' OR tenKH LIKE '%$key%' OR emailKH LIKE '%$key%' 
                OR soDTKH LIKE '%$key%' OR ngaySinh LIKE '%$key%' OR diachiKH LIKE '%$key%' "; 
                }
               
                
            else {
                $sql = "SELECT * FROM khachhang"; }
                $result = mysqli_query($connect, $sql);
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['idKH'] . '</th>';
                        echo '<td>' . $row['tenKH'] . '</td>';
                        echo '<td>' . $row['emailKH'] . '</td>';
                        echo '<td>' . $row['soDTKH'] . '</td>';
                        echo '<td>' . $row['ngaySinh'] . '</td>';
                        echo '<td>' . $row['diaChiKH'] . '</td>';
                        echo '<td><a href="suaKH.php?idKH=' . $row['idKH'] . '"><i class="fas fa-edit"></i></a></td>';
                        echo '<td><a href="xoaKH.php?idKH=' . $row['idKH'] . '"><i class="fas fa-trash-alt"></i></a></td>';
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