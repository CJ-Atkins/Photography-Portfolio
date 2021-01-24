const albumImgs = document.querySelectorAll('.album-img'),
  albumModal = document.querySelector('.album-modal'),
  modalImg = document.querySelector('.album-modal-img-el'),
  modalCaption = document.querySelector('.album-modal-caption');
modalClose = document.querySelector('.album-modal-close');

console.log(document.body);
// IMAGE GALLERY MODAL OPEN FUNCTION
albumImgs.forEach(function (el) {
  el.addEventListener('click', function () {
    albumModal.style.display = 'flex';
    document.body.classList.add('no-scroll');
    modalImg.src = el.children[1].src;
    modalCaption.innerHTML = el.children[1].alt;
  });
});

// IMAGE MODAL CLOSE FUNCTIONS
modalImg.addEventListener('click', function () {
  albumModal.style.display = 'none';
  document.body.classList.remove('no-scroll');
});
modalClose.addEventListener('click', function () {
  albumModal.style.display = 'none';
  document.body.classList.remove('no-scroll');
});
