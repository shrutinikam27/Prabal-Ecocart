
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



  


  
  