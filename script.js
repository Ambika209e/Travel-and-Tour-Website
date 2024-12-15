  let menu = document.querySelector("#menu-btn");
  let navbar = document.querySelector(".header .navbar");
  
  // Toggle menu and navbar active state
  menu.onclick = () => {
      menu.classList.toggle('fa-times');
      navbar.classList.toggle('active');
  };
  
  // Close the menu when scrolling
  window.onscroll = () => {
      menu.classList.remove('fa-times');
      navbar.classList.remove('active');
  };
  
  // Initialize Swiper for the home slider
  var homeSwiper = new Swiper(".home-slider", {
      loop: true,
      navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
      },
  });
  
  
  
  // Load more functionality for packages (make sure this section is correct)
  let loadMoreBtn = document.querySelector('.packages .load-more .btn');
  let currentItem = 3;
  
  loadMoreBtn.onclick = () => {
      let boxes = [...document.querySelectorAll('.packages .box-container .box')];
      for (let i = currentItem; i < currentItem + 3; i++) {
          if (boxes[i]) { // Ensure the box exists before displaying it
              boxes[i].style.display = 'inline-block';
          }
      }
      currentItem += 3;
      // Hide the button if all boxes are displayed
      if (currentItem >= boxes.length) {
          loadMoreBtn.style.display = 'none';
      }
  };
  
  document.addEventListener('DOMContentLoaded', () => {
      var swiper = new Swiper(".reviews-slider", {
          loop: true,
          spaceBetween: 20,
          autoHeight: true,
          grabCursor: true,
          pagination: {
              el: '.swiper-pagination',
              clickable: true,
          },
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
          breakpoints: {
              640: {
                  slidesPerView: 1,
              },
              768: {
                  slidesPerView: 2,
              },
              1024: {
                  slidesPerView: 3,
              },
          },
      });
  });
  
  