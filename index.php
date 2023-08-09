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
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/slider-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/slider-3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
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
                            <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal
                                esuada aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="img/icons/coin.png" alt="">
                            <h4>100% Money back </h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="img/icons/chat.png" alt="">
                            <h4>Online support 24/7</h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
        <div class="features-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-box-item first-box">
                                    <img src="img/f-box-1.jpg" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Party</span>
                                        <h2>Jewelry</h2>
                                        <span class="trend-alert">Trend Allert</span>
                                        <a href="#" class="primary-btn">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-box-item second-box">
                                    <img src="img/f-box-2.jpg" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Trend</span>
                                        <h2>Footwear</h2>
                                        <span class="trend-alert">Bold & Black</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box-item large-box">
                            <img src="img/f-box-3.jpg" alt="">
                            <div class="box-text">
                                <span class="trend-year">2019 Party</span>
                                <h2>Collection</h2>
                                <div class="trend-alert">Trend Allert</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                while ($row = mysqli_fetch_row($res)) {
                ?>
                    <div class="col-lg-3 col-sm-6 mix all BOWED-STRINGS">
                        <div class="single-product-item">
                            <figure>
                                <a href="product-page.php?productid=<?php echo $row[0] ?>"><img src="image/product/<?php echo $row[2] ?>" alt=""></a>
                            </figure>
                            <div class="product-text">
                               
                            <h6><?php echo $row[1]?></h6>
                                <p><?php echo $row[3] ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <?php
                include("include/config.php");
                $qry = "SELECT * FROM product WHERE categoryid=2";
                $res = mysqli_query($conn, $qry);
                while ($row = mysqli_fetch_row($res)) {
                ?>
                    <div class="col-lg-3 col-sm-6 mix all WOODWIND">
                        <div class="single-product-item">
                            <figure>
                            <a href="product-page.php?productid=<?php echo $row[0] ?>"><img src="image/product/<?php echo $row[2] ?>" alt=""></a>
                            </figure>
                            <div class="product-text">
                                <h6><?php echo $row[1]?></h6>
                                <p><?php echo $row[3] ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <?php
                include("include/config.php");
                $qry = "SELECT * FROM product WHERE categoryid=3";
                $res = mysqli_query($conn, $qry);
                while ($row = mysqli_fetch_row($res)) {
                ?>
                    <div class="col-lg-3 col-sm-6 mix all KEYBOARD">
                        <div class="single-product-item">
                            <figure>
                            <a href="product-page.php?productid=<?php echo $row[0] ?>"><img src="image/product/<?php echo $row[2] ?>" alt=""></a>
                            </figure>
                            <div class="product-text">
                              
                            <h6><?php echo $row[1]?></h6>
                                <p><?php echo $row[3] ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <?php
                include("include/config.php");
                $qry = "SELECT * FROM product WHERE categoryid=4";
                $res = mysqli_query($conn, $qry);
                while ($row = mysqli_fetch_row($res)) {
                ?>
                    <div class="col-lg-3 col-sm-6 mix all GUITAR-FAMILY">
                        <div class="single-product-item">
                            <figure>
                            <a href="product-page.php?productid=<?php echo $row[0] ?>"><img src="image/product/<?php echo $row[2] ?>" alt=""></a>
                            </figure>
                            <div class="product-text">
                               
                            <h6><?php echo $row[1]?></h6>
                                <p><?php echo $row[3] ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Latest Product End -->

    <!-- Lookbok Section Begin -->
    <section class="lookbok-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <div class="lookbok-left">
                        <div class="section-title">
                            <h2>2019 <br />#lookbook</h2>
                        </div>
                        <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vestibulum malesuada
                            aliquet libero viverra cursus. Aliquam erat volutpat. Morbi id dictum quam, ut commodo
                            lorem. In at nisi nec arcu porttitor aliquet vitae at dui. Sed sollicitudin nulla non leo
                            viverra scelerisque. Phasellus facilisis lobortis metus, sit amet viverra lectus finibus ac.
                            Aenean non felis dapibus, placerat libero auctor, ornare ante. Morbi quis ex eleifend,
                            sodales nulla vitae, scelerisque ante. Nunc id vulputate dui. Suspendisse consectetur rutrum
                            metus nec scelerisque. s</p>
                        <a href="#" class="primary-btn look-btn">See More</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="lookbok-pic">
                        <img src="img/lookbok.jpg" alt="">
                        <div class="pic-text">fashion</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lookbok Section End -->

    <!-- Logo Section Begin -->

    <!-- Logo Section End -->

    <!-- Footer Section Begin -->
    <?php
    include_once("./common/footer.php");
    include_once("./common/script.php");

    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->

</body>

</html>