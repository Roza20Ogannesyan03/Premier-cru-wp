const swiper1 = new Swiper(document.getElementById("kupol"), {
  navigation: {
    nextEl: ".about-us__swiper-button-next",
    prevEl: ".about-us__swiper-button-prev",
  },

  slidesPerView: "auto",
  slidesPerGroup: 1,
  loop: true,
  spaceBetween: 44,
});
