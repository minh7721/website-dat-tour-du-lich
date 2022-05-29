<?php
include("./header.php");
?>
<main class="container">
        <h2>Thêm hoá đơn</h2>
      <form action="process-themhoadon.php" method="post">
        
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">ID hoá đơn</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="idHoaDon" name="idHoaDon">
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ngày đặt tour</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="ngayDatTour" name="ngayDatTour">
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Số lượng người</label>
                <div class="col-sm-10">
                <input type="int" class="form-control" id="soLuongNguoi" name="soLuongNguoi">
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tổng tiền</label>
                <div class="col-sm-10">
                <input type="int" class="form-control" id="tongTien" name="tongTien">
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">ID khách hàng</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idKhachHang" id="idKhachHang">
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM khachhang";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value=' . $row["idKH"] . '>' . $row["idKH"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">ID tour</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idTour" id="idTour">
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM tour";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value=' . $row["idTour"] . '>' . $row["idTour"] . '</option>';
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