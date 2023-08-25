import Masonry from 'masonry-layout'

window.onload = function() {
  document.querySelector('.grid').classList.remove('hide')
    const elem = document.querySelector('.grid');
    const msnry = new Masonry( elem, {
      // options
      itemSelector: '.grid-item',
      stagger: 10,
      columnWidth: 20,
      fitWidth: true
    });
}