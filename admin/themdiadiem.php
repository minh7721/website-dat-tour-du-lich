<?php
include("./header.php");
?>
<main class="container">
        <h2>Thêm thông tin địa điểm</h2>
      <form action="process-themdiadiem.php" method="post">
        
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">ID Địa điểm</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="idDiaDiem" name="idDiaDiem">
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tên Địa Điểm</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tenDiaDiem" name="tenDiaDiem">
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Quốc gia</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="quocGia" name="quocGia">
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="moTaDiaDiem" name="moTaDiaDiem">
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ảnh</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="anhDiaDiem" name="anhDiaDiem">
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