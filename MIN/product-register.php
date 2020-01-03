<?php
 include 'db_connect.php';
$fname_err = $lname_err = $uname_err = $email_err = $number_err = $password_err = $passworda_err = $image_err = "";
$fname = $lname = $uname = $email = $pnumber = $password = $password_again = $picture = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"] || strlen($_POST["fname"]) < 3)) {
        $fname_err = "Fill in your first name correctly";
    }else {
        $lname = text_input($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z]*$/",$fname)) {
            $fname_err = "Only letters and whitespaces are allowed";
        }
    }
    if (empty($_POST["lname"] || strlen($_POST["lname"]) < 3)) {
        $fname_err = "Fill in your last name correctly";
    }else {
        $lname = text_input($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z]*$/",$lname)) {
            $lname_err = "Only letters and whitespaces are allowed";
        }
    }
    if (empty($_POST["uname"] || strlen($_POST["uname"]) < 3)) {
        $uname_err = "Fill in your user name correctly";
    }else {
        $uname = text_input($_POST["uname"]);
        if (!preg_match("/^[a-zA-Z]*$/",$uname)) {
            $uname_err = "Only letters and whitespaces are allowed";
        }
    }
    if (empty($_POST["email"])) {
        $email_err = "Fill in your email address";
    }else {
        $email = text_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Enter a valid email address";
        }
    }
    if (empty($_POST["pnumber"])) {
        $number_err = "Fill in your phone number";
    }else {
        $pnumber = text_input($_POST["pnumber"]);
        if (!filter_var($pnumber, FILTER_VALIDATE_INT)) {
            $number_err = "Enter a valid phone number";
        }
    }
    if (empty($_POST["password"]) || empty($_POST["password_again"])) {
        $password_err = $passworda_err = "Fill in your password";
    }else {
        $password = text_input($_POST["password"]);
        $password_again = text_input($_POST["password_again"]);

        if (
            $password != $password_again
        ) {
            $passworda_err = "Use the same password";
        } elseif (strlen($password > 6) || strlen($password < 16)) {
            $password_err = "Password is too long";
        }
    }

    $sql = "SELECT * FROM `product_seller` WHERE `email` = '.$email.' OR `username` = '.$uname.'";
    $result = $conn->query($sql);
    $num = $result->num_rows;
    
    if ($num > 0) {
        return false;
        $reg_err = "Login details already exist, use another"
    } else {
        $sql = "INSERT INTO `product_seller` (`id`,`first name`,`last name`,`username`,`email`,`password`,`pnumber`) VALUES ('','$fname','$lname','$uname','$email','$password','$pnumber')";
        $result = $conn->query($sql);
        if ($result) {
            $_SESSION['admin'] = $uname;
            header("location:login.php");
        }else {
            header("location:404.php");
        }

    }
    
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Made In Nigeria - Classified Ads</title>

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
                            <a href="login.html" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
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
                            <a class="nav-link" href="#">
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
                        <h2 class="product-title">Join Us</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="register section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <div class="register-form login-area">
                        <h3>
                            Seller Registeration
                        </h3>
                        <form class="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-user"></i>
                                    <input type="text" id="firstname" class="form-control" name="fname" placeholder="Firstname" required>
                                    <span class="fname_err"><?php echo $fname_err?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-user"></i>
                                    <input type="text" id="lastname" class="form-control" name="lname" placeholder="Lastname" required>
                                    <span class="lname_err"><?php echo $lname_err?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-user"></i>
                                    <input type="text" id="username" class="form-control" name="uname" placeholder="Username" required>
                                    <span class="uname_err"><?php echo $uname_err?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-envelope"></i>
                                    <input type="email" id="email" class="form-control" name="email" placeholder="Email Address" required>
                                    <span class="email_err"><?php echo $email_err?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-user"></i>
                                    <input type="number" id="Phonenumber" class="form-control" name="pnumber" placeholder="Phone number" required>
                                    <span class="number_err"><?php echo $number_err?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-lock"></i>
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                                    <span class="password_err"><?php echo $password_err?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-lock"></i>
                                    <input type="password" class="form-control" placeholder="Retype Password" name="password_again" id="password-again" required>
                                    <span class="passworda_err"><?php echo $passworda_err?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <input type="file" class="form-control" placeholder="Choose profile picture" id="picture" name="picture" required>
                                    <span class="image_err"><?php echo $image_err?></span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkedall">
                                    <label class="custom-control-label" for="checkedall">By registering, you accept our Terms & Conditions</label>
                                    <span class="image_err"><?php echo $reg_err?></span>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-common log-btn" name="submit" id="submit" value="Submit">
                            </div>
                        </form>
                        <?php

                            
                        ?>
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
                                    <strong><i class="lni-envelope"></i></strong><span><a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c9aaa6a7bda8aabd89a4a8a0a5e7aaa6a4">[email&#160;protected]</a> <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9be8eeebebf4e9efdbf6faf2f7b5f8f4f6">[email&#160;protected]</a></span>
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
    <script src="js/color-switcher.js"></script>
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