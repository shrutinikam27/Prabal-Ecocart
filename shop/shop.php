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
    <link rel="stylesheet" href="../css/style.css" />
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

</head>

<body>

    <header class="bg-white shadow-sm mb-3">
        <div class="container-fluid">
            <div class="row py-2 px-3 bg-light">
                <div class="col-md-6">
                    <i class="bi bi-telephone-fill"></i> Live Chat: +12 345 678 99
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="text-decoration-none">
                        <i class="bi bi-person-circle"></i> Sign In/Register
                    </a>
                </div>
            </div>

            <div class="row align-items-center py-3 px-3">
                <div class="col-md-3 fw-bold fs-4 text-primary">eCocart</div>
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
                        <a href="../cart/cart.html">
                            <i class="bi bi-cart"></i> Cart
                        </a>
                    </div>
                </div>
            </div>

<<<<<<< HEAD

            <div class="col-md-9 d-flex align-items-center justify-content-end">
                <nav>
                    <a href="/index.php" class="me-3">Home</a>
                    <a href="shop/shop.php" class="me-3">Shop</a>
                    <a href="/giftvoucher.php" class="me-3">Gift Voucher</a>
                    <a href="/blog/blog.php" class="me-3">Blog</a>
                    <a href="/about/about.php">About Us</a>
                </nav>
=======
         
                <div class="col-md-9 d-flex align-items-center justify-content-end">
                    <nav>
                        <a href="/index.php" class="me-3">Home</a>
                        <a href="shop/shop.php" class="me-3">Shop</a>
                        <a href="/giftvoucher.php" class="me-3">Gift Voucher</a>
                        <a href="/blog/blog.php" class="me-3">Blog</a>
                        <a href="/about/about.php">About Us</a>
                    </nav>
                </div>
>>>>>>> 0fb523300412baca17d5f2714e8a9a78277882b0
            </div>
        </div>
        </div>
    </header>



    <!-- Product Grid Section (Centered with 6 Images) -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <!-- Sort and Show Controls -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <label class="form-label me-2">Sort by:</label>
                        <select class="form-select d-inline-block w-auto">
                            <option>Default Sort</option>
                        </select>
                    </div>
                    <div>
                        <label class="form-label me-2">Show by:</label>
                        <select class="form-select d-inline-block w-auto">
                            <option>6</option>
                        </select>
                    </div>
                </div>

                <!-- Product Cards -->
                <div class="row">
                    <!-- Product Card 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 text-center" style="cursor: pointer;">
                            <img src="../images/shoes.png" class="card-img-top mx-auto" alt="Shoes"
                                style="width: 60%; height: auto;">
                            <div class="card-body">
                                <div class="text-warning mb-1">★★★★☆</div>
                                <p><del>$50.00</del> <strong>$25.00</strong></p>
                                <p class="card-text">Trendy Shoes For Men With High Quality...</p>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 text-center" style="cursor: pointer;">
                            <img src="../images/head.png" class="card-img-top mx-auto" alt="Headphones"
                                style="width: 60%; height: auto;">
                            <div class="card-body">
                                <div class="text-warning mb-1">★★★★☆</div>
                                <p><strong>$30.00</strong></p>
                                <p class="card-text">Wireless Bluetooth Headphones...</p>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 text-center" style="cursor: pointer;">
                            <img src="../images/watch.png" class="card-img-top mx-auto" alt="Watch"
                                style="width: 60%; height: auto;">
                            <div class="card-body">
                                <div class="text-warning mb-1">★★★★★</div>
                                <p><del>$1000.00</del> <strong>$700.00</strong></p>
                                <p class="card-text">Apple Watch Series 7 45mm Sports Band...</p>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 text-center" style="cursor: pointer;">
                            <img src="../images/jewelry.png" class="card-img-top mx-auto" alt="Jewelry"
                                style="width: 60%; height: auto;">
                            <div class="card-body">
                                <div class="text-warning mb-1">★★★☆☆</div>
                                <p><del>$150.00</del> <strong>$85.00</strong></p>
                                <p class="card-text">Traditional Crystal Wedding Choker Jewelry Set</p>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 5 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 text-center" style="cursor: pointer;">
                            <img src="../images/speaker.png" class="card-img-top mx-auto" alt="Speaker"
                                style="width: 60%; height: auto;">
                            <div class="card-body">
                                <div class="text-warning mb-1">★★★★★</div>
                                <p><del>$59.00</del> <strong>$48.00</strong></p>
                                <p class="card-text">Sony SRS-XB13 Extra BASS Wireless Speaker</p>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 6 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 text-center" style="cursor: pointer;">
                            <img src="../images/dress.png" class="card-img-top mx-auto" alt="Dress"
                                style="width: 60%; height: auto;">
                            <div class="card-body">
                                <div class="text-warning mb-1">★★★★★</div>
                                <p><del>$150.00</del> <strong>$70.00</strong></p>
                                <p class="card-text">Elegant Wedding Dress</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

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
                                    <a href="mailto:support@ecocart.com"
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
                        <p class="mb-0">&copy; 2025 eCocart - All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><img src="../images/card1.png" alt="Visa" class="img-fluid"
                                    style="height: 30px;"></li>
                            <li class="list-inline-item"><img src="../images/card2.png" alt="Mastercard"
                                    class="img-fluid" style="height: 30px;"></li>
                            <li class="list-inline-item"><img src="../images/card3.png" alt="PayPal" class="img-fluid"
                                    style="height: 30px;"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /.container -->
    </footer>

    <!-- JS -->
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
    <script>
        document.getElementById('toggleButton').addEventListener('click', function () {
            var menu = document.getElementById('categoryMenu');
            if (menu.classList.contains('d-none')) {
                menu.classList.remove('d-none');
            } else {
                menu.classList.add('d-none');
            }
        });
    </script>
</body>

<!-- Mirrored from chtstudio.com/demo/ecomart/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 08:58:38 GMT -->

</html>

</body>

</html>