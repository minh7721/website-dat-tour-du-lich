<?php
session_start();
if($_SESSION['status'] != 0){
    header("location: ../login.php");
}
$idKS = $_GET['idKS'];
include("header.php");
include("./config/db.php");
$sql = "SELECT *
FROM khachsan WHERE  idKS = $idKS";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result);
if ($count > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $idKS = $row["idKS"];
$tenKS = $row["tenKS"];
$loaiPhong = $row["loaiPhong"];
$giaPhong = $row["giaPhong"];

$diaChiKS = $row["diaChiKS"];
       
    }
}
?>
<main class="container-sm my-4">
    <?php
    echo '<form action="process-suaKS.php?idKS='.$idKS.'" method="post">'
    ?>
       
        <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">ID khách sạn</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="int" class="form-control" id="idKS" name="idKS" value = "'.$idKS.'" readonly>'
                ?>
                </div>
                </div>
        <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tên KS</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="tenKS" name="tenKS" value = "'.$tenKS.'">'
                ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Loại phòng</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="loaiPhong" name="loaiPhong" value = "'.$loaiPhong.'">'
                ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Giá phòng</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="int" class="form-control" id="giaPhong" name="giaPhong" value = "'.$giaPhong.'">'
                ?>
                </div>
            </div>
           
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Địa chỉ</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="diaChiKS" name="diaChiKS" value = "'.$diaChiKS.'">'
                ?>
                </div>
            </div>
            
        <div class="d-flex justify-content-end my-3">
            <button type="submit" name="suaKS" id="suaKS" class="btn btn-success">Sửa thông tin KS</button>
        </div>
    </form>
</main>
<?php
include("./footer.php")
?>