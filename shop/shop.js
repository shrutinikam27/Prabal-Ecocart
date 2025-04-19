

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
  const a = document.createElement("a");
  a.href = "#";
  a.textContent = category;
  a.style.textDecoration = "none";
  a.style.color = "#007bff";
  a.addEventListener("mouseover", () => a.style.textDecoration = "underline");
  a.addEventListener("mouseout", () => a.style.textDecoration = "none");
  li.appendChild(a);
  categoryList.appendChild(li);
});
