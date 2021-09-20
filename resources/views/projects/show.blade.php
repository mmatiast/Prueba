@extends('layout')

@section('name', 'Proyecto | ' . $project->name)

@section('content')
	<h1>{{ $project->name}} </h1>
	<a href="{{ route('projects.edit', $project) }}">Editar</a>

	<form method="POST" action="{{ route('projects.destroy', $project) }}">
		@csrf @method('DELETE')
		<button>Eliminar</button>
	</form>

	<p> {{ $project->name}}</p>
	<p> {{ $project->presupuesto}}</p>
	<p> {{ $project->fecha_registro}}</p>
	<p> {{ $project->created_at->diffForHumans() }}</p>
@endsection