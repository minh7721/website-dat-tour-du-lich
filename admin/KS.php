<?php
include("header.php")
?>
<main>
<form action="chiTietKhoaHoc.php" method="get" class="container-md my-3">
    <div class="row align-items-center">
        <div class="form-group col">
            <label for="nam" class="row-sm-2 row-form-label">Năm</label>
            <div class="row">
                <select class="form-select" aria-label="Default select example" name="MaKH" id="MaKH">
                    <?php
                    $connect1 = mysqli_connect('localhost', 'root', '', 'baitaploncnw');
                    if (!$connect1) {
                        die("Không thể kết nối");
                    }
                    $sql1 = "SELECT * FROM khoahoc";
                    $result1 = mysqli_query($connect1, $sql1);
                    $count1 = mysqli_num_rows($result1);
                    if ($count1 > 0) {
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                            echo '<option value="' . $row1["MaKH"] . '">';
                            echo 'Năm: ' . $row1["Ten"] . ' | Kỳ ' . $row1["Ky"];
                            echo '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
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

                $sql = "SELECT *
                FROM khachsan";
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