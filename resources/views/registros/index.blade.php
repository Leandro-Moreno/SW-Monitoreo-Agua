@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'registro', 'title' => __('Registros')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Registros</h4>
            <p class="card-category"> Información de los ultimos registros monitoreadas</p>
            <a class="btn btn-success" href="{{route('registro.create')}}"> Crear registro </a>
            <a class="btn btn-danger" href="{{route('registroExport')}}"> Exportar Registros </a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    {{ __('ID') }}
                  </th>
                  <th>
                    {{ __('Latitud') }}
                  </th>
                  <th>
                    Longitud
                  </th>
                  <th>
                    temperatura
                  </th>
                  <th>
                    hg
                  </th>
                  <th>
                    conduct
                  </th>
                  <th>
                    od
                  </th>
                  <th>
                    ph
                  </th>
                  <th>
                    Region
                  </th>
                  <th>
                    Fecha de Creación
                  </th>
                  <th>
                    Estado
                  </th>
                  <th>
                    Transferencia
                  </th>
                  <th>
                    Acciones
                  </th>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                <tr>
                  <td>{{$registro->id}}</td>
                  <td>{{$registro->latitud}}</td>
                  <td>{{$registro->longitud}}</td>
                  <td>{{$registro->temperatura}}</td>
                  <td>{{$registro->hg}}</td>
                  <td>{{$registro->conduct}}</td>
                  <td>{{$registro->od}}</td>
                  <td>{{$registro->ph}}</td>
                  <td>
                    @isset($registro->region_id)
                      <a href="{{ route('region.show', $registro->region_id) }}">
                      {{$registro->region->nombre}}
                      </a>
                    @endisset
                  </td>
                  <td>{{$registro->created_at}}</td>
                  <td>{{$registro->transferencia->estado}}</td>
                  <td>
                    <a href="{{ route('transferencia.edit', $registro->transferencia->id) }}">
                      {{$registro->transferencia->id}}
                    </a>
                  </td>
                  <td>
                    <a href="{{ route('registro.edit', $registro) }}">
                      {{ __('Editar registro') }}
                    </a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      {{ $registros->links() }}
    </div>
  </div>
</div>
@endsection
