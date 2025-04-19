
document.addEventListener("DOMContentLoaded", function () {
  const hero = document.querySelector('.hero');
  const images = [
    'images/back.jpg',
    'images/bg1.png',
    'images/bg2.png'
  ];
  let index = 0;

  setInterval(() => {
    index = (index + 1) % images.length;
    hero.style.backgroundImage = `url('${images[index]}')`;
  }, 10000); // 10 seconds
});

document.getElementById("toggleButton").addEventListener("click", function () {
  const menu = document.getElementById("categoryMenu");
  menu.classList.toggle("d-none");
});


// php
fetch('get.php')
  .then(res => res.json())
  .then(data => {
    const container = document.getElementById('product-list');
    data.forEach(product => {
      container.innerHTML += `
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="${product.image_url}" class="img-fluid rounded-start" alt="${product.name}">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">${product.name}</h5>
                <p class="card-text">Brand: ${product.brand}</p>
                <p class="card-text">Material: ${product.material}</p>
                <p class="card-text"><strong>Eco Score:</strong> <span class="badge bg-success">${Number(product.average_score).toFixed(1)} / 10</span></p>
              </div>
            </div>
          </div>
        </div>
      `;
    });
  });






