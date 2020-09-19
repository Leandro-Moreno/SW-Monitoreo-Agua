@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'registro', 'title' => __('Registros')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Transferencias</h4>
            <p class="card-category">Transferencias de la aplicación</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Cantidad de registros enviados
                  </th>
                  <th>
                    Método de carga
                  </th>
                  <th>
                    Estado de visualización
                  </th>
                  <th>
                    Fecha de carga
                  </th>
                  <th>
                    Acciones
                  </th>
                </thead>
                <tbody>
                @foreach($transferencias as $transferencia)
                <tr>
                  <td>{{$transferencia->id}}</td>
                  <td>{{$transferencia->registros_count}}</td>
                  <td>{{$transferencia->metodos->nombre}}</td>
                  <td>{{$transferencia->estado==1?'Activo':'Inactivo'}}</td>
                  <td>{{$transferencia->created_at}}</td>
                  <td>
                    <a class="btn btn-success" href="{{ route('transferencia.show', $transferencia->id) }}">
                      Actualizar Estado
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

    </div>
  </div>
</div>
@endsection
