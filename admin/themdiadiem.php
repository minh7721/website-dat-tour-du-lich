<?php
session_start();
if($_SESSION['status'] != 0){
    header("location: ../login.php");
}
include("./header.php");
?>
<main class="container">
        <h2>Thêm thông tin địa điểm</h2>
      <form action="process-themdiadiem.php" method="post" enctype="multipart/form-data">
        
          

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tên Địa Điểm</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tenDiaDiem" name="tenDiaDiem" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Quốc gia</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="quocGia" name="quocGia" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="moTaDiaDiem" name="moTaDiaDiem" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ảnh</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" id="anhDiaDiem" name="anhDiaDiem" >
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ảnh 2</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" id="anhDiaDiem2" name="anhDiaDiem2" >
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ảnh 3</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" id="anhDiaDiem3" name="anhDiaDiem3" >
                </div>
            </div>
           
            
                    <button type="submit" class="btn btn-success">Thêm địa điểm</button>
                
            </div>
        </div>
        
    </form>
</main>
<?php
include("./footer.php")
?>