<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Violet | Template</title>
    <?php
    include_once("./common/style.php");
    ?>
    <!-- Google Font -->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Header Section Begin -->
    <?php
    include_once("./common/header.php");
    ?>
    <!-- Header Info Begin -->

    <!-- Header Info End -->
    <!-- Header End -->

    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="img/banner.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>MUSIC</h1>
                            <h2>EMPORIUM</h2>
                            <a href="contact.php" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/logos/music_guitar_4k_hd_music.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>GUITAR</h1>
                            <H2>FAMILY</H2>
                            
                            <a href="contact.php" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/logos/wp4135855.webp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>KEYBOARD</h1>
                            <H2>INSTRUMETS</H2>
                            
                            <a href="contact.php" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/logos/thumb-1920-672539.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>WOOD</h1>
                            <H2>WIND</H2>
                            
                            <a href="https://youtu.be/TogShON_wCI" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/logos/violin_windows_light_room_details-788373.jpg!d">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>BOWED</h1>
                            <h2>STRINGS</h2>
                            <a href="https://youtu.be/q98A5ev9MYY?si=NRuzmMOC3EExSc0U" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="img/icons/f-delivery.png" alt="">
                            <h4>Free shipping</h4>
                            <p>We are providing you home delivery so you won't have to worry about your things.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="img/icons/coin.png" alt="">
                            <h4>Quick Refund</h4>
                            <p>You can get refund as soon as possible. Our team is always ready to help you. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="img/icons/chat.png" alt="">
                            <h4>Online support 24/7</h4>
                            <p>We provide you support 24*7 so you can get answer of your queries faster. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
    </section>
    <!-- Features Section End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Latest Products</h2>
                        </div>
                        <ul class="product-controls">
                            <li data-filter="*">All</li>
                            <?php
                            include("./include/config.php");
                            $qry = "SELECT * FROM category";
                            $res = mysqli_query($conn, $qry);
                            while ($row = mysqli_fetch_row($res)) {
                            ?>
                                <li data-filter=".<?php echo $row[1] ?>"><?php echo $row[1] ?></li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" id="product-list">
                <?php
                include("include/config.php");
                $qry = "SELECT * FROM product WHERE categoryid=1";
                $res = mysqli_query($conn, $qry);
                $row = mysqli_fetch_row($res)
                ?>
                <div class="col-lg-3 col-sm-6 mix all BOWED-STRINGS">
                    <div class="single-product-item">
                        <figure>
                            <a href="product-page.php?productid=<?php echo $row[0] ?>"><img src="image/product/<?php echo $row[2] ?>" style="object-fit: contain; height: 250px; width: 250px;" alt=""></a>
                        </figure>
                        <div class="product-text">

                            <h6><?php echo $row[1] ?></h6>
                            <p><?php echo number_format($row[3]) ?>₹</p>
                        </div>
                    </div>
                </div>
                <?php
                include("include/config.php");
                $qry = "SELECT * FROM product WHERE categoryid=2";
                $res = mysqli_query($conn, $qry);
                $row = mysqli_fetch_row($res)
                ?>
                <div class="col-lg-3 col-sm-6 mix all WOODWIND">
                    <div class="single-product-item">
                        <figure>
                            <a href="product-page.php?productid=<?php echo $row[0] ?>"><img src="image/product/<?php echo $row[2] ?>" style="object-fit: contain; height: 250px; width: 250px;" alt=""></a>
                        </figure>
                        <div class="product-text">
                            <h6><?php echo $row[1] ?></h6>
                            <p><?php echo number_format($row[3]) ?>₹</p>
                        </div>
                    </div>
                </div>
                <?php
                include("include/config.php");
                $qry = "SELECT * FROM product WHERE categoryid=3";
                $res = mysqli_query($conn, $qry);
                $row = mysqli_fetch_row($res)
                ?>
                <div class="col-lg-3 col-sm-6 mix all KEYBOARD">
                    <div class="single-product-item">
                        <figure>
                            <a href="product-page.php?productid=<?php echo $row[0] ?>"><img src="image/product/<?php echo $row[2] ?>" style="object-fit: contain; height: 250px; width: 250px;" alt=""></a>
                        </figure>
                        <div class="product-text">

                            <h6><?php echo $row[1] ?></h6>
                            <p><?php echo number_format($row[3]) ?>₹</p>
                        </div>
                    </div>
                </div>
                <?php
                include("include/config.php");
                $qry = "SELECT * FROM product WHERE categoryid=4";
                $res = mysqli_query($conn, $qry);
                $row = mysqli_fetch_row($res)
                ?>
                <div class="col-lg-3 col-sm-6 mix all GUITAR-FAMILY">
                    <div class="single-product-item">
                        <figure>
                            <a href="product-page.php?productid=<?php echo $row[0] ?>"><img src="image/product/<?php echo $row[2] ?>" style="object-fit: contain; height: 250px; width: 250px;" alt=""></a>
                        </figure>
                        <div class="product-text">
                            <h6><?php echo $row[1] ?></h6>
                            <p><?php echo number_format($row[3]) ?>₹</p>
                        </div>
                    </div>
                </div>
                <?php

                ?>
            </div>
        </div>
    </section>
    <?php
    include_once("./common/footer.php");
    include_once("./common/script.php");

    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->

</body>

</html>