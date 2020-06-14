// navbar change when scrolling
typeWriter();
window.onscroll = function () {
  myFunction();
};
function myFunction() {
  const navbar = document.getElementById("navbar");
  if (
    document.body.scrollTop > 100 ||
    document.documentElement.scrollTop > 100
  ) {
    navbar.className = " card" + " animate-top";
  } else {
    navbar.className = navbar.className.replace(" card animate-top", "");
  }
}

// toggle menu for small screens
function toggleFunction() {
  const x = document.getElementById("navFixed");
  if (x.className.indexOf("show") == -1) {
    x.className += " show";
  } else {
    x.className = x.className.replace(" show", "");
  }
}

const i = 0;
const txt = "Full Stack Web Developer";
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("jobSpan").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
