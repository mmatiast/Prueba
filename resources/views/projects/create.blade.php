@extends('layout')
@section('name', 'Crear proyecto')

@section('content')
<h1>Crear proyecto</h1>
    <div class="col-sm-4">
    <form method="POST" action="{{ route('projects.store')}}">
    @include('projects.form', ['btnText'=> 'Guardar'])
</div>
    </form>
@endsection