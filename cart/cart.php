

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Customization Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }

        .service-item {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
            position: relative;
        }

        .service-item.recommended::before {
            content: "Recommended";
            background: #0c6;
            color: #fff;
            padding: 2px 8px;
            font-size: 12px;
            position: absolute;
            top: -10px;
            left: 10px;
            border-radius: 5px;
        }

        .cart {
            border-left: 2px solid #ddd;
            padding-left: 20px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .btn-toggle {
            width: 32px;
            height: 32px;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Left: Services -->
            <div class="col-md-8">
                <h4>Recommended Customization Services for This Product</h4>
                <div id="services-list">
                    <!-- Services will be injected by JS -->
                </div>
            </div>

            <!-- Right: Cart -->
            <div class="col-md-4 cart">
                <h4>You added to cart</h4>
                <div class="d-flex mb-2">
                    <img src="https://via.placeholder.com/80x60" alt="Product Image" class="me-2">
                    <div>
                        <strong>EcoMart - Bootstrap eCommerce HTML Template</strong><br>
                        <small>License type: Personal license</small><br>
                        <strong>$<span id="product-price">31</span></strong>
                    </div>
                </div>
                <div id="cart-items"></div>
                <hr>
                <h5>Subtotal: $<span id="subtotal">31</span></h5>
                <button class="btn btn-warning w-100 mt-2">Go To Cart</button>
            </div>
        </div>
    </div>

    <script>
        const baseProductPrice = 31;

        const services = [
            { name: 'Must-Have Launch Pack', price: 39, originalPrice: 89 },
            { name: 'Local Business Essentials', price: 99 },
            { name: 'Conversion to WordPress with Page Builder', price: 369, originalPrice: 399 },
            { name: 'Installation & Customization Package', price: 209, originalPrice: 319, recommended: true },
            { name: 'All-in-One Website', price: 699, originalPrice: 899 },
            { name: 'GDPR & CCPA Compliance - New Privacy Rules', price: 59, originalPrice: 89 }
        ];

        const cart = new Map();

        function formatServiceItem(service) {
            const discounted = service.originalPrice && service.originalPrice > service.price;
            const checked = cart.has(service.name) ? 'btn-danger' : 'btn-success';
            const btnIcon = cart.has(service.name) ? '&times;' : '&#x2713;';

            return `
    <div class="service-item ${service.recommended ? 'recommended' : ''}" data-name="${service.name}">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <strong>${service.name}</strong><br>
          <small>Provided by TemplateMonster Web Studio</small>
        </div>
        <div class="text-end">
          ${discounted ? `<span class="text-decoration-line-through text-muted me-1">$${service.originalPrice}</span>` : ''}
          <strong>$${service.price}</strong>
          <button class="btn btn-sm ${checked} btn-toggle ms-2">${btnIcon}</button>
        </div>
      </div>
    </div>`;
        }

        function renderServices() {
            const list = document.getElementById('services-list');
            list.innerHTML = services.map(formatServiceItem).join('');
        }

        function renderCart() {
            const cartDiv = document.getElementById('cart-items');
            let subtotal = baseProductPrice;

            cartDiv.innerHTML = '';

            for (let [name, service] of cart.entries()) {
                cartDiv.innerHTML += `
      <div class="cart-item">
        <span>${service.name}</span>
        <span><small class="text-muted">$${service.originalPrice || ''}</small> $${service.price}</span>
      </div>
    `;
                subtotal += service.price;
            }

            document.getElementById('subtotal').textContent = subtotal;
        }

        function setupEvents() {
            document.getElementById('services-list').addEventListener('click', function (e) {
                if (e.target.classList.contains('btn-toggle')) {
                    const serviceDiv = e.target.closest('.service-item');
                    const name = serviceDiv.getAttribute('data-name');
                    const service = services.find(s => s.name === name);

                    if (cart.has(name)) {
                        cart.delete(name);
                    } else {
                        cart.set(name, service);
                    }

                    renderServices();
                    renderCart();
                }
            });
        }

        renderServices();
        renderCart();
        setupEvents();
    </script>

</body>

</html>