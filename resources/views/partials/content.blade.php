<article class="col mb-4">
  <div class="nota card h-100 shadow-lg">
    {!! the_post_thumbnail('medium', array( 'class' => 'card-img-top img-fluid' )) !!}
    <div class="card-body">
      <h5 class="card-title">{!! get_the_title() !!}</h5>
      <p class="card-text small">{!! get_the_excerpt() !!}</p>
      <a href="{{ get_permalink() }}" class="btn btn-outline-primary btn-block stretched-link card-link">Leer nota</a>
    </div>
  </div>
</article>