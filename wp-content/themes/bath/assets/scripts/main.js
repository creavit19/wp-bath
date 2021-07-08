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

  countdownToEvent('counter');
})

function countdownToEvent(id, timeIsUp = 'Time is over...'){
  window.countdown = {};
  window.countdown.timeIsUp = timeIsUp;
  window.countdown.counter = document.getElementById(id);
  window.countdown.days = window.countdown.counter.querySelector('[data-role="days"]');
  window.countdown.hours = window.countdown.counter.querySelector('[data-role="hours"]');
  window.countdown.minutes = window.countdown.counter.querySelector('[data-role="minutes"]');
  window.countdown.seconds = window.countdown.counter.querySelector('[data-role="seconds"]');
  let eventTime = Math.round(Date.parse(window.countdown.counter.getAttribute('data-dateto')) / 1000);
  let interval = eventTime - Math.round( Date.parse(new Date()) / 1000 );
  if(interval <= 0) { window.countdown.counter.innerHTML = timeIsUp; return }
  let seconds = Math.floor(interval % 60);
  let minutes = Math.floor((interval / 60) % 60);
  let hours = Math.floor((interval / (60 * 60)) % 24);
  window.countdown.seconds.innerText = seconds < 10 ? '0' + seconds : seconds;
  window.countdown.minutes.innerText = minutes < 10 ? '0' + minutes : minutes;
  window.countdown.hours.innerText = hours < 10 ? '0' + hours : hours;
  window.countdown.days.innerText = Math.floor(interval / (60 * 60 * 24));
  window.countdown.timerId = setInterval(function(){
    let sec = parseInt(window.countdown.seconds.innerText);
    if(sec != 0){
      sec--;
      window.countdown.seconds.innerText = sec < 10 ? '0' + sec : sec;
    }else{
      window.countdown.seconds.innerText = 59;
      let min = parseInt(window.countdown.minutes.innerText);
      if(min != 0){
        min--;
        window.countdown.minutes.innerText = min < 10 ? '0' + min : min;
      }else{
        window.countdown.minutes.innerText = 59;
        let hour = parseInt(window.countdown.hours.innerText);
        if(hour != 0){
          hour--;
          window.countdown.hours.innerText = hour < 10 ? '0' + hour : hour;
        }else{
          window.countdown.hours.innerText = 23;
          let day = parseInt(window.countdown.days.innerText);
          if(day != 0){
            window.countdown.days.innerText = --day;
          }else{
            window.countdown.counter.innerHTML = window.countdown.timeIsUp;
            clearInterval(window.countdown.timerId);
          }
        }
      }
    }
  }, 1000);
}
