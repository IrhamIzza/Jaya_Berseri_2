import './bootstrap';

const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

menuBtn.addEventListener('click', function() {
  mobileMenu.classList.toggle('translate-x-full');
  menuBtn.classList.toggle('active');
});
  