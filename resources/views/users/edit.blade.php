@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Colaborador</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('user.update',$user->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Rol</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="rol" id="rol">
                                        <option value="{{ $user->rol }}">{{ $user->rol }}</option>
                                        <option value="Usuario">Usuario</option>
                                        <option value="Administrador">Administrador</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                <form action="{{ route('user.update',$user->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                    <button type="submit" class="btn btn-primary">
                                        Actualizar
                                    </button>
                                </form>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
