SmartAjax_load('wp-content/themes/redbull-creation-2014/javascripts', function () {

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

SmartAjax.bind('a', {
  reload: false,
  cache: true,
  containers: [{
    selector: '#info'
  }],

  before: function () {
    $('#ajax-loader').show(); // Show the div
    SmartAjax.proceed(); // Start loading...
  },

  done: function () {
    $('#ajax-loader').hide(); // Hide the div
    init();
  }

});

}, true);