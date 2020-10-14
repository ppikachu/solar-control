{{--
  Template Name: Simulador arquitectura
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.page-header')
@include('partials.content-page')
@endwhile
<div id="simulador_arquitectura" class="mb-5 mt-3">
  <h2 class="text-primary">Simulador Interiores</h2>
  <div class="row">
    <div class="col-md-7 d-flex align-items-center">
      <img id="iso" class="fa-spin" src="@asset('images/ISO.svg')" />
      <img id="replaceInterior" class="img-fluid rounded-lg" src="@asset('images/Interior-tonalidad-00.jpg')">
    </div>
    <div class="col-md-5 text-center">
      <div class="interior my-4">
        <h6>Tonalidad</h6>
        <div class="py-2 row d-flex justify-content-around">
          <div class="col-auto"><button type="button" class="btn rounded-circle active" data-filter='tonalidad-00'></button><br>sin</div>
          <div class="col-auto"><button type="button" class="btn rounded-circle bg05" data-filter='tonalidad-50'></button><br>50%</div>
          <div class="col-auto"><button type="button" class="btn rounded-circle bg20" data-filter='tonalidad-90'></button><br>90%</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection