<?php
include("header.php")
?>
<form action="diadiem.php" method="get" class="container-md my-3">

<div class="row align-items-center">
<input type="text" class="form-control" id="sdiadiem" name="sdiadiem" placeholder="Nhập từ khoá">

    <div class="d-flex justify-content-end my-3">
        <button class="btn btn-success" type="submit">Tìm kiếm</button>
    </div>
</div>
</form>

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
                
                <th scope="col">Ảnh</th>

               
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                    <th scope="col">Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("./config/db.php");

                if (isset($_GET["sdiadiem"]) && !empty($_GET["sdiadiem"]))
                {
                $key = $_GET["sdiadiem"];
                $sql = "SELECT * FROM diadiem WHERE idDiaDiem LIKE '%$key%' OR tenDiaDiem LIKE '%$key%' OR quocGia LIKE '%$key%' "; 
                }
               
                
            else {
                $sql = "SELECT * FROM diadiem"; }
                $result = mysqli_query($connect, $sql);
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['idDiaDiem'] . '</th>';
                        echo '<td>' . $row['tenDiaDiem'] . '</td>';
                        echo '<td>' . $row['quocGia'] . '</td>';
                        echo '<td>' . '<img style="width: 100px" src="'.$row['anhDiaDiem'].'"><img/>' . '</td>';
                        echo '<td><a href="suadiadiem.php?idDiaDiem=' . $row['idDiaDiem'] . '"><i class="fas fa-edit"></i></a></td>';
                        echo '<td><a href="xoadiadiem.php?idDiaDiem=' . $row['idDiaDiem'] . '"><i class="fas fa-trash-alt"></i></a></td>';
                        echo '<td><a href="diadiemchitiet.php?idDiaDiem=' . $row['idDiaDiem'] . '">Chi tiết</a></td>';
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