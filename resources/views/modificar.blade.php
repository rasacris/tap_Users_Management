@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Perfil</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user => $value)
                            <tr>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->perfil}}</td>

                                <!-- we will also add show, edit, and delete buttons -->
                                <td>
                                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                    <a class="btn btn-small btn-success" href="{{url('ver/'.$value->id) }}">Mostrar</a>
                                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                    <a class="btn btn-small btn-info" href="{{url('modificar/'.$value->id) }}">Modificar</a>

                                @if($value->perfil<>1)
                                    <!-- Trigger the modal with a button -->
                                        <button type="button" class="btn btn-small btn-info" data-toggle="modal"
                                                data-target="#myModal">
                                            <a href="{{url('eliminar/'.$value->id )}}">Eliminar</a></button>
                                @endif
                                <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Usuario Eliminado</h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
