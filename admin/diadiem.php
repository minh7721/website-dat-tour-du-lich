<?php
include("header.php")
?>
<main>
    <div class="container-sm my-4">
        <a href="themdiadiem.php" class="btn btn-success">Thêm địa điểm mới</a>
    </div>
    <div class="container-sm my-3">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID địa điểm</th>
                <th scope="col">Tên địa điểm</th>
                <th scope="col">Quốc gia</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Ảnh</th>

               
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("./config/db.php");

                $sql = "SELECT * FROM diadiem";
                $result = mysqli_query($connect, $sql);
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['idDiaDiem'] . '</th>';
                        echo '<td>' . $row['tenDiaDiem'] . '</td>';
                        echo '<td>' . $row['quocGia'] . '</td>';
                        echo '<td>' . $row['moTaDiaDiem'] . '</td>';
                        echo '<td>' . '<img style="width: 100px" src="'.$row['anhDiaDiem'].'"><img/>' . '</td>';
                        echo '<td><a href="suadiadiem.php?idDiaDiem=' . $row['idDiaDiem'] . '"><i class="fas fa-edit"></i></a></td>';
                        echo '<td><a href="xoadiadiem.php?idDiaDiem=' . $row['idDiaDiem'] . '"><i class="fas fa-trash-alt"></i></a></td>';
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