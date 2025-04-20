<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .search-container {
            width: 100%;
            max-width: 500px;
            margin: 50px auto;
            position: relative;
        }

        .search-box {
            width: 100%;
            padding: 12px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 30px;
            font-size: 16px;
            outline: none;
            transition: all 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .search-box:focus {
            border-color: #4CAF50;
            box-shadow: 0 2px 10px rgba(76, 175, 80, 0.2);
        }

        .search-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
            cursor: pointer;
        }

        .search-results {
            margin-top: 10px;
            border-radius: 10px;
            max-height: 400px;
            overflow-y: auto;
            display: none;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .search-results.active {
            display: block;
        }

        .result-item {
            padding: 15px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: background 0.2s;
        }

        .result-item:hover {
            background-color: #f8f8f8;
        }

        .product-image {
            width: 50px;
            height: 50px;
            border-radius: 5px;
            object-fit: cover;
            margin-right: 15px;
            background-color: #f0f0f0;
        }

        .product-info {
            flex: 1;
        }

        .product-name {
            font-weight: 600;
            margin-bottom: 3px;
            color: #333;
        }

        .product-category {
            color: #777;
            font-size: 13px;
        }

        .product-price {
            font-weight: bold;
            color: #4CAF50;
            margin-left: 10px;
        }

        .no-results {
            padding: 20px;
            color: #777;
            text-align: center;
        }

        .highlight {
            background-color: #fffde7;
            padding: 0 2px;
            border-radius: 2px;
        }

        .gender-tag {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 11px;
            margin-left: 8px;
        }

        .men {
            background-color: #e3f2fd;
            color: #1565c0;
        }

        .women {
            background-color: #fce4ec;
            color: #c2185b;
        }
    </style>
</head>

<body>
    <div class="search-container">
        <input type="text" class="search-box" placeholder="Search for products..." id="searchInput" autocomplete="off">
        <span class="search-icon">🔍</span>

        <div class="search-results" id="searchResults">
            <!-- Results will appear here dynamically -->
        </div>
    </div>

    <script>
        const searchInput = document.getElementById("searchInput");
        const searchResults = document.getElementById("searchResults");

        // Focused product database with your requested items
        const products = [
            // Shoes
            { id: 1, name: "Men's Running Shoes", category: "Footwear", price: 89.99, gender: "men", image: "https://via.placeholder.com/50?text=MShoes" },
            { id: 2, name: "Women's Sneakers", category: "Footwear", price: 79.99, gender: "women", image: "https://via.placeholder.com/50?text=WShoes" },
            { id: 3, name: "Men's Formal Shoes", category: "Footwear", price: 119.99, gender: "men", image: "https://via.placeholder.com/50?text=MFormal" },
            { id: 4, name: "Women's Heels", category: "Footwear", price: 69.99, gender: "women", image: "https://via.placeholder.com/50?text=WHeels" },

            // Watches
            { id: 5, name: "Men's Chronograph Watch", category: "Accessories", price: 149.99, gender: "men", image: "https://via.placeholder.com/50?text=MWatch" },
            { id: 6, name: "Women's Elegant Watch", category: "Accessories", price: 129.99, gender: "women", image: "https://via.placeholder.com/50?text=WWatch" },
            { id: 7, name: "Unisex Smartwatch", category: "Accessories", price: 199.99, gender: "unisex", image: "https://via.placeholder.com/50?text=SmartW" },

            // Clothing
            { id: 8, name: "Men's Casual T-Shirt", category: "Clothing", price: 24.99, gender: "men", image: "https://via.placeholder.com/50?text=MTShirt" },
            { id: 9, name: "Women's Summer Dress", category: "Clothing", price: 49.99, gender: "women", image: "https://via.placeholder.com/50?text=WDress" },
            { id: 10, name: "Men's Formal Shirt", category: "Clothing", price: 39.99, gender: "men", image: "https://via.placeholder.com/50?text=MShirt" },
            { id: 11, name: "Women's Blouse", category: "Clothing", price: 34.99, gender: "women", image: "https://via.placeholder.com/50?text=WBlouse" },

            // Furniture
            { id: 12, name: "Modern Leather Sofa", category: "Furniture", price: 899.99, gender: "unisex", image: "https://via.placeholder.com/50?text=Sofa" },
            { id: 13, name: "Sectional Sofa Set", category: "Furniture", price: 1299.99, gender: "unisex", image: "https://via.placeholder.com/50?text=SofaSet" },

            // Electronics
            { id: 14, name: "Bluetooth Speaker", category: "Electronics", price: 89.99, gender: "unisex", image: "https://via.placeholder.com/50?text=Speaker" },
            { id: 15, name: "Smart TV 55\"", category: "Electronics", price: 699.99, gender: "unisex", image: "https://via.placeholder.com/50?text=TV" },
            { id: 16, name: "Ultrabook Laptop", category: "Electronics", price: 1099.99, gender: "unisex", image: "https://via.placeholder.com/50?text=Laptop" },
            { id: 17, name: "Wireless Earbuds", category: "Electronics", price: 129.99, gender: "unisex", image: "https://via.placeholder.com/50?text=Earbuds" }
        ];

        // Search function with highlighting
        function performSearch(query) {
            if (!query.trim()) {
                searchResults.classList.remove("active");
                return;
            }

            const filteredProducts = products.filter(product =>
                product.name.toLowerCase().includes(query.toLowerCase()) ||
                product.category.toLowerCase().includes(query.toLowerCase())
            );

            displayResults(filteredProducts, query);
        }

        // Highlight matching text
        function highlightText(text, query) {
            if (!query) return text;

            const regex = new RegExp((${ query }), 'gi');
            return text.replace(regex, <span class="highlight">$1</span>);
        }

        // Get gender tag HTML
        function getGenderTag(gender) {
            if (gender === "men") return <span class="gender-tag men">Men</span>;
            if (gender === "women") return <span class="gender-tag women">Women</span>;
            return "";
        }

        // Display results with highlighted matches
        function displayResults(results, query) {
            searchResults.innerHTML = "";

            if (results.length === 0) {
                searchResults.innerHTML = <div class="no-results">No products found for "${query}"</div>;
                searchResults.classList.add("active");
                return;
            }

            results.forEach(product => {
                const item = document.createElement("div");
                item.className = "result-item";
                item.innerHTML = `
                    <img src="${product.image}" alt="${product.name}" class="product-image">
                    <div class="product-info">
                        <div class="product-name">
                            ${highlightText(product.name, query)}
                            ${getGenderTag(product.gender)}
                        </div>
                        <div class="product-category">${highlightText(product.category, query)}</div>
                    </div>
                    <div class="product-price">$${product.price.toFixed(2)}</div>
                `;

                item.addEventListener("click", () => {
                    alert(You selected: ${ product.name }\nPrice: $${ product.price.toFixed(2) });
                    // In a real implementation:
                    // window.location.href = /product/${product.id};
                });

                searchResults.appendChild(item);
            });

            searchResults.classList.add("active");
        }

        // Event listeners
        searchInput.addEventListener("input", (e) => {
            performSearch(e.target.value);
        });

        searchInput.addEventListener("focus", () => {
            if (searchResults.innerHTML) {
                searchResults.classList.add("active");
            }
        });

        document.addEventListener("click", (e) => {
            if (!e.target.closest(".search-container")) {
                searchResults.classList.remove("active");
            }
        });

        // Close results when pressing Escape
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape") {
                searchResults.classList.remove("active");
                searchInput.blur();
            }
        });
    </script>
</body>

</html>