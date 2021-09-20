@extends('layout')
@section('name', 'Crear proyecto')

@section('content')
    <h1>Crear nuevo poryecto</h1>

    <form method="POST" action="{{ route('projects.store')}}">
    @include('projects.form', ['btnText'=> 'Guardar'])

    </form>
@endsection