<?php
session_start();
if($_SESSION['status'] != 0){
    header("location: ../login.php");
}
include("./header.php");
?>
<main class="container">
        <h2>Thêm thông tin khách sạn</h2>
      <form action="process-themKS.php" method="post">
        
         

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tên khách sạn</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tenKS" name="tenKS" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Loại phòng</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="loaiPhong" name="loaiPhong" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Giá phòng</label>
                <div class="col-sm-10">
                <input type="int" class="form-control" id="giaPhong" name="giaPhong" required>
                </div>
            </div>
           
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Địa chỉ</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="diaChiKS" name="diaChiKS" required>
                </div>
            </div>
            
                    <button type="submit" class="btn btn-success">Thêm khách sạn</button>
                
            </div>
        </div>
        
    </form>
</main>
<?php
include("./footer.php")
?>