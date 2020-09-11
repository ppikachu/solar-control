<article class="col" data-aos="fade-up" data-aos-once="true">
  <div class="nota card">
    <div class="img-hover-zoom">{!! the_post_thumbnail('thumbnail', array( 'class' => 'card-img-top img-fluid' )) !!}</div>
    <div class="card-body">
      <h5 class="card-title">{!! get_the_title() !!}</h5>
      <p class="card-text small">{!! get_the_excerpt() !!}</p>
      <a href="{{ get_permalink() }}" class="small btn btn-outline-primary btn-block stretched-link">+</a>
    </div>
  </div>
</article>