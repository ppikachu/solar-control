{{--
  Template Name: Compromiso SC
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
  @php $args = array('post_type'=>'post','orderby'=>'date','order'=>'DESC'); $the_query = new WP_Query( $args ); @endphp
  <div class="row row-cols-1 row-cols-md-4">
    @while($the_query->have_posts()) @php $the_query->the_post() @endphp
      @include('partials.content')
    @endwhile
  </div>
@endsection
