const swiper1 = new Swiper(document.getElementById("limonchello"), {
  navigation: {
    nextEl: ".limonchello__swiper-button-next",
    prevEl: ".limonchello__swiper-button-prev",
  },

  slidesPerView: "auto",
  slidesPerGroup: 1,
  loop: true,
  spaceBetween: 44,
});
