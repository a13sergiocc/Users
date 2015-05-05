@extends('layouts/master')

@section('titulo')
Usuario: {{$elusuario->username}}
@stop

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h2>Usuario: {{$elusuario->username}}</h2>
			<p>Email: {{$elusuario->email}}</p>
			<p>Biografía: {{$elusuario->bio}}</p>
			<a href="/users/{{$elusuario->id}}/edit">Editar mi perfil</a> | 
			<a href="/users">Volver</a>
		</div>
	</div>
</div>
@endsection