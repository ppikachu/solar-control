<article class="col-sm-6 col-md-4 mb-4">
  <div class="nota card h-100 shadow">
    {!! the_post_thumbnail('medium', array( 'class' => 'card-img-top img-fluid' )) !!}
    <div class="card-body">
      <h5 class="card-title text-primary">{!! get_the_title() !!}</h5>
      <p class="card-text small">{!! get_the_excerpt() !!}</p>
    </div>
    <div class="card-footer">
      <a href="{{ get_permalink() }}" class="btn btn-secondary btn-block stretched-link">Leer nota</a>
    </div>
  </div>
</article>