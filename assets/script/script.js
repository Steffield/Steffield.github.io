// navbar change when scrolling

window.onscroll = function () {
  myFunction();
};
const myFunction = () => {
  const navbar = document.getElementById("navbar");
  if (
    document.body.scrollTop > 100 ||
    document.documentElement.scrollTop > 100
  ) {
    navbar.className = " card" + " animate-top";
  } else {
    navbar.className = navbar.className.replace(" card animate-top", "");
  }
};

// toggle menu for small screens
const toggleFunction = () => {
  const x = document.getElementById("navFixed");
  if (x.className.indexOf("show") == -1) {
    x.className += " show";
  } else {
    x.className = x.className.replace(" show", "");
  }
};

//typewriter effect
let i = 0;
let txt = "Full Stack Web Developer";
var speed = 120;

const typeWriter = () => {
  if (i < txt.length) {
    document.getElementById("jobSpan").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
};
typeWriter();

//theme
// var themeSwitcher = document.querySelector("#theme-switcher");
// var container = document.querySelector(".body");
// var mode = "dark";

// themeSwitcher.addEventListener("click", function () {
//   if (mode === "dark") {
//     mode = "light";
//     container.setAttribute("class", "light");
//   } else {
//     mode = "dark";
//     container.setAttribute("class", "dark");
//   }
// });
