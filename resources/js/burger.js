const burger = document.querySelector('.header__burger');
const menu = document.querySelector('.header__menu_mobile');

burger.addEventListener('click', () => {
    menu.classList.toggle('header__menu_inactive');
    burger.classList.toggle('header__burger--active');
})
