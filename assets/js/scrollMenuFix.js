/**
 * SCROLL MENU FIXED
 */
let navbar = document.querySelector('.navbar-default');
let navbarBrand = document.querySelector('.nav-brand');
let header = document.querySelector('.header-fix');
let minimoi = document.querySelector('#minimoi');
console.log(minimoi);
window.addEventListener('scroll', (e) => {

  if (window.scrollY >= 100) {
    navbar.classList.add('navbar-fixed-top');
    navbar.setAttribute('style', 'background-color: rgba(40, 44, 52, 1');
    minimoi.setAttribute('style', 'visibility: visible');
  }
  else {
    navbar.classList.remove('navbar-fixed-top');
    minimoi.setAttribute('style', 'visibility: hidden');
  }

})