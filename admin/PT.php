<?php
include("header.php")
?>
<main>
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
                <th scope="col">Mô tả phương tiện</th>
                <th scope="col">Ảnh phương tiện</th>
               
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("./config/db.php");

                $sql = "SELECT *
                FROM phuongtien";
                $result = mysqli_query($connect, $sql);
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['idPT'] . '</th>';
                        echo '<td>' . $row['loaiPhuongTien'] . '</td>';
                        echo '<td>' . $row['tenPhuongTien'] . '</td>';
                        echo '<td>' . $row['moTaPT'] . '</td>';
                        echo '<td>' . '<img style="width: 100px" src="'.$row['anhPT'].'"><img/>' . '</td>';

                        echo '<td><a href="suaPT.php?idPT=' . $row['idPT'] . '"><i class="fas fa-edit"></i></a></td>';
                        echo '<td><a href="xoaPT.php?idPT=' . $row['idPT'] . '"><i class="fas fa-trash-alt"></i></a></td>';
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