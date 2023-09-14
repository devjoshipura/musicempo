<?php
session_start();
print_r($_SESSION);
if(isset($_SESSION['loginid'])&&$_SESSION['loginid']){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include_once("./common/style.php");
    ?>
    <style>
        .icon-hover-primary:hover {
            border-color: #3b71ca !important;
            background-color: white !important;
        }

        .icon-hover-primary:hover i {
            color: #3b71ca !important;
        }

        .icon-hover-danger:hover {
            border-color: #dc4c64 !important;
            background-color: white !important;
        }

        .icon-hover-danger:hover i {
            color: #dc4c64 !important;
        }
    </style>
</head>

<body>
    <?php
    include_once("./common/header.php");
    ?>

    <!-- cart + summary -->
    <section class="bg-light my-5">
        <div class="container">
            <div class="row">
                <!-- cart -->
                <div class="col-lg-9">
                    <div class="card border shadow-0">
                        <div class="m-4">
                            <h4 class="card-title mb-4">Your shopping cart</h4>
                            <?php
                            $p=0;
                            include("./include/config.php");
                            $qry = "SELECT * FROM cart WHERE userid='" . $_SESSION['loginid'] . "'";
                            $res = mysqli_query($conn, $qry);
                            while ($row = mysqli_fetch_assoc($res)) {
                                $subqry = "SELECT * FROM product WHERE id='" . $row['productid'] . "'";
                                $subres = mysqli_query($conn, $subqry);
                                $subrow = mysqli_fetch_assoc($subres);
                                $p+=$subrow['productprice'];
                            ?>
                                <div class="row gy-3 mb-4" style="align-items: center;">
                                    <div class="col-lg-5">
                                        <div class="me-lg-5">
                                            <div class="d-flex">
                                                <img src="./image/product/<?php echo $subrow['productimage'] ?>" class="border rounded me-3" style="width: 96px; height: 96px;" />
                                                <div class="" style="display: flex; align-items: center;">
                                                    <p style="font-size: large; font-weight: bolder; color: black;"><?php echo $subrow['productname'] ?></p>
                                                    <!-- <p class="">categoryy</p> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">

                                        <div class="">
                                            <text class="h6"><?php echo number_format($subrow['productprice']) ?>₹</text> <br />

                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                                        <div class="float-md-end">

                                            <a href="removetocart.php?id=<?php echo $row['ID']  ?>" class="btn btn-light border text-danger icon-hover-danger"> Remove</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ; ?>
                        </div>

                        <div class="border-top pt-4 mx-4 mb-4">
                            <p><i class="fas fa-truck text-muted fa-lg"></i> Free Delivery within 1-2 weeks</p>
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip
                            </p>
                        </div>
                    </div>
                </div>
                <!-- cart -->
                <!-- summary -->
                <div class="col-lg-3">
                    
                    <div class="card shadow-0 border">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Total price:</p>
                                <p class="mb-2"><?php echo number_format($p) ; ?></p>
                            </div>
                           
                            
                            <hr />
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Total price:</p>
                                <p class="mb-2 fw-bold"><?php echo number_format($p) ; ?></p>
                            </div>

                            <div class="mt-3">
                                <a href="addtoorder.php" class="btn btn-success w-100 shadow-0 mb-2"> Make Purchase </a>
                                <a href="#" class="btn btn-light w-100 border mt-2"> Back to shop </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- summary -->
            </div>
        </div>
    </section>
    <!-- cart + summary -->
        <!-- Recommended -->

    <!-- Footer -->
    <footer class="text-center text-lg-start text-muted bg-primary mt-3">
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start pt-4 pb-4">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-12 col-lg-3 col-sm-12 mb-2">
                        <!-- Content -->
                        <a href="https://mdbootstrap.com/" target="_blank" class="text-white h2">
                            MDB
                        </a>
                        <p class="mt-1 text-white">
                            © 2023 Copyright: MDBootstrap.com
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-6 col-sm-4 col-lg-2">
                        <!-- Links -->
                        <h6 class="text-uppercase text-white fw-bold mb-2">
                            Store
                        </h6>
                        <ul class="list-unstyled mb-4">
                            <li><a class="text-white-50" href="#">About us</a></li>
                            <li><a class="text-white-50" href="#">Find store</a></li>
                            <li><a class="text-white-50" href="#">Categories</a></li>
                            <li><a class="text-white-50" href="#">Blogs</a></li>
                        </ul>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-6 col-sm-4 col-lg-2">
                        <!-- Links -->
                        <h6 class="text-uppercase text-white fw-bold mb-2">
                            Information
                        </h6>
                        <ul class="list-unstyled mb-4">
                            <li><a class="text-white-50" href="#">Help center</a></li>
                            <li><a class="text-white-50" href="#">Money refund</a></li>
                            <li><a class="text-white-50" href="#">Shipping info</a></li>
                            <li><a class="text-white-50" href="#">Refunds</a></li>
                        </ul>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-6 col-sm-4 col-lg-2">
                        <!-- Links -->
                        <h6 class="text-uppercase text-white fw-bold mb-2">
                            Support
                        </h6>
                        <ul class="list-unstyled mb-4">
                            <li><a class="text-white-50" href="#">Help center</a></li>
                            <li><a class="text-white-50" href="#">Documents</a></li>
                            <li><a class="text-white-50" href="#">Account restore</a></li>
                            <li><a class="text-white-50" href="#">My orders</a></li>
                        </ul>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-12 col-sm-12 col-lg-3">
                        <!-- Links -->
                        <h6 class="text-uppercase text-white fw-bold mb-2">Newsletter</h6>
                        <p class="text-white">Stay in touch with latest updates about our products and offers</p>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
                            <button class="btn btn-light border shadow-0" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                Join
                            </button>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <div class="">
            <div class="container">
                <div class="d-flex justify-content-between py-4 border-top">
                    <!--- payment --->
                    <div>
                        <i class="fab fa-lg fa-cc-visa text-white"></i>
                        <i class="fab fa-lg fa-cc-amex text-white"></i>
                        <i class="fab fa-lg fa-cc-mastercard text-white"></i>
                        <i class="fab fa-lg fa-cc-paypal text-white"></i>
                    </div>
                    <!--- payment --->

                    <!--- language selector --->
                    <div class="dropdown dropup">
                        <a class="dropdown-toggle text-white" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="flag-united-kingdom flag m-0 me-1"></i>English </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English <i class="fa fa-check text-success ms-2"></i></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
                            </li>
                        </ul>
                    </div>
                    <!--- language selector --->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->
    <?php
    include_once("./common/style.php");
    ?>
</body>

</html>
<?php
}else{
    header("location:login.php");
}