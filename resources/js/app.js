import './bootstrap';

const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

//Navar hidden
menuBtn.addEventListener('click', function(event) {
  event.stopPropagation();
  mobileMenu.classList.toggle('translate-x-full');
  menuBtn.classList.toggle('active');
});


document.addEventListener("click", (event) => {
  if (!mobileMenu.contains(event.target)) {
    mobileMenu.classList.add('translate-x-full');
    menuBtn.classList.remove('active');
  }
});
  

//dropwdown
const dropBtn = document.getElementById('dropdown-btn')
const dropMenu = document.getElementById('dropdown-menu')

dropBtn.addEventListener('click',function() {
  dropMenu.classList.toggle('hidden');
});