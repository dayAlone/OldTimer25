(function() {
  var agreementScroll, calculateLayout, delay, end, slickSettings, spinOptions;

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

  agreementScroll = function() {
    if ($(window).height() + $(window).scrollTop() >= $('.toolbar').outerHeight() + $('.header').outerHeight() + $('.page').outerHeight() - 100) {
      return $('.mouse').mod('off', true);
    } else if ($('.mouse').hasMod('off')) {
      return $('.mouse').mod('off', false);
    }
  };

  $(document).ready(function() {
    var getData, setSliderActive, slider;
    $(window).on('scroll', _.throttle(agreementScroll, 100));
    $('#Modal').on('show.bs.modal', function(e) {
      var url;
      url = $(e.relatedTarget).data('url');
      if ($('#Modal').data('url') !== url) {
        $('#Modal').data('url', url).find('.text').html('').spin(spinOptions);
        return $.get(url, function(data) {
          return $('#Modal .text').html($(data).find('.main .articles .item').html()).find('span.date, div.meta').remove();
        });
      }
    }).find('.text').spin(spinOptions);
    $('.nav-tabs a').on('click', function(e) {
      console.log(123);
      $(this).tab('show');
      return e.preventDefault();
    });
    $('.slider--quotes').on('fotorama:show', function(e, fotorama) {
      $(".authors__item").mod('active', false);
      return $(".authors__item:nth-child(" + (fotorama.activeIndex + 1) + ")").addClass('authors__item--active');
    });
    $(".authors__item").on('click', function(e) {
      $('.slider--quotes .fotorama').data('fotorama').show($(this).index());
      return e.preventDefault();
    });
    $('.form').on('submit', function(e) {
      $(this).mod('success', true);
      $.post('/form.php', $(this).serialize());
      return e.preventDefault();
    });
    slider = document.getElementsByClassName('steps')[0];
    if ($(slider).length > 0) {
      noUiSlider.create(slider, {
        start: [1, 2],
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
      $('.year').css('minHeight', $('.year').height());
      getData = function(id) {
        var value;
        value = $(".years__item").filter("[data-value=" + id + "]").data('id');
        if (value !== $('.year').data('id')) {
          $('.year').data('id', value);
          $('.year').mod('disable', true);
          return $('.year').one(end, function() {
            return $.get('/get.php?id=' + value, function(data) {
              var h;
              $('.year').html($(data).html());
              h = 0;
              $('.year').find('.row').each(function(key, el) {
                return h += $(el).height();
              });
              $('.year').css('minHeight', h);
              return $('.year').mod('disable', false);
            });
          });
        }
      };
      slider.noUiSlider.on('slide', function(e) {
        var id;
        id = parseInt(e[0]);
        return setSliderActive(id);
      });
      slider.noUiSlider.on('set', function(e) {
        return getData(parseInt(e[0]));
      });
    }
    if (location.hash === '#Present') {
      if ($('#Present').hasClass('hidden')) {
        $('#Present').removeClass('hidden');
      }
      $('html, body').stop().animate({
        scrollTop: $('#Present').offset().top + 2
      }, '500', 'swing');
    }
    $('a[href="#years"]').on('click', function(e) {
      $('html, body').stop().animate({
        scrollTop: $('h2').offset().top - 110
      }, '500', 'swing');
      return e.preventDefault();
    });
    $('a[href="#start"]').on('click', function(e) {
      $('html, body').stop().animate({
        scrollTop: $('h3').offset().top - 110
      }, '500', 'swing');
      return e.preventDefault();
    });
    $('a[href="#page"]').on('click', function(e) {
      $('html, body').stop().animate({
        scrollTop: $('#i15 h2').offset().top - 110
      }, '500', 'swing');
      return e.preventDefault();
    });
    $('a[href="#Present"]').on('click', function(e) {
      if ($('#Present').hasClass('hidden')) {
        $('#Present').removeClass('hidden');
      }
      $('html, body').stop().animate({
        scrollTop: $('#Present').offset().top + 2
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
      var fotorama;
      fotorama = $(this).block().elem('fotorama').data('fotorama');
      console.log(fotorama);
      if (fotorama) {
        fotorama.show($(this).data('direction'));
      }
      return e.preventDefault();
    });
    return delay(300, function() {
      return calculateLayout();
    });
  });

}).call(this);
