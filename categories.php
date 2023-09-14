<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Violet | Template</title>

    <!-- Google Font -->
    <?php
    include_once("./common/style.php");
    ?>
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

    <!-- Page Add Section Begin -->
    <!-- <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Dresses<span>.</span></h2>
                        <a href="#">Home</a>
                        <a href="#">Dresses</a>
                        <a class="active" href="#">Night Dresses</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section> -->
    <!-- Page Add Section End -->

    <!-- Categories Page Section Begin -->
    <section class="categories-page spad">
        <div class="container">
            <!-- <div class="categories-controls">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="categories-filter">
                            <div class="cf-left">
                                <form action="#">
                                    <select class="sort">
                                    
                                        <option value="">Price</option>
                                    </select>
                                </form>
                            </div>
                            <div class="cf-right">
                                <span>20 Products</span>
                                <a href="#">2</a>
                                <a href="#" class="active">4</a>
                                <a href="#">6</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <?php
                include_once("./include/config.php");
                if (!isset($_REQUEST['id'])) {
                    $qry = "SELECT * FROM product";
                } else {
                    $qry = "SELECT * FROM product WHERE categoryid='" . $_REQUEST['id'] . "'";
                }
                $res = mysqli_query($conn, $qry);
                while ($row = mysqli_fetch_row($res)) {
                ?>
                    <div class="col-lg-4 col-md-4" style="display: flex;">
                        <div class="single-product-item" style="display: flex; flex-direction: column; justify-content: end;">
                            <figure>
                                <img src="./image/product/<?php echo $row[2] ?>" style="object-fit: contain;" alt="">
                                <div class="hover-icon">
                                    <a href="./image/product/<?php echo $row[2] ?>" class="pop-up"><img src="img/icons/zoom-plus.png" alt=""></a>
                                </div>
                            </figure>
                            <div class="product-text">
                                <a href="product-page.php?productid=<?php echo $row[0] ?>">
                                    <h6><?php echo $row[1] ?></h6>
                                    <p>₹<?php echo number_format($row[3]) ?></p>
                                </a>
                            </div>
                            <div style="margin-top: 10px; text-align: center;">
                                <a href="addtocart.php?prodid=<?php echo $row[0] ?>" style="color: black; border: 2px solid #D0D7DB;" class="primary-btn pc-btn">Add to cart</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Categories Page Section End -->

    <!-- Footer Section Begin -->
    <?php
    include_once("./common/footer.php");
    include_once("./common/script.php");

    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->

</body>

</html>