<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="public/css/checkout.css">
</head>

<body>
    <div class="container d-lg-flex">
        <div class="box-1 bg-light user">
            <div class="d-flex align-items-center mb-3"> <img src="<?= $chiTietTour['avatar'] ?>" class="pic rounded-circle" alt="">
                <p class="ps-2 name"><?php echo $chiTietTour['tenKH'] ?></p>
            </div>
            <div class="box-inner-1 pb-3 mb-3 ">
                <div class="d-flex justify-content-between mb-3 userdetails">
                    <p class="fw-bold"><?= $chiTietTour['tenTour'] ?></p>
                </div>
                <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-indicators"> <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button> <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button> </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active"> <img src="<?= $chiTietTour['anhDiaDiem'] ?>" class="d-block w-100"> </div>
                        <div class="carousel-item"> <img src="<?= $chiTietTour['anhDiaDiem2'] ?>" class="d-block w-100"> </div>
                        <div class="carousel-item"> <img src="<?= $chiTietTour['anhDiaDiem3'] ?>" class="d-block w-100"> </div>
                    </div> <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                        <div class="icon"> <span class="fas fa-arrow-left"></span> </div> <span class="visually-hidden">Previous</span>
                    </button> <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                        <div class="icon"> <span class="fas fa-arrow-right"></span> </div> <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <p class="dis my-3 info"><?= $chiTietTour['moTaDiaDiem'] ?></p>
                <p class="dis mb-3 updates">Miễn phí dịch vụ đưa đón</p>
                <p class="dis mb-3 different"><?= $chiTietTour['ngayBatDau'] ?> - <?= $chiTietTour['ngayKetThuc'] ?></p>
                <div class="dis">
                    <p class="pastel"><span class="fas fa-arrow-right mb-3 pe-2"></span>Quốc gia: <?= $chiTietTour['quocGia'] ?></p>
                    <p class="black"><span class="fas fa-arrow-right mb-3 pe-2"></span>Khách sạn: <?= $chiTietTour['tenKS'] ?></p>
                    <p class="white"><span class="fas fa-arrow-right mb-3 pe-2"></span>Phương tiện: <?= $chiTietTour['tenPhuongTien'] ?> </p>
                </div>
                <div>
                    <p class="dis footer my-3">Hãy thưởng thức kỳ nghỉ một cách trọn vẹn nhất!</p>
                </div>
            </div>
        </div>
        <div class="box-2">
            <div class="box-inner-2">
                <div>
                    <p class="fw-bold">Chi tiết tour</p>
                    <p class="dis mb-3">Thông tin tour</p>
                </div>
                <form action="">
                    <div class="mb-3">
                        <p class="dis fw-bold mb-2">Email </p> <input idKH="<?php echo $chiTietTour['idKH'] ?>" class="form-control emailKH" disabled type="email" value="<?= $chiTietTour['emailKH'] ?>">
                    </div>
                    <div>
                        <p class="dis fw-bold mb-2">Số thẻ ngân hàng</p>
                        <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                            <div class="fab fa-cc-visa ps-3"></div> <input type="text" class="form-control" placeholder="Card Details">
                            <div class="d-flex w-50"> <input type="text" class="form-control px-0" placeholder="MM/YY"> <input type="password" maxlength=3 class="form-control px-0" placeholder="CVV"> </div>
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Khách sạn</p> <input class="form-control" type="text">
                        </div>
                        <div class="address">
                            <div class=" my-3">
                                <p class="dis fw-bold mb-2">Số lượng người</p>
                                <input required class="form-control slNguoi" type="number" value="<?= $chiTietTour['soLuongNguoi'] ?>" disabled min="1" max="999">
                            </div>
                            <div class="my-3">
                                <p class="dis fw-bold mb-2">Mã giảm giá</p> <input class="form-control text-uppercase" type="text" placeholder="Nhập mã giảm giá" value="" id="discount">
                            </div>
                            <div class="d-flex flex-column dis">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>Tổng chi phí</p>
                                    <p class="priceX tongChiPhi" money="<?= $chiTietTour['giaSauGiam'] * $chiTietTour['soLuongNguoi'] ?>"><?= $chiTietTour['giaSauGiam'] * $chiTietTour['soLuongNguoi'] ?></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d-flex align-items-center">
                                        <p class="pe-2">Giảm giá<span class="d-inline-flex align-items-center justify-content-between bg-light px-2 couponCode"> <span id="code" class="pe-2"></span> <span class="fas fa-times close"></span> </span> </p>
                                    </div>
                                    <p class="priceX">0</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>VAT<span>(20%)</span></p>
                                    <p class="priceX thueVAT" money="<?= ($chiTietTour['giaSauGiam'] * $chiTietTour['soLuongNguoi']) * 20 / 100 ?>"><?= ($chiTietTour['giaSauGiam'] * $chiTietTour['soLuongNguoi']) * 20 / 100 ?></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p class="fw-bold">Total</p>
                                    <p class="fw-bold priceX giaCuoiCung"><?= $chiTietTour['tongTien'] ?></p>
                                </div>
                                <div idHoaDon="<?= $chiTietTour['idHoaDon'] ?>" idTour="<?= $chiTietTour['idTour'] ?>" idKH="<?= $chiTietTour['idKH'] ?>" class="btn btn-primary mt-2 btnHuyTour">Hủy tour <i class="ms-2 fa-solid fa-trash"></i></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        var valcode = document.querySelector("#discount")
        var namecode = document.querySelector("#code")
        namecode.textContent = valcode.value

        var closeBtn = document.querySelector(".close")
        var couponCode = document.querySelector(".couponCode")
        closeBtn.addEventListener("click", function() {
            close()
        })
        valcode.addEventListener("change", function() {
            checkDiscountCoupon()
        })

        function checkDiscountCoupon() {
            if (valcode.value.length === 0) {
                // namecode.style.display = "none"
                close()
            } else {
                couponCode.classList.remove("d-none")
                namecode.style.display = "inline"
                namecode.textContent = valcode.value
            }
        }

        function close() {
            couponCode.classList.add("d-none")
            valcode.value = ""
        }

        dauChamSo();

        function dauChamSo() {
            let arr = Array.from(document.getElementsByClassName("priceX"));
            const hashText = (str) => {
                let strReverse = str.trim().split("").reverse();
                let result = "";
                strReverse.forEach((char, index) => {
                    if (index % 3 == 0) {
                        result += ".";
                    }
                    result += char;
                });
                let strResult = result
                    .split("")
                    .reverse()
                    .join("")
                    .slice(0, result.length - 1);
                return strResult.toString();
            };

            arr.forEach((element) => {
                element.textContent = hashText(element.textContent);
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $('.btnHuyTour').on('click', function() {
                const idTour = $(this).attr('idTour');
                const idKH = $(this).attr('idKH');
                const idHoaDon = $(this).attr('idHoaDon');
                $.ajax({
                    url: "?controller=quanLyTour&action=huyTour",
                    method: "POST",
                    data: {
                        idHoaDon: idHoaDon
                    },
                    success: function(dt) {
                        $(location).prop('href', '?controller=quanLyTour&action=index&idKH=' + idKH + '&idTour=' + idTour);
                    }
                })
            })
        })
    </script>
</body>

</html>