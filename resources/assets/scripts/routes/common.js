export default {
  init() {
    // JavaScript to be fired on all pages
    $('.hamburger').on('click',function() {
      $(this).toggleClass('is-active');
    });

    // loader
    setTimeout(function(){
      $('#loader').removeClass('load');
    }, 1000);

    $('.nav-link:not([href^="\\#"]), .dropdown-item').on('click',function() {
      var href = $(this).attr('href');
      event.preventDefault();
      $('#loader').addClass('load');

      setTimeout(function(){
        window.location.href = href;
      }, 1000);
    });
    //

    $('.btn_contacto').on('click',function() {
      $('#menu-mobile').collapse('hide');
      $('#navbar-toggle').toggleClass('is-active');
      $('html, body').animate({
        scrollTop: $('#contacto').offset().top,
      }, 800);
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    /* global stylesheet_directory_uri */

    /* simulador coches */
    var color='blanco';
    var lamina='tonalidad-00';
    var auto='Auto';
    var images_dir=stylesheet_directory_uri + '/solar-control/resources/assets/images/';

    function cambiarLamina () {
      var imagenLamina = images_dir + auto + '-' + color + '-' + lamina + '.jpg';
      // console.log( imagenLamina );
      $( '#replaceLamina' ).attr( 'src', imagenLamina );
    }

    $('.laminas').on('click', '.btn', function() {
      $('.laminas .active').removeClass('active');
      $(this).addClass('active');
      lamina = $(this).attr('data-filter');
      cambiarLamina();
    });

    $('.turismo-crossover').on('click', '.btn', function() {
      $('.turismo-crossover .active').removeClass('active');
      $(this).addClass('active');
      auto = $(this).attr('data-filter');
      cambiarLamina();
    });

    $('.color').on('click', '.btn', function() {
      $('.color .active').removeClass('active');
      $(this).addClass('active');
      color = $(this).attr('data-filter');
      cambiarLamina();
    });

    /* simulador interior */
    function cambiarInterior () {
      var imagenInterior = images_dir + 'Interior' + '-' + lamina + '.jpg';
      $( '#replaceInterior' ).attr( 'src', imagenInterior );
    }

    $('.interior').on('click', '.btn', function() {
      $('.interior .active').removeClass('active');
      $(this).addClass('active');
      lamina = $(this).attr('data-filter');
      cambiarInterior();
    });
    
  },
};
