function onepage() {

$("#one-pager").onepage_scroll({
  sectionContainer: ".pane", 
  easing: "ease",            
  animationTime: 1000,       
  pagination: true,          
  updateURL: false,          
  beforeMove: function(index) {}, 
  afterMove: function(index) {},  
  loop: false,                    
  keyboard: true,                 
  responsiveFallback: false       
});

}

function init() {

onepage();

}

init();