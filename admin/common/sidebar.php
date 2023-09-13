<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.php" class="brand-link">
        <img src="dist\img\logo.png" alt="Music Emporium Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" height="60" width="60" />
        <span class="brand-text font-weight-light">Music Emporium</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/ui..jpg" class="img-circle elevation-2" alt="User Image" />
            </div>
            <?php
            include('include/config.php');
            $qry = "select name from admin";
            $res = mysqli_query($conn, $qry);
            $row = mysqli_fetch_row($res);
            ?>
            <div class="info">
                <a href="#" class="d-block"><?php echo "$row[0]"; ?></a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" data-accordion="false" role="menu">
                <li class="nav-item ">
                    <a href="dashboard.php" class="nav-link <?php echo ($_SERVER['SCRIPT_NAME'] == '/musicempo/admin/dashboard.php' ? "active" : ''); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="category.php" class="nav-link <?php echo ($_SERVER['SCRIPT_NAME'] == '/musicempo/admin/category.php' ? "active" : ''); ?>">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Category
                            <?php
                            $cquery = "SELECT * FROM category";
                            $cres = mysqli_query($conn, $cquery);
                            $count = mysqli_num_rows($cres);
                            ?>
                            <span class="badge badge-info right"><?php echo $count; ?></span>
                        </p>
                    </a>
                    <a href="product.php" class="nav-link <?php echo ($_SERVER['SCRIPT_NAME'] == '/musicempo/admin/product.php' ? "active" : ''); ?>">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Product
                            <?php
                            $cquery = "SELECT * FROM product";
                            $cres = mysqli_query($conn, $cquery);
                            $count = mysqli_num_rows($cres);
                            ?>
                            <span class="badge badge-info right"><?php echo $count; ?></span>
                        </p>
                        <a href="order.php" class="nav-link <?php echo ($_SERVER['SCRIPT_NAME'] == '/musicempo/admin/order.php' ? "active" : ''); ?>">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Orders
                                <span class="badge badge-info right"></span>
                            </p>
                        </a>
                        <a href="complain.php" class="nav-link <?php echo ($_SERVER['SCRIPT_NAME'] == '/musicempo/admin/complain.php' ? "active" : ''); ?>">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Complains
                                <?php
                                $cquery = "SELECT * FROM contact";
                                $cres = mysqli_query($conn, $cquery);
                                $count = mysqli_num_rows($cres);
                                ?>
                                <span class="badge badge-info right"><?php echo $count; ?></span>
                            </p>
                        </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>