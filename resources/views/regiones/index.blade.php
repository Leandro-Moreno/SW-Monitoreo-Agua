@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'region', 'title' => __('Regiones')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Regiones</h4>
            <p class="card-category"> Todas las regiones monitoreadas por el proyecto</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    nombre
                  </th>
                  <th>
                    cantidad
                  </th>
                  <th>
                    ver
                  </th>
                </thead>
                <tbody>
                @foreach($regiones as $key => $region)
                <tr>
                  <td>{{$region->id}}</td>
                  <td>{{$region->nombre}}</td>
                  <td>
                    {{$region->registros_count}}
                  </td>
                  <td>
                    <a href="{{  route('region.show', $region)  }}"> entrar </a>
                  </td>
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
