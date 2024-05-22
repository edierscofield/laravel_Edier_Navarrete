@extends('layouts.app_informatica')

@section('titulo', 'Curso de Informática')

@section('contenido')
<div class="container">
    <h1>Cursos de Informática</h1>
    <a href="{{ route('cursoinformatica.create') }}" class="btn btn-success mb-3">Agregar Curso</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Duración</th>
                <th>Nivel</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursosInformatica as $curso)
            <tr>
                <td>{{ $curso->nombre }}</td>
                <td>{{ $curso->descripcion }}</td>
                <td>{{ $curso->duracion }}</td>
                <td>{{ $curso->nivel }}</td>
                <td>
                    <a href="{{ route('cursoinformatica.show', $curso->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('cursoinformatica.edit', $curso->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <!-- Agregar botón de eliminar -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
