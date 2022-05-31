<title>Chi tiết tour</title>
<?php
include("headfoot/header.php");

if (isset($_GET['idTour'])) {
    $idTour = $_GET['idTour'];
} else {
    $idTour = 2;
}

?>
<link rel="stylesheet" href="public/css/book.css">
<div id="wrapper" style="overflow: scroll;height:100%;padding-left: 0;">

    <!-- Sidebar -->

    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid" style="background-color: rgb(148 122 126 / 8%);">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <form class="d-flex" style="margin-left: 50%;">
                                <input require id="search_ip" class="form-control me-2" type="search" placeholder="Nhập tên sách" aria-label="Search">
                                <button id="btn_search" class="btn btn-outline-success" type="button">Tìm</button>
                                <div id="list_sach">

                                </div>
                            </form>
                            <form class="d-flex">
                                <a id="profile_tch" href="#" class="navbar-brand">Tài khoản</a>
                                <a id="profile_tch" href="cart.php" class="navbar-brand">Quản lý tour</a>
                                <a href="../Login/logout.php" class="navbar-brand">Đăng xuất</a>
                            </form>
                        </div>
                    </nav>
                    <div class="container main-content">
                        <div class="title">
                            <a href="index.php">Trang chủ</a>
                            <i class="fas fa-chevron-right"></i>
                            <span></span>
                            <i class="fas fa-chevron-right"></i>
                            <span></span>
                        </div>

                        <div class="details-book">
                            <div class="row row_details">
                                <div class="col-5">
                                    <div class="container img_full">
                                        <img class="container img-fluid" src="<?php echo $chiTietTour[0]['anhDiaDiem']; ?>" alt="">
                                    </div>
                                    <div class="container img_small">
                                        <!-- <img class="container img-fluid" src="" alt="">
                                        <img class="container img-fluid" src="" alt=""> -->
                                    </div>
                                </div>

                                <div class="col-7">
                                    <div class="name_book" idTour="<?php echo $idTour ?>">
                                        <h3>Tour du lịch <?php echo $chiTietTour[0]['tenDiaDiem']; ?></h3>
                                    </div>
                                    <div class="sold fs-3">
                                        <div class="star">
                                            <span>5.0</span> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </div>
                                        <div class="danhgia">
                                            <span style="text-decoration: underline;">120</span> <span style="color: #827b66;">Đánh giá</span>
                                        </div>
                                        <div class="solder">
                                            50 <span style="color: #827b66;">khách hàng đã đặt trong tháng 7</span>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <span class="fs-3 priceX" style="font-size: 1rem;text-decoration: line-through;
                                                        margin-right: 10px;margin-left:30px"><?php echo $chiTietTour[0]['giaBanDau']; ?></span>
                                        <span class="fs-3 priceX" style="font-size: 1.875rem;color:red;font-weight: 500;"><?php echo $chiTietTour[0]['giaSauGiam']; ?></span>
                                        <span class="fs-3" style="margin-left: 15px;font-size: .75rem;color: #fff;text-transform: uppercase;
                                                            background: #ee4d2d;border-radius: 2px;
                                                            padding: 2px 4px;font-weight: 600;line-height: 1;white-space: nowrap;">
                                            <?php echo ceil(($chiTietTour[0]['giaSauGiam'] / $chiTietTour[0]['giaBanDau'] - 1) * 100) ?>% Giảm</span>
                                    </div>
                                    <form action="" method="POST">
                                        <div class="soluong fs-3">
                                            <span style="color: #21618C;">Phương tiện: <?php echo $chiTietTour[0]['tenPhuongTien']; ?></span>
                                            <br>
                                            <img style="width: 200px;" src="<?php echo $chiTietTour[0]['anhPT'] ?>" alt="">
                                        </div>
                                        <br>
                                        <div style="margin-top: 15px;">
                                            <!-- <button id="add_cart" class="btn btn-danger" type="button">Thêm vào giỏ hàng</button> -->
                                            <button name="submit" class="btn btn-success" type="submit" >Đặt tour ngay</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="row inf_book" style="margin-top: 50px;">
                            <div class="inf_book_left">
                                <div class="container chitiet">
                                    <div class="title fs-3">
                                        <h4>CHI TIẾT TOUR</h4>
                                    </div>
                                    <div class="noidung fs-3">
                                        <label for="">Tên địa điểm:</label>
                                        <span class="nd">
                                            <?php echo $chiTietTour[0]['tenDiaDiem']; ?>
                                        </span>
                                        <br>
                                        <br>
                                        <label for="">Quốc gia:</label>
                                        <span class="nd">
                                            <?php echo $chiTietTour[0]['quocGia']; ?>
                                        </span>
                                        <br>
                                        <br>
                                        <label for="">Ngày khởi hành:</label>
                                        <span class="nd">
                                            <?php echo $chiTietTour[0]['ngayBatDau']; ?>
                                        </span>
                                        <br>
                                        <br>
                                        <label for="">Ngày kết thúc:</label>
                                        <span class="nd">
                                            <?php echo $chiTietTour[0]['ngayKetThuc']; ?>
                                        </span>
                                        <br>
                                        <br>
                                        <label for="">Tên phương tiện:</label>
                                        <span class="nd">
                                            <?php echo $chiTietTour[0]['tenPhuongTien']; ?>
                                        </span>
                                        <br>
                                        <br>
                                        <label for="">Khách sạn:</label>
                                        <span class="nd">
                                            <?php echo $chiTietTour[0]['tenKS']; ?>
                                        </span>
                                        <br>
                                        <br>
                                        <label for="">Loại phòng:</label>
                                        <span class="nd">
                                            <?php echo $chiTietTour[0]['loaiPhong']; ?>
                                        </span>
                                    </div>
                                    <div class="title fs-3">
                                        <h4>LỊCH TRÌNH</h4>
                                    </div>
                                    <div class="noidung fs-3">
                                    <!-- <label for=""></label> -->
                                        <span class="nd">
                                            <?php echo $chiTietTour[0]['lichTrinh']; ?>
                                        </span>
                                        <br>
                                        <br>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
