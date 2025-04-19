-- Create the ecomart database
CREATE DATABASE IF NOT EXISTS ecomart;

-- Use the ecomart database
USE ecomart;

-- Create the ratings table
CREATE TABLE ratings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id VARCHAR(50) NOT NULL,
    rating INT NOT NULL CHECK (rating >= 1 AND rating <= 5),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Optional: Insert a sample rating for testing
INSERT INTO ratings (product_id, rating) VALUES ('trendy_shoes', 4);    