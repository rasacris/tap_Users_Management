@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">LISTADO</div>
				<div class="panel-body">
					@foreach($users as $user)
						<ul>
							<li>{{$user->name}}</li>
						</ul>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection