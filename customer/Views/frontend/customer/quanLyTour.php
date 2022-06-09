<title>Quản lý tour</title>

<?php
include('headfoot/header.php');
?>


<div class="container" style="margin-top: 100px;">
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
                    <td><a href="?controller=quanLyTour&action=chiTietTour&idKH=<?= $_SESSION['idKH']?>&idHD=<?= $tourDaDats['idHoaDon'] ?>">Chi tiết</a></td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>


</div>



<?php
include('headfoot/footer.php');
?>


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