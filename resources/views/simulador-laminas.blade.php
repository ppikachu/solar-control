{{--
  Template Name: Simulador laminas auto
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.page-header')
@include('partials.content-page')
@endwhile
<div id="simulador_auto" class="mb-5 mt-3">
  <div class="row">
    <div class="col-md-7 d-flex align-items-center">
      <img id="iso" class="fa-spin" src="@asset('images/ISO.svg')" />
      <img id="replaceLamina" class="img-fluid rounded-lg" src="@asset('images/Auto-blanco-tonalidad-00.jpg')">
    </div>
    <div class="col-md-5 text-center">
      <div class="laminas my-4">
        <h6>Tonalidad</h6>
        <div class="row d-flex justify-content-around">
          <div class="col-auto"><button type="button" class="btn rounded-circle active" data-filter='tonalidad-00'></button><br>sin</div>
          <div class="col-auto"><button type="button" class="btn rounded-circle bg05" data-filter='tonalidad-05'></button><br>5%</div>
          <div class="col-auto"><button type="button" class="btn rounded-circle bg20" data-filter='tonalidad-20'></button><br>20%</div>
          <div class="col-auto"><button type="button" class="btn rounded-circle bg35" data-filter='tonalidad-35'></button><br>35%</div>
        </div>
      </div>
      <div class="autos my-4">
        <h6>turismo/crossover</h6>
        <div class="row text-center d-flex justify-content-around turismo-crossover">
          <div class="col-auto"><button type="button" class="btn btn-link active" data-filter='Auto'><i class="fas fa-car-side fa-2x"></i></button><br>turismo</div>
          <div class="col-auto"><button type="button" class="btn btn-link" data-filter='Camioneta'><i class="fas fa-truck-pickup fa-2x"></i></button><br>crossover</div>
        </div>
      </div>
      <div class="colores my-4">
        <h6>color del auto</h6>
        <div class="row text-center d-flex justify-content-around color">
          <div class="col-auto"><button type="button" class="btn rounded-circle active" data-filter='blanco'></button><br>blanco</div>
          <div class="col-auto"><button type="button" class="btn rounded-circle bg-dark" data-filter='negro'></button><br>negro</div>
          <div class="col-auto"><button type="button" class="btn rounded-circle bg-danger" data-filter='rojo'></button><br>rojo</div>
          <div class="col-auto"><button type="button" class="btn rounded-circle bg-azul" data-filter='azul'></button><br>azul</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection