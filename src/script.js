const windowWidth = window.innerWidth;

// menuBtn.addEventListener("click", () => {
//   menu.classList.toggle("show");
// });

if (windowWidth <= 1418) {
  const menuBtn = document.querySelector(".menu-btn");
  const menu = document.getElementById("menu-main-menu");

  let menuOpen = false;
  menuBtn.addEventListener("click", () => {
    if (!menuOpen) {
      menuBtn.classList.add("open");
      menuOpen = true;
      menu.classList.add("show");
    } else {
      menuBtn.classList.remove("open");
      menuOpen = false;
      menu.classList.remove("show");
    }
  });

  const menuBtnBurger = document.querySelector(".menu-btn__burger");
}
