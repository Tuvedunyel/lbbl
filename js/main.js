const windowWidth = window.innerWidth;

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

var map = L.map("map").setView([47.39483175852117, 0.6867013712465384], 15);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

L.marker([47.39483175852117, 0.6867013712465384])
  .addTo(map)
  .bindPopup("Maître Modestie Corde")
  .openPopup();
