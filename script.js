import Masonry from 'masonry-layout'

window.onload = function() {
  console.log('maso')
    const elem = document.querySelector('.grid');
    const msnry = new Masonry( elem, {
      // options
      itemSelector: '.grid-item',
    });
}