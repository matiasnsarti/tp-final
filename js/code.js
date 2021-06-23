/* Header -Menu mobile */

const btnMobile = document.querySelector('#buttons-mobile');
const btnOpenMenuMobile = document.querySelector('#btn-open-menu-mobile');
const btnCloseMenuMobile = document.querySelector('#btn-close-menu-mobile');
const optionsMenuMobile = document.querySelector('#options-menu-mobile');

btnMobile.addEventListener('click', function () {
    btnOpenMenuMobile.classList.toggle('btn-open-menu-mobile-off');
    btnCloseMenuMobile.classList.toggle('btn-close-menu-mobile-on');
    optionsMenuMobile.classList.toggle('options-menu-mobile-on');
});

/* Slider */

const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".card");
let sliderSectionLast = sliderSection[sliderSection.length - 1];

const btnL = document.querySelector("#btn_left");
const btnR = document.querySelector("#btn_right");

slider.insertAdjacentElement('afterbegin', sliderSectionLast)

/* btn Right */
function next() {
    let sliderSectionFirst = document.querySelectorAll(".card")[0];
    slider.style.marginleft = "-200%";
    slider.style.transitio = "all 0.5s";
    setTimeout(function () {
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend', sliderSectionFirst);
        slider.stylemarginLeft = "-100%"
    }, 500);
}

btnR.addEventListener('click', function () {
    next();
})

/* btn Left */
function prev() {
    let sliderSection = document.querySelectorAll(".card");
    let sliderSectionLast = sliderSection[sliderSection.length - 1];
    slider.style.marginleft = "0";
    slider.style.transitio = "all 0.5s";
    setTimeout(function () {
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin', sliderSectionLast);
        slider.stylemarginLeft = "-100%"
    }, 500);
}

btnL.addEventListener('click', function () {
    prev();
})