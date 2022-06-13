<?php
session_start();
if($_SESSION['status'] != 0){
    header("location: ../login.php");
}
$idTour = $_GET['idTour'];
include("header.php");
include("./config/db.php");
$sql = "SELECT *
FROM tour WHERE  idTour = $idTour";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result);
if ($count > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  
       
$idTour = $row["idTour"];
$tenTour = $row["tenTour"];
$ngayBatDau = $row["ngayBatDau"];
$ngayKetThuc = $row["ngayKetThuc"];
$giaBanDau = $row["giaBanDau"];
$giaSauGiam = $row["giaSauGiam"];
$daSuDungHet = $row["daSuDungHet"];
$idDiaDiem = $row["idDiaDiem"];
$idKhachSan = $row["idKhachSan"];
$idPhuongTien = $row["idPhuongTien"];
$lichTrinh = $row["lichTrinh"];

    }
}
?>
<main class="container-sm my-4">
    <?php
    echo '<form action="process-suatour.php?idTour='.$idTour.'" method="post">'
    ?>
       
        <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">ID Tour</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="idTour" name="idTour" value = "'.$idTour.'"readonly>'
                ?>
                </div>
                </div>
                <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tên Tour</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="tenTour" name="tenTour" value = "'.$tenTour.'">'
                ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ngày bắt đầu</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="date" class="form-control" id="ngayBatDau" name="ngayBatDau" value = "'.$ngayBatDau.'">'
                ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ngày kết thúc</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="date" class="form-control" id="ngayKetThuc" name="ngayKetThuc" value = "'.$ngayKetThuc.'">'
                ?>
                </div>
            </div>

           
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Giá ban đầu</label>
                <div class="col-sm-10">
                <?php
                
                    echo '<input type="number" class="form-control" id="giaBanDau" name="giaBanDau" value = "'.$giaBanDau.'">'
                    
                ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Giá sau giảm</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="number" class="form-control" id="giaSauGiam" name="giaSauGiam" value = "'.$giaSauGiam.'"  >'
                ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Có thể triển khai</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="number" class="form-control" id="daSuDungHet" name="daSuDungHet" value = "'.$daSuDungHet.'" min="0" max="1">'
                ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Địa điểm</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idDiaDiem" id="idDiaDiem">
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM diadiem";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($row["idDiaDiem"] == $idDiaDiem)
                                    echo '<option value=' . $row["idDiaDiem"] . ' selected = "selected">' . $row["tenDiaDiem"] . '</option>';
                                else
                                    echo '<option value=' . $row["idDiaDiem"] . ' >' . $row["tenDiaDiem"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                        
                </div>


            </div>
             <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Khách sạn</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idKhachSan" id="idKhachSan">
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM khachsan";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($row["idKS"] == $idKhachSan)
                                    echo '<option value=' . $row["idKS"] . ' selected = "selected">' . $row["tenKS"] . '</option>';
                                else
                                    echo '<option value=' . $row["idKS"] . ' >' . $row["tenKS"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Phương tiện</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="idPhuongTien" id="idPhuongTien">
                        <?php
                        include("./config/db.php");
                        $sql = "SELECT * FROM phuongtien";
                        $result = mysqli_query($connect, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($row["idPT"] == $idPhuongTien)
                                    echo '<option value=' . $row["idPT"] . ' selected = "selected">' . $row["tenPhuongTien"] . '</option>';
                                else
                                    echo '<option value=' . $row["idPT"] . ' >' . $row["tenPhuongTien"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Lịch trình</label>
                <div class="col-sm-10">
                <?php
                    echo '<input type="text" class="form-control" id="lichTrinh" name="lichTrinh" value = "'.$lichTrinh.'">'
                ?>
                </div>
            </div>
            
        <div class="d-flex justify-content-end my-3">
            <button type="submit" name="suatour" id="suatour" class="btn btn-success">Sửa thông tin tour</button>
        </div>
    </form>
</main>
<?php
include("./footer.php")
?>