<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin cá nhân</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="public/css/profile.css">
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <form method="POST" enctype="multipart/form-data">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5 img-thumbnai avatarKH" width="150px" height="150px" src="<?= $thongTinKH['avatar'] ?>" alt="Chưa có ảnh bạn ey">
                        <span class="font-weight-bold"><?= $thongTinKH['tenKH'] ?></span>
                        <span class="text-black-50"><?= $thongTinKH['emailKH'] ?></span>
                        <div class="row mt-3">
                            <input name="avatarKH" id="avatarKHid" class="inputAvatar" type="file" name="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Họ tên</label><input type="text" class="form-control tenKH" placeholder="Họ tên" value="<?= $thongTinKH['tenKH'] ?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Số diện thoại</label><input type="tel" class="form-control soDTKH" placeholder="Số điện thoại" value="<?= $thongTinKH['soDTKH'] ?>"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input disabled type="email" class="form-control emailKH" placeholder="Email" value="<?= $thongTinKH['emailKH'] ?>"></div>
                        <div class="col-md-12"><label class="labels">Ngày sinh</label><input type="date" class="form-control ngaySinh" placeholder="Ngày sinh" value="<?= $thongTinKH['ngaySinh'] ?>"></div>
                        <div class="col-md-12"><label class="labels">Địa chỉ</label><input type="text" class="form-control diaChi" placeholder="Địa chỉ" value="<?= $thongTinKH['diaChiKH'] ?>"></div>
                        <!-- <div class="col-md-12"><label class="labels">Công việc</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> -->
                        <div class="col-md-12"><label class="labels">Tên người yêu</label><input type="text" class="form-control" placeholder="Nhập họ tên người yêu" value=""></div>
                        <div class="col-md-12"><label class="labels">Năm sinh người yêu</label><input type="date" class="form-control" placeholder="Sinh nhật người yêu" value=""></div>
                        <div class="col-md-12"><label class="labels">Facebook/Instagram người yêu</label><input type="text" class="form-control" placeholder="Link facebook/instagram người yêu" value=""></div>
                    </div>
                    <!-- <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                        <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                    </div> -->
                    <div class="mt-5 text-center"><button idKH="<?= $_GET['idKH']; ?>" class="btn btn-primary profile-button btnUpdate" type="button">Cập nhật thông tin</button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Trang chủ</span><span class="border px-3 p-1" ><i class="fa fa-plus"></i><a class="btn" style="color: #739900;text-decoration: none;" href="?controller=customer&action=index">Trang chủ</a></span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#avatarKHid').on('change', function() {
                var fileData = this.files[0];
                var formData = new FormData();
                formData.append('file', fileData);
                var ajax = new XMLHttpRequest();
                ajax.onreadystatechange = function() {
                    if (ajax.status == 200 && ajax.readyState == 4) {
                        // console.log("ajax.responseText " + ajax.responseText);
                    }
                }

                ajax.open("POST", '?controller=customer&action=uploadimg', true);
                ajax.send(formData);
            })

            $('.btnUpdate').on('click', function() {
                var file = $('#avatarKHid')[0].files[0];
                if (file) {
                    const urlAvatar = "public/images/avatarKH/" + file.name;
                    const idKH = $(this).attr('idKH');
                    const hoTenKH = $('.tenKH').val();
                    const soDTKH = $('.soDTKH').val();
                    const emailKH = $('.emailKH').val();
                    const ngaySinhKH = $('.ngaySinh').val();
                    const diaChiKH = $('.diaChi').val();

                    $.ajax({
                        url: "?controller=customer&action=updateTTKH",
                        method: "POST",
                        data: {
                            urlAvatar: urlAvatar,
                            idKH: idKH,
                            hoTenKH: hoTenKH,
                            soDTKH: soDTKH,
                            emailKH: emailKH,
                            ngaySinhKH: ngaySinhKH,
                            diaChiKH: diaChiKH,
                        },
                        success: function(dt){
                            location.reload();
                        }
                    })
                }
                else{
                    const preAvatar = $('.avatarKH').attr('src');
                    const idKH = $(this).attr('idKH');
                    const hoTenKH = $('.tenKH').val();
                    const soDTKH = $('.soDTKH').val();
                    const emailKH = $('.emailKH').val();
                    const ngaySinhKH = $('.ngaySinh').val();
                    const diaChiKH = $('.diaChi').val();

                    $.ajax({
                        url: "?controller=customer&action=updateTTKH",
                        method: "POST",
                        data: {
                            urlAvatar: preAvatar,
                            idKH: idKH,
                            hoTenKH: hoTenKH,
                            soDTKH: soDTKH,
                            emailKH: emailKH,
                            ngaySinhKH: ngaySinhKH,
                            diaChiKH: diaChiKH,
                        },
                        success: function(dt){
                            location.reload();
                        }
                    })
                }

            })

        })
    </script>


</body>

</html>