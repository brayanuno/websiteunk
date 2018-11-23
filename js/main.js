//carousel sliders
$('.carousel').carousel({
    interval: 3000,
    keyboard: true,
    pause: 'hover',
    wrap: true
  });


// FOLLOWERS
(function($) {
  "use strict";
  function count($this){
  var current = parseInt($this.html(), 10);
  current = current + 1; /* Where 50 is increment */	
  $this.html(++current);
      if(current > $this.data('count')){ /* CONDITION */	
          $this.html($this.data('count'));
      } else {    
          setTimeout(function(){count($this)}, 10);   /* TIME TO RELOAD*/	
      }
  }        	
  $(".stat-count").each(function() {
    $(this).data('count', parseInt($(this).html(), 10));
    $(this).html('0');
    count($(this));
  });
})(jQuery);


//MAIN IMAGE  ANIMATION
document.addEventListener('DOMContentLoaded', function(){
    let wrapper = document.getElementById('wrapper');
    let topLayer = wrapper.querySelector('.top');
    let handle = wrapper.querySelector('.handle');
    let skew = 0;
    let delta = 0;
  
    if(wrapper.className.indexOf('skewed') != -1){
      skew = 1000;
    }
    
    wrapper.addEventListener('mousemove', function(e){
      delta = (e.clientX - window.innerWidth / 2) * 0.5;
    
      handle.style.left = e.clientX + delta + 'px';
  
      topLayer.style.width= e.clientX + skew + delta + 'px';
    });
  });

