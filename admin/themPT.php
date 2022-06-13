<?php
include("./header.php");
?>
<main class="container">
        <h2>Thêm phương tiện</h2>
      <form action="process-themPT.php" method="post">
        
           
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Loại phương tiện</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="loaiPhuongTien" name="loaiPhuongTien" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tên Phương Tiện</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tenPhuongTien" name="tenPhuongTien" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="moTaPT" name="moTaPT" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ảnh phương tiện</label>
                <div class="col-sm-10">
                <input type="txt" class="form-control" id="anhPT" name="anhPT">
                </div>
            </div>
           
            
                    <button type="submit" class="btn btn-success">Thêm phương tiện</button>
                
            </div>
        </div>
        
    </form>
</main>
<?php
include("./footer.php")
?>