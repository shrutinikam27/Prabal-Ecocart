
<<<<<<< HEAD
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
=======
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
>>>>>>> 869be5a8a5e5e5829f0a3f2691ac43f844365aff

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

<<<<<<< HEAD
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
=======
>>>>>>> 869be5a8a5e5e5829f0a3f2691ac43f844365aff
