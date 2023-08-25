import Masonry from 'masonry-layout'

window.onload = function() {
    const elem = document.querySelector('.grid');
    const msnry = new Masonry( elem, {
      // options
      itemSelector: '.grid-item',
      stagger: 10,
      columnWidth: 20,
      fitWidth: true
    });
}