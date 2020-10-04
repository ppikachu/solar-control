export default {
  init() {
    // JavaScript to be fired on all pages
    $('.hamburger').on('click',function() {
      $(this).toggleClass('is-active');
    });

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

    /* simulador coches */
    /* global stylesheet_directory_uri */
    var color='blanco';
    var lamina='tonalidad-00';
    var auto='Auto';
    var images_dir=stylesheet_directory_uri + '/solar-control/resources/assets/images/';
    // FIXME: hardcoded url del tema y solamente funciona en yarn:build (ver assets.json / bookmarks wordpress)

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