include("headfoot/footer.php");
?>

<script>
    $(document).ready(function() {
        // const idTour = $('.name_book').attr('idTour');
        // // console.log(idTour);
        // $.ajax({
        //     url: "http://localhost/website_book_tour/customer/?controller=chiTietTour&action=index",
        //     method: "POST",
        //     data: {
        //         idTour: idTour
        //     },
        //     success: function(dt){
        //         console.log(dt);
        //     }
        // })


        //     $('.img_small img').mouseover(function() {
        //         name_src = $(this).attr('src');
        //         $('.img_full img').attr('src', name_src)
        //         $('.img_small img').click(function() {
        //             $('#exampleModal').modal('show')
        //             $('.modal-body img').attr('src', name_src)
        //         })
        //         $('.img_full img').click(function() {
        //             $('#exampleModal').modal('show')
        //             $('.modal-body img').attr('src', name_src)
        //         })
        //     })

        //     $(".thongdiep > div:gt(0)").hide();
        //     setInterval(function() {
        //         $('.thongdiep > div:first')
        //             .fadeOut(1000)
        //             .next()
        //             .fadeIn(1000)
        //             .end()
        //             .appendTo('.thongdiep');
        //     }, 5000);

        //     a = 1
        //     a1 = 1
        //     sotrang = $('#this').attr('sotrang')
        //     sotrang_tt = $('#this').attr('sotrang')
        //     tl_id = $('#this').attr('tl_id')
        //     if (a = 1) {
        //         $('#back').css("display", "none")
        //     }
        //     if (a1 = 1) {
        //         $('#back_tt').css("display", "none")
        //     }
        //     // if (a == sotrang) {
        //     //   $('#next').css("display", "none")
        //     // }
        //     $('.spkhac .tiep').click(function() {
        //         b = $(this).attr('id');
        //         if (b == 'next') {
        //             a = a + 1;
        //             $('#back').css("display", "")
        //             if (a == 6) {
        //                 $('#next').css("display", "none")
        //             }
        //         }
        //         if (b == 'back') {
        //             a = a - 1;
        //             $('#next').css("display", "")
        //             if (a == 1) {
        //                 $('#back').css("display", "none")
        //             }
        //         }
        //         $.ajax({
        //             url: "spkhac.php",
        //             method: "POST",
        //             data: {
        //                 tl_id: tl_id,
        //                 tranghientai: a
        //             },
        //             success: function(dt) {
        //                 $('#sp_new_tl').html(dt)
        //             }
        //         })
        //     })

        //     $('.sptt .tiep_tt').click(function() {
        //         b1 = $(this).attr('id');
        //         // alert(b1)
        //         if (b1 == 'next_tt') {
        //             a1 = a1 + 1;
        //             $('#back_tt').css("display", "")
        //             if (a1 == 4) {
        //                 $('#next_tt').css("display", "none")
        //             }
        //         }
        //         if (b1 == 'back_tt') {
        //             a1 = a1 - 1;
        //             $('#next_tt').css("display", "")
        //             if (a1 == 1) {
        //                 $('#back_tt').css("display", "none")
        //             }
        //         }
        //         if (a1 < 5) {
        //             $.ajax({
        //                 url: "sptt.php",
        //                 method: "POST",
        //                 data: {
        //                     tl_id: tl_id,
        //                     tranghientai: a1
        //                 },
        //                 success: function(dt) {
        //                     $('#sp_tt_tl').html(dt)
        //                 }
        //             })
        //         }

        //     })




        //     $.ajax({
        //         url: "spkhac.php",
        //         method: "POST",
        //         data: {
        //             tl_id: tl_id,
        //             tranghientai: a,
        //         },
        //         success: function(dt) {
        //             $('#sp_new_tl').html(dt)
        //         }
        //     })
        //     $.ajax({
        //         url: "sptt.php",
        //         method: "POST",
        //         data: {
        //             tl_id: tl_id,
        //             tranghientai: a,
        //         },
        //         success: function(dt) {
        //             $('#sp_tt_tl').html(dt)
        //         }
        //     })
        // })


        // //add cart

        // $('#add_cart').click(function() {
        //     sluong = $('#sluong').val()
        //     s_id = $(this).attr('s_id');
        //     tt = $(this).attr('tt')
        //     $.ajax({
        //         url: "process_add_cart.php",
        //         method: "POST",
        //         data: {
        //             sluong: sluong,
        //             s_id: s_id,
        //             tt: tt
        //         },
        //         success: function(dt) {
        //             alert(dt)
        //         }
        //     })
    })
</script>
<script src="public/js/chiTietTour.js"></script>