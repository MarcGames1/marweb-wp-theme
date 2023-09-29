const getNav = document.querySelectorAll('.navLink');
const sections = document.querySelectorAll('main section');

const navLinks = Array.from(getNav);



let currentURL = window.location.href
let urlParts = currentURL.split('/');
let slug = urlParts[urlParts.length - 2];
console.log(slug);



window.onload = () => getPos();

window.addEventListener(
  'scroll',
  function () {
    var top = this.scrollY;
    document.querySelector('header').className = top > 0 ? 'scrolled' : '';

  },
  false
);
