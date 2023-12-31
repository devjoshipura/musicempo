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
                        <h2>Shirts<span>.</span></h2>
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

    <!-- Product Page Section Beign -->
    <section class="product-page" style="margin-bottom: 150px;">
        <div class="container">
            <!-- <div class="product-control">
                <a href="#">Previous</a>
                <a href="#">Next</a>
            </div> -->
            <div class="row">
                <?php
                include("./include/config.php");
                $qry = "SELECT * FROM product WHERE id='" . $_REQUEST['productid'] . "'";
                $res = mysqli_query($conn, $qry);
                $row = mysqli_fetch_assoc($res);
                ?>
                <div class="col-lg-6">
                    <div class="product-slider owl-carousel">
                        <div class="product-img">
                            <figure>
                                <img src="./image/product/<?php echo $row['productimage'] ?>" style="object-fit: contain;" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-content">
                        <h2><?php echo $row['productname'] ?></h2>
                        <div class="pc-meta">
                            <h5><?php echo number_format($row['productprice']) ?>₹</h5>
                        </div>
                        <p><?php echo $row['productdesc'] ?></p>
                        <ul class="tags">
                            <li><span>Category :</span> <?php
                                                        $subqry = "SELECT * FROM category WHERE ID='" . $row['categoryid'] . "'";
                                                        $subres = mysqli_query($conn, $subqry);
                                                        $subrow = mysqli_fetch_array($subres);
                                                        echo $subrow[1];
                                                        ?></li>
                        </ul>
                        <a href="addtocart.php?prodid=<?php echo $row['id'] ?>" class="primary-btn pc-btn">Add to cart</a>
                        <a href="#" class="primary-btn pc-btn">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include_once("./common/footer.php");
    include_once("./common/script.php");
    ?>
</body>

</html>