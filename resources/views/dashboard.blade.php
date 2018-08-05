@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-12">
              @if(auth()->user()->rol == 'Administrador')

                <div class="panel panel-success">
                  <div class="panel-heading">
                      <h3><b>Detalles de:</b> {{ auth()->user()->name }}</h3>
                  </div>
                  <div class="panel-body">
                      <strong>Nombre:</strong> {{ auth()->user()->name }}<br>
                      <strong>Email:</strong> {{ auth()->user()->email }}<br>
                      <strong>Rol:</strong> {{ auth()->user()->rol }} <br>
                  </div>
                  <div class="panel-footer">
                      <small>miguekos1233@gmail.com</small>
                  </div>
              @else
              <div class="panel panel-success">
                  <div class="panel-heading">
                      <h3><b>Detalles de:</b> {{ auth()->user()->name }}</h3>
                  </div>
                  <div class="panel-body">
                      <strong>Nombre:</strong> {{ auth()->user()->name }}<br>
                      <strong>Email:</strong> {{ auth()->user()->email }}<br>
                      <strong>Rol:</strong> {{ auth()->user()->rol }} <br>
                  </div>
                  <div class="panel-footer">
                      <small>miguekos1233@gmail.com</small>
                  </div>
              @endif
              </div>
      </div>
  </div>
</div>
@endsection
