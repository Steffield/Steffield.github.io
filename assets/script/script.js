
// navbar change when scrolling
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("navbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = " card" + " animate-top";
    } else {
        navbar.className = navbar.className.replace(" card animate-top", "");
    }
}

// toggle menu for small screens
function toggleFunction() {
    var x = document.getElementById("navFixed");
    if (x.className.indexOf("show") == -1) {
        x.className += " show";
    } else {
        x.className = x.className.replace(" show", "");
    }
}


