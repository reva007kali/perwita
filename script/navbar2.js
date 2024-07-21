// Hamburger Menu
const hamburgerMenu = document.querySelector('.hamburger-menu');
const menu = document.querySelector('.menu2');
const closeButton = document.querySelector('.close-button');
const content = document.querySelector('.content');

hamburgerMenu.addEventListener('click', function () {
    menu.classList.add('open');
});

closeButton.addEventListener('click', function () {
    menu.classList.remove('open');
});

document.addEventListener('click', function (event) {
    if (!menu.contains(event.target) && !hamburgerMenu.contains(event.target)) {
        menu.classList.remove('open');
    }
});