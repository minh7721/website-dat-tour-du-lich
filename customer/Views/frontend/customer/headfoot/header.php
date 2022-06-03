<?php
    session_start();
    // if(!isset($_SESSION['loginOK'])){
    //     header('location: http://localhost/website_book_tour/login.php');
    // }
?>



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
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/customer.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>T</span>ravel</a>

        <nav class="navbar" style="width:800px;">
            <a href="?controller=customer&action=index">Trang chủ</a>
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
                <!-- <i class="fas fa-user col-1" id="login-btn"></i> -->
                <!-- <i class="fas fa-user col-1 dropdown" id="login-btn"></i> -->

            </div>
        </div>
        
        <?php
            if(isset($_SESSION['loginOK'])){
                echo '<a class="fs-4 text-white" href="http://localhost/website_book_tour/logout.php">Đăng xuất</a>';
            }
            else{
                echo '<a class="fs-4 text-white" href="http://localhost/website_book_tour/login.php">Đăng nhập</a>';
            }
        ?>
        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="Nhập địa điểm bạn muốn đến...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <!-- header section ends -->

    <!-- login form container  -->