const swiper = new Swiper(document.getElementById("rubl"), {
  navigation: {
    nextEl: ".slider__swiper-button-next",
    prevEl: ".slider__swiper-button-prev",
  },
  centeredSlides: false,
  slidesPerView: "auto",
  //speed: 5000,
  spaceBetween: 30,
  // pagination: {
  //   el: ".swiper-pagination",
  //   type: "fraction",
  //   formatFractionCurrent: function (number, index) {
  //     return ("0" + number).slice(-2);
  //   },
  //   formatFractionTotal: function (number, tot) {
  //     return ("0" + number).slice(-2);
  //   },
  //   renderFraction: function (currentClass, totalClass) {
  //     return (
  //       '<span class = "' +
  //       currentClass +
  //       ' "></span>' +
  //       "/" +
  //       '<span class = "' +
  //       totalClass +
  //       ' "></span>'
  //     );
  //   },
  // },
});



const swiperEvent = new Swiper(document.getElementById("event"), {
  navigation: {
    nextEl: ".events__swiper-button-next",
    prevEl: ".events__swiper-button-prev",
  },
  centeredSlides: false,
  slidesPerView: "auto",
  loop: false,
  spaceBetween: 30,
});
