<?php
include("headfoot/header.php");
?>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Những cuộc phiêu lưu là kỉ niệm đáng giá</h3>
        <p>Khám phá những địa điểm mới với chúng tôi, mọi thứ đang chờ bạn phía trước</p>
        <a href="#" class="btn">Khám phá thêm</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="public/images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="public/images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="public/images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="public/images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="public/images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="public/images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->

<!-- book section starts  -->

<section class="book" id="book">

    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="public/images/book-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <h3>Bạn muốn đến đâu</h3>
                <input type="text" placeholder="Tên địa điểm">
            </div>
            <div class="inputBox">
                <h3>Có bao nhiêu người</h3>
                <input type="number" placeholder="Số lượng người">
            </div>
            <div class="inputBox">
                <h3>Ngày bắt đầu</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>Ngày kết thúc</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="Đặt ngay">
        </form>

    </div>

</section>

<!-- book section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="showTour">
        <div class="box-container">
            <?php
            foreach ($getAllTour as $getTour) {
            ?>
                <div class="box">
                    <a href="http://localhost/website_book_tour/customer/?controller=ChiTietTour&action=index&idTour=<?php echo $getTour['idTour'] ?>">
                        <img src="<?php echo $getTour['anhDiaDiem'] ?>" alt="">
                        <div class="content">
                            <h3> <i class="fas fa-map-marker-alt"></i><?php echo $getTour['tenTour'] ?></h3>
                            <p class="moTaDiaDiem"><?php echo $getTour['moTaDiaDiem'] ?></p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="price">
                                <div class="priceX">
                                    <?php echo $getTour['giaSauGiam'] ?>
                                </div>
                                <span class="priceX">
                                    <?php echo $getTour['giaBanDau'] ?>
                                </span>
                            </div>
                            <a href="?controller=checkout&action=index&idTour=<?php echo $getTour['idTour']?>" class="btn btnDatNgay">Đặt ngay</a>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end pagination-lg mt-3">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php
                if (isset($_POST['current_page'])) {
                    $current_page = $_POST['current_page'];
                } else {
                    $current_page = 1;
                }
                for ($i = 1; $i <= $soTrang; $i++) {
                ?>
                    <li page="<?= $i ?>" class="page-item pageNum"><a class="page-link" href="#"><?= $i ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>d</span>
        <span>ị</span>
        <span>c</span>
        <span>h</span>
        <span>v</span>
        <span>ụ</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>Khách sạn</h3>
            <p>Trải nghiệm những khách sạn hàng đầu thế giới hoặc những khách sạn giá cả phải chăng!</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Đồ ăn và thức uống</h3>
            <p>Khám phá những món ăn đặc sản của từng vùng miền khác nhau trên khắp thế giới!</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>Hướng dẫn an toàn</h3>
            <p>Hướng dẫn an toàn khi đi du lịch</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>Vòng quanh thế giới</h3>
            <p>Đi du lịch vòng quanh thế giới, khám phá những nơi chưa từng đặt chân đến, những văn hóa mới, ẩm thực mới, phong cách mới và cuộc sống mới.</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>Đi du lịch nhanh nhất</h3>
            <p>Chỉ với vài thao tác cơ bản là bạn có thể đi khắp nơi trên thế giới</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>Những cuộc phiêu lưu</h3>
            <p>Những cuộc phiêu lưu đến những vùng đáy mới, gặp gỡ và làm quen với những người bạn mới</p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="public/images/g-1.jpg" alt="">
            <div class="content">
                <h3>Một vùng đất tuyệt vời</h3>
                <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                <a href="#" class="btn">Xem thêm</a>
            </div>
        </div>
        <div class="box">
            <img src="public/images/g-2.jpg" alt="">
            <div class="content">
                <h3>Một vùng đất tuyệt vời</h3>
                <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                <a href="#" class="btn">Xem thêm</a>
            </div>
        </div>
        <div class="box">
            <img src="public/images/g-3.jpg" alt="">
            <div class="content">
                <h3>Một vùng đất tuyệt vời</h3>
                <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                <a href="#" class="btn">Xem thêm</a>
            </div>
        </div>
        <div class="box">
            <img src="public/images/g-4.jpg" alt="">
            <div class="content">
                <h3>Một vùng đất tuyệt vời</h3>
                <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                <a href="#" class="btn">Xem thêm</a>
            </div>
        </div>
        <div class="box">
            <img src="public/images/g-5.jpg" alt="">
            <div class="content">
                <h3>Một vùng đất tuyệt vời</h3>
                <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                <a href="#" class="btn">Xem thêm</a>
            </div>
        </div>
        <div class="box">
            <img src="public/images/g-6.jpg" alt="">
            <div class="content">
                <h3>Một vùng đất tuyệt vời</h3>
                <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                <a href="#" class="btn">Xem thêm</a>
            </div>
        </div>
        <div class="box">
            <img src="public/images/g-7.jpg" alt="">
            <div class="content">
                <h3>Một vùng đất tuyệt vời</h3>
                <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                <a href="#" class="btn">Xem thêm</a>
            </div>
        </div>
        <div class="box">
            <img src="public/images/g-8.jpg" alt="">
            <div class="content">
                <h3>Một vùng đất tuyệt vời</h3>
                <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                <a href="#" class="btn">Xem thêm</a>
            </div>
        </div>
        <div class="box">
            <img src="public/images/g-9.jpg" alt="">
            <div class="content">
                <h3>Một vùng đất tuyệt vời</h3>
                <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                <a href="#" class="btn">Xem thêm</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="public/images/pic1.png" alt="">
                    <h3>Khoa pug</h3>
                    <p>Đây chính là nơi các bạn nên đặt chân đến ít nhất một lần trong đời, con người tuyệt vời, đồ ăn đa dạng, những cảnh quan hùng vĩ độc nhất vô nhị trên thế giới, nếu có thể thì hãy đến đây để thư giãn sau một khoảng thời gian dài làm việc mệt mỏi</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="public/images/pic2.png" alt="">
                    <h3>Vũ Khắc Tiệp</h3>
                    <p>Đây chính là nơi các bạn nên đặt chân đến ít nhất một lần trong đời, con người tuyệt vời, đồ ăn đa dạng, những cảnh quan hùng vĩ độc nhất vô nhị trên thế giới, nếu có thể thì hãy đến đây để thư giãn sau một khoảng thời gian dài làm việc mệt mỏi</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="public/images/pic3.png" alt="">
                    <h3>Ngọc Trinh</h3>
                    <p>Đây chính là nơi các bạn nên đặt chân đến ít nhất một lần trong đời, con người tuyệt vời, đồ ăn đa dạng, những cảnh quan hùng vĩ độc nhất vô nhị trên thế giới, nếu có thể thì hãy đến đây để thư giãn sau một khoảng thời gian dài làm việc mệt mỏi</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="public/images/pic4.png" alt="">
                    <h3>Đỗ Văn Xuân</h3>
                    <p>Đây chính là nơi các bạn nên đặt chân đến ít nhất một lần trong đời, con người tuyệt vời, đồ ăn đa dạng, những cảnh quan hùng vĩ độc nhất vô nhị trên thế giới, nếu có thể thì hãy đến đây để thư giãn sau một khoảng thời gian dài làm việc mệt mỏi</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="public/images/contact-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <input class="contact contactName" type="text" placeholder="Họ tên">
                <input class="contact contactEmail" type="email" placeholder="Email">
            </div>
            <div class="inputBox">
                <input class="contact contactPhone" type="number" placeholder="Số điện thoại">
                <input class="contact contactContent" type="text" placeholder="Chủ đề">
            </div>
            <textarea class="contactMessage" placeholder="Tin nhắn" name="" id="" cols="30" rows="10"></textarea>
            <button class="btn contact contactBtnSubmit">Gửi</button>
        </form>

    </div>

</section>

<!-- contact section ends -->
<?php
include("headfoot/footer.php");
?>
<script src="public/js/customer.js"></script>