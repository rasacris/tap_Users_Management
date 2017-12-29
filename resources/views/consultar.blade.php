@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <form class="form-horizontal" method="POST" action="{{url('buscar')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                           <input type="text" id="name" name="name" placeholder="Nombre">
                                <button type="submit" class="btn btn-primary">
                                    Buscar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
