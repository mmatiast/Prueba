@extends('layout')
@section('name', 'Crear proyecto')

@section('content')
<h1>Editar poryecto</h1>
{{--
 @include('partials.validation-errors') --}}

 <form method="POST" action="{{ route('projects.update', ['id' => $project->id])}}">
 	@method('PATCH')
 	@include('projects.form', ['btnText'=> 'Actualizar'])

 </form>
@endsection