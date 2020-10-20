@extends('layouts.app', ['activePage' => 'registros', 'activePage' => 'home', 'title' => __('Registro')])

@section('content')
  <div class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                      <div class="card ">
                        <div class="card-header card-header-primary">
                          <h4 class="card-title">{{ __('Editar registro #') }}{{$registro->id}}</h4>
                          <p class="card-category"></p>
                        </div>
                          <div class="card-body ">
                              <div class="row">
                                  <div class="col-md-12 text-right">
                                    <form method="post" action="{{ route('registro.destroy', $registro) }}">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-primary"><span class="material-icons">warning</span> {{ __('Eliminar Registro #') }} {{$registro->id }}</button>
                                    </form>
                                  </div>
                              </div>
                              <form method="post" action="{{ route('registro.update', $registro) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                              <div class="row" id="ubicacion">
                                <div class="col-md-6 col-xl-6">
                                    <label class="col-form-label">{{ __('Longitud') }}</label>
                                    <div class="col-smd-7">
                                    <div class="form-group{{ $errors->has('longitud') ? ' has-danger' : '' }}">
                                       <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="longitud" id="input-longitud" type="" placeholder="{{ __('Longitud') }}" value="{{ old('longitud', $registro->longitud) }}" required />
                                      @if ($errors->has('longitud'))
                                        <span id="longitud-error" class="error text-danger" for="input-longitud">{{ $errors->first('longitud') }}</span>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 col-xl-6">
                                    <label class="col-form-label">{{ __('Latitud') }}</label>
                                    <div class="col-smd-7">
                                    <div class="form-group{{ $errors->has('latitud') ? ' has-danger' : '' }}">
                                       <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="latitud" id="input-latitud" type="" placeholder="{{ __('Latitud') }}" value="{{ old('latitud', $registro->latitud) }}" required />
                                      @if ($errors->has('latitud'))
                                        <span id="latitud-error" class="error text-danger" for="input-latitud">{{ $errors->first('latitud') }}</span>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row" id="datos">
                                <div class="col-md-4 col-xl-4">
                                    <label class="col-form-label">{{ __('Ph') }}</label>
                                    <div class="col-smd-7">
                                    <div class="form-group{{ $errors->has('ph') ? ' has-danger' : '' }}">
                                       <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="ph" id="input-ph" type="" placeholder="{{ __('ph') }}" value="{{ old('ph', $registro->ph) }}" />
                                      @if ($errors->has('ph'))
                                        <span id="ph-error" class="error text-danger" for="input-ph">{{ $errors->first('ph') }}</span>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <label class="col-form-label">{{ __('Temperatura') }}</label>
                                    <div class="col-smd-7">
                                    <div class="form-group{{ $errors->has('temperatura') ? ' has-danger' : '' }}">
                                       <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="temperatura" id="input-temperatura" type="" placeholder="{{ __('temperatura') }}" value="{{ old('temperatura', $registro->temperatura) }}" />
                                      @if ($errors->has('temperatura'))
                                        <span id="temperatura-error" class="error text-danger" for="input-temperatura">{{ $errors->first('temperatura') }}</span>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <label class="col-form-label">{{ __('Hg') }}</label>
                                    <div class="col-smd-7">
                                    <div class="form-group{{ $errors->has('hg') ? ' has-danger' : '' }}">
                                       <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="hg" id="input-hg" type="" placeholder="{{ __('hg') }}" value="{{ old('hg', $registro->hg) }}" />
                                      @if ($errors->has('hg'))
                                        <span id="hg-error" class="error text-danger" for="input-hg">{{ $errors->first('hg') }}</span>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <label class="col-form-label">{{ __('Conductividad') }}</label>
                                    <div class="col-smd-7">
                                    <div class="form-group{{ $errors->has('conduct') ? ' has-danger' : '' }}">
                                       <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="conduct" id="input-conduct" type="" placeholder="{{ __('conduct') }}" value="{{ old('conduct', $registro->conduct) }}" />
                                      @if ($errors->has('conduct'))
                                        <span id="conduct-error" class="error text-danger" for="input-conduct">{{ $errors->first('conduct') }}</span>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <label class="col-form-label">{{ __('Oxígeno Disuelto') }}</label>
                                    <div class="col-smd-7">
                                    <div class="form-group{{ $errors->has('od') ? ' has-danger' : '' }}">
                                       <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="od" id="input-od" type="" placeholder="{{ __('od') }}" value="{{ old('od', $registro->od) }}" />
                                      @if ($errors->has('od'))
                                        <span id="od-error" class="error text-danger" for="input-od">{{ $errors->first('od') }}</span>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Actualizar') }}</button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
@endsection
