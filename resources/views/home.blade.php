@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Bienvenido Usuario: {{Auth::user()->name}}</div>
                    <div class="panel-body">
                        @if(($perfil = Auth::user()->perfil)==1)
                            <p>Número de Usuarios: {{$count}}</p>
                            <div class="form-group">
                                <form  class="form-horizontal" method="POST" action="{{url('buscar')}}">
                                    {{csrf_field()}}
                                    <input required type="text" id="name" name="name" placeholder="Nombre">
                                    <button type="submit" class="btn btn-primary">
                                        Buscar
                                    </button>
                            </div>
                            </form>
                            @foreach($users as $user)
                                <ul class="list-group">
                                    <li class="list-group-item">Correo: {{$user->email}}</li>
                                    <li class="list-group-item">Usuario: {{$user->usuario}}</li>
                                    <li class="list-group-item">Nombre: {{$user->name}}</li>
                                    <li class="list-group-item">Apellidos: {{$user->apellidos}}</li>
                                    <li class="list-group-item">Nacimiento: {{$user->fechaNacimiento}}</li>
                                    <li class="list-group-item">Perfil: {{$user->perfil}}</li>
                                    <li class="list-group-item">Última Conexión: {{$user->created_at}}</li>
                                    <!--echo Carbon::now()->diffForHumans(Carbon::now()->subYear());-->
                                </ul>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection