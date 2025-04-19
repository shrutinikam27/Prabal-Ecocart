const products = [
    { id: 1, name: "shoes", description: "Trendy Shoes For Men With High Quality..." },
    { id: 2, name: "Headphones", description: "Wireless Bluetooth Headphones..." },
    { id: 3, name: "Watch", description: "Apple Watch Series 7 45mm Sports Band.." },
    { id: 4, name: "Jewelry", description: "Traditional Crystal Wedding Choker Jewelry Set" },
    { id: 5, name: "Speaker", description: "Sony SRS-XB13 Extra BASS Wireless Speaker" },
    { id: 6, name: "Dress", description: "Elegant Wedding Dress" },
];

document.getElementById('searchButton').addEventListener('click', function() {
    const searchInput = document.getElementById('searchInput').value.toLowerCase();
    const productList = document.getElementById('productList');
    productList.innerHTML = ''; // Clear previous results

    const filteredProducts = products.filter(product => 
        product.name.toLowerCase().includes(searchInput)
    );

    if (filteredProducts.length > 0) {
        filteredProducts.forEach(product => {
            const productItem = document.createElement('div');
            productItem.innerHTML = `<h3>${product.name}</h3><p>${product.description}</p>`;
            productList.appendChild(productItem);
        });
    } else {
        productList.innerHTML = '<p>No products found.</p>';
    }
});