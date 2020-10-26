<div class="sidebar" data-background-color="white">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{route('registro.index')}}" class="simple-text logo-normal">
      {{ __('Inicio') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'registro' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('registro.index') }}">
          <em class="material-icons">insights</em>
            <p>{{ __('Registros') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'region' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('region.index') }}">
          <em class="material-icons">gps_fixed</em>
            <p>{{ __('Regiones') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'transferencia' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('transferencia.index') }}">
          <em class="material-icons">router</em>
            <p>{{ __('Transferencia') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'region' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('registroimport') }}">
          <em class="material-icons">import_export</em>
            <p>{{ __('Importar Registros') }}</p>
        </a>
      </li>

    </ul>
  </div>
</div>
