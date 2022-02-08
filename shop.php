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

    <title>Shop :: Ruby - Jewelry Store e-Commerce Bootstrap 4 Template</title>

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
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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

<!--== Page Title Area Start ==-->
<div id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-title-content">
                    <h1>Shop</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php" class="active">Shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Page Title Area End ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="p-9">
    <div class="ruby-container">
        <div class="row">
            <!-- Shop Page Content Start -->
            <div class="col-lg-12">
                <div class="shop-page-content-wrap">
                    <div class="products-settings-option d-block d-md-flex">
                        <div class="product-cong-left d-flex align-items-center">
                            <ul class="product-view d-flex align-items-center">
                                <li class="current column-gird"><i class="fa fa-bars fa-rotate-90"></i></li>
                                <li class="box-gird"><i class="fa fa-th"></i></li>
                                <li class="list"><i class="fa fa-list-ul"></i></li>
                            </ul>
                            <span class="show-items">Items 1 - 9 of 17</span>
                        </div>

                        <div class="product-sort_by d-flex align-items-center mt-3 mt-md-0">
                            <label for="sort">Sort By:</label>
                            <select name="sort" id="sort">
                                <option value="Position">Relevance</option>
                                <option value="Name Ascen">Name, A to Z</option>
                                <option value="Name Decen">Name, Z to A</option>
                                <option value="Price Ascen">Price low to heigh</option>
                                <option value="Price Decen">Price heigh to low</option>
                            </select>
                        </div>
                    </div>

                    <div class="shop-page-products-wrap">
                        <div class="products-wrapper">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.php"><img src="assets/img/new-product-1.jpg"
                                                                               alt="Products" class="img-fluid"></a>
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
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-compare">+
                                                Compare</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-tags"></i></a>
                                        </div>
                                        <span class="product-bedge">New</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.php"><img src="assets/img/new-product-2.jpg"
                                                                               alt="Products" class="img-fluid"></a>
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
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-compare">+
                                                Compare</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-tags"></i></a>
                                        </div>
                                        <span class="product-bedge sale">Sale</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.php"><img src="assets/img/new-product-3.jpg"
                                                                               alt="Products" class="img-fluid"></a>
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
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-compare">+
                                                Compare</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-tags"></i></a>
                                        </div>
                                        <span class="product-bedge">New</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.php"><img src="assets/img/new-product-4.jpg"
                                                                               alt="Products" class="img-fluid"></a>
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
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-compare">+
                                                Compare</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-tags"></i></a>
                                        </div>
                                        <span class="product-bedge">New</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.php"><img src="assets/img/product-4.jpg"
                                                                               alt="Products" class="img-fluid"></a>
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
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-compare">+
                                                Compare</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-tags"></i></a>
                                        </div>
                                        <span class="product-bedge sale">Sale</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.php"><img src="assets/img/product-3.jpg"
                                                                               alt="Products" class="img-fluid"></a>
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
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-compare">+
                                                Compare</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-tags"></i></a>
                                        </div>
                                        <span class="product-bedge sale">Sale</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.php"><img src="assets/img/new-product-1.jpg"
                                                                               alt="Products" class="img-fluid"></a>
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
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-compare">+
                                                Compare</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-tags"></i></a>
                                        </div>
                                        <span class="product-bedge">New</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.php"><img src="assets/img/new-product-2.jpg"
                                                                               alt="Products" class="img-fluid"></a>
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
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-compare">+
                                                Compare</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-tags"></i></a>
                                        </div>
                                        <span class="product-bedge sale">Sale</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.php"><img src="assets/img/new-product-3.jpg"
                                                                               alt="Products" class="img-fluid"></a>
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
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="single-product.php" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                            <a href="single-product.php" class="btn btn-add-to-cart btn-compare">+
                                                Compare</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-tags"></i></a>
                                        </div>
                                        <span class="product-bedge">New</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="products-settings-option d-block d-md-flex">
                        <nav class="page-pagination">
                            <ul class="pagination">
                                <li><a href="#" aria-label="Previous">&laquo;</a></li>
                                <li><a class="current" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#" aria-label="Next">&raquo;</a></li>
                            </ul>
                        </nav>

                        <div class="product-per-page d-flex align-items-center mt-3 mt-md-0">
                            <label for="show-per-page">Show Per Page</label>
                            <select name="sort" id="show-per-page">
                                <option value="9">9</option>
                                <option value="15">15</option>
                                <option value="21">21</option>
                                <option value="6">27</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shop Page Content End -->
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->



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