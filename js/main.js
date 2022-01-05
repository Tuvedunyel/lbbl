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

var map = L.map("map").setView([47.39163756468422, 0.6965481695038303], 20);

// L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
//   attribution:
//     '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
// }).addTo(map);

// L.marker([47.39163756468422, 0.6965481695038303])
//   .addTo(mymap)
//   .bindPopup("BTG Communication, <br /> Agence de communication à 360°")
//   .openPopup();
