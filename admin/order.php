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
        <title>Music Emporium | Order</title>
        <?php
        include('./common/style.php')
        ?>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
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
                                <h1 class="m-0">Orders</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Orders</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Order Table</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Username</th>
                                                    <th>Product Name</th>
                                                    <th>Product Image</th>
                                                    <th>Product Price</th>
                                                    <th>Date</th>
                                                    <th>Address</th>
                                                    <th>status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include("./include/config.php");
                                                $qry = "SELECT * FROM orders";
                                                $res = mysqli_query($conn, $qry);
                                                $count=1;
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    $subqry = "SELECT * FROM product WHERE id='" . $row['productid'] . "'";
                                                    $subres = mysqli_query($conn, $subqry);
                                                    $subrow = mysqli_fetch_assoc($subres);

                                                    $catqry="SELECT * FROM user WHERE ID='".$row['userid']."'";
                                                    $catres=mysqli_query($conn,$catqry);
                                                    $catrow=mysqli_fetch_assoc($catres);
                                                ?>
                                                    <tr>
                                                        <td><?php echo $count ?></td>
                                                        <td><?php echo $catrow['name'] ?></td>
                                                        <td><?php echo $subrow['productname'] ?></td>
                                                        <td>
                                                            <img src="../image/product/<?php echo $subrow['productimage'] ?>" height="150px" width="150px" alt="">
                                                        </td>
                                                        <td><?php echo number_format($subrow['productprice']); ?>₹</td>
                                                        <td><?php echo $row['date'] ?></td>
                                                        <td><?php echo $row['address'] ?></td>
                                                      
                                                        <td><a href="orderstatus.php?id=<?php echo $row['ID'] ?>">complete</a></td>
                                                    </tr>
                                                <?php
                                                $count++;  
                                                }
                                                ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Username</th>
                                                    <th>Product Name</th>
                                                    <th>Product Image</th>
                                                    <th>Product Price</th>
                                                    <th>Date</th>
                                                    <th>Address</th>
                                                    <th>status</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->


                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
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
}
?>