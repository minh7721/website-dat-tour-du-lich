<?php
include("./header.php");
?>
<main class="container">
        <h2>Thêm thông tin Tour du lịch</h2>
      <form action="process-themtour.php" method="post">
        
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">ID Tour</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="idTour" name="idTour">
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tên Tour</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tenTour" name="tenTour">
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ngày bắt đầu</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="ngayBatDau" name="ngayBatDau">
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ngày kết thúc</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="ngayKetThuc" name="ngayKetThuc">
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Giá ban đầu</label>
                <div class="col-sm-10">
                <input type="int" class="form-control" id="giaBanDau" name="giaBanDau">
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Giá sau giảm</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="giaSauGiam" name="giaSauGiam">
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Đã sử dụng hết</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="daSuDungHet" name="daSuDungHet">
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">ID địa điểm</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idDiaDiem" id="idDiaDiem">
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM diadiem";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value=' . $row["idDiaDiem"] . '>' . $row["idDiaDiem"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                        
                </div>


            </div>
             <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">ID khách sạn</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idKhachSan" id="idKhachSan">
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM khachsan";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value=' . $row["idKS"] . '>' . $row["idKS"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">ID phương tiện</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idPhuongTien" id="idPhuongTien">
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM phuongtien";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value=' . $row["idPT"] . '>' . $row["idPT"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Lịch trình</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="lichTrinh" name="lichTrinh">
                </div>
            </div>
                    <button type="submit" class="btn btn-success">Thêm Tour</button>
                
            </div>
        </div>
        
    </form>
</main>
<?php
include("./footer.php")
?>