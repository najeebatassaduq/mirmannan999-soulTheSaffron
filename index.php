<?php
require"navbar.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Ruby - Jewelry Store e-Commerce Bootstrap 4 Template</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>

    <!--== Google Fonts ==-->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700"/>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i"/>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!--=== Font-Awesome CSS ===-->
    <link href="assets/css/vendor/font-awesome.css" rel="stylesheet">
    <!--=== Plugins CSS ===-->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>



<!--== Search Box Area Start ==-->
<div class="body-popup-modal-area">
    <span class="modal-close"><img src="assets/img/cancel.png" alt="Close" class="img-fluid"/></span>
    <div class="modal-container d-flex">
        <div class="search-box-area">
            <div class="search-box-form">
                <form action="#" method="post">
                    <input type="search" placeholder="type keyword and hit enter"/>
                    <button class="btn" type="button"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--== Search Box Area End ==-->

<!--== Banner // Slider Area Start ==-->
<section id="banner-area" class="banner__2">
    <div class="ruby-container">
        <div class="row">
            <div class="col-lg-12">
                <div id="banner-carousel" class="owl-carousel">
                    <!-- Banner Single Carousel Start -->
                    <div class="single-carousel-wrap home_6_slide_1">
                        <div class="banner-caption text-center text-lg-left">
                            <h4>Rubby Store</h4>
                            <h2>Ring Solitaire <br> for Princess</h2>
                            <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            <a href="#" class="btn-long-arrow">Learn More</a>
                        </div>
                    </div>
                    <!-- Banner Single Carousel End -->

                    <!-- Banner Single Carousel Start -->
                    <div class="single-carousel-wrap home_6_slide_2">
                        <div class="banner-caption text-center text-lg-left">
                            <h4>New Collection 2017</h4>
                            <h2>Nice Earrings <br> Collection</h2>
                            <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            <a href="#" class="btn-long-arrow">Learn More</a>
                        </div>
                    </div>
                    <!-- Banner Single Carousel End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Banner Slider End ==-->

<!--== Featured Products Area Start ==-->
<div id="category-feature-product" class="pt-9">
    <div class="ruby-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-featured-product">
                            <a href="#"><img src="assets/img/home_6_cat_1.jpg" alt="Products" class="img-fluid"/></a>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="single-featured-product">
                            <a href="#"><img src="assets/img/home_6_cat_2.jpg" alt="Products" class="img-fluid"/></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-featured-product">
                            <a href="#"><img src="assets/img/home_6_cat_3.jpg" alt="Products" class="img-fluid"/></a>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="single-featured-product">
                            <a href="#"><img src="assets/img/home_6_cat_4.jpg" alt="Products" class="img-fluid"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Featured Products Area End ==-->

<!--== New Products Area Start ==-->
<section id="new-products-area" class="p-9">
    <div class="ruby-container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2>New Products</h2>
                    <p>Trending stunning Unique</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="products-wrapper">
                    <div class="new-products-carousel owl-carousel">
                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.php"><img src="assets/img/new-product-1.jpg" alt="Products"
                                                                   class="img-fluid"></a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="single-product.php">Crown Summit Backpack</a></h2>
                                <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                <span class="price">$52.00</span>
                                <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                                <span class="product-bedge">New</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                   title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                   title="Compare"><i class="fa fa-tags"></i></a>
                            </div>
                        </div>
                        <!-- Single Product Item -->

                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.php"><img src="assets/img/new-product-2.jpg" alt="Products"
                                                                   class="img-fluid"></a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="single-product.php">Bruno Compete Hoodie</a></h2>
                                <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                <span class="price">$152.00</span>
                                <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                                <span class="product-bedge">New</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                   title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                   title="Compare"><i class="fa fa-tags"></i></a>
                            </div>
                        </div>
                        <!-- Single Product Item -->

                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.php"><img src="assets/img/new-product-3.jpg" alt="Products"
                                                                   class="img-fluid"></a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="single-product.php">MH01-Black</a></h2>
                                <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                <span class="price">$43.00</span>
                                <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                                <span class="product-bedge">New</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                   title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                   title="Compare"><i class="fa fa-tags"></i></a>
                            </div>
                        </div>
                        <!-- Single Product Item -->

                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.php"><img src="assets/img/new-product-4.jpg" alt="Products"
                                                                   class="img-fluid"></a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="single-product.php">Chaz Kangeroo Hoodie</a></h2>
                                <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </span>
                                <span class="price">$83.00</span>
                                <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                                <span class="product-bedge sale">Sale</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                   title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                   title="Compare"><i class="fa fa-tags"></i></a>
                            </div>
                        </div>
                        <!-- Single Product Item -->

                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.php"><img src="assets/img/new-product-4.jpg" alt="Products"
                                                                   class="img-fluid"></a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="single-product.php">Chaz Kangeroo Hoodie</a></h2>
                                <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </span>
                                <span class="price">$83.00</span>
                                <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                                <span class="product-bedge sale">Sale</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                   title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                   title="Compare"><i class="fa fa-tags"></i></a>
                            </div>
                        </div>
                        <!-- Single Product Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== New Products Area End ==-->

