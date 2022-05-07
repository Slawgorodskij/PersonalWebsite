/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/burger.js ***!
  \********************************/
var burger = document.querySelector('.header__burger');
var menu = document.querySelector('.header__menu_mobile');
burger.addEventListener('click', function () {
  menu.classList.toggle('header__menu_inactive');
  burger.classList.toggle('header__burger--active');
});
/******/ })()
;