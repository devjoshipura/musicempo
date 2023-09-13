<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location:index.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Music Emporium| Dashboard</title>
        <?php
        include('./common/style.php')
        ?>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="dist\img\logo.png" style="border-radius: 50%;" alt="AdminLTELogo" height="100" width="100">
            </div>

            <?php
            include('./common/menu.php')
            ?>
            <?php
            include('./common/sidebar.php')
            ?>
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Dashboard</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-6">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <?php
                                        include_once("./include/config.php");
                                        $qry = "SELECT * FROM category";
                                        $res = mysqli_query($conn, $qry);
                                        $count = mysqli_num_rows($res);
                                        ?>
                                        <h3><?php echo $count; ?></h3>

                                        <p>Category</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="category.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <?php
                                        include_once("./include/config.php");
                                        $qry = "SELECT * FROM product";
                                        $res = mysqli_query($conn, $qry);
                                        $count = mysqli_num_rows($res);
                                        ?>
                                        <h3><?php echo $count ?></h3>

                                        <p>Product</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="product.php  " class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-6">
                                <div class="small-box bg-warning">
                                    <div class="inner">

                                        <h3>0</h3>

                                        <p>Orders</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="order.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                    <?php
                                        include_once("./include/config.php");
                                        $qry = "SELECT * FROM contact";
                                        $res = mysqli_query($conn, $qry);
                                        $count = mysqli_num_rows($res);
                                        ?>
                                        <h3><?php echo $count ?></h3>


                                        <p>Complains</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="complain.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
            <?php
            include('./common/footer.php')
            ?>
        </div>
        <?php
        include('./common/script.php')
        ?>
    </body>

    </html>
<?php
} ?>