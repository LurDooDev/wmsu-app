import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


  document.addEventListener('DOMContentLoaded', function () {
    const dropdownButton = document.querySelector('[data-collapse-toggle="dropdown-example"]');
    const dropdownList = document.getElementById('button');

    dropdownButton.addEventListener('click', function () {
      dropdownList.classList.toggle('hidden');
    });
  });


  document.addEventListener('DOMContentLoaded', function () {
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const navLinks = document.getElementById('nav-links');

    hamburgerBtn.addEventListener('click', function () {
      navLinks.classList.toggle('hidden');
    });
  });
