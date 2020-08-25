<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
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
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Tablero') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Datos Usuario') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Perfil de usuario') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Administración de usuarios') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'registro' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('registro.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Registros') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'region' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('region.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Regiones') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'registro-import' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('registroimport') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Importar Registros') }}</p>
        </a>
      </li>

    </ul>
  </div>
</div>
