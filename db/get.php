<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ecocart_rating';

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Run your SQL
$sql = "
SELECT 
    p.product_id,
    p.name,
    p.brand,
    p.material,
    p.image_url,
    AVG(s.score) AS average_score
FROM 
    products p
JOIN 
    product_eco_scores s ON p.product_id = s.product_id
GROUP BY 
    p.product_id;
";

$result = $conn->query($sql);

// Output as JSON
$products = array();
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}
echo json_encode($products);

$conn->close();
?>