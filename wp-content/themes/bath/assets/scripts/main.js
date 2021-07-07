// import external dependencies
import 'materialize-css/dist/js/materialize';

// import "jquery"

// Import everything from autoload
import "./autoload/**/*"

// jQuery(document).ready(() => {});

document.addEventListener('DOMContentLoaded', function() {
  
  // Слайдер
  let mainSlider = document.getElementById('main-slider');
  let instanceMainSlider = window.M.Carousel.init(mainSlider,  {fullWidth: true});
  setInterval(()=>{
    if(instanceMainSlider){
      instanceMainSlider.next();
    }
  }, 5000);

  document.querySelector('.slider1-block .control-prev').onclick = ()=>{instanceMainSlider.prev();}
  document.querySelector('.slider1-block .control-next').onclick = ()=>{instanceMainSlider.next();}
})
