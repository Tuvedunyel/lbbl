const menuBtn = document.querySelector(".menu-btn");
const menu = document.getElementById("menu-main-menu");

menuBtn.addEventListener("click", () => {
  menu.classList.toggle("show");
});
