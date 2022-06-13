<?php
session_start();
if($_SESSION['status'] != 0){
    header("location: ../login.php");
}
$idDiaDiem = $_GET['idDiaDiem'];
include("header.php");
include("./config/db.php");
$sql = "SELECT *
FROM diadiem WHERE  idDiaDiem = $idDiaDiem";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result);
if ($count > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
$idDiaDiem = $row["idDiaDiem"];
$tenDiaDiem = $row["tenDiaDiem"];
$quocGia = $row["quocGia"];
$moTaDiaDiem = $row["moTaDiaDiem"];
$anhDiaDiem = $row["anhDiaDiem"];
$anhDiaDiem2 = $row["anhDiaDiem2"];
$anhDiaDiem3 = $row["anhDiaDiem3"];
    }
}
?>
<main class="container-sm my-4">
    <?php
    echo '<form action="process-suadiadiem.php?idDiaDiem='.$idDiaDiem.'" method="post">'
    ?>
       
        <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">ID Địa Điểm</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="idDiaDiem" name="idDiaDiem" value = "'.$idDiaDiem.'" readonly>'
                ?>
                </div>
                </div>
        <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tên Địa Điểm</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="tenDiaDiem" name="tenDiaDiem" value = "'.$tenDiaDiem.'">'
                ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Quốc gia</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="quocGia" name="quocGia" value = "'.$quocGia.'">'
                ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Mô tả Địa Điểm</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="moTaDiaDiem" name="moTaDiaDiem" value = "'.$moTaDiaDiem.'">'
                ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ảnh</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="anhDiaDiem" name="anhDiaDiem" value = "'.$anhDiaDiem.'">'
                ?>

                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ảnh 2</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="anhDiaDiem2" name="anhDiaDiem2" value = "'.$anhDiaDiem2.'">'
                ?>

                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ảnh 3</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="anhDiaDiem3" name="anhDiaDiem3" value = "'.$anhDiaDiem3.'">'
                ?>

                </div>
            </div>
            
            
        <div class="d-flex justify-content-end my-3">
            <button type="submit" name="suadiadiem" id="suadiadiem" class="btn btn-success">Sửa thông tin địa điểm</button>
        </div>
    </form>
</main>
<?php
include("./footer.php")
?>