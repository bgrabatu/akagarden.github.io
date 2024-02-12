<?php

include_once('admin/php/login.php');
include_once('admin/php/admin.php');

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- color of address bar in mobile browser -->
    <meta name="theme-color" content="#28292C">
    <!-- favicon  -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="css/plugins/swiper.min.css">
    <!-- fancybox css -->
    <link rel="stylesheet" href="css/plugins/fancybox.min.css">
    <!-- mapbox css -->
    <link href="css/plugins/mapbox-style.css" rel='stylesheet'>
    <!-- main css -->
    <link rel="stylesheet" href="css/style-light.css">

    <title>Login | AKA: Special Outdoor Spaces with Natural Stones</title>

</head>

<body>

    <div class="mry-app">

        <?php
        include_once('websiteParts/preloader.php');
        include_once('websiteParts/cursor.php');
        include_once('websiteParts/menu.php');
        ?>

        <div class="transition-fade">
            <div class="mry-content-frame" id="scroll">
                <canvas class="mry-dots" style="display: none"></canvas>

                <div class="mry-head-bg">
                    <img src="img/light/projects/prjct-6/1.jpg" alt="background">
                    <div class="mry-bg-overlay"></div>
                </div>

                <div class="mry-banner mry-p-140-0">
                    <div class="container">
                        <div class="mry-main-title mry-title-center">
                            <div class="mry-subtitle mry-mb-20 mry-fo">Login</div>
                            <h1 class="mry-mb-20 mry-fo">AKA <br><span class="mry-border-text">Welcome to Management Convenience</span><span class="mry-animation-el"></span></h1>
                            <div class="mry-text mry-fo">Here are the doors opening for you to effectively <br> manage your data, resources, and business processes.</div>
                            <div class="mry-scroll-hint-frame">
                                <a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
                                    <span class="mry-magnetic-object"></span>
                                </a>
                                <div class="mry-label mry-fo">SCROLL DOWN</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- contact -->
                <div class="mry-about mry-p-100-0">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">

                                <form method="POST" id="form" class="mry-form mry-mb-100" action="login.php">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="mry-label mry-fo" for="username">Username</label>
                                            <div class="mry-fo"><input id="username" name="username" placeholder="AKA" class="mry-default-link" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="mry-label mry-fo" for="password">Password</label>
                                            <div class="mry-fo"><input id="password" name="password" placeholder="***********" class="mry-default-link" type="password" data-parsley-pattern="^[a-zA-Z\s.]+$" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="mry-fo"><button type="submit" name="login_user" class="mry-btn mry-default-link">Login</button></div>
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="mry-text mry-simple-text mry-contact-hint mry-fo"><span class="mry-color-text">*</span> We promise not to share your personal information with third parties</p>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact end -->

                <!-- footer -->
                <?php include_once('websiteParts/footer.php') ?>

                <!-- footer end -->

                <div class="mry-head-bg mry-head-bottom">
                    <img src="img/light/projects/prjct-2/1.jpg" alt="background">
                    <div class="mry-bg-overlay"></div>
                </div>

            </div>
        </div>

    </div>

    <!-- jquery js -->
    <script src="js/plugins/jquery.min.js"></script>
    <!-- tween max js -->
    <script src="js/plugins/tween-max.min.js"></script>
    <!-- scroll magic js -->
    <script src="js/plugins/scroll-magic.js"></script>
    <!-- scroll magic gsap plugin js -->
    <script src="js/plugins/scroll-magic-gsap-plugin.js"></script>
    <!-- swiper js -->
    <script src="js/plugins/swiper.min.js"></script>
    <!-- isotope js -->
    <script src="js/plugins/isotope.min.js"></script>
    <!-- fancybox js -->
    <script src="js/plugins/fancybox.min.js"></script>
    <!-- mapbox js -->
    <script src="js/plugins/mapbox.min.js"></script>
    <!-- smooth scrollbar js -->
    <script src="js/plugins/smooth-scrollbar.min.js"></script>
    <!-- overscroll js -->
    <script src="js/plugins/overscroll.min.js"></script>
    <!-- canvas js -->
    <script src="js/plugins/canvas.js"></script>
    <!-- parsley js -->
    <script src="js/plugins/parsley.min.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>

</body>

</html>