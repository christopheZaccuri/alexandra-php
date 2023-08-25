import Masonry from 'masonry-layout'
const compress_images = require("compress-images");

function MyFun() {
 console.log(compress_images)
}
document.addEventListener('DOMContentLoaded',function(){
    const elem = document.querySelector('.grid');
    const msnry = new Masonry( elem, {
      // options
      itemSelector: '.grid-item',
    });
})