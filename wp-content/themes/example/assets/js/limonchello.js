const swiperlim = new Swiper(document.getElementById("limonchello"), {
  navigation: {
    nextEl: ".limonchello__swiper-button-next",
    prevEl: ".limonchello__swiper-button-prev",
    lockClass: ".swiper-button-lock",
  },

  slidesPerView: "auto",
  slidesPerGroup: 1,
  spaceBetween: 30,
});

const prev = document.querySelector(".limonchello__swiper-button-prev");
const next = document.querySelector(".limonchello__swiper-button-next");
const slides = document.querySelectorAll(".limonchello__slide");

if (slides.length <= 3) {
  console.log(slides.length);
  prev.classList.add("hide_arrow");
  next.classList.add("hide_arrow");
}

const popupRest = document.querySelector("#popup-page");
const page = document.querySelector(".popup-content");
const bodyRest = document.body;
const buttonRest = document.querySelector("#inner-btn");
const close = document.querySelector(".close__img");
const menuIcon = document.querySelector(".menu__burger-icon");
buttonRest.addEventListener("click", hambHandler);

function hambHandler(e) {
  popupRest.classList.toggle("open");
  buttonRest.classList.toggle("active");
  bodyRest.classList.toggle("noscroll");
  menuIcon.style.display = "none";
  renderPopupRest();

  console.log("sssss");
}

function renderPopupRest() {
  popupRest.appendChild(page);
}

close.addEventListener("click", closeOnClick);
function closeOnClick() {
  if (window.screen.width <= 1200) {
    menuIcon.style.display = "flex";
  }
  popupRest.classList.remove("open");
  bodyRest.classList.remove("noscroll");
}
