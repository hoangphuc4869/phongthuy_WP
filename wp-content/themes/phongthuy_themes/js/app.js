AOS.init();
var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  effect: "fade",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  speed: 900,
  fadeEffect: { crossFade: true },
});

var swiper = new Swiper(".Swiper_perView", {
  slidesPerView: 4,
  spaceBetween: 30,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".swiper_freemode", {
  slidesPerView: "auto",
  spaceBetween: 10,
  freeMode: true,
  // pagination: {
  //   el: ".swiper-pagination-1",
  //   clickable: true,
  // },
  // navigation: {
  //   nextEl: ".swiper-button-next-1",
  //   prevEl: ".swiper-button-prev-1",
  // },
});

var swiper = new Swiper(".storiesSlider", {
  navigation: {
    nextEl: ".swiper-button-next-stories",
    prevEl: ".swiper-button-prev-stories",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

var swiper = new Swiper(".artSlider", {
  pagination: {
    el: ".swiper-pagination-art",
    clickable: true,
  },
});

// document
//   .querySelector(".add-to-cart-button")
//   .addEventListener("click", function () {
//     document.querySelector(".view-cart-btn").style.display = "block";
//   });

document.addEventListener("DOMContentLoaded", function () {
  var menuItems = document.querySelectorAll(".menu-mobile-item a");

  menuItems.forEach(function (item) {
    var menuItemText = item.textContent;
    item.setAttribute("data-text", menuItemText);
  });
});

//share btn

const link = encodeURI(window.location.href);
const linkedIn = document.querySelector("#linkedIn");
linkedIn.href = `https://www.linkedin.com/sharing/share-offsite/?url=${link}`;
const fb = document.querySelector("#facebook");
fb.href = `https://www.facebook.com/share.php?u=${link}`;
const Print = document.querySelector("#print");
Print.addEventListener("click", () => window.print());
