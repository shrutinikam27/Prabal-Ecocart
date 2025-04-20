<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eComart - Product Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
        }

        .main-content {
            display: flex;
            margin-top: 30px;
        }

        .sidebar {
            width: 200px;
            padding-right: 30px;
        }

        .sidebar h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
        }

        .product-container {
            display: flex;
            flex: 1;
            gap: 40px;
        }

        .product-gallery {
            flex: 1;
            max-width: 500px;
        }

        .main-image {
            margin-bottom: 15px;
        }

        .main-image img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .thumbnail-container {
            display: flex;
            gap: 10px;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s;
            border: 1px solid #ddd;
        }

        .thumbnail:hover {
            transform: scale(1.05);
            border-color: #3498db;
        }

        .product-details-container {
            flex: 1;
            max-width: 600px;
        }

        .product-header h1 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .product-meta {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .rating {
            color: #f39c12;
            margin-right: 15px;
        }

        .interactive-rating {
            margin: 10px 0;
            font-size: 20px;
        }

        .star {
            cursor: pointer;
            color: #ccc;
        }

        .star.filled {
            color: #f39c12;
        }

        .rating-text {
            font-size: 14px;
            color: #333;
            margin-top: 5px;
        }

        .actions {
            display: flex;
            gap: 15px;
        }

        .actions a {
            color: #3498db;
            text-decoration: none;
            font-size: 14px;
        }

        .product-info {
            background: white;
            padding: 25px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .product-header h1 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .product-meta {
            font-size: 16px;
        }

        .best-seller {
            margin-bottom: 20px;
        }

        .best-seller ul {
            list-style-type: none;
        }

        .best-seller ul li {
            margin-bottom: 5px;
            font-size: 14px;
        }

        .price {
            font-size: 24px;
            font-weight: bold;
            color: #e74c3c;
        }

        .original-price {
            text-decoration: line-through;
            color: #999;
            margin-right: 10px;
            font-size: 16px;
        }

        .discount {
            color: #27ae60;
            font-size: 14px;
        }

        .stock-info {
            margin: 15px 0;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 5px;
            font-size: 14px;
        }

        .delivery-info {
            margin: 15px 0;
            font-size: 14px;
        }

        .sale-timer {
            background-color: #e74c3c;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin: 15px 0;
            text-align: center;
            font-size: 14px;
        }

        .product-description,
        .product-specs {
            font-size: 16px;
        }

        .product-specs p {
            margin-bottom: 8px;
        }

        .stock-warning {
            color: #e74c3c;
            font-weight: bold;
            margin: 15px 0;
            font-size: 14px;
        }

        .orders-count {
            margin-bottom: 15px;
            color: #7f8c8d;
            font-size: 14px;
        }

        .sustainability {
            background-color: #f0f8f0;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #27ae60;
        }

        .sustainability h3 {
            color: #27ae60;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 16px;
        }

        .sustainability p {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .sustainability-features {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .sustainability-feature {
            display: flex;
            align-items: center;
            gap: 8px;
            background-color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .sustainability-feature i {
            color: #27ae60;
            font-size: 12px;
        }

        .returns-info {
            margin-top: 20px;
            font-weight: bold;
            font-size: 14px;
        }

        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }

        .add-to-cart {
            background-color: #e he74c3c;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            transition: background-color 0.3s;
            width: 100%;
        }

        .add-to-cart:hover {
            background-color: #c0392b;
        }

        @media (max-width: 768px) {
            .main-content {
                flex-direction: column-reverse;
            }

            .sidebar {
                width: 100%;
                padding-right: 0;
                margin-bottom: 20px;
            }

            .product-container {
                display: flex;
                flex: 1;
                gap: 40px;
            }

            .product-gallery {
                flex: 0 0 40%;
            }

            .product-details-container {
                flex: 1;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">eComart</div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Gift Voucher</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </nav>
        </header>

        <div class="main-content">
            <aside class="sidebar">
                <h3>All CATEGORIES</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Gift Voucher</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </aside>

            <div class="product-container">
                <div class="product-gallery">
                    <img src="../images/dress.png" width="500" height="500" alt="Dress">
                </div>
                <div class="product-details-container">

                    <div class="product-header">
                        <h1>Elegant Wedding Dress</h1>
                        <div class="product-meta">
                            <span class="rating">4.5 <i class="fas fa-star"></i> (128 reviews)</span>
                            <div class="actions">
                                <a href="#"><i class="fas fa-exchange-alt"></i> Compare</a>
                                <a href="#"><i class="far fa-heart"></i> Wishlist</a>
                            </div>
                        </div>
                        <div class="interactive-rating" data-product-id="trendy_shoes">
                            <i class="fas fa-star star" data-value="1"></i>
                            <i class="fas fa-star star" data-value="2"></i>
                            <i class="fas fa-star star" data-value="3"></i>
                            <i class="fas fa-star star" data-value="4"></i>
                            <i class="fas fa-star star" data-value="5"></i>
                            <div class="rating-text">No ratings yet</div>
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="best-seller">
                            <h3>Best Seller</h3>
                            <ul>
                                <li>In Gardening</li>
                                <li>Brand: Original Foom</li>
                                <li>SKU: COO214457</li>
                                <li>
                                    <span class="original-price">$150.00</span>
                                    <span class="price">70.00</span>
                                </li>
                                </li>
                            </ul>
                        </div>

                        <div class="sustainability">
                            <h3><i class="fas fa-leaf"></i> Sustainable Product</h3>
                            <p>This product meets our high standards for environmental and social responsibility.</p>
                            <div class="sustainability-features">
                                <div class="sustainability-feature">
                                    <i class="fas fa-recycle"></i> <span>100% Organic Cotton</span>
                                </div>
                                <div class="sustainability-feature">
                                    <i class="fas fa-tint"></i> <span>Low Water Usage</span>
                                </div>
                                <div class="sustainability-feature">
                                    <i class="fas fa-sun"></i> <span>Natural Dyes</span>
                                </div>
                                <div class="sustainability-feature">
                                    <i class="fas fa-hands-helping"></i> <span>Fair Trade Certified</span>
                                </div>
                            </div>
                        </div>

                        <div class="stock-info">
                            <h3>In Stock</h3>
                            <p>Ask about this product</p>
                        </div>

                        <div class="delivery-info">
                            <h3>Estimated delivery time</h3>
                            <p>1 - 3 days</p>
                        </div>



                        <div class="product-description">
                            <p>Wonderland Proving Angel with pot. Beautiful angel cherub with pot. This is a beautiful
                                piece and must have. This is homemade, hand painted with special quoting, made of resin
                                it can be kept both inside or outside your home.</p>
                        </div>


                        <div class="stock-warning">
                            <p><i class="fas fa-exclamation-triangle"></i> Only 6 left in stock. Almost Gone!</p>
                        </div>

                        <div class="orders-count">
                            <p>16 orders in last 30 days</p>
                        </div>

                        <a href="cart/cart.php" class="add-to-cart-link">
                            <button class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </button>
                        </a>

                        <hr>

                        <div class="returns-info">
                            <p><i class="fas fa-undo"></i> Hassle-Free Returns | 30-Day Money Back Guarantee</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Existing layout reverse logic
            const condition = true;
            if (condition) {
                document.querySelector('.product-container').classList.add('reverse');
            }

            // Rating system logic
            const ratingContainer = document.querySelector('.interactive-rating');
            const productId = ratingContainer.getAttribute('data-product-id');
            const stars = ratingContainer.querySelectorAll('.star');
            const ratingText = ratingContainer.querySelector('.rating-text');

            // Load existing ratings from localStorage
            const ratings = JSON.parse(localStorage.getItem(`ratings_${productId}`)) || [];
            updateRatingDisplay(stars, ratingText, ratings);

            // Add click event to stars
            stars.forEach(star => {
                star.addEventListener('click', () => {
                    const rating = parseInt(star.getAttribute('data-value'));
                    ratings.push(rating);
                    localStorage.setItem(`ratings_${productId}`, JSON.stringify(ratings));
                    updateRatingDisplay(stars, ratingText, ratings);
                });
            });

            function updateRatingDisplay(stars, ratingText, ratings) {
                if (ratings.length === 0) {
                    ratingText.textContent = 'No ratings yet';
                    stars.forEach(star => star.classList.remove('filled'));
                    return;
                }

                // Calculate average rating
                const average = ratings.reduce((sum, r) => sum + r, 0) / ratings.length;
                const roundedAverage = Math.round(average);

                // Update star display
                stars.forEach(star => {
                    const value = parseInt(star.getAttribute('data-value'));
                    star.classList.toggle('filled', value <= roundedAverage);
                });

                // Update rating text
                ratingText.textContent = `Average Rating: ${average.toFixed(1)} (${ratings.length} reviews)`;
            }
        });
    </script>


</body>

</html>