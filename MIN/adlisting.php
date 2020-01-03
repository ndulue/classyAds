<?php

    include "db_connect.php";
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
                            <li><i class="lni-phone"></i> +0123 456 789</li>
                            <li><i class="lni-envelope"></i> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a6d5d3d6d6c9d4d2e6c1cbc7cfca88c5c9cb">[email&#160;protected]</a></li>
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
                    <a href="index.php" class="navbar-brand"><img src="" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav mr-auto w-100 justify-content-center">
                        <li>
                            <a class="nav-link" href="index.php">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category.php">
                                Categories
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="adlisting.php">
                                Listings
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="about.php">About Us</a>
                                <a class="dropdown-item" href="pricing.php">Packages</a>
                                <a class="dropdown-item" href="testimonial.php">Testimonial</a>
                                <a class="dropdown-item" href="faq.php">FAQ</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">
                                Blog
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <div class="post-btn">
                        <a class="btn btn-common" href="dashboard-subcription"><i class="lni-pencil-alt"></i> Post an Ad</a>
                    </div>
                </div>
            </div>

            <ul class="mobile-menu">
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                <li>
                    <a href="category.php">Categories</a>
                </li>
                <li>
                    <a href="adlisting.php">
                        Listings
                    </a>
                </li>
                <li>
                    <a class="active"  href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="ads-details.php">Ads Details</a></li>
                        <li><a href="pricing.php">Packages</a></li>
                        <li><a href="testimonial.php">Testimonial</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                </li>
                <li>
                    <ahref="contact.php">Contact Us</a>
                </li>
            </ul>

        </nav>

    </header>


    <div class="page-header" style="background: url(img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Listings</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Listings</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="main-container section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
                    <aside>

                        <div class="widget_search">
                            <form role="search" id="search-form">
                                <input type="search" class="form-control" autocomplete="off" name="s" placeholder="Search..." id="search-input" value="">
                                <button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
                            </form>
                        </div>

                        <div class="widget categories">
                            <h4 class="widget-title">All Categories</h4>
                            <ul class="categories-list">
                                <?php
                                    $sql = "SELECT * FROM category";
                                    $result = $conn->query($sql);

                                    while ($cat = $result->fetch_assoc()):
                                        $id = $cat["id"];
                                        $name = $cat["category"];
                                        $icon = $cat["icon"];
                                ?>
                                    <li>
                                        <a href="category.php?id=<?php echo $id;?>">
                                            <i class="<?php echo $icon;?>"></i> <?php echo $name;?> <span class="category-counter">(5)</span>
                                        </a>
                                    </li>
                                <?php endwhile;?>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Advertisement</h4>
                            <div class="add-box">
                                <img class="img-fluid" src="img/img1.jpg" alt="">
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-9 col-md-12 col-xs-12 page-content">

                    <div class="product-filter">
                        <div class="short-name">
                            <span>Showing (1 - 12 products of 7371 products)</span>
                        </div>
                    </div>


                    <div class="adds-wrapper">
                        <div class="tab-content">
                            <div id="list-view" class="tab-pane fade active show">
                                <div class="row">
                                <?php
                                    $sql = 'SELECT * FROM product ORDER BY rand() limit 4';
                                    $result = $conn->query($sql);

                                    while($product = $result->fetch_assoc()):
                                    $product_id = $product['id'];
                                    $product_image = $product['product_image'];
                                    $product_category = $product['product_category'];
                                    $product_time = $product['product_time'];
                                    $product_name = $product['product_name'];
                                    $product_seller = $product['product_seller'];
                                    $product_tag = $product['product_tag'];
                                    $product_brand = $product['product_brand'];
                                    $product_location = $product['product_location'];
                                    $product_description = $product['product_description'];
                                    $product_price = $product['product_price'];

                                ?>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="featured-box">
                                            <figure>
                                                <div class="icon">
                                                    <span class="bg-green"><i class="lni-heart"></i></span>
                                                    <span><i class="lni-bookmark"></i></span>
                                                </div>
                                                <a href="ads-details.php?id=<?php echo $product_id;?>"><img class="img-fluid" src="<?php echo $product_image;?>" alt=""></a>
                                            </figure>
                                            <div class="feature-content">
                                                <div class="product">
                                                    <a href="category.php?category=<?php echo $product_category;?>"><?php echo $product_category;?></a>
                                                </div>
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
                                                <p class="dsc"><?php echo $product_description;?></p>
                                                <div class="listing-bottom">
                                                    <h3 class="price float-left"><?php echo $product_price;?></h3>
                                                    <a href="ads-details..php?id"=<?php echo $product_id;?> class="btn btn-common float-right">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;?>    
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="pagination-bar">
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <footer>

        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <div class="footer-logo"><img src="img/logo.png" alt=""></div>
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
                    <div class="col-lg-4 col-md-4 col-xs-6 ">
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
                                    <strong><i class="lni-envelope"></i></strong><span><a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f3c30312b3e3c2b1f323e3633713c3032">[email&#160;protected]</a> <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="71020401011e0305311c10181d5f121e1c">[email&#160;protected]</a></span>
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