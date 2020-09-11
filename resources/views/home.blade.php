@extends('layouts.d-home')
<div class="vh-100 anime" style="background-image: url('/wp-content/uploads/2020/08/pexels-photo-2920064.jpeg-scaled.jpg')">
  <div class="a45 d-flex">
  <div class="persiana"></div>
  <div class="persiana"></div>
  <div class="persiana"></div>
  <div class="persiana"></div>
  <div class="persiana"></div>
  <div class="persiana"></div>
  <div class="persiana"></div>
  <div class="persiana"></div>
  <div class="persiana"></div>
  </div>
</div>

@section('content')
  <div class="row row-cols-4">
    @while (have_posts()) @php the_post() @endphp
      @include('partials.content-'.get_post_type())
    @endwhile
  </div>
@endsection
