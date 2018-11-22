@extends('layouts.app')

@section('content')
<h1 class="jumbotron text-center">Control</h1>
<hr>
<div id="img" class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h1 class="panel-title">Acceso a la aplicacion</h1>
            </div>

        <div class="panel-body">

            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Email</label>
                    <input  class="form-control"
                    autofocus
                    value="{{ old('email') }}"
                    name="email"
                    type="email"
                    placeholder="Ingresa tu email">
                    {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Contraseña</label>
                    <input  class="form-control"
                    name="password"
                    type="password"
                    placeholder="Ingresa tu Contraseña">
                    {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                </div>

                <button class="btn btn-sm btn-primary btn-block">Acceder</button>

            </form>

        </div>

            <div class="panel-footer">
                miguekos1233@gmail.com
            </div>

        </div>
    </div>
</div>

@endsection
