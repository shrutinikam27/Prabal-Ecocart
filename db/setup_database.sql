
USE ecomart;
DROP TABLE IF EXISTS ratings;

CREATE TABLE ratings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id VARCHAR(50) NOT NULL,
    rating INT NOT NULL CHECK (rating >= 1 AND rating <= 5),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id)
);



-- Create the orders table
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id VARCHAR(50) NOT NULL,
    quantity INT NOT NULL CHECK (quantity > 0),
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Create the add to card table
CREATE TABLE add_to_cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id VARCHAR(50) NOT NULL,
    quantity INT NOT NULL CHECK (quantity > 0),
    added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Create the wishlist table
CREATE TABLE wishlist (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id VARCHAR(50) NOT NULL,
    added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Create the shipping table
CREATE TABLE shipping (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    address VARCHAR(255) NOT NULL,
    city VARCHAR(100) NOT NULL,
    state VARCHAR(100) NOT NULL,
    zip_code VARCHAR(20) NOT NULL,
    shipping_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(id)
);

-- Create the payment table
CREATE TABLE payment (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(id),
);







-- Optional: Insert a sample rating for testing
INSERT INTO ratings (product_id, rating) VALUES ('trendy_shoes', 4);  
INSERT INTO ratings (product_id, rating) VALUES ('headphone', 5);  
INSERT INTO ratings (product_id, rating) VALUES ('watch', 3);
INSERT INTO ratings  (product_id, rating) VALUES ('jewelary', 3);
INSERT INTO ratings  (product_id, rating) VALUES ('speaker', 3);
INSERT INTO ratings  (product_id, rating) VALUES ('dress', 3);


-- Optional: Insert a sample order for testing
INSERT INTO orders (product_id, quantity) VALUES ('trendy_shoes', 2);
INSERT INTO orders (product_id, quantity) VALUES ('headphone', 1);  
INSERT INTO orders (product_id, quantity) VALUES ('watch', 1);
INSERT INTO orders (product_id, quantity) VALUES ('jewelary', 1);
INSERT INTO orders (product_id, quantity) VALUES ('speaker', 1);
INSERT INTO orders (product_id, quantity) VALUES ('dress', 1);


-- Optional: Insert a sample add to cart for testing
INSERT INTO add_to_cart (product_id, quantity) VALUES ('trendy_shoes', 1);
INSERT INTO add_to_cart (product_id, quantity) VALUES ('headphone', 1);
INSERT INTO add_to_cart (product_id, quantity) VALUES ('watch', 1); 



-- Optional: Insert a sample wishlist for testing
INSERT INTO wishlist (product_id) VALUES ('trendy_shoes');
INSERT INTO wishlist (product_id) VALUES ('headphone');