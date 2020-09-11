{{--
  Template Name: Simulador laminas auto
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
  <div id="simulador_auto">
    <div class="row">
      <div class="col-md-6 d-flex align-items-center">
        <div class="sim-auto">
          <img id="replaceAuto" class="img-fluid position-absolute pr-4" src="@asset('images/coche-1-blanco.jpg')">
          <img id="replaceLamina" class="img-fluid position-absolute pr-4" src="@asset('images/coche-1-s-plus-5.png')">
        </div>
      </div>
      <div class="col-md-6">
        <div class="laminas">
          <h6>crystalline</h6>
          <div class="row text-center crystalline">
            <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg-light active" data-filter='none'>&nbsp;&nbsp;</button><br>sin</div>
            <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg90" data-filter='crystallyne-90'>&nbsp;&nbsp;</button><br>90</div>
            <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg70" data-filter='crystallyne-70'>&nbsp;&nbsp;</button><br>70</div>
            <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg40" data-filter='crystallyne-40'>&nbsp;&nbsp;</button><br>40</div>
          </div>
          <h6>color-stable</h6>
          <div class="row text-center color-stable">
            <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg-light" data-filter='none'>&nbsp;&nbsp;</button><br>sin</div>
            <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg35" data-filter='stable-35'>&nbsp;&nbsp;</button><br>35</div>
            <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg20" data-filter='stable-20'>&nbsp;&nbsp;</button><br>20</div>
            <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg05" data-filter='stable-5'>&nbsp;&nbsp;</button><br>05</div>
          </div>
          <h6>s-plus</h6>
          <div class="row text-center s-plus">
            <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg-light" data-filter='none'>&nbsp;&nbsp;</button><br>sin</div>
            <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg35" data-filter='s-plus-35'>&nbsp;&nbsp;</button><br>35</div>
            <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg20" data-filter='s-plus-20'>&nbsp;&nbsp;</button><br>20</div>
            <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg05" data-filter='s-plus-5'>&nbsp;&nbsp;</button><br>05</div>
          </div>
        </div>
        <h6>turismo/crossover</h6>
        <div class="row text-center turismo-crossover">
          <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark active" data-filter='coche-1'>&nbsp;&nbsp;</button><br>turismo</div>
          <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark" data-filter='coche-2'>&nbsp;&nbsp;</button><br>crossover</div>
        </div>
        <h6>color del auto</h6>
        <div class="row text-center color">
          <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg-light active" data-filter='blanco'>&nbsp;&nbsp;</button><br>blanco</div>
          <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg-hielo" data-filter='hielo'>&nbsp;&nbsp;</button><br>hielo</div>
          <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg-gray" data-filter='gris'>&nbsp;&nbsp;</button><br>gris</div>
          <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg-dark" data-filter='negro'>&nbsp;&nbsp;</button><br>negro</div>
          <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg-danger" data-filter='rojo'>&nbsp;&nbsp;</button><br>rojo</div>
          <div class="col-auto"><button type="button" class="btn btn-sm btn-outline-dark bg-azul" data-filter='azul'>&nbsp;&nbsp;</button><br>azul</div>
        </div>
      </div>
    </div>
  </div>
@endsection