<!--== Categories Products Area Start ==-->
<div id="products-area-wrapper" class="mt-0">
    <div class="ruby-container">
        <div class="row no-gutters">
            <div class="col-md-7">
                <a href="#" class="product-category-name-warp d-flex">
                    <div class="category-title-box d-flex">
                        <h2 class="pro-cate-title">Men</h2>
                    </div>
                </a>
            </div>

            <div class="col-md-5">
                <div class="products-wrapper text-center">
                    <div class="products-categories-carousel owl-carousel">
                        <div class="single-product-item">
                            <figure class="product-thumb">
                                <a href="#"><img src="assets/img/product-1.jpg" alt="Product"
                                                 class="img-fluid"/></a>
                            </figure>
                            <div class="product-details">
                                <h2><a href="single-product.php">Crown Summit Backpack</a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span class="price">$52.00</span>
                                <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                            </div>
                        </div>

                        <div class="single-product-item">
                            <figure class="product-thumb">
                                <a href="#"><img src="assets/img/product-2.jpg" alt="Product"
                                                 class="img-fluid"/></a>
                            </figure>
                            <div class="product-details">
                                <h2><a href="single-product.php">Crown Summit Backpack</a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span class="price">$52.00</span>
                                <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                            </div>
                        </div>

                        <div class="single-product-item">
                            <figure class="product-thumb">
                                <a href="#"><img src="assets/img/product-3.jpg" alt="Product"
                                                 class="img-fluid"/></a>
                            </figure>
                            <div class="product-details">
                                <h2><a href="single-product.php">Crown Summit Backpack</a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span class="price">$52.00</span>
                                <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-md-5">
                <div class="products-wrapper text-center">
                    <div class="products-categories-carousel owl-carousel">
                        <div class="single-product-item">
                            <figure class="product-thumb">
                                <a href="#"><img src="assets/img/product-1.jpg" alt="Product"
                                                 class="img-fluid"/></a>
                            </figure>
                            <div class="product-details">
                                <h2><a href="single-product.php">Crown Summit Backpack</a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span class="price">$52.00</span>
                                <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                            </div>
                        </div>

                        <div class="single-product-item">
                            <figure class="product-thumb">
                                <a href="#"><img src="assets/img/product-2.jpg" alt="Product"
                                                 class="img-fluid"/></a>
                            </figure>
                            <div class="product-details">
                                <h2><a href="single-product.php">Crown Summit Backpack</a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span class="price">$52.00</span>
                                <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                            </div>
                        </div>

                        <div class="single-product-item">
                            <figure class="product-thumb">
                                <a href="#"><img src="assets/img/product-3.jpg" alt="Product"
                                                 class="img-fluid"/></a>
                            </figure>
                            <div class="product-details">
                                <h2><a href="single-product.php">Crown Summit Backpack</a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span class="price">$52.00</span>
                                <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7 order-first order-md-last">
                <a href="#" class="product-category-name-warp women d-flex">
                    <div class="category-title-box d-flex">
                        <h2 class="pro-cate-title">Women</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!--== Categories Products Area End ==-->

