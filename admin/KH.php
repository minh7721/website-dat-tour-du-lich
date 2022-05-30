<?php
include("header.php")
?>
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

                $sql = "SELECT *
                FROM khachhang";
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