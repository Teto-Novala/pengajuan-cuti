const hamburger = document.querySelector(".hamburger");
const menu = document.querySelector(".mobile");
const overlay = document.querySelector(".overlay");
const profil = document.querySelector(".profil");
const profilList = document.querySelector(".profil-list");

hamburger.addEventListener("click", () => {
  menu.classList.toggle("active");
});

overlay.addEventListener("click", () => {
  menu.classList.remove("active");
});

profil.addEventListener("click", () => {
  profilList.classList.toggle("active");
});

document.addEventListener("click", (e) => {
  if (
    profilList.classList.contains("active") &&
    !profil.contains(e.target) &&
    !profilList.contains(e.target)
  ) {
    profilList.classList.remove("active");
  }
});
