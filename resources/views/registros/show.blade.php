@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Registro')])

@section('content')
<section>
  <div class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">

                      <div class="card ">

                          <div class="card-body ">
                              <div class="row">
                                  <div class="col-md-12 text-right">
                                      <a href="{{ route('registros.destroy', $registro) }}" class="btn btn-sm btn-primary">{{ __('Eliminar Alerta') }}</a>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-md-8 col-xl-8">
                                    <label class="col-md-12 col-xl-12 col-form-label">{{ __('Descripción') }}</label>
                                    <div class="col-md-12  col-xl-12">
                                        {{$alerta->descripcion}}
                                    </div>
                                </div>
                              </div>
                          </div>
                      </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
