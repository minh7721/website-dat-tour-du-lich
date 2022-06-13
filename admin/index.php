<?php

include("header.php")
?>
<form action="Tour.php" method="get" class="container-md my-3">

<div class="row align-items-center">
<input type="text" class="form-control" id="sTour" name="sTour" placeholder="Nhập từ khoá">

    <div class="d-flex justify-content-end my-3">
        <button class="btn btn-success" type="submit">Tìm kiếm</button>
    </div>
</div>
</form>

<main>
    <div class="container-sm my-4">
        <a href="themtour.php" class="btn btn-success">Thêm Tour mới</a>
    </div>
    <div class="container-sm my-3">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID Tour</th>
                <th scope="col">Tên Tour</th>
                <th scope="col">Ngày bắt đầu</th>
                <th scope="col">Ngày kết thúc</th>
                <th scope="col">Giá ban đầu</th>
                <th scope="col">Giá sau giảm</th>
                <th scope="col">Đã sử dụng hết</th>
               
               
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                    <th scope="col">Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("./config/db.php");
                if (isset($_GET["sTour"]) && !empty($_GET["sTour"]))
                {
                $key = $_GET["sTour"];
                $sql = "SELECT * FROM tour WHERE idTour LIKE '%$key%' OR tenTour LIKE '%$key%' OR ngayBatDau LIKE '%$key%' 
                OR ngayKetThuc LIKE '%$key%' OR giaBanDau LIKE '%$key%' OR giaSauGiam LIKE '%$key%' 
                OR daSuDungHet LIKE '%$key%' "; 
                }else{
                $sql = "SELECT * FROM tour";}
                $result = mysqli_query($connect, $sql);
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['idTour'] . '</th>';
                        echo '<td>' . $row['tenTour'] . '</td>';
                        echo '<td>' . $row['ngayBatDau'] . '</td>';
                        echo '<td>' . $row['ngayKetThuc'] . '</td>';
                        echo '<td>' . $row['giaBanDau'] . '</td>';
                        echo '<td>' . $row['giaSauGiam'] . '</td>';
                        echo '<td>' . $row['daSuDungHet'] . '</td>';
                        
                        
                        echo '<td><a href="suatour.php?idTour=' . $row['idTour'] . '"><i class="fas fa-edit"></i></a></td>';
                        echo '<td><a href="xoatour.php?idTour=' . $row['idTour'] . '"><i class="fas fa-trash-alt"></i></a></td>';
                        echo '<td><a href="Tourchitiet.php?idTour=' . $row['idTour'] . '">Chi tiết</a></td>';

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