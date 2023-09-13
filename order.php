<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/order.css">
</head>

<body>
    <div class="container">
        <article class="card">
            <header class="card-header"> My Orders / Tracking </header>
            <div class="card-body">
                <h6>Order ID: OD45345345435</h6>
                <article class="card">
                    <div class="card-body row">
                        <div class="col"> <strong>Estimated Delivery time:</strong> <br>29 nov 2019 </div>
                        <div class="col"> <strong>Shipping BY:</strong> <br> BLUEDART, | <i class="fa fa-phone"></i> +1598675986 </div>
                        <div class="col"> <strong>Status:</strong> <br> Picked by the courier </div>
                        <div class="col"> <strong>Tracking #:</strong> <br> BD045903594059 </div>
                    </div>
                </article>
                <div class="track">
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked by courier</span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On the way </span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Ready for pickup</span> </div>
                </div>
                <hr>
                <ul class="row">
                    <?php
                    include("./include/config.php");
                    $qry="SELECT * FROM orders WHERE status='active' AND userid='".$_SESSION['loginid']."'";
                    $res=mysqli_query($conn,$qry);
                    while($row=mysqli_fetch_assoc($res)){
                        $subqry="SELECT * FROM product WHERE id='".$row['productid']."'";
                        $subres=mysqli_query($conn,$subqry);
                        $subrow=mysqli_fetch_assoc($subres);
?>
                    <li class="col-md-4">
                        <figure class="itemside mb-3">
                            <div class="aside"><img src="./image/product/<?php echo $subrow['productimage'] ?>" class="img-sm border"></div>
                            <figcaption class="info align-self-center">
                                <p class="title"><?php echo $subrow['productname']?> <br> </p> <span class="text-muted">₹<?php echo number_format($subrow['productprice'])?></span>
                            </figcaption>
                        </figure>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
                <hr>
                <a href="#" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
            </div>
        </article>
    </div>
</body>

</html>