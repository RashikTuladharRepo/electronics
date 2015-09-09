<?php
include "lib/Getstatic.php";
$gs = new Getstatic();
$base_url = $gs->home_base_url();
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" /
    <title>Electronics Suppliers</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/electronics.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>styles/templatemo_misc.css">
</head>
<body>

<!--header info-->
<div class="container-fluid header-info">
    <div class="container">
        <div class="col-md-6">
            <a href="javascript:void(0);"><i class="fa fa-user"></i> About Us</a>
            <span>|</span>
            <a href="javascript:void(0);"><i class="fa fa-phone"></i> Contact</a>
        </div>
        <div class="col-md-6 text-right">
            <div class="col-md-6">
                <i class="fa fa-mobile-phone"></i> +977-1-9841111111
            </div>
            <div class="col-md-6">
                <i class="fa fa-envelope"></i> info@electronics.com
            </div>
        </div>
    </div>
</div>
<!--header info-->

<!--navigation-->
<div class="container-fluid">
    <div class="container">
        <nav role="navigation" class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Brand</a>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Profile</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Messages <b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="#">Inbox</a></li>
                            <li><a href="#">Drafts</a></li>
                            <li><a href="#">Sent Items</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Trash</a></li>
                        </ul>
                    </li>
                </ul>
                <form role="search" class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control">
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--navigation-->

<!--slider-->
<div class="container-fluid slider">
</div>
<!--slider-->

<!--products-->
<div class="container-fluid products">
    <div class="row">
        <div class="col-md-4">
            <div class="products-list">
                <img src="<?php echo $base_url; ?>images/p1.jpg" class="img-rounded img-responsive" alt="product" title="Product">
                <div class="products-list-description">
                    <h4>Iphone 7</h4>
                    <h5>The Best Smart Phone In Town</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="products-list">
                <img src="<?php echo $base_url; ?>images/p2.jpg" class="img-responsive" alt="product" title="Product">
                <div class="products-list-description">
                    <h4>Mac Book Air</h4>
                    <h5>What To Have Next!</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="products-list">
                <img src="<?php echo $base_url; ?>images/p3.jpg" class="img-responsive" alt="product" title="Product">
                <div class="products-list-description">
                    <h4>Nikon D2300</h4>
                    <h5>Get The Best Shot!</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="products-list">
                <img src="<?php echo $base_url; ?>images/p4.jpg" class="img-responsive" alt="product" title="Product">
                <div class="products-list-description">
                    <h4>Apple Watch</h4>
                    <h5>Be Smart!</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="products-list">
                <img src="<?php echo $base_url; ?>images/p5.jpg" class="img-responsive" alt="product" title="Product">
                <div class="products-list-description">
                    <h4>Samsung Galaxy S6</h4>
                    <h5>Next Generation Smart Phone!</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="products-list">
                <img src="<?php echo $base_url; ?>images/p6.jpg" class="img-responsive" alt="product" title="Product">
                <div class="products-list-description">
                    <h4>Google Chrome Book</h4>
                    <h5>Love Google!</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!--products-->

<!--index-about-->
<div class="container-fluid index-about">
    <div class="index-about-contents">
        <h1>Our Shop</h1>

        <h3>This is our shop and we love to work here!</h3>
        <a class="btn btn-lg btn-primary"><i class="fa fa-home"></i> About Us</a>
    </div>
</div>
<!--index-about-->

<!--new products-->
<div class="container-fluid  new-products">
    <div class="container">
        <div class="row">
            <!--carousel-->
            <div class="container">
                <div class="col-md-12 section-title">
                    <h1 class="text-center"><i class="fa fa-tachometer"></i> New Products
                        <small>Might Interest You!</small>
                    </h1>
                </div>

                <div class="col-md-12 small-horizontal-bar"></div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="our-listing owl-carousel">
                        <div class="list-item">
                            <div class="list-thumb">
                                <img src="images/p1.jpg" class="img-responsive" alt="destination 2">
                            </div>
                            <div class="list-content">
                                <h5>Mumolas OPAC</h5>
                                <span>Mumolas OPAC</span>
                                <a href="#" class="btn-custom">Know More</a>
                            </div>
                        </div>

                        <div class="list-item">
                            <div class="list-thumb">
                                <img src="images/p2.jpg" class="img-responsive" alt="destination 2">
                            </div>
                            <div class="list-content">
                                <h5>Mumolas OPAC</h5>
                                <span>Mumolas OPAC</span>
                                <a href="#" class="btn-custom">Know More</a>
                            </div>
                        </div>

                        <div class="list-item">
                            <div class="list-thumb">
                                <img src="images/p3.jpg" class="img-responsive" alt="destination 2">
                            </div>
                            <div class="list-content">
                                <h5>Mumolas OPAC</h5>
                                <span>Mumolas OPAC</span>
                                <a href="#" class="btn-custom">Know More</a>
                            </div>
                        </div>

                        <div class="list-item">
                            <div class="list-thumb">
                                <img src="images/p4.jpg" class="img-responsive" alt="destination 2">
                            </div>
                            <div class="list-content">
                                <h5>Mumolas OPAC</h5>
                                <span>Mumolas OPAC</span>
                                <a href="#" class="btn-custom">Know More</a>
                            </div>
                        </div>

                        <div class="list-item">
                            <div class="list-thumb">
                                <img src="images/p5.jpg" class="img-responsive" alt="destination 2">
                            </div>
                            <div class="list-content">
                                <h5>Mumolas OPAC</h5>
                                <span>Mumolas OPAC</span>
                                <a href="#" class="btn-custom">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--carousel-->
        </div>
    </div>
</div>
<!--new products-->

<!--footer-->
<div class="container-fluid footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <h2>Your Shop</h2>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged.
                </div>
            </div>
            <div class="col-md-4">
                <h2>Shop</h2>

                <div class="col-md-6">
                    <ul>
                        <li>New Products</li>
                        <li>Top Sellers</li>
                        <li>Our Stores</li>
                        <li>Contact Us</li>
                        <li>About Us</li>
                        <li>Visit Us</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <li>TV / Computer</li>
                    <li>Hardwares</li>
                    <li>Gadgets</li>
                    <li>Camera</li>
                </div>
            </div>
            <div class="col-md-4">
                <h2>Subscribe</h2>

                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Please Enter Your Email!">
                    </div>
                    <a type="submit" class="btn btn-success"><i class="fa fa-envelope"></i> Subscribe</a>
                </form>

                <div>
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-google"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container"><p class="text-center">Copyrights &copy; 2015</p></div>
<!--footer-->

<script type="text/javascript" src="<?php echo $base_url; ?>scripts/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>scripts/jquery.smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>scripts/plugins.js"></script>
<script type="application/javascript">
    jQuery(document).ready(function ($) {
        'use strict';
        $(".our-listing").owlCarousel({
            items: 4,
            navigation: true,
            autoPlay: 5000,
            slideSpeed: 200,
            navigationText: ["&larr;", "&rarr;"],
        });
    });
</script>
</body>
</html>