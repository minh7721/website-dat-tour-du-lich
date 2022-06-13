<?php
include("./header.php");
include("./config/db.php");

?>

<main class="container">


        <h2>Thêm thông tin Tour du lịch</h2>
        
      <form action="process-themtour.php" method="post">
        
           

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tên Tour</label>
                <div class="col-sm-10">
                    
                <input type="text" class="form-control" id="tenTour" name="tenTour" required>
                
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ngày bắt đầu</label>
                <div class="col-sm-10">

                <input type="date" class="form-control" id="ngayBatDau" name="ngayBatDau" method="get" required>
                
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ngày kết thúc</label>
                <div class="col-sm-10">
            
                    
                  <input type="date" class="form-control" id="ngayKetThuc" name="ngayKetThuc"    required >
                
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Giá ban đầu</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="giaBanDau" name="giaBanDau" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Giá sau giảm</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="giaSauGiam" name="giaSauGiam" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Có thể triển khai</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="daSuDungHet" name="daSuDungHet" min="0" max="1" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Địa điểm</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idDiaDiem" id="idDiaDiem" required>
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM diadiem";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value=' . $row["idDiaDiem"] . '>' . $row["tenDiaDiem"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                        
                </div>


            </div>
             <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Khách sạn</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idKhachSan" id="idKhachSan" required>
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM khachsan";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value=' . $row["idKS"] . '>' . $row["tenKS"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Phương tiện</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idPhuongTien" id="idPhuongTien" required>
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM phuongtien";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value=' . $row["idPT"] . '>' . $row["tenPhuongTien"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Lịch trình</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="lichTrinh" name="lichTrinh" required>
                </div>
            </div>
                    <button type="submit" class="btn btn-success">Thêm Tour</button>
                
            </div>
        </div>
        
    </form>
    </form>
</main>

<?php
include("./footer.php")
?>
