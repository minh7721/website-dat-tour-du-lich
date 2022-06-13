<?php
session_start();
if($_SESSION['status'] != 0){
    header("location: ../login.php");
}
$idPT = $_GET['idPT'];
include("header.php");
include("./config/db.php");
$sql = "SELECT *
FROM phuongtien WHERE  idPT = $idPT";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result);
if ($count > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $idPT = $row["idPT"];
$loaiPhuongTien = $row["loaiPhuongTien"];
$tenPhuongTien = $row["tenPhuongTien"];
$moTaPT = $row["moTaPT"];
$anhPT = $row["anhPT"];

       
    }
}
?>
<main class="container-sm my-4">
    <?php
    echo '<form action="process-suaPT.php?idPT='.$idPT.'" method="post">'
    ?>
       
        <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">ID phương tiện</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="int" class="form-control" id="idPT" name="idPT" value = "'.$idPT.'" readonly>'
                ?>
                </div>
                </div>
        <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Loại phương tiện</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="loaiPhuongTien" name="loaiPhuongTien" value = "'.$loaiPhuongTien.'">'
                ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tên phương tiện</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="tenPhuongTien" name="tenPhuongTien" value = "'.$tenPhuongTien.'">'
                ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Mô tả phương tiện</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="int" class="form-control" id="moTaPT" name="moTaPT" value = "'.$moTaPT.'">'
                ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ảnh phương tện</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="anhPT" name="anhPT" value = "'.$anhPT.'">'
                ?>
                </div>
            </div>
           
            
        <div class="d-flex justify-content-end my-3">
            <button type="submit" name="suaPT" id="suaPT" class="btn btn-success">Sửa phương tiện</button>
        </div>
    </form>
</main>
<?php
include("./footer.php")
?>