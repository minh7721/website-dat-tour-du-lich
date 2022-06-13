<title>Quản lý tour</title>

<?php
include('headfoot/header.php');
?>


<div class="container" style="margin-top: 100px; height: 1000px;">
    <h2 class="text-dark">Các tour đã đặt</h2>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tên địa điểm</th>
                <th scope="col">Ngày khởi hành</th>
                <th scope="col">Ngày kết thúc</th>
                <th scope="col">Số người</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Xem chi tiết</th>
                <!-- <th scope="col"><i class="fa-solid fa-pen-to-square"></i></th> -->
                <!-- <th scope="col"><i class="fa-solid fa-circle-trash"></i></th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($tourDaDat as $tourDaDats) {
            ?> <tr>
                    <th scope="row"><?= $tourDaDats['tenTour'] ?></th>
                    <td><?= $tourDaDats['ngayBatDau'] ?></td>
                    <td><?= $tourDaDats['ngayKetThuc'] ?></td>
                    <td><?= $tourDaDats['soLuongNguoi'] ?></td>
                    <td class="priceX"><?= $tourDaDats['tongTien'] ?></td>
                    <td><a href="?controller=quanLyTour&action=chiTietTour&idKH=<?= $_SESSION['idKH'] ?>&idHD=<?= $tourDaDats['idHoaDon'] ?>">Chi tiết</a></td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>


</div>



<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> mr. web designer </span> | all rights reserved! </h1>

</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- custom js file link  -->
<script src="public/js/script.js"></script>


<script>
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

</body>

</html>
