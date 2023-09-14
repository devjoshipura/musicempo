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
    <section class="page-add">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Contact us<span>.</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Contact Section Begin -->
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="addtocontact.php" method="post" class="contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="name" placeholder=" Name">
                            </div>
                            <div class="col-lg-12">
                                <input type="email" name="email" placeholder="E-mail">
                                <input type="text" name="subject" placeholder="Subject">
                                <textarea placeholder="Message" name="message"></textarea>
                            </div>
                            <div>
                                <?php
                                if (isset($_SESSION['contactadd']) && $_SESSION['contactadd']) {
                                ?>
                                    <p style="color: green;">we accept your problem we will contactt you soon. </p>
                                <?php
                                unset($_SESSION['contactadd']);
                                }  
                                ?>
                            </div>
                            <div class="col-lg-12 text-right">
                                <button type="submit">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="contact-widget">
                        <div class="cw-item">
                            <h5>Location</h5>
                            <ul>
                                <li>Saidham street no.4</li>
                                <li>Mavdi,rajkot-360004</li>
                                <li>Gujarat,India</li>
                            </ul>
                        </div>
                        <div class="cw-item">
                            <h5>Phone</h5>
                            <ul>
                                <li>+91 9737273157</li>
                            </ul>
                        </div>
                        <div class="cw-item">
                            <h5>E-mail</h5>
                            <ul>
                                <li>www.musicemporium.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <div class="row">
                    <div class="col-lg-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sChinatown%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd" height="560" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <?php
    include_once("./common/footer.php");
    include_once("./common/script.php");

    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->

</body>

</html>