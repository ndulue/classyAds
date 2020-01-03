<?php

    require 'db_connect.php';

    $uname_err = $pass_err = $log_err = "";
    $uname = $pass = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST["uname"])){
            $uname = test_input($_POST["uname"]);
            if (!preg_match("/^[a-zA-Z]$*/")) {
                $uname_err = "Only alphabets and whitespaces are allowed";
            }
        }
        if(!empty($_POST["pass"])){
            $pass = test_input($_POST["pass"]);
            if (!preg_match("/^[a-zA-Z]$*/")) {
                $pass_err = "Only alphabets and whitespaces are allowed";
            }
        }

        $sql = "SELECT * FROM `product_seller` WHERE `username` = '$uname' and `password` = '$pass'";
        $result = $conn->query($sql);   
        $num = $result->num_rows;

        if ($num > 0) {
            $_SESSION["username"] = $username;
            $_SESSION["email"] = $email;
            $_SESSION["id"] = $id;
            header("location:dashboard-subscription.php");
        }else {
            $log_err = "Incorrect login details";
        }     
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlentities($data);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Made in Nigeria - Classified Ads</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/line-icons.css">

    <link rel="stylesheet" type="text/css" href="css/slicknav.css">

    <link rel="stylesheet" type="text/css" href="css/color-switcher.css">

    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="css/main.css">

    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>

    <header id="header-wrap">

        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-xs-12">

                        <ul class="list-inline">
                            <li><i class="lni-phone"></i>+2347066818156</li>
                            <li><i class="lni-envelope"></i> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c3f393c3c233e380c2b212d2520622f2321">[email&#160;protected]</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-5 col-md-7 col-xs-12">
                        <div class="roof-social float-right">
                            <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                            <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                            <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                            <a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
                            <a class="google" href="#"><i class="lni-google-plus"></i></a>
                        </div>
                        <div class="header-top-right float-right">
                            <a href="login.php" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
                            <a href="register.html" class="header-top-button"><i class="lni-pencil"></i> Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
            <div class="container">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="lni-menu"></span>
                        <span class="lni-menu"></span>
                        <span class="lni-menu"></span>
                    </button>
                    <a href="index-2.html" class="navbar-brand"><img src="" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav mr-auto w-100 justify-content-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category.html">
                                Categories
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Listings
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="about.html">About Us</a>
                                <a class="dropdown-item" href="services.html">Services</a>
                                <a class="dropdown-item" href="ads-details.html">Ads Details</a>
                                <a class="dropdown-item" href="pricing.html">Packages</a>
                                <a class="dropdown-item" href="testimonial.html">Testimonial</a>
                                <a class="dropdown-item" href="faq.html">FAQ</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <div class="post-btn">
                        <a class="btn btn-common" href="post-ads.html"><i class="lni-pencil-alt"></i> Post an Ad</a>
                    </div>
                </div>
            </div>

            <ul class="mobile-menu">
                <li>
                    <a class="active" href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="category.html">Categories</a>
                </li>
                <li>
                    <a href="#">
                        Listings
                    </a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="ads-details.html">Ads Details</a></li>
                        <li><a href="pricing.html">Packages</a></li>
                        <li><a href="testimonial.html">Testimonial</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">Contact Us</a>
                </li>
            </ul>

        </nav>

    </header>


    <div class="page-header" style="background: url(img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Login</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home /</a></li>
                            <li class="current">Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="login section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <div class="login-form login-area">
                        <h3>
                            Login Now
                        </h3>
                        <?php
                        ?>
                        <form role="form" class="login-form" method="post" action="<?php echo htmlspecialchars($_SESSION["PHP_SELF"]);?>">
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-user"></i>
                                    <input type="text" id="uname" class="form-control" name="uname" placeholder="Username" required>
                                    <span class="uname_err"><?php echo $uname_err;?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-lock"></i>
                                    <input type="password" id="password" class="form-control" placeholder="Password" name = "password" required>
                                    <span class="pass_err"><?php echo $pass_err;?></span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkedall">
                                    <label class="custom-control-label" for="checkedall">Keep me logged in</label>
                                    <span class="log_err"><?php echo $log_err;?></span>
                                </div>
                                <a class="forgetpassword" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <input type="submit" id="submit" class="btn btn-common log-btn" name="uname" value="Log in">
                            </div>

                            <?php
                                
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>

        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <div class="footer-logo"><img src="" alt=""></div>
                            <div class="textwidget">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt consectetur, adipisci velit.</p>
                            </div>
                            <ul class="mt-3 footer-social">
                                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Quick Link</h3>
                            <ul class="menu">
                                <li><a href="#">- About Us</a></li>
                                <li><a href="#">- Blog</a></li>
                                <li><a href="#">- Events</a></li>
                                <li><a href="#">- Shop</a></li>
                                <li><a href="#">- FAQ's</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Contact Info</h3>
                            <ul class="contact-footer">
                                <li>
                                    <strong><i class="lni-phone"></i></strong><span>+234 706 681 8156 <br> +234 706 681 8156</span>
                                </li>
                                <li>
                                    <strong><i class="lni-envelope"></i></strong><span><a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="54373b3a203537201439353d387a373b39">[email&#160;protected]</a> <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="55262025253a27211538343c397b363a38">[email&#160;protected]</a></span>
                                </li>
                                <li>
                                    <strong><i class="lni-map-marker"></i></strong><span><a href="#">9870 St Vincent Place, Glasgow, DC 45 <br>Fr 45</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </footer>


    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>


    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/main.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.min.js"></script>
    <script src="js/summernote.js"></script>
</body>


</html>