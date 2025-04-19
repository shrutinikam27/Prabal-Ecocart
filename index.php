<?php
// You can handle form submissions here using $_POST if needed
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>eCocart - Home</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/structure.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <!-- icons -->
    <link rel="icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-precomposed.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->


    <!-- Firebase Authentication SDK -->
    <script src="https://www.gstatic.com/firebasejs/9.21.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.21.0/firebase-auth.js"></script>


    <link rel="stylesheet" href="chatbotmain/styles.css" />



<body>

    <header class="bg-white shadow-sm mb-3">
        <div class="container-fluid">
            <div class="row py-2 px-3 bg-light">
                <div class="col-md-6">
                    <i class="bi bi-telephone-fill"></i> Live Chat: +12 345 678 99
                </div>
                <div class="col-md-6 text-end">
                    <a href="auth.php" id="auth-link" class="text-decoration-none">
                        <i class="bi bi-person-circle"></i> Sign In/Register
                    </a>
                </div>
            </div> <!-- This was not closed in your code -->
        </div>
    </header>

    <div class="row align-items-center py-3 px-3">
        <div class="col-md-3 fw-bo  ld fs-4 text-primary">eCocart</div>
        <div class="col-md-6">
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Search Product" />
                <i class="bi bi-search position-absolute top-50 end-0 translate-middle-y me-3 search-icon"></i>
            </div>
        </div>
        <div class="col-md-3 text-end">
            <div class="d-flex justify-content-end align-items-center header-icons">
                <a href="#" class="me-3">
                    <i class="bi bi-bar-chart"></i> Compare
                </a>
                <a href="#" class="me-3">
                    <i class="bi bi-heart"></i> Wishlist
                </a>
                <a href="#">
                    <i class="bi bi-cart"></i> Cart
                </a>
            </div>
        </div>
    </div>


    <div class="col-md-9 d-flex align-items-center justify-content-end">
        <nav>
            <a href="index.php" class="me-3">Home</a>
            <a href="shop/shop.php" class="me-3">Shop</a>
            <a href="/giftvoucher.php" class="me-3">Gift Voucher</a>
            <a href="blog/blog.php" class="me-3">Blog</a>
            <a href="about/about.php">About Us</a>
        </nav>
    </div>
    </div>
    </div>
    </header>

    <section class="hero">
        <div class="hero-overlay">
            <h2>Attack Air VaporMax Flyknit 3</h2>
            <p>Flat 20% Discount</p>
            <button class="btn btn-primary btn-lg">Shop Now</button>
        </div>
    </section>

    <!-- Carousel Section -->
    <section class="offers-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="add-banner">
                        <img src="images/of1.jpg" alt="Image" class="img-fluid" />
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="add-banner">
                        <img src="images/of2.jpg" alt="Image" class="img-fluid" />
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="add-banner">
                        <img src="images/of3.jpg" alt="Image" class="img-fluid" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Categories -->
    <section class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-semibold">Popular Categories</h4>
            <a href="#" class="text-decoration-none text-primary">All Categories <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="category-card d-flex align-items-center p-3 bg-white rounded shadow-sm">
                    <img src="images/c1.png" alt="Fashion" class="me-3" height="60" />
                    <span class="fs-6">Women Clothing & Fashion</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card d-flex align-items-center p-3 bg-white rounded shadow-sm">
                    <img src="images/c2.png" alt="Computers" class="me-3" height="60" />
                    <span class="fs-6">Computer & Accessories</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card d-flex align-items-center p-3 bg-white rounded shadow-sm">
                    <img src="images/c3.png" alt="Home" class="me-3" height="60" />
                    <span class="fs-6">Home decoration & Appliance</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card d-flex align-items-center p-3 bg-white rounded shadow-sm">
                    <img src="images/c4.png" alt="Jewelry" class="me-3" height="60" />
                    <span class="fs-6">Jewelry & Watches</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card d-flex align-items-center p-3 bg-white rounded shadow-sm">
                    <img src="images/c5.png" alt="Beauty" class="me-3" height="60" />
                    <span class="fs-6">Beauty, Health & Hair</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card d-flex align-items-center p-3 bg-white rounded shadow-sm">
                    <img src="images/c6.png" alt="Sports" class="me-3" height="60" />
                    <span class="fs-6">Sports & Outdoor</span>
                </div>
            </div>
        </div>
    </section>

    <section class="products-section pt-0">
        <div class="container">
            <div class="sa-box">
                <div class="title">
                    <h1>Today Deals</h1>
                </div>
                <ul class="products product-slider">
                    <li class="col-md-4 mb-4" data-category="All Offers, Fashion & Clothing, Computer Accessories">
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="details.html"><img src="images/product/1.png" alt="Image"
                                        class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$450.00</del> $320.00</span>
                                <h3><a href="#">Apple MacBook Air Retina Display...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li class="col-md-4 mb-4" data-category="Fashion & Clothing, Shoes">
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="details.html"><img src="images/product/2.png" alt="Image"
                                        class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$50.00</del> $25.00</span>
                                <h3><a href="#">Trendy Shoes For Man With High Quality...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#"><span><i
                                                        class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="details.html"><img src="images/product/3.png" alt="Image"
                                        class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$110.00</del> $30.00</span>
                                <h3><a href="#">Wireless Bluetooth Headphones...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#"><span><i
                                                        class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="details.html"><img src="images/product/w1.png" alt="Image"
                                        class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$1000.00</del> $700.00</span>
                                <h3><a href="#">Apple Watch Series 7 45mm Sports Band...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#"><span><i
                                                        class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="details.html"><img src="images/product/4.png" alt="Image"
                                        class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$150.00</del> $85.00</span>
                                <h3><a href="#">Modern Sofa High Quality Living Room...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#"><span><i
                                                        class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="details.html"><img src="images/product/6.png" alt="Image"
                                        class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$150.00</del> $85.00</span>
                                <h3><a href="#">Stylish Short Sleeve T-shirt for Men...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#"><span><i
                                                        class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="details.html"><img src="images/product/b1.png" alt="Image"
                                        class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$250.00</del> $195.00</span>
                                <h3><a href="#">Calvin Klein Men's Slim Fit Suit...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#"><span><i
                                                        class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="details.html"><img src="images/product/7.png" alt="Image"
                                        class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$900.00</del> $720.00</span>
                                <h3><a href="#">Women's Wedding Dress for Bride Lace...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#"><span><i
                                                        class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="view-more">
                    <a href="#">View All <span class="icon fas fa-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="products-section pt-0">
        <div class="container">
            <div class="sa-box">
                <div class="title justify-content-between">
                    <h1>Flash Sale</h1>
                    <a href="#">View All <span class="icon fas fa-arrow-right"></span></a>
                </div>
                <ul class="products grid-4">
                    <li>
                        <div class="sg-product style-1">
                            <div class="product-thumb">
                                <a href="details.html"><img src="images/product/9.png" alt="Image"
                                        class="img-fluid"></a>
                                <div class="sg-countdown">
                                    <ul class="countdown">
                                        <li>
                                            <span class="days">00</span>
                                            <p>Days</p>
                                        </li>
                                        <li>
                                            <span class="hours">00</span>
                                            <p>Hrs</p>
                                        </li>
                                        <li>
                                            <span class="minutes">00</span>
                                            <p>Mins</p>
                                        </li>
                                        <li>
                                            <span class="seconds">00</span>
                                            <p>Secs</p>
                                        </li>
                                    </ul><!-- countdown -->
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$59.00</del> $48.00</span>
                                <h3><a href="#">Sony SRS-XB13 Extra BASS Wireless Portable Compact Speaker</a></h3>

                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#" class="btn btn-primary">Add to cart</a></li>
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product style-1">
                            <div class="product-thumb">
                                <a href="details.html"><img src="images/product/10.png" alt="Image"
                                        class="img-fluid"></a>
                                <div class="sg-countdown">
                                    <ul class="countdown">
                                        <li>
                                            <span class="days">00</span>
                                            <p>Days</p>
                                        </li>
                                        <li>
                                            <span class="hours">00</span>
                                            <p>Hrs</p>
                                        </li>
                                        <li>
                                            <span class="minutes">00</span>
                                            <p>Mins</p>
                                        </li>
                                        <li>
                                            <span class="seconds">00</span>
                                            <p>Secs</p>
                                        </li>
                                    </ul><!-- countdown -->
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$445.00</del> $355.00</span>
                                <h3><a href="#">Withings ScanWatch - Hybrid Smartwatch with ECG</a></h3>

                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#" class="btn btn-primary">Add to cart</a></li>
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product style-1">
                            <div class="product-thumb">
                                <a href="details.html"><img src="images/product/8.png" alt="Image"
                                        class="img-fluid"></a>
                                <div class="sg-countdown">
                                    <ul class="countdown">
                                        <li>
                                            <span class="days">00</span>
                                            <p>Days</p>
                                        </li>
                                        <li>
                                            <span class="hours">00</span>
                                            <p>Hrs</p>
                                        </li>
                                        <li>
                                            <span class="minutes">00</span>
                                            <p>Mins</p>
                                        </li>
                                        <li>
                                            <span class="seconds">00</span>
                                            <p>Secs</p>
                                        </li>
                                    </ul><!-- countdown -->
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$150.00</del> $85.00</span>
                                <h3><a href="#">Ball Gowns White Ivory Tulle Bridal Dress For Wedding Dresses</a></h3>

                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#" class="btn btn-primary">Add to cart</a></li>
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product style-1">
                            <div class="product-thumb">
                                <a href="details.html"><img src="images/product/11.png" alt="Image"
                                        class="img-fluid"></a>
                                <div class="sg-countdown">
                                    <ul class="countdown">
                                        <li>
                                            <span class="days">00</span>
                                            <p>Days</p>
                                        </li>
                                        <li>
                                            <span class="hours">00</span>
                                            <p>Hrs</p>
                                        </li>
                                        <li>
                                            <span class="minutes">00</span>
                                            <p>Mins</p>
                                        </li>
                                        <li>
                                            <span class="seconds">00</span>
                                            <p>Secs</p>
                                        </li>
                                    </ul><!-- countdown -->
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$150.00</del> $85.00</span>
                                <h3><a href="#">Traditional Crystal Wedding Temple Choker Jewelry Set</a></h3>

                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#" class="btn btn-primary">Add to cart</a></li>
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>


            </div><!-- /.sa-box -->
        </div><!-- /.container -->
    </section><!-- /.products-section -->

    <section class="products-section category-products pt-0">
        <div class="container">
            <div class="sa-box">
                <div class="title justify-content-between">
                    <h1>Men's Shopping</h1>
                    <a href="#">View All <span class="icon fas fa-arrow-right"></span></a>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="products">
                            <div class="category-product">
                                <div class="text">
                                    <h2>Trending House Utensil</h2>
                                    <a href="#" class="btn btn-primary">shop now</a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img src="images/product/2.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <ul class="products product-slider-2 arrow-style-2">
                            <li>
                                <div class="sg-product">
                                    <div class="product-thumb">
                                        <span class="base">50% OFF</span>
                                        <a href="#"><img src="images/product/m1.png" alt="Image" class="img-fluid"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="sg-rating">
                                            <ul class="global-list">
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                            </ul>
                                        </div>
                                        <span class="price"><del>$140.00</del> $70.00</span>
                                        <h3><a href="#">Trendy Shoes For Man With High Quality...</a></h3>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                                <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.sg-product -->
                            </li>
                            <li>
                                <div class="sg-product">
                                    <div class="product-thumb">
                                        <a href="#"><img src="images/product/w1.png" alt="Image" class="img-fluid"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="sg-rating">
                                            <ul class="global-list">
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                            </ul>
                                        </div>
                                        <span class="price"><del>$1000.00</del> $700.00</span>
                                        <h3><a href="#">Apple Watch Series 7 45mm Sports Band...</a></h3>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                                <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.sg-product -->
                            </li>
                            <li>
                                <div class="sg-product">
                                    <div class="product-thumb">
                                        <a href="#"><img src="images/product/b1.png" alt="Image" class="img-fluid"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="sg-rating">
                                            <ul class="global-list">
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                            </ul>
                                        </div>
                                        <span class="price">$195.00</span>
                                        <h3><a href="#">Calvin Klein Men's Slim Fit Suit...</a></h3>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                                <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.sg-product -->
                            </li>
                            <li>
                                <div class="sg-product">
                                    <div class="product-thumb">
                                        <a href="#"><img src="images/product/m2.png" alt="Image" class="img-fluid"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="sg-rating">
                                            <ul class="global-list">
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li><span class="fa-solid fa-star"></span></li>
                                            </ul>
                                        </div>
                                        <span class="price">$900.00</span>
                                        <h3><a href="#">Manufactum Gentleman’s Wallet...</a></h3>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                                <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.sg-product -->
                            </li>
                            <li>
                                <div class="sg-product">
                                    <div class="product-thumb">
                                        <a href="#"><img src="images/product/m3.png" alt="Image" class="img-fluid"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="sg-rating">
                                            <ul class="global-list">
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li><span class="fa-solid fa-star"></span></li>
                                            </ul>
                                        </div>
                                        <span class="price">$22.00</span>
                                        <h3><a href="#">Men's Jogger Pants Drawstring Zipper...</a></h3>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                                <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.sg-product -->
                            </li>
                            <li>
                                <div class="sg-product">
                                    <div class="product-thumb">
                                        <a href="#"><img src="images/product/6.png" alt="Image" class="img-fluid"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="sg-rating">
                                            <ul class="global-list">
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li><span class="fa-solid fa-star"></span></li>
                                            </ul>
                                        </div>
                                        <span class="price">$75.00</span>
                                        <h3><a href="#">Stylish Short Sleeve T-shirt for Men...</a></h3>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                                <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.sg-product -->
                            </li>
                        </ul>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.sa-box -->
        </div><!-- /.container -->
    </section><!-- /.products-section -->

    <section class="products-section category-products pt-0">
        <div class="container">
            <div class="sa-box">
                <div class="title justify-content-between">
                    <h1>Womens Fashion</h1>
                    <a href="#">View All <span class="icon fas fa-arrow-right"></span></a>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="products">
                            <div class="category-product">
                                <div class="text">
                                    <h2>Trending House Utensil</h2>
                                    <a href="#" class="btn btn-primary">shop now</a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img src="images/product/3.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <ul class="products product-slider-2 arrow-style-2">
                            <li>
                                <div class="sg-product">
                                    <div class="product-thumb">
                                        <a href="#"><img src="images/product/wo1.png" alt="Image" class="img-fluid"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="sg-rating">
                                            <ul class="global-list">
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                            </ul>
                                        </div>
                                        <span class="price"><del>$150.00</del> $85.00</span>
                                        <h3><a href="#">Women Fashion Spring and Summer...</a></h3>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                                <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.sg-product -->
                            </li>
                            <li>
                                <div class="sg-product">
                                    <div class="product-thumb">
                                        <a href="#"><img src="images/product/wo3.png" alt="Image" class="img-fluid"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="sg-rating">
                                            <ul class="global-list">
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li><span class="fa-solid fa-star"></span></li>
                                            </ul>
                                        </div>
                                        <span class="price">$85.00</span>
                                        <h3><a href="#">Kids Cat Ear Decor Sunglasses...</a></h3>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                                <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.sg-product -->
                            </li>
                            <li>
                                <div class="sg-product">
                                    <div class="product-thumb">
                                        <span class="base">50% OFF</span>
                                        <a href="#"><img src="images/product/wo2.png" alt="Image" class="img-fluid"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="sg-rating">
                                            <ul class="global-list">
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li><span class="fa-solid fa-star"></span></li>
                                            </ul>
                                        </div>
                                        <span class="price"><del>$70.00</del> $35.00</span>
                                        <h3><a href="#">Women's Classic Jersey Stripe Boy Tee</a></h3>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                                <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.sg-product -->
                            </li>
                            <li>
                                <div class="sg-product">
                                    <div class="product-thumb">
                                        <a href="#"><img src="images/product/wo4.png" alt="Image" class="img-fluid"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="sg-rating">
                                            <ul class="global-list">
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li><span class="fa-solid fa-star"></span></li>
                                            </ul>
                                        </div>
                                        <span class="price"><del>$150.00</del> $122.00</span>
                                        <h3><a href="#">Woman Fashion Ladies Heel Shoes...</a></h3>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                                <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.sg-product -->
                            </li>
                            <li>
                                <div class="sg-product">
                                    <div class="product-thumb">
                                        <a href="#"><img src="../images/product/wo5.png" alt="Image"
                                                class="img-fluid"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="sg-rating">
                                            <ul class="global-list">
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li><span class="fa-solid fa-star"></span></li>
                                            </ul>
                                        </div>
                                        <span class="price"><del>$3000.00</del> $2800.00</span>
                                        <h3><a href="#">Woman Fashion Gold Jewellery...</a></h3>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                                <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.sg-product -->
                            </li>
                            <li>
                                <div class="sg-product">
                                    <div class="product-thumb">
                                        <a href="#"><img src="../images/product/12.png" alt="Image"
                                                class="img-fluid"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="sg-rating">
                                            <ul class="global-list">
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li class="active"><span class="fa-solid fa-star"></span></li>
                                                <li><span class="fa-solid fa-star"></span></li>
                                            </ul>
                                        </div>
                                        <span class="price"><del>$150.00</del> $85.00</span>
                                        <h3><a href="#">Goodthreads Women's Dress...</a></h3>
                                        <div class="icons">
                                            <ul class="global-list">
                                                <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                                <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                                <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.sg-product -->
                            </li>
                        </ul>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.sa-box -->
        </div><!-- /.container -->
    </section><!-- /.products-section -->





    <section class="products-section">
        <div class="container">
            <div class="sa-box">
                <div class="title justify-content-between">
                    <h1>Best Selling Product</h1>
                    <a href="#">View All <span class="icon fas fa-arrow-right"></span></a>
                </div>

                <ul class="products grid-6">
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <span class="base">50% OFF</span>
                                <a href="#"><img src="../images/product/wo6.png" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$150.00</del> $85.00</span>
                                <h3><a href="#">Classic T-shirt Sleeves and Formal...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="#"><img src="images/product/e2.png" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$1500.00</del> $800.00</span>
                                <h3><a href="#">Canon EOS M10 Mirrorless Camera...</a></h3>

                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="#"><img src="images/product/wo3.png" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$36.00</del> $30.00</span>
                                <h3><a href="#">Kids Cat Ear Decor Sunglasses...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="#"><img src="images/product/wo4.png" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$150.00</del> $122.00</span>
                                <h3><a href="#">Woman Fashion Ladies Heel Shoes...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <span class="base">50% OFF</span>
                                <a href="#"><img src="images/product/hm5.png" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$340.00</del> $170.00</span>
                                <h3><a href="#">Le Klint 160 Carronade Large...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="#"><img src="images/product/b1.png" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price">$195.00</span>
                                <h3><a href="#">Calvin Klein Men's Slim Fit Suit...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="#"><img src="images/product/m1.png" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price">$110.00</span>
                                <h3><a href="#">Trendy Shoes For Man With High Quality...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="#"><img src="images/product/wo5.png" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price">$2800.00</span>
                                <h3><a href="#">Woman Fashion Gold Jewellery...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <span class="base">50% OFF</span>
                                <a href="#"><img src="images/product/wo7.png" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$300.00</del> $150.00</span>
                                <h3><a href="#">Self Grooming Tips for Aspiring Female...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="#"><img src="images/product/hm4.png" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$350.00</del> $285.00</span>
                                <h3><a href="#">Adesso Director Table Lamp, Black...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <a href="#"><img src="images/product/wo1.png" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$150.00</del> $85.00</span>
                                <h3><a href="#">Women Fashion Spring and Summer...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                    <li>
                        <div class="sg-product">
                            <div class="product-thumb">
                                <span class="base">50% OFF</span>
                                <a href="#"><img src="images/product/10.png" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="product-info">
                                <div class="sg-rating">
                                    <ul class="global-list">
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li class="active"><span class="fa-solid fa-star"></span></li>
                                        <li><span class="fa-solid fa-star"></span></li>
                                    </ul>
                                </div>
                                <span class="price"><del>$700.00</del> $350.00</span>
                                <h3><a href="#">Withings ScanWatch Hybrid...</a></h3>
                                <div class="icons">
                                    <ul class="global-list">
                                        <li><a href="#"><span><i class="far fa-heart"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-cart-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fas fa-random"></i></span></a></li>
                                        <li><a href="#"><span><i class="far fa-eye"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.sg-product -->
                    </li>
                </ul>
            </div><!-- /.sa-box -->
        </div><!-- /.container -->
    </section><!-- /.section -->

    <section class="sg-blog-section pt-0">
        <div class="container">
            <div class="sa-box">
                <div class="title justify-content-between">
                    <h1>Latest News</h1>
                    <a href="#">More Post <span class="icon fas fa-arrow-right"></span></a>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="#"><img src="images/blog/1.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="entry-content">
                                    <h2 class="entry-title"><a href="#">Fashion Trends In 2022 Styles,
                                            Colors, Accessories</a></h2>
                                    <p>passages of Lorem Ipsum available, but the majority have suffered alteration in
                                    </p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="#"><img src="images/blog/2.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="entry-content">
                                    <h2 class="entry-title"><a href="#">Objectively conceptualize value-added
                                            human...</a></h2>
                                    <p>passages of Lorem Ipsum available, but the majority have suffered alteration in
                                    </p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="#"><img src="images/blog/3.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="entry-content">
                                    <h2 class="entry-title"><a href="#">Simple folding single sofa bed furniture</a>
                                    </h2>
                                    <p>passages of Lorem Ipsum available, but the majority have suffered alteration in
                                    </p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="#"><img src="images/blog/4.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="entry-content">
                                    <h2 class="entry-title"><a href="#">Consectetur adipisicing. magnam commodi
                                            doloribus.</a></h2>
                                    <p>passages of Lorem Ipsum available, but the majority have suffered alteration in
                                    </p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sg-convenience mb-3">
        <div class="container">
            <div class="sa-box">
                <ul class="global-list convenience-slider">
                    <li>
                        <div class="convenience">
                            <div class="icon">
                                <i class="fa-solid fa-truck"></i>
                            </div>
                            <div class="text">
                                <span>Free Delivery</span>
                                <p>For all orders over 5%</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="convenience">
                            <div class="icon">
                                <i class="fa-solid fa-rotate-left"></i>
                            </div>
                            <div class="text">
                                <span>30 Days Return</span>
                                <p>If goods have problems</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="convenience">
                            <div class="icon">
                                <i class="fa-regular fa-credit-card"></i>
                            </div>
                            <div class="text">
                                <span>Secure Payment</span>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="convenience">
                            <div class="icon">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <div class="text">
                                <span>24/7 Support</span>
                                <p>Dedicated Support</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- /.sa-box -->
        </div><!-- /.container -->
    </section><!-- /.sg-convenience -->

    <footer class="footer-section bg-dark text-light pt-5">
        <div class="container">
            <div class="footer-top">
                <div class="row gy-4">
                    <!-- About -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footer-widget">
                            <h3 class="text-success">About</h3>
                            <p>eCocart is your trusted online store for quality products at great prices. We offer fast
                                delivery, easy returns, and 24/7 support to make your shopping smooth and hassle-free.
                            </p>
                            <div class="social mt-3">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i
                                                class="fa-brands fa-facebook text-light"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="fa-brands fa-twitter text-light"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="fa-brands fa-linkedin text-light"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="fa-brands fa-instagram text-light"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="fa-brands fa-pinterest text-light"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Useful Links -->
                    <div class="col-6 col-md-6 col-lg-2">
                        <div class="footer-widget">
                            <h3 class="text-success">Useful Links</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-light text-decoration-none">Home</a></li>
                                <li><a href="#" class="text-light text-decoration-none">All Categories</a></li>
                                <li><a href="#" class="text-light text-decoration-none">All Brands</a></li>
                                <li><a href="#" class="text-light text-decoration-none">All Products</a></li>
                                <li><a href="#" class="text-light text-decoration-none">Offers</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- My Account -->
                    <div class="col-6 col-md-6 col-lg-2">
                        <div class="footer-widget">
                            <h3 class="text-success">My Account</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-light text-decoration-none">Login</a></li>
                                <li><a href="#" class="text-light text-decoration-none">Purchase History</a></li>
                                <li><a href="#" class="text-light text-decoration-none">My Wishlist</a></li>
                                <li><a href="#" class="text-light text-decoration-none">Track Order</a></li>
                                <li><a href="#" class="text-light text-decoration-none">My Account</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footer-widget">
                            <h3 class="text-success">Contact Us</h3>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <h5><i class="fa-solid fa-house me-2"></i> Address</h5>
                                    <p>Level 1, 244 Smith Street, Fitzroy Vic 3065 AU</p>
                                </li>
                                <li class="mb-2">
                                    <h5><i class="fa-solid fa-envelope me-2"></i> Email</h5>
                                    <a href="mailto:support@ecomart.com"
                                        class="text-light text-decoration-none">support@ecomart.com</a>
                                </li>
                                <li>
                                    <h5><i class="fa-solid fa-phone me-2"></i> Phone</h5>
                                    <a href="tel:012345678910" class="text-light text-decoration-none">+0123 456
                                        78910</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.footer-top -->

            <!-- Footer Bottom -->
            <div class="footer-bottom mt-4 pt-3 border-top border-secondary">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                        <p class="mb-0">&copy; 2025 eComart - All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><img src="images/card1.png" alt="Visa" class="img-fluid"
                                    style="height: 30px;"></li>
                            <li class="list-inline-item"><img src="images/card2.png" alt="Mastercard" class="img-fluid"
                                    style="height: 30px;"></li>
                            <li class="list-inline-item"><img src="images/card3.png" alt="PayPal" class="img-fluid"
                                    style="height: 30px;"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /.container -->
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/tinymce.min.js"></script>
    <script src="js/jquery.spinner.min.js"></script>
    <script src="js/tagsinput.min.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/main.js"></script>
    <!-- Chat Toggle Button -->
    <div class="chat-toggle" id="chatToggle">
        <img src="https://cdn-icons-png.flaticon.com/512/4712/4712027.png" alt="Chat Icon" />
        <span>Chat with us</span>
    </div>

    <!-- Chatbot Container -->
    <div class="chat-container" id="chatContainer">
        <div class="chat-header">
            <span>ChatBot</span>
            <button class="close-btn" id="closeChat">&times;</button>
        </div>
        <div class="chat-box" id="chatBox">
            <div class="bot-message">Hello! How can I help you today?</div>
        </div>
        <form id="chatForm">
            <input type="text" id="userInput" placeholder="Type a message..." autocomplete="off" />
            <button type="submit">Send</button>
        </form>
    </div>


    <script src="chatbotmain/script.js"></script>


</body>


</html>