@extends('layouts.app', ['activePage' => 'eventos', 'titlePage' => __('Eventos')])

@section('content')

<header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Añadir Hosts</h1>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
<a href="{{ route('home') }}" class="btn btn-sm btn-secondary">{{ __('Volver a la lista') }}</a>
  </header>


  <section>
<div class="card-body">
            <form action="{{ route('registroimport') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Añadir Servidor') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('home') }}" class="btn btn-sm btn-primary">{{ __('Volver a la lista') }}</a>
                  </div>
                </div>
                @if ($errors->any())
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        @foreach ($errors->all() as $error)
                          <span>{{ $error }}</span>
                        @endforeach
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" id="input-nombre" type="text" placeholder="{{ __('Nombre') }}" value="{{ old('nombre') }}" required="true" aria-required="true"/>
                      @if ($errors->has('nombre'))
                        <span id="nombre-error" class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
              </div>
            </form>
        </div>
</section>
@endsection
