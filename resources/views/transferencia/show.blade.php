@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'registro', 'title' => __('Registros')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Transferencia # {{$transferencia->id}}</h4>
            <p class="card-category">Transferencias de la aplicación</p>
            <a class="btn btn-sm btn-danger" href="{{ route('transferencia.edit',$transferencia) }}">{{__('Editar')}}</a>
          </div>
          <div class="card-body">
              <div class="col-md-12">
               <i>{{__('Método de Carga:')}}</i> {{$transferencia->metodos->nombre}}
              </div>
              <div class="col-md-12">
               <i>{{__('Cantidad de registros cargados:')}}</i> {{$transferencia->registros_count}}
              </div>
              <div class="col-md-12">
               <i>{{__('Estado de visualización:')}}</i> <span>{{$transferencia->estado==1?'Activo':'Inactivo'}}</span>
              </div>
              <div class="col-md-12">
               <i>{{__('Fecha de Carga:')}}</i> {{$transferencia->created_at}}
              </div>
              <div class="col-md-12">
               <i>{{__('Ip:')}}</i> {{$transferencia->ip}}
              </div>
              <div class="col-md-12">
               <i>{{__('MAC:')}}</i> {{$transferencia->mac}}
              </div>

          </div>
        </div>
      </div>
      <div class="col-md-8">
        <a class="btn btn-sm btn-primary" href="{{ route('transferencia.index') }}">{{__('Ver todas las transferencias')}}</a>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Longitud
                  </th>
                  <th>
                    Latitud
                  </th>
                  <th>
                    Ph
                  </th>
                  <th>
                    Temperatura
                  </th>
                  <th>
                    Hg
                  </th>
                  <th>
                    Conduct
                  </th>
                  <th>
                    Region
                  </th>
                </thead>
                <tbody>
                  @foreach($transferencia->registros as $registro)
                  <td>{{$registro->id}}</td>
                  <td>{{$registro->longitud}}</td>
                  <td>{{$registro->latitud}}</td>
                  <td>{{$registro->ph}}</td>
                  <td>{{$registro->temperatura}}</td>
                  <td>{{$registro->hg}}</td>
                  <td>{{$registro->conduct}}</td>
                  <td>{{$registro->region->nombre}}</td>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
