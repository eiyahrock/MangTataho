/* highlight navbar when tab is active
var btnContainer = document.getElementById("navLinks");
var btns = btnContainer.getElementsByClassName("btn");

for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active");
        this.className += " active";
    })
}
*/

/*--------sidebar----------*/

function toggleMenu(){
    const menu = document.querySelector('.menu');
    const navigation = document.querySelector('.navigation');
    menu.classList.toggle('active');
    navigation.classList.toggle('active');
}

// var navLinks = document.getElementById("navLinks");

// function showMenu() {
//     navLinks.style.right = "0";
// }

// function hideMenu() {
//     navLinks.style.right = "-200px";
// }


/*---------for sticky navbar------------*/

// var navbar = document.getElementById("navbar");
// var menu = document.getElementById("menu");
// window.onscroll = function() {
//     if (window.pageYOffset >= menu.offsetTop) {
//         navbar.classList.add("sticky");
//     } else {
//         navbar.classList.remove("sticky");
//     }
// }

window.addEventListener('scroll', function(){
    const header = document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0);
})