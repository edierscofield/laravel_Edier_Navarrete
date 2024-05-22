@extends('layouts.app_informatica')

@section('titulo', 'Editar Curso')

@section('contenido')
    <div class="container">
        <h1>Editar Curso de Informática</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('cursoinformatica.update', $cursoInformatica->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $cursoInformatica->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea id="descripcion" name="descripcion" class="form-control">{{ $cursoInformatica->descripcion }}</textarea>
            </div>

            <div class="mb-3">
                <label for="duracion" class="form-label">Duración (horas):</label>
                <input type="number" id="duracion" name="duracion" class="form-control" value="{{ $cursoInformatica->duracion }}" required>
            </div>

            <div class="mb-3">
                <label for="nivel" class="form-label">Nivel:</label>
                <input type="text" id="nivel" name="nivel" class="form-control" value="{{ $cursoInformatica->nivel }}" required>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen:</label>
                <input type="file" id="imagen" name="imagen" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Curso</button>
        </form>
    </div>
@endsection
