(function() {
  var calculateLayout, delay, end, slickSettings, spinOptions;

  slickSettings = {
    infinite: true,
    adaptiveHeight: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<button type="button" class="slick-prev"><img src="/layout/images/left.png"></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="/layout/images/right.png"></button>'
  };

  spinOptions = {
    lines: 13,
    length: 21,
    width: 2,
    radius: 24,
    corners: 0,
    rotate: 0,
    direction: 1,
    color: '#870b24',
    speed: 1,
    trail: 68,
    shadow: false,
    hwaccel: false,
    className: 'spinner',
    zIndex: 2e9,
    top: '50%',
    left: '50%'
  };

  delay = function(ms, func) {
    return setTimeout(func, ms);
  };

  end = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd';

  calculateLayout = function() {};

  $(document).ready(function() {
    var setSliderActive, slider;
    $('.nav-tabs a').on('click', function(e) {
      console.log(123);
      $(this).tab('show');
      return e.preventDefault();
    });
    slider = document.getElementsByClassName('steps')[0];
    noUiSlider.create(slider, {
      start: [3, 4],
      limit: 1,
      behaviour: 'drag',
      connect: true,
      margin: 1,
      step: 1,
      range: {
        min: 0,
        max: 7
      }
    });
    setSliderActive = function(id) {
      $(".years__item").mod('active', false);
      return $(".years__item").filter("[data-value=" + id + "]").mod('active', true);
    };
    slider.noUiSlider.on('slide', function(e) {
      var id;
      id = parseInt(e[0]);
      return setSliderActive(id);
    });
    slider.noUiSlider.on('change', function(e) {
      return console.log('load');
    });
    $('a[href="#years"]').on('click', function(e) {
      $('html, body').stop().animate({
        scrollTop: $('h2').offset().top - 50
      }, '500', 'swing');
      return e.preventDefault();
    });
    $('a[href="#start"]').on('click', function(e) {
      $('html, body').stop().animate({
        scrollTop: $('h3').offset().top - 50
      }, '500', 'swing');
      return e.preventDefault();
    });
    $(".years__item").on('click', function(e) {
      var id;
      id = $(this).data('value');
      if (id === 7) {
        id = 6;
      }
      setSliderActive(id);
      slider.noUiSlider.set([id, id + 1]);
      return e.preventDefault();
    });
    $('.slider').elem('arrow').on('click', function(e) {
      $(this).block().elem('fotorama').data('fotorama').show($(this).data('direction'));
      return e.preventDefault();
    });
    return delay(300, function() {
      return calculateLayout();
    });
  });

}).call(this);
