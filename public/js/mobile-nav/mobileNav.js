const hamburger = document.querySelector(".hamburger");
const menu = document.querySelector(".mobile");
const overlay = document.querySelector(".overlay");

hamburger.addEventListener("click", () => {
  menu.classList.toggle("active");
});

overlay.addEventListener("click", () => {
  menu.classList.remove("active");
});
