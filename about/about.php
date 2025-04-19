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
                        <a href="#">
                            <i class="bi bi-cart"></i> Cart
                        </a>
                    </div>
                </div>
            </div>

            <div class="row bg-secondary-subtle px-3 py-2">
                <div class="col-md-3 position-relative">
                    <button class="btn btn-outline-secondary w-100" id="toggleButton">☰ All Categories</button>
                    <ul class="list-group position-absolute d-none" id="categoryMenu">
                        <li class="list-group-item"><a href="#" data-category="All Offers">All Offers</a></li>
                        <li class="list-group-item"><a href="#" data-category="Fashion & Clothing">Fashion &
                                Clothing</a></li>
                        <li class="list-group-item"><a href="#" data-category="Computer Accessories">Computer
                                Accessories</a></li>
                        <li class="list-group-item"><a href="#" data-category="Shoes">Shoes</a></li>
                        <li class="list-group-item"><a href="#" data-category="Jewelry & Watches">Jewelry & Watches</a>
                        </li>
                        <li class="list-group-item"><a href="#" data-category="Sports & Outdoor">Sports & Outdoor</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9 d-flex align-items-center justify-content-end">
                    <nav>
                        <a href="/index.php" class="me-3">Home</a>
                        <a href="shop/shop.php" class="me-3">Shop</a>
                        <a href="/giftvoucher.php" class="me-3">Gift Voucher</a>
                        <a href="/blog/blog.php" class="me-3">Blog</a>
                        <a href="about.php">About Us</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>



    <div class="sg-page-content">

        <section class="about-section">
            <div class="container">
                <div class="sa-box">
                    <div class="page-title">
                        <h1>About Us</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-text animate__animated animate__fadeInUp">
                                <h2>Who we are</h2>
                                <p>
                                    At EcoCart, we believe that sustainable shopping should be simple, transparent, and
                                    accessible to everyone. Our mission is to empower conscious consumers by providing
                                    detailed eco-ratings on products based on materials, manufacturing practices, and
                                    brand ethics. Whether you're comparing options or
                                    searching for greener alternatives, EcoCart is your go-to assistant for making
                                    informed, environmentally friendly purchases. By blending smart technology with a
                                    passion for sustainability, we help you shop smarter—and greener—one product at a
                                    time.
                                <div class="row">
                                    <div class="col-4">
                                        <div class="fun-fact">
                                            <h3>15+</h3>
                                            <p>Business Year</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fun-fact">
                                            <h3>30+</h3>
                                            <p>Design Brands</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="fun-fact">
                                            <h3>100+</h3>
                                            <p>Team Members</p>
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                                <ul class="global-list">

                                </ul>
                            </div><!-- /.about-text -->
                        </div>
                        <div class="col-md-6">
                            <div class="gallery-content animate__animated animate__fadeInUp">
                                <h2>Our Gallery</h2>
                                <div class="gallery-slider">
                                    <div class="thumb">
                                        <img src="../images/1.jpg" alt="Image" class="img-fluid">
                                    </div>

                                </div>
                            </div><!-- /.gallery-content -->
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.sa-box -->
            </div><!-- /.container -->
        </section><!-- /.about-section -->

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
        <section class="sg-testimonial pt-0">
            <div class="container">
                <div class="sa-box mb-3">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="testimonial-title">
                                <h2>Happy Clients</h2>
                            </div>
                            <div class="testimonial-slider">
                                <div class="testimonial">
                                    <div class="testimonial-content">
                                        <div class="testimonial-thumb">
                                            <img src="../images/prof2.avif" alt="Image" class="img-fluid">
                                        </div>
                                        <div class="testimonial-text">
                                            <h5>Pratik Pawar</h5>
                                            <p>I love how it highlights eco-friendly products and even suggests greener
                                                alternatives when I’m browsing. The product ratings are super helpful,
                                                and I’ve discovered so many brands I wouldn’t have found otherwise. It’s
                                                honestly changed the way I shop.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="testimonial-content">
                                        <div class="testimonial-thumb">
                                            <img src="../images/prof1.avif" alt="Image" class="img-fluid">
                                        </div>
                                        <div class="testimonial-text">
                                            <h5>Sanjana More</h5>
                                            <p>It feels great to know that just by checking a box at checkout, I’m
                                                helping offset the environmental impact of my order. It’s a small step
                                                that makes a big difference, and EcoCart makes it effortless. I wish
                                                more stores offered this!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="testimonial-content">
                                        <div class="testimonial-thumb">
                                            <img src="../images/prof4.jpg" alt="Image" class="img-fluid">
                                        </div>
                                        <div class="testimonial-text">
                                            <h5>Prajakta pujari</h5>
                                            <p>The site design is clean and intuitive, and I love the little eco-badges
                                                that quickly show how sustainable a product is. It really takes the
                                                guesswork out of eco-conscious shopping and helps me feel more confident
                                                in my purchases.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.sa-box -->
            </div><!-- /.container -->
        </section><!-- /.sg-testimonial-section -->

    </div><!-- /.sg-page-content -->

    <section class="subscribe-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="subscribe-text">
                        <div class="icon">
                            <span><i class="fa-regular fa-envelope"></i></span>
                        </div>
                        <div class="text">
                            <p>Subscribe to our newsletter</p>
                            <span>Get all the latest information on Events, Sales and Offers.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="subscribe-form">
                        <form action="#">
                            <input type="email" placeholder="Enter Email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.subscribe-section -->

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