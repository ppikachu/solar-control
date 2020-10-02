<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div id="carouselExampleCaptions" class="carousel slide mb-5" data-ride="carousel" data-interval="false">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="carousel-caption d-flex flex-column justify-content-center">
            <h1>control solar</h1>
            <p class="lead">Tenemos la solución para el calor excesivo, para el impacto negativo de los rayos UV, el resplandor, el deterioro del interior y su seguridad.</p>
            <div class="btn-caption mb-4"><a class="btn btn-primary btn-lg">Más información</a></div>
          </div>

            <svg class="barra1" width="100%" height="100%" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
              <path d="M1024,0L0,0L0,1024L1024,0Z" style="fill:rgb(0, 0, 0);"/>
            </svg>
            <svg class="barra2" width="100%" height="100%" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
              <path d="M1024,0L0,0L0,1024L1024,0Z" style="fill:rgb(0, 0, 0);"/>
            </svg>
            <svg class="barra3" width="100%" height="100%" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
              <path d="M1024,0L0,0L0,1024L1024,0Z" style="fill:rgb(0, 0, 0);"/>
            </svg>

            <img src="/wp-content/uploads/2020/08/53e1d14b4254a914ea89857dc1213f781c3dc3e45658754a732c7ad092.jpg-scaled.jpg" class="d-block" alt="...">
        </div>
        <div class="carousel-item">
          <svg class="barra1" width="100%" height="100%" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
            <path d="M1024,0L0,0L0,1024L1024,0Z" style="fill:rgb(0, 0, 0);"/>
          </svg>
          <svg class="barra2" width="100%" height="100%" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
            <path d="M1024,0L0,0L0,1024L1024,0Z" style="fill:rgb(0, 0, 0);"/>
          </svg>
          <svg class="barra3" width="100%" height="100%" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
            <path d="M1024,0L0,0L0,1024L1024,0Z" style="fill:rgb(0, 0, 0);"/>
          </svg>

          <img src="/wp-content/uploads/2020/09/car-accident-337764.jpg" class="d-block" alt="...">
          <div class="carousel-caption d-flex flex-column justify-content-center">
            <h1>seguridad</h1>
            <p class="lead">Obtenga una capa extra de protección entre los pasajeros del vehículo y el cristal en caso de accidente, están diseñadas para retener fragmentos de vidrio en caso de rotura.</p>
            <div class="btn-caption mb-4"><a class="btn btn-primary btn-lg">Más información</a></div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="barra1" width="100%" height="100%" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
            <path d="M1024,0L0,0L0,1024L1024,0Z" style="fill:rgb(0, 0, 0);"/>
          </svg>
          <svg class="barra2" width="100%" height="100%" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
            <path d="M1024,0L0,0L0,1024L1024,0Z" style="fill:rgb(0, 0, 0);"/>
          </svg>
          <svg class="barra3" width="100%" height="100%" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
            <path d="M1024,0L0,0L0,1024L1024,0Z" style="fill:rgb(0, 0, 0);"/>
          </svg>
          <img src="/wp-content/uploads/2020/09/nastuh-abootalebi-1594098236-unsplash.jpg" class="d-block" alt="...">
          <div class="carousel-caption d-flex flex-column justify-content-center">
            <h1>diseño</h1>
            <p class="lead">Las ventanas son un elemento de diseño fundamental en edificios, casas y oficinas para el aprovechamiento de la luz natural y la mejora del confort de quienes habitan esos espacios de trabajo y de recreación en el hogar.</p>
            <div class="btn-caption mb-4"><a class="btn btn-primary btn-lg">Más información</a></div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="barra1" width="100%" height="100%" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
            <path d="M1024,0L0,0L0,1024L1024,0Z" style="fill:rgb(0, 0, 0);"/>
          </svg>
          <svg class="barra2" width="100%" height="100%" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
            <path d="M1024,0L0,0L0,1024L1024,0Z" style="fill:rgb(0, 0, 0);"/>
          </svg>
          <svg class="barra3" width="100%" height="100%" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
            <path d="M1024,0L0,0L0,1024L1024,0Z" style="fill:rgb(0, 0, 0);"/>
          </svg>
          <img src="/wp-content/uploads/2020/09/Taller_4-scaled.jpg" class="d-block" alt="...">
          <div class="carousel-caption d-flex flex-column justify-content-center">
            <h1>instalador autorizado 3M</h1>
            <p class="lead">SOLAR CONTROL® y 3M otorgan a nuestros clientes, el respaldo y la garantía certificada en cada uno de los trabajos que realizamos.</p>
            <div class="btn-caption mb-4"><a class="btn btn-primary btn-lg">Más información</a></div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container">
      @yield('content')
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>