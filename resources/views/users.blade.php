@extends('layouts.master')

@section('titulo')
Usuarios de la app
@stop

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			asdasd

			@foreach ($users as $usuario)
				{{$usuario->username}}
			@endforeach
		</div>
	</div>
</div>
@endsection