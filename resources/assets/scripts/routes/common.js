import AOS from 'aos';

export default {
  init() {
    // JavaScript to be fired on all pages
    
    // AOS
    AOS.init({
      // Global settings:
      // disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
      // startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
      // initClassName: 'aos-init', // class applied after initialization
      // animatedClassName: 'aos-animate', // class applied on animation
      useClassNames: true, // if true, will add content of `data-aos` as classes on scroll
      // disableMutationObserver: false, // disables automatic mutations' detections (advanced)
      // debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
      // throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
      
      // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
      //offset: 120, // offset (in px) from the original trigger point
      //delay: 500, // values from 0 to 3000, with step 50ms
      // duration: 400, // values from 0 to 3000, with step 50ms
      //easing: 'ease', // default easing for AOS animations
      once: true, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      // anchorPlacement: 'center-center', // defines which position of the element regarding to window should trigger the animation
    
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    /* global stylesheet_directory_uri */
    var color='blanco';
    var lamina='none';
    var auto='coche-1';
    var images_dir=stylesheet_directory_uri + '/solar-control/dist/images/';
    // FIXME: hardcoded url del tema y solamente funciona en yarn:build (ver assets.json / bookmarks wordpress)

    function cambiarLamina () {
      var imagenLamina = images_dir + auto + '-' + lamina + '.png';
      console.log( imagenLamina );
      $( '#replaceLamina' ).attr( 'src', imagenLamina );
    }

    function cambiarAuto () {
      var imagenAuto = images_dir + auto + '-' + color + '.jpg';
      console.log( imagenAuto );
      $( '#replaceAuto' ).attr( 'src', imagenAuto );
      cambiarLamina();
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
      cambiarAuto();
    });

    $('.color').on('click', '.btn', function() {
      $('.color .active').removeClass('active');
      $(this).addClass('active');
      color = $(this).attr('data-filter');
      cambiarAuto();
    });
    
  },
};
