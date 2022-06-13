<?php
include("./header.php");
?>
<main class="container">
        <h2>Thêm thông tin khách hàng</h2>
      <form action="process-themKH.php" method="post">
        
           

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">tên KH</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tenKH" name="tenKH" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="emailKH" name="emailKH" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="soDTKH" name="soDTKH" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Ngày sinh</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="ngaySinh" name="ngaySinh" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Địa chỉ</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="diaChiKH" name="diaChiKH" required>
                </div>
            </div>
            
                    <button type="submit" class="btn btn-success">Thêm khách hàng</button>
                
            </div>
        </div>
        
    </form>
</main>
<?php
include("./footer.php")
?>