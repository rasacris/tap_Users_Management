@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <h1>Edit {{$user->name}}</h1>

                    <form class="form-horizontal" method="POST" action="{{url('/actualizar')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="text" id="name" name="name" placeholder="Nombre">
                                <input type="text" id="usuario" name="usuario" placeholder="Usuario">
                                <input type="text" id="perfil" name="perfil" placeholder="Perfil">
                                <button type="submit" class="btn btn-primary">
                                    Editar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
