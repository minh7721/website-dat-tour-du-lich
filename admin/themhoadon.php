<?php
session_start();
if($_SESSION['status'] != 0){
    header("location: ../login.php");
}
include("./header.php");
?>
<main class="container">
        <h2>Thêm hoá đơn</h2>
      <form action="process-themhoadon.php" method="post">
        
          

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ngày đặt tour</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="ngayDatTour" name="ngayDatTour" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Số lượng người</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="soLuongNguoi" name="soLuongNguoi" min="1" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tổng tiền</label>
                <div class="col-sm-10">
                <input type="int" class="form-control" id="tongTien" name="tongTien" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Khách hàng</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idKhachHang" id="idKhachHang" required>
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM khachhang";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value=' . $row["idKH"] . '>' . $row["tenKH"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tên tour</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idTour" id="idTour" required>
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM tour";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value=' . $row["idTour"] . '>' . $row["tenTour"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            
           
                    <button type="submit" class="btn btn-success">Thêm hoá đơn</button>
                
            </div>
        </div>
        
    </form>
</main>
<?php
include("./footer.php")
?>