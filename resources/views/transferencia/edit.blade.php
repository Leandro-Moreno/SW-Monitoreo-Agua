@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'registro', 'title' => __('Registros')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Transferencia # {{$transferencia->id}}</h4>
            <p class="card-category">Transferencias de la aplicación</p>
            <a class="btn btn-sm btn-danger" href="{{ route('transferencia.show',$transferencia) }}">{{__('Volver')}}</a>
            <a class="btn btn-sm btn-black" href="{{ route('transferencia.index') }}">{{__('Todas las transferencias')}}</a>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('transferencia.update', $transferencia) }}" autocomplete="off" class="form-horizontal">
              @csrf
              @method('put')
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Estado') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('estado') ? ' has-danger' : '' }}">

                    <select class="form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}" id="input-estado" name="estado">
                      @if($transferencia->estado == 1)
                        <option value="{{ $transferencia->estado}}" selected>Activo</option>
                        <option value="2">Inactivo</option>
                      @else
                        <option value="1">Activo</option>
                        <option value="2" selected>Inactivo</option>
                      @endif
                    </select>
                    @if ($errors->has('manual_state'))
                      <span id="manual_state-error" class="error text-danger" for="input-estado">{{ $errors->first('estado') }}</span>
                    @endif
                </div>
              </div>
          </div>
          <div class="card-footer ml-auto mr-auto">
            <button type="submit" class="btn btn-primary">{{ __('Actualizar estado') }}</button>
          </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
