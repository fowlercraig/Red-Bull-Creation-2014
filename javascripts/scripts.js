SmartAjax_load('wp-content/themes/redbull-creation-2014/javascripts', function () {

  function appearance(){
  
  $(".background").transition({opacity:1, delay: 500},2000);
  $(".meta").transition({opacity:1},2000);
  
  }

  function onepage() {

    $("#one-pager").onepage_scroll({
      sectionContainer: ".pane",
      easing: "ease",
      animationTime: 1000,
      pagination: true,
      updateURL: false,
      beforeMove: function (index) {},
      afterMove: function (index) {},
      loop: false,
      keyboard: true,
      responsiveFallback: false
    });

  }

  function modalwindow() {

    $('.buttons').magnificPopup({
      delegate: 'a',
      removalDelay: 500,
      callbacks: {
        beforeOpen: function () {
          this.st.mainClass = this.st.el.attr('data-effect');
        }
      },
      midClick: true
    });

  }

  function init() {
    
    appearance();
    onepage();
    modalwindow();
    $('#scene').parallax();

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