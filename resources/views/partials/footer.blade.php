<footer class="content-info pt-4 pb-1 bg-primary-dark text-light">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <h6>Solar Control:</h6>
        @php wp_nav_menu( array( 'menu' => 'pie a', 'menu_class' => 'list-unstyled' ) ); @endphp
      </div>
      <div class="col-12 col-md-6">
        <h6>Productos:</h6>
        @php wp_nav_menu( array( 'menu' => 'pie b', 'menu_class' => 'list-unstyled' ) ); @endphp
      </div>
    </div>
    <hr>
    <h6>Donde encontrarnos</h6>
    <div class="row my-5">
      <div class="col-12 col-md-6">
        <div class="embed-responsive embed-responsive-4by3 mb-3">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1614.4323109523436!2d-62.71778333987797!3d-35.97473509804349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c1791cb523b7fd%3A0xfd7c93a12832092a!2sSOLAR%20CONTROL!5e0!3m2!1ses-419!2sar!4v1601243001671!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
      <div class="col-12 col-md-6 d-flex align-items-center">
        <div>
          <p><i class="fas fa-building fa-lg"></i> Marconi 1346</p>
          <p><a class="text-light" href="tel:02392 56-5236"><i class="fas fa-phone fa-lg"></i> 02392 56-5236</a></p>
          <p><strong>Horario de atención:</strong><br>Lunes a Viernes 8:30hs a 18:00hs / Sábado 9:00hs a 13:00hs</p>
          <p><a class="text-light" href="https://www.facebook.com/SOLARCONTROLPOLARIZADOS/" target="_blank"><i class="fab fa-facebook-square fa-lg"></i></i> SOLAR CONTROL</a></p>
          <p><a class="text-light" href="https://www.instagram.com/solar__control/" target="_blank"><i class="fab fa-instagram fa-lg"></i></i> SOLAR__CONTROL</a></p>
        </div>
      </div>
    </div>
    <hr id="contacto" class="pb-4 pb-md-0">
    <h6 class="py-5 pt-md-0">Contacto</h6>
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
