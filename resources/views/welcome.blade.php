@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Material Dashboard este')])

@section('content')

<div class="container" >
  <header class="row masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Datos monitoreo </h1>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>

  </header>
  <div class="row justify-content-center">
      <div class="col-md-12" id="app">
          <mapa-monitoreo dlatitud="-74.06614396876195" dlongitud="4.601696849367869" dzoom="16" dmostrarDatos="true"/>
      </div>
  </div>
</div>
@endsection
