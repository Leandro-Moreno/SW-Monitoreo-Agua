@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Material Dashboard este')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center" id="app">
      <div class="col-md-12">
        <line-chart datos="hg"></line-chart>
      </div>
  </div>
</div>
@endsection
