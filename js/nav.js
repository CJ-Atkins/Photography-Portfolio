// MOB
const mobNavLinks = document.querySelector('.mob-nav-links');
const mobNavClose = document.querySelector('#mob-nav-close');
const mobNavOpen = document.querySelector('#mob-nav-open');

mobNavClose.addEventListener('click', () =>
  mobNavLinks.classList.add('hidden')
);

mobNavOpen.addEventListener('click', () =>
  mobNavLinks.classList.remove('hidden')
);
