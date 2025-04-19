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
  <link rel="stylesheet" href="../css/giftvoucher.css">

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
            <li class="list-group-item"><a href="#" data-category="Fashion & Clothing">Fashion & Clothing</a></li>
            <li class="list-group-item"><a href="#" data-category="Computer Accessories">Computer Accessories</a></li>
            <li class="list-group-item"><a href="#" data-category="Shoes">Shoes</a></li>
            <li class="list-group-item"><a href="#" data-category="Jewelry & Watches">Jewelry & Watches</a></li>
            <li class="list-group-item"><a href="#" data-category="Sports & Outdoor">Sports & Outdoor</a></li>
          </ul>
        </div>
        <div class="col-md-9 d-flex align-items-center justify-content-end">
          <nav>
            <a href="/index.html" class="me-3">Home</a>
            <a href="shop/shop.html" class="me-3">Shop</a>
            <a href="giftvoucher.html" class="me-3">Gift Voucher</a>
            <a href="#" class="me-3">Blog</a>
            <a href="/about/about.html">About Us</a>
          </nav>
        </div>
      </div>
    </div>
  </header>



  <div class="d-flex justify-content-center">
    <div class="col-md-9 p-4">
      <h4>Coupons Code</h4>
      <hr>
      <div class="row g-3">
        <div class="col-md-6">
          <div class="coupon-box">
            <div>
              <h5>25% OFF</h5>
              <p>On payment with visa card</p>
              <button class="btn btn-outline-light">Get Code</button>
            </div>
            <img src="images/shoes1.png" alt="Shoes">
          </div>
        </div>
        <div class="col-md-6">
          <div class="coupon-box">
            <div>
              <h5>16% OFF</h5>
              <p>Only Sixteen independent of BD</p>
              <button class="btn btn-outline-light">Get Code</button>
            </div>
            <img src="images/wt.png" alt="Watch">
          </div>
        </div>
        <div class="col-md-6">
          <div class="coupon-box">
            <div>
              <h5>10% OFF</h5>
              <p>All men clothes offer discount</p>
              <button class="btn btn-outline-light">Get Code</button>
            </div>
            <img src="images/cloths.png" alt="Men Clothes">
          </div>
        </div>
        <div class="col-md-6">
          <div class="coupon-box">
            <div>
              <h5>35% OFF</h5>
              <p>All women clothes offer discount</p>
              <button class="btn btn-outline-light">Get Code</button>
            </div>
            <img src="images/wc.png" alt="Women Clothes">
          </div>
        </div>
        <div class="col-md-6">
          <div class="coupon-box">
            <div>
              <h5>45% OFF</h5>
              <p>Receive Cashback on all order</p>
              <button class="btn btn-outline-light">Get Code</button>
            </div>
            <img src="images/hd.png" alt="Headphones">
          </div>
        </div>
        <div class="col-md-6">
          <div class="coupon-box">
            <div>
              <h5>21% OFF</h5>
              <p>Receive cashback on all order</p>
              <button class="btn btn-outline-light">Get Code</button>
            </div>
            <img src="images/laptop.png" alt="Laptop">
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
              <p>eCocart is your trusted online store for quality products at great prices. We offer fast delivery, easy
                returns, and 24/7 support to make your shopping smooth and hassle-free.</p>
              <div class="social mt-3">
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook text-light"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa-brands fa-twitter text-light"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa-brands fa-linkedin text-light"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa-brands fa-instagram text-light"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa-brands fa-pinterest text-light"></i></a></li>
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
                  <a href="mailto:support@ecocart.com" class="text-light text-decoration-none">support@ecomart.com</a>
                </li>
                <li>
                  <h5><i class="fa-solid fa-phone me-2"></i> Phone</h5>
                  <a href="tel:012345678910" class="text-light text-decoration-none">+0123 456 78910</a>
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

  <script>
    document.getElementById('toggleButton').addEventListener('click', function () {
      var menu = document.getElementById('categoryMenu');
      menu.classList.toggle('d-none');
    });
  </script>
</body>


</html>