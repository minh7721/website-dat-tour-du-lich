<?php
session_start();
if($_SESSION['status'] != 0){
    header("location: ../login.php");
}
include("header.php")
?>
<main>
<form action="KS.php" method="get" class="container-md my-3">

    <div class="row align-items-center">
    <input type="text" class="form-control" id="sKS" name="sKS" placeholder="Nhập từ khoá">
    
        <div class="d-flex justify-content-end my-3">
            <button class="btn btn-success" type="submit">Tìm kiếm</button>
        </div>
    </div>
</form>
    <div class="container-sm my-4">
        <a href="themKS.php" class="btn btn-success">Thêm KS mới</a>
    </div>
    <div class="container-sm my-3">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Mã khách sạn</th>
                <th scope="col">Tên khách sạn</th>
                <th scope="col">Loại phòng</th>
                <th scope="col">Giá phòng</th>
                <th scope="col">Địa chỉ</th>
               
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("./config/db.php");
                if (isset($_GET["sKS"]) && !empty($_GET["sKS"]))
                {
                $key = $_GET["sKS"];
                $sql = "SELECT * FROM khachsan WHERE idKS LIKE '%$key%' OR tenKS LIKE '%$key%' OR loaiPhong LIKE '%$key%' 
                OR giaPhong LIKE '%$key%' OR diaChiKS LIKE '%$key%' "; 
                }
               
                
            else {
                $sql = "SELECT * FROM khachsan"; }
                $result = mysqli_query($connect, $sql);
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['idKS'] . '</th>';
                        echo '<td>' . $row['tenKS'] . '</td>';
                        echo '<td>' . $row['loaiPhong'] . '</td>';
                        echo '<td>' . $row['giaPhong'] . '</td>';
                        echo '<td>' . $row['diaChiKS'] . '</td>';
                        echo '<td><a href="suaKS.php?idKS=' . $row['idKS'] . '"><i class="fas fa-edit"></i></a></td>';
                        echo '<td><a href="xoaKS.php?idKS=' . $row['idKS'] . '"><i class="fas fa-trash-alt"></i></a></td>';
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