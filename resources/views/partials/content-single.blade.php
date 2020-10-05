<article @php post_class() @endphp>
  <header class="my-5">
    {!! the_post_thumbnail('post_thumbnail', array( 'class' => 'alignfull img-fluid' )) !!}
    <h1 class="mt-5 entry-title text-primary">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content mb-5">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
