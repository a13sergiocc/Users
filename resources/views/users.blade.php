@extends('layouts.master')

@section('titulo')
Usuarios de la app
@stop

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>Listado de usuario</h1>
			@foreach ($users as $usuario)
				<a href="/users/{{$usuario->id}}">
					{{$usuario->username}}
				</a>
			@endforeach
		</div>
	</div>
</div>
@endsection