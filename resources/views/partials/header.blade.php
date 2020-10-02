<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-grad align-items-start" id="menu-container">
  <div class="container mt-n5">
      <a class="d-flex align-items-center mx-auto" href="{!! esc_url(home_url('/')) !!}" >
        <h1 class="text-hide">{{ bloginfo('name') }}</h1>
        <img class="navbar-logo" type="image/svg+xml" src="@asset('images/logo-horizontal.svg')" />
      </a>

      <button id="navbar-toggle" class="navbar-toggler hamburger hamburger--spin" type="button" data-toggle="collapse" data-target="#menu-mobile">
        <span class="hamburger-box"><span class="hamburger-inner"></span></span>
      </button>

    <!-- Collect the nav links, forms, and other content for mobile -->
    <div class="collapse navbar-collapse justify-content-end text-uppercase" id="menu-mobile">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
      @endif
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container -->
</nav>