const windowWidth = window.innerWidth;
const menuBtn = document.querySelector(".menu-btn");
const menu = document.getElementById("menu-main-menu");

if (windowWidth <= 1418) {
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

var map = L.map("map").setView([longitude, latitude], zoom);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

L.marker([longitude, latitude])
  .addTo(map)
  .bindPopup(JSON.parse(textMarker))
  .openPopup();
