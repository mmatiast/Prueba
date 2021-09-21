@extends('layout')

@section('name', 'Proyecto | ' . $project->name)

@section('content')
	<h1>{{ $project->name}} </h1>
	<a href="{{ route('projects.edit', $project) }}">Editar</a>

	<form method="POST" action="{{ route('projects.destroy', $project) }}">
		@csrf @method('DELETE')
		<button>Eliminar</button>
	</form>

	@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
	@endif

	<p> {{ $project->name}}</p>
	<p> {{ $project->ciudad}}</p>
	<p> {{ $project->compania}}</p>
	<p> {{ $project->presupuesto}}</p>
	<p> {{ $project->fecha_registro}}</p>
	<p> {{ $project->created_at->diffForHumans() }}</p>
@endsection