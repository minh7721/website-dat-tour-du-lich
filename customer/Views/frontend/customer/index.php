<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xách balo lên và đi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="customer/public/css/style.css">
    <link rel="stylesheet" href="customer/public/css/customer.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>T</span>ravel</a>

        <nav class="navbar" style="width:800px;">
            <a href="#home">Trang chủ</a>
            <a href="#book">Đặt tour ngay</a>
            <a href="#packages">Tour</a>
            <a href="#services">Dịch vụ</a>
            <a href="#gallery">Bộ sưu tập ảnh</a>
            <a href="#review">Review</a>
            <a href="#contact">Liên hệ</a>
        </nav>

        <div class="icons">
            <div class="row">
                <!-- <input type="text" class="form-control fs-3 col-md" placeholder="Nhập địa điểm bạn muốn đến" aria-label="Nhập địa điểm bạn muốn đến"> -->
                <i class="fas fa-search col-1 ms-3" id="search-btn"></i>
                <i class="fas fa-user col-1" id="login-btn"></i>
            </div>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="Nhập địa điểm bạn muốn đến...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <!-- header section ends -->

    <!-- login form container  -->

    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

        <form action="">
            <h3>Đăng nhập</h3>
            <input type="email" class="box" placeholder="Nhập email / tài khoản">
            <input type="password" class="box" placeholder="Nhập mật khẩu">
            <input type="submit" value="Đăng nhập" class="btn mb-3">
            <input class="me-2" type="checkbox" id="cbNhoToi">
            <label for="remember">Nhớ tôi</label>
            <p>Quên mật khẩu <a href="#">ấn vào đây</a></p>
            <p>Bạn chưa có tài khoản <a href="#">đăng ký ngay</a></p>
        </form>

    </div>

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Những cuộc phiêu lưu là kỉ niệm đáng giá</h3>
            <p>Khám phá những địa điểm mới với chúng tôi, mọi thứ đang chờ bạn phía trước</p>
            <a href="#" class="btn">Khám phá thêm</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="customer/public/images/vid-1.mp4"></span>
            <span class="vid-btn" data-src="customer/public/images/vid-2.mp4"></span>
            <span class="vid-btn" data-src="customer/public/images/vid-3.mp4"></span>
            <span class="vid-btn" data-src="customer/public/images/vid-4.mp4"></span>
            <span class="vid-btn" data-src="customer/public/images/vid-5.mp4"></span>
        </div>

        <div class="video-container">
            <video src="customer/public/images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
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
                <img src="customer/public/images/book-img.svg" alt="">
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

        <div class="box-container">

            <div class="box">
                <img src="customer/public/images/p-1.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Mumbai</h3>
                    <p>Bản thân nỗi đau là quan trọng đối với tầng lớp ưa thích chính. Vì sự thật!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">Đặt ngay</a>
                </div>
            </div>

            <div class="box">
                <img src="customer/public/images/p-2.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> hawaii </h3>
                    <p>Nơi thư giãn lý tưởng sau những ngày làm việc mệt mỏi!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">Đặt ngay</a>
                </div>
            </div>

            <div class="box">
                <img src="customer/public/images/p-3.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> sydney </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="customer/public/images/p-4.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> paris </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="customer/public/images/p-5.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> tokyo </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="customer/public/images/p-6.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> eypt </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

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
                <img src="customer/public/images/g-1.jpg" alt="">
                <div class="content">
                    <h3>Một vùng đất tuyệt vời</h3>
                    <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                    <a href="#" class="btn">Xem thêm</a>
                </div>
            </div>
            <div class="box">
                <img src="customer/public/images/g-2.jpg" alt="">
                <div class="content">
                    <h3>Một vùng đất tuyệt vời</h3>
                    <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                    <a href="#" class="btn">Xem thêm</a>
                </div>
            </div>
            <div class="box">
                <img src="customer/public/images/g-3.jpg" alt="">
                <div class="content">
                    <h3>Một vùng đất tuyệt vời</h3>
                    <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                    <a href="#" class="btn">Xem thêm</a>
                </div>
            </div>
            <div class="box">
                <img src="customer/public/images/g-4.jpg" alt="">
                <div class="content">
                    <h3>Một vùng đất tuyệt vời</h3>
                    <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                    <a href="#" class="btn">Xem thêm</a>
                </div>
            </div>
            <div class="box">
                <img src="customer/public/images/g-5.jpg" alt="">
                <div class="content">
                    <h3>Một vùng đất tuyệt vời</h3>
                    <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                    <a href="#" class="btn">Xem thêm</a>
                </div>
            </div>
            <div class="box">
                <img src="customer/public/images/g-6.jpg" alt="">
                <div class="content">
                    <h3>Một vùng đất tuyệt vời</h3>
                    <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                    <a href="#" class="btn">Xem thêm</a>
                </div>
            </div>
            <div class="box">
                <img src="customer/public/images/g-7.jpg" alt="">
                <div class="content">
                    <h3>Một vùng đất tuyệt vời</h3>
                    <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                    <a href="#" class="btn">Xem thêm</a>
                </div>
            </div>
            <div class="box">
                <img src="customer/public/images/g-8.jpg" alt="">
                <div class="content">
                    <h3>Một vùng đất tuyệt vời</h3>
                    <p>Những kì quan hùng vĩ đang đón chờ bạn ở nơi đây.</p>
                    <a href="#" class="btn">Xem thêm</a>
                </div>
            </div>
            <div class="box">
                <img src="customer/public/images/g-9.jpg" alt="">
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
                        <img src="customer/public/images/pic1.png" alt="">
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
                        <img src="customer/public/images/pic2.png" alt="">
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
                        <img src="customer/public/images/pic3.png" alt="">
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
                        <img src="customer/public/images/pic4.png" alt="">
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
                <img src="customer/public/images/contact-img.svg" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="Họ tên">
                    <input type="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="Số điện thoại">
                    <input type="text" placeholder="Chủ đề">
                </div>
                <textarea placeholder="Tin nhắn" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="Gửi">
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- brand section  -->
    <section class="brand-container">

        <div class="swiper-container brand-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="customer/public/images/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="customer/public/images/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="customer/public/images/3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="customer/public/images/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="customer/public/images/5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="customer/public/images/6.jpg" alt=""></div>
            </div>
        </div>

    </section>

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

    <!-- custom js file link  -->
    <script src="customer/public/js/script.js"></script>

</body>

</html>