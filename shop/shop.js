
document.addEventListener("DOMContentLoaded", () => {
    const categories = [
        "All Offers",
        "Accessories",
        "Fashion & Clothing",
        "Shoes",
        "Sport Shorts",
        "Beauty shop",
        "Women Clothing",
        "Men Clothing",
        "Electronics Accessories",
        "Computer Accessories",
        "Cameras & Photography",
        "Home & Kitchen",
        "Gaming & Toys",
        "Health & Wellness",
        "Beauty Products",
        "Travel & Luggage",
        "Books & Stationery",
        "Pet Supplies",
        "Sports & Outdoors",
        "Watches & Jewelry"
    ];

    const categoryMenu = document.getElementById("categoryMenu");
    const toggleButton = document.getElementById("toggleButton");
    const productCards = document.querySelectorAll(".col-md-4.mb-4");

    // Populate the category menu
    categories.forEach(category => {
        const li = document.createElement("li");
        li.className = "list-group-item";
        const a = document.createElement("a");
        a.href = "#";
        a.textContent = category;
        a.className = "text-decoration-none text-primary";
        li.appendChild(a);
        categoryMenu.appendChild(li);

        // Add click event to filter products
        a.addEventListener("click", (e) => {
            e.preventDefault();
            categoryMenu.classList.add("d-none"); // hide menu on selection

            if (category === "All Offers") {
                productCards.forEach(card => card.style.display = "");
            } else {
                productCards.forEach(card => {
                    if (card.getAttribute("data-category") && card.getAttribute("data-category").includes(category)) {
                        card.style.display = "";
                    } else {
                        card.style.display = "none";
                    }
                });
            }
        });
    });

    // Toggle category menu visibility on button click
    toggleButton.addEventListener("click", () => {
        categoryMenu.classList.toggle("d-none");
    });
});

