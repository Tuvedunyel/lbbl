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

const themeButton = document.querySelectorAll(".thematique-list > li");
const articles = document.querySelectorAll(".detail-article");

const showModal = theme => {
  for (let article of articles) {
    if (article.children[1].children[0].innerText === theme) {
      article.classList.add("show");
    } else {
      article.classList.remove("show");
    }
  }
};

const toggleActive = (cible) => {
  for (let button of themeButton) {
    button.children[0].classList.remove("active");
    cible.classList.add('active');
  }
}

for (let button of themeButton) {
  button.addEventListener('click', (e) => {
    showModal(e.target.innerText);
    toggleActive(e.target);
    e.target.classList.add('active');
  })
}

console.log(themeButton[0].children);

if(themeButton.length > 0) {
  toggleActive(themeButton[0].children[0]);
  showModal(themeButton[0].innerText);
}



