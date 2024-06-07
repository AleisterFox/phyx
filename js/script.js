
const loginMenu = document.querySelectorAll(".menu.login");
const userButton = document.querySelector(".user-menu");
const nav = document.querySelector("nav");
const sideBar = document.querySelector(".sidebar");
const sideBarLogin = document.querySelector(".sidebar.login");
const userLink = document.querySelector(".user__menu--element");


userButton.addEventListener("click", () => {
  loginMenu.forEach((list) => {
    if (list.style.display != "flex") {
      list.style.display = "flex";
      document.documentElement.style.overflowY = "hidden";
      sideBarLogin.style.animation = "showLogin 0.3s linear";
      nav.style.zIndex = "10000";
    } else {
      document.documentElement.style.overflowY = "scroll";
      sideBarLogin.style.animation = "hideLogin 0.3s linear";
      setTimeout(() => {
        list.style.display = "none";
        nav.style.zIndex = "990";
      }, 290);
    }
  });
});

const header = document.querySelector("header");

window.addEventListener("scroll", () => {
  if (window.scrollY !== 0) {
    header.style.transition = "all 0.3s ease-in-out";
    header.style.background =
      "linear-gradient(180deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.02))";
  } else {
    header.style.transition = "all 0.3s ease-in-out";
    header.style.background =
      "linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0))";
  }
});


const locations = document.querySelectorAll('.location');

const maps = document.querySelectorAll('.map');


locations.forEach((location,index) => {
  location.addEventListener('click', () => {
    maps.forEach((map,id) => {
      map.classList.remove('active');
      if (index === id) {
        map.classList.add('active');
      }
    });
  });
});