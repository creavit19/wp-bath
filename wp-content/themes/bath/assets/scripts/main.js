// import external dependencies
import 'materialize-css/dist/js/materialize';

// import "jquery"

// Import everything from autoload
import "./autoload/**/*"

// jQuery(document).ready(() => {});

document.addEventListener('DOMContentLoaded', function() {
  
  // Слайдер1
  let mainSlider = document.getElementById('main-slider');
  let instanceMainSlider = window.M.Carousel.init(mainSlider,  {fullWidth: true});
  setInterval(()=>{
    if(instanceMainSlider){
      instanceMainSlider.next();
    }
  }, 5000);

  document.querySelector('.slider1-block .control-prev').onclick = ()=>{instanceMainSlider.prev();}
  document.querySelector('.slider1-block .control-next').onclick = ()=>{instanceMainSlider.next();}

  // Слайдер2
  let reviewSlider = document.getElementById('review-slider');
  let instanceReviewSlider = window.M.Carousel.init(reviewSlider,  {fullWidth: true, height: 200});
  setInterval(()=>{
    if(instanceReviewSlider){
      instanceReviewSlider.next();
    }
  }, 7000);

  document.querySelector('.slider2-block .control-prev').onclick = ()=>{instanceReviewSlider.prev();}
  document.querySelector('.slider2-block .control-next').onclick = ()=>{instanceReviewSlider.next();}
})
