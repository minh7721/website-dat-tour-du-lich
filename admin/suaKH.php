<?php
$idKH = $_GET['idKH'];
include("header.php");
include("./config/db.php");
$sql = "SELECT *
FROM khachhang WHERE  idKH = $idKH";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result);
if ($count > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $idKH = $row["idKH"];
$tenKH = $row["tenKH"];
$emailKH = $row["emailKH"];
$soDTKH = $row["soDTKH"];
$ngaySinh = $row["ngaySinh"];
$diaChiKH = $row["diaChiKH"];
       
    }
}
?>
<main class="container-sm my-4">
    <?php
    echo '<form action="process-suaKH.php?idKH='.$idKH.'" method="post">'
    ?>
       
        <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">ID khách hàng</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="int" class="form-control" id="idKH" name="idKH" value = "'.$idKH.'" readonly>'
                ?>
                </div>
                </div>
        <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tên KH</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="tenKH" name="tenKH" value = "'.$tenKH.'">'
                ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="emailKH" name="emailKH" value = "'.$emailKH.'">'
                ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="tel" class="form-control" id="soDTKH" name="soDTKH" value = "'.$soDTKH.'">'
                ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ngày sinh</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="date" class="form-control" id="ngaySinh" name="ngaySinh" value = "'.$ngaySinh.'">'
                ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Địa chỉ</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="diaChiKH" name="diaChiKH" value = "'.$diaChiKH.'">'
                ?>
                </div>
            </div>
            
        <div class="d-flex justify-content-end my-3">
            <button type="submit" name="suaKH" id="suaKH" class="btn btn-success">Sửa thông tin KH</button>
        </div>
    </form>
</main>
<?php
include("./footer.php")
?>