const btnMobile = document.querySelector('#buttons-mobile');
const btnOpenMenuMobile = document.querySelector('#btn-open-menu-mobile');
const btnCloseMenuMobile = document.querySelector('#btn-close-menu-mobile');
const optionsMenuMobile = document.querySelector('#options-menu-mobile');

btnMobile.addEventListener('click', function(){
    btnOpenMenuMobile.classList.toggle('btn-open-menu-mobile-off');
    btnCloseMenuMobile.classList.toggle('btn-close-menu-mobile-on');
    optionsMenuMobile.classList.toggle('options-menu-mobile-on');
});

