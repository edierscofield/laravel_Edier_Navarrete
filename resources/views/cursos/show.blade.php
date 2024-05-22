@extends('layouts.app')

@section('titulo', $curso->nombre)

@section('contenido')
    <h1 class="mb-4">{{ $curso->nombre }}</h1>
    <p>{{ $curso->descripcion }}</p>

    <!-- Agrega más detalles del curso aquí -->
@endsection
