<?php
session_start();
?>
<header class="header-section">
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo">
                <a href="./index.php"><img src="./img/logo2.png" alt=""></a>
            </div>
            <div class="header-right">
                <img src="img/icons/man.png" alt="">
                <a href="#">
                    <img src="img/icons/bag.png
                    " alt="">
                    <span>2</span>
                </a>
            </div>
            <div class="user-access">
                <?php
                if (isset($_SESSION['loginstatus']) && $_SESSION['loginstatus'] = true) {
                ?>
                    <a href="logout.php">Log out</a>
                <?php
                } else {

                ?>
                    <a href="register.php">Register</a>
                    <a href="login.php" class="in">Sign in</a>
                <?php
                }
                ?>

            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a href="./index.php" class="<?php echo ($_SERVER['SCRIPT_NAME'] == '/violet-master/index.php' ? "active" : '') ?>">Home</a>

                    <li><a href="./categories.php" class="<?php echo ($_SERVER['SCRIPT_NAME'] == '/violet-master/categories.php' ? "active" : '') ?>">Category</a>
                        <ul class="sub-menu">
                            <?php
                            include("./include/config.php");
                            $qry = "SELECT * FROM category";
                            $res = mysqli_query($conn, $qry);
                            while ($row = mysqli_fetch_row($res)) {
                            ?>
                                <li><a href="categories.php?id=<?php echo $row[0] ?>"><?php echo $row[1] ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li><a href="./contact.php" class="<?php echo ($_SERVER['SCRIPT_NAME'] == '/violet-master/contact.php' ? "active" : '') ?>">Contact</a></li>
                    <li><a href="./about.php">About</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>