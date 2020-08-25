@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'registro', 'title' => __('Registros')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Regiones</h4>
            <p class="card-category"> Información de los ultimos regiones monitoreadas</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Latitud
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
                    region_id
                  </th>
                  <th>
                    estado
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
                    <a href="{{ route('region.show', $registro->region_id) }}">
                    {{$registro->region_id}}
                  </a>
                  </td>
                  <td>{{$registro->estado}}</td>
                </tr>
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
