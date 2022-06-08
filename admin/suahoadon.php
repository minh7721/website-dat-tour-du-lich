<?php
$idHoaDon = $_GET['idHoaDon'];
include("header.php");
include("./config/db.php");
$sql = "SELECT *
FROM hoadon WHERE  idHoaDon = $idHoaDon";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result);
if ($count > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  
       
$idHoaDon = $row["idHoaDon"];
$ngayDatTour = $row["ngayDatTour"];
$soLuongNguoi = $row["soLuongNguoi"];
$tongTien = $row["tongTien"];
$idKhachHang = $row["idKhachHang"];
$idTour = $row["idTour"];
    }
}
?>
<main class="container-sm my-4">
    <?php
    echo '<form action="process-suahoadon.php?idHoaDon='.$idHoaDon.'" method="post">'
    ?>
       
        <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">ID hoá đơn</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="idHoaDon" name="idHoaDon" value = "'.$idHoaDon.'" readonly>'
                ?>
                </div>
                </div>
                <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ngày đặt Tour</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="date" class="form-control" id="ngayDatTour" name="ngayDatTour" value = "'.$ngayDatTour.'">'
                ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Số lượng người</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="number" class="form-control" id="soLuongNguoi" name="soLuongNguoi" value = "'.$soLuongNguoi.'" min="1">'
                ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tổng tiền</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="number" class="form-control" id="tongTien" name="tongTien" value = "'.$tongTien.'">'
                ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Khách hàng</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idKhachHang" id="idKhachHang">
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM khachhang";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($row["idKH"] == $idKhachHang)
                                    echo '<option value=' . $row["idKH"] . ' selected = "selected">' . $row["tenKH"] . '</option>';
                                else
                                    echo '<option value=' . $row["idKH"] . ' >' . $row["tenKH"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tên Tour</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idTour" id="idTour">
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM tour";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($row["idTour"] == $idTour)
                                    echo '<option value=' . $row["idTour"] . ' selected = "selected">' . $row["tenTour"] . '</option>';
                                else
                                    echo '<option value=' . $row["idTour"] . ' >' . $row["tenTour"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
           
            
        <div class="d-flex justify-content-end my-3">
            <button type="submit" name="suatour" id="suatour" class="btn btn-success">Sửa hoá đơn</button>
        </div>
    </form>
</main>
<?php
include("./footer.php")
?>