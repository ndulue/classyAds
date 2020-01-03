<?php

    include "db_connect.php";
    $id = "";
    if (!empty($_GET["id"])) {
        $id = (int)($_GET["id"]);
    } else {
        header("location:404.php");
    }

    $Usql = "UPDATE `product` SET `product_view` = `product_view`+1 WHERE id='$id'"; 
    $result = $conn->query($Usql);

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
                        <h2 class="product-title">Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-padding">
        <div class="container">

            
            <div class="product-info row">
            <?php 
                $sql = "SELECT * FROM product WHERE id = '$id'";
                $result = $conn->query($sql);

                while($product = $result->fetch_assoc()):
                $product_id = $product['id'];
                $product_image = $product['product_image'];
                $product_image2 = $product['product_image2'];
                $product_image3 = $product['product_image3'];
                $product_category = $product['product_category'];
                $product_time = $product['product_time'];
                $product_name = $product['product_name'];
                $product_seller = $product['product_seller'];
                $product_price = $product['product_price'];
                $product_tag = $product['product_tag'];
                $product_brand = $product['product_brand'];
                $product_location = $product['product_location'];
                $product_description = $product['product_description'];
                $product_spec1 = $product['product_spec1'];
                $product_spec2 = $product['product_spec2'];
                $product_spec3 = $product['product_spec3'];
                $product_spec4 = $product['product_spec4'];
                $product_spec5 = $product['product_spec5'];
                $product_view = $product['product_view'];
                ?>

                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="ads-details-wrapper">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="product-img">
                                    <img class="img-fluid" src="<?php echo $product_image;?>" alt="">
                                </div>
                                <span class="price"><?php echo $product_price;?></span>
                            </div>
                            <div class="item">
                                <div class="product-img">
                                    <img class="img-fluid" src="<?php echo $product_image2;?>" alt="">
                                </div>
                                <span class="price"><?php echo $product_price;?></span>
                            </div>
                            <div class="item">
                                <div class="product-img">
                                    <img class="img-fluid" src="<?php echo $product_image3;?>" alt="">
                                </div>
                                <span class="price"><?php echo $product_price;?></span>
                            </div>
                        </div>
                    </div>
                    <div class="details-box">
                        <div class="ads-details-info">
                            <h2><?php echo $product_name;?></h2>
                            <div class="details-meta">
                                <span><i class="lni-alarm-clock"></i> <?php echo $product_time;?></span>
                                <span><i class="lni-map-marker"></i> <?php echo $product_location;?></span>
                                <span><i class="lni-eye"></i> <?php echo $product_view;?> View</span>
                            </div>
                            <p class="mb-4"><?php echo $product_description;?></p>
                            <h4 class="title-small mb-3">Specification:</h4>
                            <ul class="list-specification">
                                <li><i class="lni-check-mark-circle"></i> <?php echo $product_spec1;?></li>
                                <li><i class="lni-check-mark-circle"></i> <?php echo $product_spec2;?></li>
                                <li><i class="lni-check-mark-circle"></i> <?php echo $product_spec3;?></li>
                                <li><i class="lni-check-mark-circle"></i> <?php echo $product_spec4;?></li>
                                <li><i class="lni-check-mark-circle"></i> <?php echo $product_spec5;?></li>
                            </ul>
                        </div>
                        <div class="tag-bottom">
                            <div class="float-left">
                                <ul class="advertisement">
                                    <li>
                                        <p><strong><i class="lni-folder"></i> Categories:</strong> <a href="#"><?php echo $product_category;?></a></p>
                                    </li>
                                    <li>
                                        <p><strong><i class="lni-archive"></i> Condition:</strong> New</p>
                                    </li>
                                    <li>
                                        <p><strong><i class="lni-package"></i> Brand:</strong> <a href="#"><?php echo $product_brand;?></a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            <?php endwhile;?>

                <div class="col-lg-4 col-md-6 col-xs-12">
                
                    <aside class="details-sidebar">
                        <div class="widget">
                            <h4 class="widget-title">Ad Posted By</h4>
                            <div class="agent-inner">
                                <div class="agent-title">
                                    <div class="agent-photo">
                                        <a href="#"><img src="img/productinfo/agent.jpg" alt=""></a>
                                    </div>
                                    <div class="agent-details">
                                        <h3><a href="#"><?php echo $product_seller;?></a></h3>
                                        <span><i class="lni-phone-handset"></i>(123) 123-456</span>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Your Email">
                                <input type="text" class="form-control" placeholder="Your Phone">
                                <p>I'm interested in this property [ID 123456] and I'd like to know more details.</p>
                                <button class="btn btn-common fullwidth mt-4">Send Message</button>
                            </div>
                        </div>

                        <div class="widget">
                            <h4 class="widget-title">More Ads From Seller</h4>
                            <ul class="posts-list">
                            <?php 
                                $sql = "SELECT * FROM product WHERE product_seller = '$product_seller' AND id != '$id'";
                                $result = $conn->query($sql);

                                while($product = $result->fetch_assoc()):
                                    $product_id = $product['id'];
                                    $product_image = $product['product_image'];
                                    $product_image2 = $product['product_image2'];
                                    $product_image3 = $product['product_image3'];
                                    $product_category = $product['product_category'];
                                    $product_time = $product['product_time'];
                                    $product_name = $product['product_name'];
                                    $product_seller = $product['product_seller'];
                                    $product_price = $product['product_price'];
                                    $product_tag = $product['product_tag'];
                                    $product_brand = $product['product_brand'];
                                    $product_location = $product['product_location'];
                                    $product_description = $product['product_description'];
                                    $product_spec1 = $product['product_spec1'];
                                    $product_spec2 = $product['product_spec2'];
                                    $product_spec3 = $product['product_spec3'];
                                    $product_spec4 = $product['product_spec4'];
                                    $product_spec5 = $product['product_spec5'];
                                                            
                            ?>
                                <li>
                                    <div class="widget-thumb">
                                        <a href="ads-details.php?id=<?php echo $product_id;?>"><img src="<?php echo $product_image;?>" alt=""/></a>
                                    </div>
                                    <div class="widget-content">
                                        <h4><a href="ads-details.php?id=<?php echo $product_id;?>"><?php echo $product_name;?></a></h4>
                                        <div class="meta-tag">
                                            <span>
                                            <a href="#"><i class="lni-user"></i> <?php echo $product_seller;?></a>
                                            </span>
                                            <span>
                                            <a href="#"><i class="lni-map-marker"></i> <?php echo $product_location;?></a>
                                            </span>
                                            <span>
                                            <a href="#"><i class="lni-tag"></i> <?php echo $product_tag;?></a>
                                            </span>
                                        </div>
                                        <h4 class="price">  ₦<?php echo $product_price;?></h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                            <?php endwhile;?>    
                               
                            </ul>
                        </div>
                    </aside>

                </div>
            </div>

        </div>
    </div>


    <section class="subscribes section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="subscribes-inner">
                        <div class="icon">
                            <i class="lni-pointer"></i>
                        </div>
                        <div class="sub-text">
                            <h3>Subscribe to Newsletter</h3>
                            <p>and receive new ads in inbox</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <form>
                        <div class="subscribe">
                            <input class="form-control" name="EMAIL" placeholder="Enter your Email" required="" type="email">
                            <button class="btn btn-common" type="submit">Subscribe</button>
                        </div>
                    </form>
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
                                    <strong><i class="lni-phone"></i></strong><span>+1 555 444 66647 <br> +1 555 444 66647</span>
                                </li>
                                <li>
                                    <strong><i class="lni-envelope"></i></strong><span><a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ccafa3a2b8adafb88ca1ada5a0e2afa3a1">[email&#160;protected]</a> <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bdcec8cdcdd2cfc9fdd0dcd4">[email&#160;protected]</a>l.com</span>
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

<!-- Mirrored from preview.uideck.com/items/nexusplus/ads-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Oct 2018 07:22:54 GMT -->

</html>