const hamburger = document.querySelector(".hamburger-menu");
const menu = document.querySelector(".sidebar-mobile .container-menu");

const overlay = document.createElement("div");
overlay.classList.add("overlay");
document.body.appendChild(overlay);

hamburger.addEventListener("click", () => {
  menu.classList.toggle("active");
  overlay.classList.toggle("active");
});

overlay.addEventListener("click", () => {
  menu.classList.remove("active");
  overlay.classList.remove("active");
});
