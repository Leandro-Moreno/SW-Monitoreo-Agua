@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'registro', 'title' => __('Registros')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Transferencias # {{$transferencia->id}}</h4>
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
