let menuBtn = document.querySelector('.header__menu-btn');
let menu = document.querySelector('.menu');
let menuBox = document.querySelector('.menu-btn-box');
menuBtn.addEventListener('click', function () {
    menu.classList.toggle('active');
    menuBox.classList.toggle('active');
})
