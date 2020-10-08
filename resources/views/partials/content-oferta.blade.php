<article class="oferta col-sm-6 mb-4">
  <div class="card text-white shadow">
    {!! the_post_thumbnail('medium', array( 'class' => 'card-img' )) !!}
    <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
      <i class="fas fa-hand-holding-usd fa-4x mb-4"></i>
      <h3 class="card-title">{!! get_the_title() !!}</h3>
      <div class="card-text">{!! get_the_content() !!}</div>
    </div>
    {{-- <div class="card-footer"></div> --}}
  </div>
</article>