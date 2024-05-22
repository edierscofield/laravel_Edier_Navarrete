@extends('layouts.app_informatica')

@section('titulo', 'Detalles del Curso')

@section('contenido')
    <div class="container">
        <h1>Detalles del Curso de Informática</h1>
        <p>Nombre del Curso: {{ $cursoInformatica->nombre }}</p>
        <p>Descripción: {{ $cursoInformatica->descripcion }}</p>
        <p>Duración: {{ $cursoInformatica->duracion_horas }} horas</p>
        <p>Nivel: {{ $cursoInformatica->nivel }}</p>
        @if($cursoInformatica->imagen)
            <img src="{{ asset('storage/' . $cursoInformatica->imagen) }}" alt="{{ $cursoInformatica->nombre }}">
        @endif
        <a href="{{ route('cursoinformatica.index') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection
