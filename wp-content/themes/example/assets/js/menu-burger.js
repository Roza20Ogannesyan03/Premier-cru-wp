const hamb = document.querySelector("#hamb");
const popup = document.querySelector("#popup");
const menu = document.querySelector(".menu-popup");
const body = document.body;
const bar = document.querySelectorAll(".bar");
const menuBurger = document.querySelector(".menu__burger-icon");
hamb.addEventListener("click", hambHandler);

function hambHandler(e) {
  popup.classList.toggle("open");
  hamb.classList.toggle("active");
  if (hamb.classList.contains("active")) {
    bar.forEach((item) => (item.style.background = "white"));
  } else {
    bar.forEach((item) => (item.style.background = "#23262f"));
  }

  body.classList.toggle("noscroll");
  renderPopup();
}

function renderPopup() {
  popup.appendChild(menu);
}

// Код для закрытия меню при нажатии на ссылку

// const links = Array.from(menu.children);

// links.forEach((link) => {
//   link.addEventListener("click", closeOnClick);
// });

// function closeOnClick() {
//   popup.classList.remove("open");
//   hamb.classList.remove("active");

//   body.classList.remove("noscroll");
// }
const menuItem = document.querySelector(
  ".header__nav_popup .menu__item:nth-child(3)"
);
const menuarr = document.querySelector(".menu__sub");
function openMenu(e) {
  console.log(e);

  if (e.parentElement.classList.contains("open")) {
    e.nextElementSibling.style.maxHeight = "0";
    e.parentElement.classList.remove("open");
    menuItem.style.height = "40px";
    menuarr.style.display = "none";
  } else {
    e.nextElementSibling.style.maxHeight =
      e.nextElementSibling.scrollHeight + "px";
    console.log(e.nextElementSibling.scrollHeight);
    menuItem.style.height = "200px";
    menuarr.style.display = "flex";
    e.parentElement.classList.add("open");
  }
}

function delitel(count, sec, start) {
  for (let i = start; i < 20; i++) {
    if (count % i == 0) {
      sec = i;
      break;
    }
  }
}

function numberAnimation(count, sec) {

  if (count > 400 && count < 1200) {
    delitel(count, sec, 3);
  }
  if (count <= 1500) {
    delitel(count, sec, 5);
  }
  if (count > 1500) {
    delitel(count, sec, 7);
  }
  console.log(sec)
  let numberTop = count.getBoundingClientRect().top;
  let start = +count.innerHTML;
  let end = +count.dataset.max;
  window.addEventListener("scroll", function onScroll() {
    if (this.window.scrollY > numberTop - this.window.innerHeight) {
      this.removeEventListener("scroll", onScroll);
      let interval = setInterval(function () {
        start += sec;
        count.innerHTML = start;
        if (start == end) {
          clearInterval(interval);
        }
      }, 5);
    }
  });
}

numbers = document.querySelectorAll(".count");
numbers.forEach(item => {
  numberAnimation(item, 1);
})
