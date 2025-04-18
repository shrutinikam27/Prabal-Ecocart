
const categories = [
    "Accessories",
    "Fashion",
    "Shoes",
    "Sport Shorts",
    "Beauty shop",
    "Women Clothing",
    "Men Clothing",
    "Electronics Accessories",
    "Computer Accessories"
];

const categoryList = document.getElementById("categoryList");

categories.forEach(category => {
    const li = document.createElement("li");
    li.className = "list-group-item";
    const a = document.createElement("a");
    a.href = "#";
    a.textContent = category;
    a.className = "text-decoration-none text-primary";
    li.appendChild(a);
    categoryList.appendChild(li);
});

