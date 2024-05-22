@extends('layouts.app_informatica')

@section('titulo', 'Agregar Curso de Informática')

@section('contenido')
<div class="container">
    <h1>Agregar Curso de Informática</h1>
    <!-- Formulario para crear un nuevo curso -->
    <form action="{{ route('cursoinformatica.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Curso</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
        </div>
        <div class="mb-3">
            <label for="duracion" class="form-label">Duración (horas)</label>
            <input type="number" class="form-control" id="duracion" name="duracion" required>
        </div>
        <div class="mb-3">
            <label for="nivel" class="form-label">Nivel</label>
            <input type="text" class="form-control" id="nivel" name="nivel" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Curso</button>
    </form>
</div>
@endsection
