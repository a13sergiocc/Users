@extends('layouts.master')

@section('titulo')
Usuarios de la app
@stop

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			@if (Auth::check())
				Usuario actual: {{Auth::user()->username}} {!! Html::link('logout', 'Desconectar') !!}
			@endif


			<h1>Listado de usuario</h1>
			@foreach ($users as $usuario)
				<a href="/users/{{$usuario->id}}">
					{{$usuario->username}}
				</a>
			@endforeach
		</div>
	</div>

	<a href="/users/create">Dar de alta un usuario</a>
	
</div>
@endsection