<?php
session_start();
if($_SESSION['status'] != 0){
    header("location: ../login.php");
}
include("header.php")
?>
<main>
<form action="PT.php" method="get" class="container-md my-3">

<div class="row align-items-center">
<input type="text" class="form-control" id="sPT" name="sPT" placeholder="Nhập từ khoá">

    <div class="d-flex justify-content-end my-3">
        <button class="btn btn-success" type="submit">Tìm kiếm</button>
    </div>
</div>
</form>

    <div class="container-sm my-4">
        <a href="themPT.php" class="btn btn-success">Thêm phương tiện mới</a>
    </div>
    <div class="container-sm my-3">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID phương tiện</th>
                <th scope="col">Loại phương tiện</th>
                <th scope="col">Tên phương tiện</th>
            
                <th scope="col">Ảnh phương tiện</th>
               
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                    <th scope="col">Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("./config/db.php");

                if (isset($_GET["sPT"]) && !empty($_GET["sPT"]))
                {
                $key = $_GET["sPT"];
                $sql = "SELECT * FROM phuongtien WHERE idPT LIKE '%$key%' OR loaiPhuongTien LIKE '%$key%' OR tenPhuongTien LIKE '%$key%' "; 
                }
               
                
            else {
                $sql = "SELECT * FROM phuongtien"; }
                $result = mysqli_query($connect, $sql);
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['idPT'] . '</th>';
                        echo '<td>' . $row['loaiPhuongTien'] . '</td>';
                        echo '<td>' . $row['tenPhuongTien'] . '</td>';
                       
                        echo '<td>' . '<img style="width: 100px" src="../customer/'.$row['anhPT'].'"><img/>' . '</td>';

                        echo '<td><a href="suaPT.php?idPT=' . $row['idPT'] . '"><i class="fas fa-edit"></i></a></td>';
                        echo '<td><a href="xoaPT.php?idPT=' . $row['idPT'] . '"><i class="fas fa-trash-alt"></i></a></td>';
                        echo '<td><a href="PTchitiet.php?idPT=' . $row['idPT'] . '">Chi tiết</a></td>';
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