<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include("./common/style.php")
    ?>


</head>

<body>
    <?php
    include("./common/header.php");
    $p=0;
    ?>
    <section class="h-100 gradient-custom" style="margin-bottom: 280px;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-10 col-xl-8">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-header px-4 py-5">
                            <h5 class="text-muted mb-0">Thanks for your Order<span style="color: #a8729a;"></span>!</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
                                <p class="small text-muted mb-0">Receipt Voucher : 1KAU9-84UIL</p>
                            </div>
                            <?php
                            include("./include/config.php");
                            $qry = "SELECT * FROM orders WHERE status='active' AND userid='" . $_SESSION['loginid'] . "'";
                            $res = mysqli_query($conn, $qry);
                            while ($row = mysqli_fetch_assoc($res)) {
                                $subqry = "SELECT * FROM product WHERE id='" . $row['productid'] . "'";
                                $subres = mysqli_query($conn, $subqry);
                                $subrow = mysqli_fetch_assoc($subres);
                            ?>
                                <div class="card shadow-0 border mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="./image/product/<?php echo $subrow['productimage'] ?>" class="img-fluid" alt="Phone">
                                            </div>
                                            <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0"><?php echo $subrow['productname'] ?></p>
                                            </div>
                                            <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0 small">Qty: <?php echo $row['quantity'] ?></p>
                                            </div>
                                            <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0 small"><?php echo number_format($subrow['productprice']) ?>₹</p>
                                            </div>
                                        </div>
                                        <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md-2">
                                                <p class="text-muted mb-0 small">Track Order</p>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="progress" style="height: 6px; border-radius: 16px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 65%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex justify-content-around mb-1">
                                                    <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                                                    <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            $p+=$subrow['productprice'];
                            }
                            ?>
                            <div class="d-flex justify-content-between pt-2">
                                <p class="fw-bold mb-0">Order Details</p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Total </span><?php echo number_format($p); ?></p>
                            </div>
                            <div class="d-flex justify-content-between mb-5">
                                <p class="text-muted mb-0">Recepits Voucher : 18KU-62IIK</p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
                            </div>
                        </div>
                        <div class="card-footer border-0 px-4 py-5" style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                            <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total to
                                pay :  <span class="h2 mb-0 ms-2"><?php echo number_format($p) ?>₹</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("./common/footer.php")
    ?>
</body>

</html>