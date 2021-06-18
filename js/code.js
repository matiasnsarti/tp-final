/* Header -Menu mobile */

const btnMobile = document.querySelector('#buttons-mobile');
const btnOpenMenuMobile = document.querySelector('#btn-open-menu-mobile');
const btnCloseMenuMobile = document.querySelector('#btn-close-menu-mobile');
const optionsMenuMobile = document.querySelector('#options-menu-mobile');

btnMobile.addEventListener('click', function(){
    btnOpenMenuMobile.classList.toggle('btn-open-menu-mobile-off');
    btnCloseMenuMobile.classList.toggle('btn-close-menu-mobile-on');
    optionsMenuMobile.classList.toggle('options-menu-mobile-on');
});

/* Cambio de color del background */

const backgroundCard = document.querySelector('#background_card');

if ($info_pokemon['types'][0]['type']['name'] == 'fire') {
    backgroundCard.classList.toggle('background_red');
}
if ($info_pokemon['types'][0]['type']['name'] == 'grass') {
    backgroundCard.classList.toggle('background_red');
}
if ($info_pokemon['types'][0]['type']['name'] == 'water') {
    backgroundCard.classList.toggle('background_blue');
}
if ($info_pokemon['types'][0]['type']['name'] == 'electric') {
    backgroundCard.classList.toggle('background_yellow');
}