<!--== Testimonial Area Start ==-->
<section id="testimonial-area" class="mt-9">
    <div class="ruby-container">
        <div class="testimonial-wrapper">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2>What People Say</h2>
                        <p>Testimonials</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="testimonial-content-wrap">
                        <div id="testimonialCarousel" class="owl-carousel">
                            <div class="single-testimonial-item">
                                <p>These guys have been absolutely outstanding. When I needed them they came through in
                                    a big way! I know that if you buy this theme, you'll get the one thing we all look
                                    for when we buy on Themeforest, and that's real support for the craziest of
                                    requests!</p>

                                <h3 class="client-name">Luis Manrata</h3>
                                <span class="client-email">you@email.here</span>
                            </div>

                            <div class="single-testimonial-item">
                                <p>These guys have been absolutely outstanding. When I needed them they came through in
                                    a big way! I know that if you buy this theme, you'll get the one thing we all look
                                    for when we buy on Themeforest, and that's real support for the craziest of
                                    requests!</p>

                                <h3 class="client-name">John Dibba</h3>
                                <span class="client-email">you@email.here</span>
                            </div>

                            <div class="single-testimonial-item">
                                <p>These guys have been absolutely outstanding. When I needed them they came through in
                                    a big way! I know that if you buy this theme, you'll get the one thing we all look
                                    for when we buy on Themeforest, and that's real support for the craziest of
                                    requests!</p>

                                <h3 class="client-name">Alex Tuntuni</h3>
                                <span class="client-email">you@email.here</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Testimonial Area End ==-->



<!-- Start All Modal Content -->
<!--== Product Quick View Modal Area Wrap ==-->
<div class="modal fade" id="quickView" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="assets/img/cancel.png" alt="Close" class="img-fluid"/></span>
            </button>
            <div class="modal-body">
                <div class="quick-view-content single-product-page-content">
                    <div class="row">
                        <!-- Product Thumbnail Start -->
                        <div class="col-lg-5 col-md-6">
                            <div class="product-thumbnail-wrap">
                                <div class="product-thumb-carousel owl-carousel">
                                    <div class="single-thumb-item">
                                        <a href="single-product.php"><img class="img-fluid"
                                                                           src="assets/img/single-pro-thumb.jpg"
                                                                           alt="Product"/></a>
                                    </div>

                                    <div class="single-thumb-item">
                                        <a href="single-product.php"><img class="img-fluid"
                                                                           src="assets/img/single-pro-thumb-2.jpg"
                                                                           alt="Product"/></a>
                                    </div>

                                    <div class="single-thumb-item">
                                        <a href="single-product.php"><img class="img-fluid"
                                                                           src="assets/img/single-pro-thumb-3.jpg"
                                                                           alt="Product"/></a>
                                    </div>

                                    <div class="single-thumb-item">
                                        <a href="single-product.php"><img class="img-fluid"
                                                                           src="assets/img/single-pro-thumb-4.jpg"
                                                                           alt="Product"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Thumbnail End -->

                        <!-- Product Details Start -->
                        <div class="col-lg-7 col-md-6 mt-5 mt-md-0">
                            <div class="product-details">
                                <h2><a href="single-product.php">Crown Summit Backpack</a></h2>

                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>

                                <span class="price">$52.00</span>

                                <div class="product-info-stock-sku">
                                    <span class="product-stock-status">In Stock</span>
                                    <span class="product-sku-status ml-5"><strong>SKU</strong> MH03</span>
                                </div>

                                <p class="products-desc">Ideal for cold-weathered training worked lorem ipsum outdoors,
                                    the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out
                                    the wind as ribbed cuffs and bottom band seal in body heat Lorem ipsum dolor sit
                                    amet, consectetur adipisicing elit. Enim, reprehenderit.</p>
                                <div class="shopping-option-item">
                                    <h4>Color</h4>
                                    <ul class="color-option-select d-flex">
                                        <li class="color-item black">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">Black</span>
                                            </div>
                                        </li>

                                        <li class="color-item green">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">green</span>
                                            </div>
                                        </li>

                                        <li class="color-item orange">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">Orange</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-quantity d-flex align-items-center">
                                    <div class="quantity-field">
                                        <label for="qty">Qty</label>
                                        <input type="number" id="qty" min="1" max="100" value="1"/>
                                    </div>

                                    <a href="cart.html" class="btn btn-add-to-cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Details End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Product Quick View Modal Area End ==-->
<!-- End All Modal Content -->

<!-- Scroll to Top Start -->
<a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
<!-- Scroll to Top End -->


<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="assets/js/vendor/jquery-migrate-1.4.1.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="assets/js/vendor/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="assets/js/vendor/bootstrap.min.js"></script>
<!--=== Plugins Min Js ===-->
<script src="assets/js/plugins.js"></script>

<!--=== Active Js ===-->
<script src="assets/js/active.js"></script>
</body>

</html>

<?php
require"footer.php";
?>